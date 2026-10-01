<?php

namespace App\Console\Commands;

use App\Http\Controllers\PortfolioController;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

#[Signature('portfolio:export {--output=dist : Carpeta destino del sitio estatico}')]
#[Description('Genera el portafolio como sitio estatico para desplegarlo en Vercel')]
class ExportStaticSite extends Command
{
    // Archivos de public/ que el sitio estatico necesita
    private const PUBLIC_FILES = ['build', 'images', 'favicon.ico', 'robots.txt'];

    public function handle(PortfolioController $controller): int
    {
        if (! File::exists(public_path('build/manifest.json'))) {
            $this->error('Falta public/build. Ejecuta "npm run build" primero.');

            return self::FAILURE;
        }

        $output = base_path($this->option('output'));

        File::deleteDirectory($output);
        File::ensureDirectoryExists($output);

        // Rutas relativas a la raiz para que no dependan de APP_URL
        $html = str_replace(url('/').'/', '/', $controller->index()->render());

        File::put($output.'/index.html', $html);

        foreach (self::PUBLIC_FILES as $file) {
            $source = public_path($file);

            if (File::isDirectory($source)) {
                File::copyDirectory($source, $output.'/'.$file);
            } elseif (File::exists($source)) {
                File::copy($source, $output.'/'.$file);
            }
        }

        $this->info("Sitio exportado en {$this->option('output')}/");

        return self::SUCCESS;
    }
}
