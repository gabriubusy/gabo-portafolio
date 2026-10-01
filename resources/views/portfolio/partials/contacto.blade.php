<section id="contacto" class="bg-white">
    <div class="mx-auto max-w-5xl px-6 py-20">
        <div class="relative overflow-hidden rounded-2xl bg-navy-900 p-10 text-center">
            <div class="pointer-events-none absolute -bottom-32 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-accent-500/20 blur-3xl"></div>

            <div class="relative">
                <h2 class="text-2xl font-bold text-white sm:text-3xl">¿Trabajamos juntos?</h2>
                <p class="mx-auto mt-3 max-w-xl text-slate-300">
                    Disponible para proyectos en remoto de desarrollo web full stack e integración de agentes de IA.
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-3">
                    <a href="mailto:{{ $perfil['email'] }}"
                       class="rounded-full bg-accent-400 px-5 py-2.5 text-sm font-semibold text-navy-900 transition hover:bg-accent-300">
                        {{ $perfil['email'] }}
                    </a>
                    <a href="{{ $perfil['telefono_link'] }}" target="_blank" rel="noopener"
                       class="rounded-full border border-white/20 px-5 py-2.5 text-sm font-medium text-slate-200 transition hover:border-accent-400 hover:text-white">
                        {{ $perfil['telefono'] }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
