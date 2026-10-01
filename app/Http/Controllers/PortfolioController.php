<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $experiencia = collect(config('portfolio.experiencia'))
            ->map(fn (array $puesto) => [...$puesto, 'duracion' => $this->duracion($puesto['inicio'])])
            ->all();

        return view('portfolio.index', [
            'perfil' => config('portfolio.perfil'),
            'experiencia' => $experiencia,
            'destacados' => config('portfolio.destacados'),
            'proyectos' => config('portfolio.proyectos'),
            'habilidades' => config('portfolio.habilidades'),
            'herramientasIa' => config('portfolio.herramientas_ia'),
            'educacion' => config('portfolio.educacion'),
            'certificaciones' => config('portfolio.certificaciones'),
            'idiomas' => config('portfolio.idiomas'),
        ]);
    }

    // Cuenta el mes en curso, igual que LinkedIn
    private function duracion(string $inicio): string
    {
        $meses = (int) Carbon::parse($inicio)->startOfMonth()->diffInMonths(now()->startOfMonth()) + 1;
        $anios = intdiv($meses, 12);
        $resto = $meses % 12;

        return collect([
            $anios ? $anios.' '.($anios === 1 ? 'año' : 'años') : null,
            $resto ? $resto.' '.($resto === 1 ? 'mes' : 'meses') : null,
        ])->filter()->implode(' ');
    }
}
