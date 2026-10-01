<?php

return [

    'perfil' => [
        'nombre' => 'Gabriel Parra',
        'titulo' => 'Ingeniero en Sistemas · Desarrollador Web Full Stack',
        'ubicacion' => 'Venezuela',
        'email' => 'parraandres358@gmail.com',
        'telefono' => '+58 412-8692439',
        'telefono_link' => 'https://wa.me/584128692439',
        'linkedin' => 'https://www.linkedin.com/in/gabriel-parra-a60a3a219',
        'github' => 'https://github.com/gabriubusy',
        'resumen' => 'He desarrollado de forma íntegra y en solitario dos plataformas en producción: Conexoo y Wildoow. Mi foco está en el cruce entre el desarrollo web y las herramientas de IA.',
        'sobre_mi' => 'Ingeniero en Sistemas y desarrollador web con más de 4 años de experiencia construyendo productos digitales de principio a fin. En el frontend me especializo en React, Next.js y TypeScript; en el backend trabajo con Laravel, donde además desarrollo agentes de IA con Neuron AI.',
        // [etiqueta, logo]; 'lucide:' usa un icono de interfaz en vez de un logo
        'stack' => [
            ['React', 'react'], ['Next.js', 'nextdotjs'], ['TypeScript', 'typescript'], ['JavaScript', 'javascript'],
            ['Laravel', 'laravel'], ['PHP', 'php'], ['MySQL', 'mysql'], ['PostgreSQL', 'postgresql'], ['Neuron AI', 'lucide:sparkles'],
        ],
    ],

    // 'inicio' se usa para calcular la duracion al dia de hoy
    'experiencia' => [
        [
            'puesto' => 'Desarrollador Web Full Stack',
            'empresa' => 'APPYWEB',
            'inicio' => '2021-12-01',
            'periodo' => 'Dic 2021 — Actualidad',
            'resumen' => 'Desarrollo web fullstack para clientes de distintos sectores, con foco en frontend moderno y backend con Laravel.',
            'bloques' => [
                [
                    'titulo' => 'Frontend',
                    'icono' => 'code-xml',
                    'puntos' => [
                        'Interfaces con React, Next.js y TypeScript, maquetadas con Tailwind CSS.',
                        'E-commerce completos: catálogo, carrito y flujo de pago.',
                        'Dashboards en tiempo real y landing pages optimizadas para conversión.',
                        'Integración de REST APIs.',
                    ],
                ],
                [
                    'titulo' => 'Backend e IA',
                    'icono' => 'bot',
                    'puntos' => [
                        'Aplicaciones web con Laravel (PHP) y bases de datos MySQL / PostgreSQL.',
                        'Agentes de IA con Neuron AI dentro del ecosistema Laravel.',
                        'Flujos conversacionales y automatizaciones con IA.',
                    ],
                ],
                [
                    'titulo' => 'General',
                    'icono' => 'git-branch',
                    'puntos' => [
                        'Git, despliegues en Vercel y algo de experiencia desplegando en Nicalia.',
                        'Trabajo con metodologías ágiles.',
                        'Desarrollo asistido por IA con Claude Code, Cursor y Windsurf.',
                    ],
                ],
            ],
        ],
    ],

    // Plataformas en produccion; 'tono' elige su color (conexoo | wildoow | suince | ianecta)
    'destacados' => [
        [
            'nombre' => 'Conexoo',
            'url' => 'https://conexoo.com',
            'dominio' => 'conexoo.com',
            'imagen' => 'images/proyectos/conexoo.jpg',
            'tono' => 'conexoo',
            'categoria' => 'Marketplace SEO con agente IA',
            'rol' => 'Desarrollador principal y único — frontend, backend e integraciones',
            'descripcion' => 'Uno de los principales marketplaces de linkbuilding: conecta medios y blogs que venden espacios publicitarios con marcas que buscan posicionamiento en Google. Me encargué de su migración y evolución.',
            'dato' => ['200+', 'métricas analizadas por IA en tiempo real'],
            'puntos' => [
                'Motor de recomendación con IA (Neuron AI): autoridad de dominio, tráfico orgánico y afinidad de nicho.',
                'Catálogo de miles de medios verificados.',
                'Briefs SEO asistidos y análisis predictivo del impacto de cada enlace antes del pago.',
                'Integración con APIs de proveedores externos, Stripe y PayPal.',
            ],
            'stack' => [['Laravel 12', 'laravel'], ['Alpine.js', 'alpinedotjs'], ['Tailwind CSS', 'tailwindcss'], ['Neuron AI', null], ['Stripe', 'stripe'], ['PayPal', 'paypal'], ['APIs REST', null]],
        ],
        [
            'nombre' => 'Wildoow',
            'url' => 'https://wildoow.com',
            'dominio' => 'wildoow.com',
            'imagen' => 'images/proyectos/wildoow.jpg',
            'tono' => 'wildoow',
            'categoria' => 'Plataforma de deportes de aventura',
            'rol' => 'Desarrollador principal y único — frontend, backend e integraciones',
            'descripcion' => 'Plataforma que conecta instructores certificados con personas que buscan experiencias de aventura al aire libre, en la naturaleza y la montaña. Me encargué de su migración y desarrollo.',
            'dato' => ['2', 'pasarelas de pago integradas: Stripe y PayPal'],
            'puntos' => [
                'Catálogo de experiencias con flujo de compra completo.',
                'Pago integrado mediante Stripe y PayPal.',
            ],
            'stack' => [['Laravel 12', 'laravel'], ['JavaScript', 'javascript'], ['Tailwind CSS', 'tailwindcss'], ['Stripe', 'stripe'], ['PayPal', 'paypal'], ['Marketplace', null]],
        ],
        [
            'nombre' => 'Suince',
            'url' => 'https://suince.com/',
            'dominio' => 'suince.com',
            'imagen' => 'images/proyectos/suince.jpg',
            'tono' => 'suince',
            'categoria' => 'E-commerce de suministros industriales',
            'rol' => 'Desarrollo de la tienda online',
            'descripcion' => 'Tienda online para Suince, distribuidora de componentes mecánicos, electrónicos y suministros industriales con sedes en Madrid y Toledo.',
            'dato' => null,
            'puntos' => [
                'Catálogo de ferretería industrial organizado por categorías: rodadura, transmisión, fluidos, electricidad y más.',
                'Buscador de productos, ofertas, carrito y área de cliente.',
                'Catálogos en PDF y contacto directo por WhatsApp.',
            ],
            'stack' => [['Laravel', 'laravel'], ['E-commerce', null]],
        ],
        [
            'nombre' => 'Ianecta',
            'url' => 'https://www.ianecta.com/',
            'dominio' => 'ianecta.com',
            'imagen' => 'images/proyectos/ianecta.jpg',
            'tono' => 'ianecta',
            'categoria' => 'SaaS de automatización para WhatsApp',
            'rol' => 'Colaboración en el desarrollo frontend',
            'descripcion' => 'Plataforma SaaS que conecta WhatsApp con n8n, Zapier o Make para automatizar la comunicación de cualquier negocio, sin código.',
            'dato' => null,
            'puntos' => [
                'Integraciones con n8n, Zapier, Make y webhooks.',
                'Interfaz pensada para activar la automatización en menos de un minuto.',
            ],
            'stack' => [['Frontend', null], ['SaaS', null]],
        ],
    ],

    // 'rol' es lo que hice yo; sin captura, 'icono' y 'color' dibujan una miniatura propia
    'proyectos' => [
        [
            'nombre' => 'LinkContentPro',
            'titulo' => 'Migración a Laravel con agente de IA',
            'estado' => 'En desarrollo',
            'url' => null,
            'dominio' => null,
            'icono' => 'bot',
            'color' => '#0E7490',
            'descripcion' => 'El proyecto en el que trabajo ahora.',
            'rol' => 'Lo estoy migrando de CodeIgniter a Laravel y añadiendo nuevas funcionalidades, como scraping y un agente de IA.',
            'stack' => [['Laravel', 'laravel'], ['Scraping', null], ['Agente de IA', null]],
        ],
        [
            'nombre' => 'Mundiplus',
            'titulo' => 'Web y CRM a medida',
            'url' => 'https://panel-dev.mundiplus.com/',
            'dominio' => 'panel-dev.mundiplus.com',
            'icono' => 'map',
            'color' => '#D97706',
            'descripcion' => 'Digitalización completa de Mundiplus, agencia especializada en viajes y experiencias en el Camino de Santiago.',
            'rol' => 'Lo desarrollé de principio a fin, desde el arranque hasta la entrega.',
            'stack' => [['Laravel', 'laravel'], ['Tailwind CSS', 'tailwindcss']],
        ],
        [
            'nombre' => 'Ikelma',
            'titulo' => 'Migración de Next.js a Laravel',
            'url' => 'https://ikelma.com',
            'dominio' => 'ikelma.com',
            'imagen' => 'images/proyectos/ikelma.jpg',
            'descripcion' => 'Software de control horario y gestión de equipos de APPYWEB.',
            'rol' => 'Hice la migración de Next.js a Laravel; después otros desarrolladores continuaron el desarrollo.',
            'stack' => [['Next.js', 'nextdotjs'], ['Laravel', 'laravel']],
        ],
        [
            'nombre' => 'VeriPerfex',
            'titulo' => 'Migración de HTML a Laravel',
            'url' => 'https://veriperfex.com',
            'dominio' => 'veriperfex.com',
            'icono' => 'receipt-text',
            'color' => '#2B4EFF',
            'descripcion' => 'Producto propio de APPYWEB que adapta el CRM Perfex a la normativa española de facturación VeriFactu.',
            'rol' => 'Hice la migración de HTML a Laravel; después otros desarrolladores continuaron el desarrollo.',
            'stack' => [['HTML5', 'html5'], ['Laravel', 'laravel'], ['Perfex CRM', null]],
        ],
        [
            'nombre' => 'Carefy',
            'titulo' => 'Marketplace de cuidadores profesionales',
            'url' => 'https://carefy.es',
            'dominio' => 'carefy.es',
            'icono' => 'heart-handshake',
            'color' => '#16794C',
            'descripcion' => 'Marketplace que conecta familias con cuidadores profesionales verificados.',
            'rol' => 'Di soporte al cliente.',
            'stack' => [['Laravel', 'laravel'], ['Marketplace', null]],
        ],
        [
            'nombre' => 'Ahumados El Duende',
            'titulo' => 'Soporte y resolución de incidencias',
            'url' => 'https://www.ahumadoselduende.com/es/',
            'dominio' => 'ahumadoselduende.com',
            'imagen' => 'images/proyectos/duende.jpg',
            'descripcion' => 'Web de Ahumados El Duende, empresa artesanal de ahumados con más de 30 años de trayectoria.',
            'rol' => 'Di soporte y ayudé a resolver incidencias, como la corrección de trazabilidad.',
            'stack' => [['Desarrollo web', null]],
        ],
        [
            'nombre' => 'Marhaba Morocco',
            'titulo' => 'Proyecto web',
            'url' => 'https://www.marhabamorocco.com/',
            'dominio' => 'marhabamorocco.com',
            'icono' => 'globe',
            'color' => '#B45309',
            'descripcion' => 'Web de Marhaba Morocco.',
            'rol' => null,
            'stack' => [['Desarrollo web', null]],
        ],
    ],

    // [etiqueta, logo, especialidad]; las especialidades se muestran en oscuro
    'habilidades' => [
        'Frontend' => [
            ['React', 'react', true], ['Next.js', 'nextdotjs', true], ['TypeScript', 'typescript', true], ['JavaScript', 'javascript', true],
            ['AngularJS', 'angular', false], ['Tailwind CSS', 'tailwindcss', false], ['Alpine.js', 'alpinedotjs', false], ['HTML5', 'html5', false], ['CSS3', 'css', false],
        ],
        'Backend' => [['Laravel', 'laravel', true], ['PHP', 'php', true], ['REST APIs', 'lucide:layers', false]],
        'Bases de datos' => [['MySQL', 'mysql', true], ['PostgreSQL', 'postgresql', true]],
        'Inteligencia artificial' => [['Neuron AI', 'lucide:sparkles', true], ['Agentes de IA', 'lucide:bot', false], ['Flujos conversacionales', 'lucide:message-circle', false]],
        'Negocio' => [['E-commerce', 'lucide:shopping-cart', false], ['Marketplace', 'lucide:layers', false], ['Perfex CRM', 'lucide:briefcase-business', false]],
        'Herramientas' => [['Git', 'git', false], ['Vercel', 'vercel', false], ['Nicalia', 'lucide:server', false], ['Stripe', 'stripe', false], ['PayPal', 'paypal', false], ['Metodologías ágiles', 'lucide:git-branch', false]],
    ],

    'herramientas_ia' => [
        ['nombre' => 'Claude Code', 'logo' => 'claude', 'color' => '#D97757', 'empresa' => 'Anthropic', 'descripcion' => 'Agente de programación en la terminal y el editor.', 'principal' => true],
        ['nombre' => 'Cursor', 'logo' => 'cursor', 'color' => null, 'empresa' => 'Anysphere', 'descripcion' => 'Editor de código con IA integrada.', 'principal' => false],
        ['nombre' => 'Windsurf', 'logo' => 'windsurf', 'color' => null, 'empresa' => 'Windsurf', 'descripcion' => 'Editor de código con agentes de IA.', 'principal' => false],
    ],

    'educacion' => [
        'titulo' => 'Ingeniería en Sistemas',
        'institucion' => 'Instituto Universitario Politécnico Santiago Mariño',
        'periodo' => '2021 — Ago 2026',
        'estado' => 'Graduado',
    ],

    // Agrupadas por entidad emisora
    'certificaciones' => [
        'Fundación Carlos Slim' => [
            ['nombre' => 'Curador de Datos', 'fecha' => 'Abr 2024'],
            ['nombre' => 'Desarrollador Front-End', 'fecha' => null],
            ['nombre' => 'Lógica de Programación', 'fecha' => null],
        ],
        'OpenBootcamp' => [
            ['nombre' => 'Certificación en Git', 'fecha' => 'Dic 2022'],
            ['nombre' => 'Certificación en JavaScript', 'fecha' => 'Dic 2022'],
            ['nombre' => 'HTML y CSS Básico', 'fecha' => 'Ago 2022'],
        ],
    ],

    'idiomas' => [
        ['idioma' => 'Español', 'nivel' => 'nativo'],
        ['idioma' => 'Inglés', 'nivel' => 'comprensión lectora (documentación técnica)'],
    ],

];
