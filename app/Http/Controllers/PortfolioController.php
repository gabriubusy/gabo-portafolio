<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        return view('portfolio.index', [
            'perfil' => config('portfolio.perfil'),
            'metricas' => config('portfolio.metricas'),
            'experiencia' => config('portfolio.experiencia'),
            'proyectos' => config('portfolio.proyectos'),
            'habilidades' => config('portfolio.habilidades'),
            'educacion' => config('portfolio.educacion'),
            'certificaciones' => config('portfolio.certificaciones'),
            'idiomas' => config('portfolio.idiomas'),
        ]);
    }
}
