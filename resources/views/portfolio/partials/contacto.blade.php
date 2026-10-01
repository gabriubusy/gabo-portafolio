<section id="contacto" class="relative overflow-hidden bg-band text-white">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
        <div class="orb -right-20 -top-20 h-96 w-96 bg-[#2b4eff]" style="--x: -80px; --y: 60px; --t: 25s"></div>
        <div class="orb left-1/4 -bottom-32 h-80 w-80 bg-[#6d2fb5]" style="--x: 70px; --y: -40px; --t: 29s"></div>
    </div>

    <div class="relative mx-auto flex max-w-6xl flex-col gap-8 px-5 pb-14 pt-24 sm:px-10 lg:pt-28">
        <p data-reveal class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.14em] text-[#8fd3b0]">
            <span class="live-dot h-2 w-2 rounded-full bg-current"></span>
            Disponible para proyectos en remoto
        </p>
        <h2 data-reveal style="--d: 100ms" class="max-w-[820px] font-display text-[2.5rem] font-extrabold leading-none tracking-[-0.04em] sm:text-6xl lg:text-[64px]">
            ¿Tienes un producto que construir? Hablemos.
        </h2>

        <a href="mailto:{{ $perfil['email'] }}" data-reveal style="--d: 200ms"
           class="inline-flex max-w-full items-center gap-3.5 self-start break-all font-display text-2xl font-bold tracking-[-0.02em] text-white underline decoration-accent decoration-4 underline-offset-[10px] transition hover:opacity-85 sm:text-[40px]">
            {{ $perfil['email'] }}
            <x-icon name="arrow-up-right" :size="32" class="hidden sm:block" />
        </a>

        <div data-reveal style="--d: 300ms" class="flex flex-wrap gap-3 pt-4">
            <a href="{{ $perfil['telefono_link'] }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2.5 rounded-full border border-white/20 px-4.5 py-3 text-[15px] transition hover:border-white/50">
                <x-icon name="phone" :size="17" />
                WhatsApp · {{ $perfil['telefono'] }}
            </a>
            <a href="{{ $perfil['linkedin'] }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2.5 rounded-full border border-white/20 px-4.5 py-3 text-[15px] transition hover:border-white/50">
                <x-icon name="linkedin" :size="17" />
                LinkedIn
            </a>
            <a href="{{ $perfil['github'] }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2.5 rounded-full border border-white/20 px-4.5 py-3 text-[15px] transition hover:border-white/50">
                <x-icon name="github" brand :size="17" />
                GitHub
            </a>
        </div>

        <footer class="mt-16 flex flex-wrap justify-between gap-3 border-t border-white/10 pt-6 font-mono text-xs text-white/60">
            <span>© <span data-anio-actual>{{ date('Y') }}</span> {{ $perfil['nombre'] }}</span>
            <span>{{ $perfil['titulo'] }}</span>
        </footer>
    </div>
</section>
