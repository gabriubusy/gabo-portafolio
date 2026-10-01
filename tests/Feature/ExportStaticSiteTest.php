<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\File;
use Tests\TestCase;

class ExportStaticSiteTest extends TestCase
{
    private string $output = 'storage/framework/testing/dist';

    protected function tearDown(): void
    {
        File::deleteDirectory(base_path($this->output));

        parent::tearDown();
    }

    public function test_exports_the_portfolio_as_static_html_with_its_assets(): void
    {
        $this->artisan('portfolio:export', ['--output' => $this->output])->assertSuccessful();

        $html = File::get(base_path($this->output.'/index.html'));

        $this->assertStringContainsString(config('portfolio.perfil.nombre'), $html);
        $this->assertStringNotContainsString(url('/').'/', $html);
        $this->assertStringContainsString('src="/build/', $html);
        $this->assertFileExists(base_path($this->output.'/build/manifest.json'));
        $this->assertFileExists(base_path($this->output.'/favicon.ico'));
    }
}
