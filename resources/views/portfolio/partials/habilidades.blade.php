<section id="habilidades" class="border-b border-slate-200 bg-white">
    <div class="mx-auto max-w-5xl px-6 py-20">
        <h2 class="text-xs font-bold uppercase tracking-[0.2em] text-accent-600">Habilidades técnicas</h2>
        <p class="mt-3 text-2xl font-bold text-navy-900 sm:text-3xl">Stack de trabajo</p>

        <div class="mt-12 grid gap-6 sm:grid-cols-2">
            @foreach ($habilidades as $categoria => $tecnologias)
                <div class="rounded-xl border border-slate-200 bg-slate-50 p-6">
                    <h3 class="text-xs font-bold uppercase tracking-[0.15em] text-slate-500">{{ $categoria }}</h3>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($tecnologias as $tecnologia)
                            <span class="rounded-md border border-slate-200 bg-white px-3 py-1.5 text-sm font-medium text-slate-700">
                                {{ $tecnologia }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
