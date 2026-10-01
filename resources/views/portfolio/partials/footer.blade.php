<footer class="bg-navy-900">
    <div class="mx-auto flex max-w-5xl flex-col items-center justify-between gap-4 px-6 py-8 text-sm text-slate-400 sm:flex-row">
        <p>© {{ date('Y') }} {{ $perfil['nombre'] }}</p>

        <div class="flex gap-6">
            <a href="{{ $perfil['github'] }}" target="_blank" rel="noopener" class="transition hover:text-accent-400">GitHub</a>
            <a href="{{ $perfil['linkedin'] }}" target="_blank" rel="noopener" class="transition hover:text-accent-400">LinkedIn</a>
            <a href="mailto:{{ $perfil['email'] }}" class="transition hover:text-accent-400">Email</a>
        </div>
    </div>
</footer>
