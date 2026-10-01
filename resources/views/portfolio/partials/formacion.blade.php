<section id="formacion" class="border-b border-slate-200 bg-slate-50">
    <div class="mx-auto max-w-5xl px-6 py-20">
        <h2 class="text-xs font-bold uppercase tracking-[0.2em] text-accent-600">Formación</h2>
        <p class="mt-3 text-2xl font-bold text-navy-900 sm:text-3xl">Educación, certificaciones e idiomas</p>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            <div class="rounded-xl border border-slate-200 bg-white p-6">
                <h3 class="text-xs font-bold uppercase tracking-[0.15em] text-slate-500">Educación</h3>
                <p class="mt-4 font-bold text-navy-900">{{ $educacion['titulo'] }}</p>
                <p class="mt-1 text-sm text-slate-600">{{ $educacion['institucion'] }}</p>
                <p class="mt-1 text-sm text-slate-500">{{ $educacion['periodo'] }}</p>
                <span class="mt-4 inline-block rounded bg-accent-500/15 px-2.5 py-1 text-xs font-bold uppercase tracking-wide text-accent-600">
                    {{ $educacion['estado'] }}
                </span>
            </div>

            <div class="rounded-xl border border-slate-200 bg-white p-6">
                <h3 class="text-xs font-bold uppercase tracking-[0.15em] text-slate-500">Certificaciones</h3>
                <ul class="mt-4 space-y-2.5 text-sm text-slate-600">
                    @foreach ($certificaciones as $certificacion)
                        <li class="flex gap-2.5">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-accent-500"></span>
                            <span>{{ $certificacion }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="rounded-xl border border-slate-200 bg-white p-6">
                <h3 class="text-xs font-bold uppercase tracking-[0.15em] text-slate-500">Idiomas</h3>
                <ul class="mt-4 space-y-4 text-sm">
                    @foreach ($idiomas as $idioma)
                        <li>
                            <p class="font-semibold text-navy-900">{{ $idioma['idioma'] }}</p>
                            <p class="text-slate-600">{{ $idioma['nivel'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
