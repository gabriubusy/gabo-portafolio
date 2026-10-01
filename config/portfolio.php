<?php

return [

    'perfil' => [
        'nombre' => 'Gabriel Parra',
        'titulo' => 'Ingeniero en Sistemas · Desarrollador Web Full Stack',
        'stack' => 'React · Next.js · TypeScript · Laravel',
        'ubicacion' => 'Venezuela · Disponible en remoto',
        'email' => 'parraandres358@gmail.com',
        'telefono' => '+58 412-8692439',
        'telefono_link' => 'https://wa.me/584128692439',
        'linkedin' => 'https://linkedin.com/in/gabriel-parraa60a3a219',
        'github' => 'https://github.com/gabriubusy',
        'resumen' => [
            'Ingeniero en Sistemas y desarrollador web con más de 4 años de experiencia construyendo productos digitales de principio a fin. En el frontend me especializo en React, Next.js y TypeScript, creando interfaces rápidas, escalables y centradas en la experiencia de usuario. En el backend trabajo con Laravel, donde además desarrollo agentes de inteligencia artificial con Neuron AI, el paquete oficial del ecosistema Laravel para flujos de IA.',
            'He desarrollado de forma íntegra y en solitario dos plataformas en producción: Conexoo y Wildoow. Mi foco está en el cruce entre el desarrollo web y las herramientas de IA.',
        ],
    ],

    'metricas' => [
        ['valor' => '4+', 'etiqueta' => 'Años de experiencia'],
        ['valor' => '2', 'etiqueta' => 'Plataformas en producción'],
        ['valor' => '100%', 'etiqueta' => 'Desarrollo en solitario'],
    ],

    'experiencia' => [
        [
            'puesto' => 'Desarrollador Web Full Stack',
            'empresa' => 'APPYWEB',
            'periodo' => 'Diciembre 2021 — Actualidad',
            'duracion' => '4 años 9 meses',
            'resumen' => 'Desarrollo web fullstack para clientes de distintos sectores, con foco en frontend moderno y backend con Laravel.',
            'bloques' => [
                [
                    'titulo' => 'Frontend',
                    'puntos' => [
                        'Interfaces con React, Next.js y TypeScript, maquetadas con Tailwind CSS.',
                        'E-commerce completos: catálogo, carrito y flujo de pago.',
                        'Dashboards en tiempo real y landing pages optimizadas para conversión.',
                        'Integración de REST APIs.',
                    ],
                ],
                [
                    'titulo' => 'Backend e Inteligencia Artificial',
                    'puntos' => [
                        'Aplicaciones web con Laravel (PHP) y bases de datos MySQL / PostgreSQL.',
                        'Creación de agentes de IA con Neuron AI dentro del ecosistema Laravel.',
                        'Diseño de flujos conversacionales y automatizaciones con IA.',
                    ],
                ],
                [
                    'titulo' => 'General',
                    'puntos' => [
                        'Git, despliegue en Vercel y entrega de proyectos bajo metodologías ágiles.',
                        'Desarrollo asistido por IA con Claude Code y Windsurf.',
                    ],
                ],
            ],
        ],
    ],

    'proyectos' => [
        [
            'nombre' => 'Conexoo',
            'url' => 'https://conexoo.com',
            'dominio' => 'conexoo.com',
            'rol' => 'Desarrollador principal y único — frontend, backend e integraciones',
            'descripcion' => 'Marketplace de linkbuilding para profesionales de SEO y marketing digital: conecta medios y blogs que venden espacios publicitarios con marcas que buscan posicionamiento en Google.',
            'destacados' => [
                'Motor de recomendación con IA (Neuron AI) que analiza más de 200 métricas en tiempo real: autoridad de dominio, tráfico orgánico y afinidad de nicho.',
                'Catálogo de miles de medios verificados.',
                'Generación asistida de briefs SEO y análisis predictivo del impacto de cada enlace antes del pago.',
                'Integración con APIs de proveedores externos y pasarelas Stripe y PayPal.',
            ],
            'stack' => ['Laravel 12', 'Alpine.js', 'Tailwind CSS', 'Neuron AI', 'Stripe', 'PayPal', 'APIs REST'],
        ],
        [
            'nombre' => 'Wildoow',
            'url' => 'https://wildoow.com',
            'dominio' => 'wildoow.com',
            'rol' => 'Desarrollador principal y único — frontend, backend e integraciones',
            'descripcion' => 'Comunidad y plataforma de experiencias de aventura al aire libre, enfocada en conectar a las personas con la naturaleza y la montaña.',
            'destacados' => [
                'Catálogo de experiencias con flujo de compra completo.',
                'Pago integrado mediante Stripe y PayPal.',
            ],
            'stack' => ['Laravel 12', 'JavaScript (vanilla)', 'Tailwind CSS', 'Stripe', 'PayPal'],
        ],
    ],

    'habilidades' => [
        'Frontend' => ['React', 'Next.js', 'TypeScript', 'JavaScript', 'Tailwind CSS', 'Alpine.js', 'HTML5', 'CSS3'],
        'Backend' => ['Laravel', 'PHP', 'REST APIs', 'MySQL', 'PostgreSQL'],
        'Inteligencia Artificial' => ['Neuron AI', 'Agentes de IA', 'Flujos conversacionales'],
        'Desarrollo asistido por IA' => ['Claude Code', 'Windsurf'],
        'Herramientas y otros' => ['Git', 'Vercel', 'Stripe', 'PayPal', 'Perfex CRM', 'E-commerce', 'Marketplace', 'Metodologías ágiles'],
    ],

    'educacion' => [
        'titulo' => 'Ingeniería en Sistemas',
        'institucion' => 'Instituto Universitario Politécnico Santiago Mariño',
        'periodo' => '2021 — 2026',
        'estado' => 'Graduado',
    ],

    'certificaciones' => [
        'Desarrollador Front-End',
        'Certificación en JavaScript',
        'Certificación en Git',
        'Lógica de Programación',
        'Curador de Datos',
    ],

    'idiomas' => [
        ['idioma' => 'Español', 'nivel' => 'Nativo'],
        ['idioma' => 'Inglés', 'nivel' => 'Comprensión lectora (documentación técnica)'],
    ],

];
