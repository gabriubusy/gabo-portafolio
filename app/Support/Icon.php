<?php

namespace App\Support;

use Illuminate\Support\HtmlString;

class Icon
{
    private static array $cache = [];

    // Colores de marca; los logos negros usan currentColor para seguir el tema
    private const COLORES = [
        'react' => '#087ea4', 'typescript' => '#3178c6', 'javascript' => '#c9a800', 'angular' => '#dd0031',
        'tailwindcss' => '#06b6d4', 'alpinedotjs' => '#4e8fa3', 'html5' => '#e34f26', 'css' => '#663399',
        'laravel' => '#ff2d20', 'php' => '#777bb4', 'mysql' => '#4479a1', 'postgresql' => '#4169e1',
        'git' => '#f05032', 'stripe' => '#635bff', 'paypal' => '#3b7bbf', 'claude' => '#d97757',
    ];

    // Iconos de interfaz (Lucide): trazo con currentColor
    public static function lucide(string $name, int $size = 18, string $class = ''): HtmlString
    {
        $inner = self::inner(resource_path("svg/lucide/{$name}.svg"));

        return new HtmlString(sprintf(
            '<svg width="%1$d" height="%1$d" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="shrink-0 %2$s">%3$s</svg>',
            $size, e($class), $inner
        ));
    }

    // Logos de tecnologias (Simple Icons); color 'marca' usa el color oficial
    public static function brand(string $name, int $size = 16, string $class = '', ?string $color = null): HtmlString
    {
        $inner = self::inner(resource_path("svg/brands/{$name}.svg"));
        $fill = $color === 'marca' ? (self::COLORES[$name] ?? 'currentColor') : ($color ?? 'currentColor');

        return new HtmlString(sprintf(
            '<svg width="%1$d" height="%1$d" viewBox="0 0 24 24" fill="%2$s" aria-hidden="true" class="shrink-0 %3$s">%4$s</svg>',
            $size, e($fill), e($class), preg_replace('/<title>.*?<\/title>/s', '', $inner)
        ));
    }

    private static function inner(string $path): string
    {
        return self::$cache[$path] ??= trim(preg_replace(
            ['/<!--.*?-->/s', '/^.*?<svg[^>]*>/s', '/<\/svg>.*$/s', '/\s+/'],
            ['', '', '', ' '],
            file_get_contents($path)
        ));
    }
}
