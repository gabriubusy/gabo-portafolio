// Alterna entre tema claro y oscuro y recuerda la eleccion
const root = document.documentElement;

function syncButtons() {
    const oscuro = root.dataset.theme === 'oscuro';
    document.querySelectorAll('[data-theme-toggle]').forEach((btn) => {
        const label = oscuro ? 'Cambiar a tema claro' : 'Cambiar a tema oscuro';
        btn.setAttribute('aria-label', label);
        btn.setAttribute('title', label);
        btn.setAttribute('aria-pressed', String(oscuro));
    });
}

document.addEventListener('click', (event) => {
    if (!event.target.closest('[data-theme-toggle]')) return;

    root.dataset.theme = root.dataset.theme === 'oscuro' ? 'claro' : 'oscuro';
    try { localStorage.setItem('tema', root.dataset.theme); } catch (e) {}
    syncButtons();
});

syncButtons();

// El sitio se sirve estatico: recalcula duraciones y año con la fecha del visitante
const hoy = new Date();

function plural(n, uno, varios) {
    return n ? `${n} ${n === 1 ? uno : varios}` : null;
}

document.querySelectorAll('[data-duracion-desde]').forEach((el) => {
    const [anio, mes] = el.dataset.duracionDesde.split('-').map(Number);
    const meses = (hoy.getFullYear() - anio) * 12 + (hoy.getMonth() + 1 - mes) + 1;
    el.textContent = [plural(Math.floor(meses / 12), 'año', 'años'), plural(meses % 12, 'mes', 'meses')]
        .filter(Boolean)
        .join(' ');
});

document.querySelectorAll('[data-anio-actual]').forEach((el) => {
    el.textContent = hoy.getFullYear();
});

// Animacion de entrada y salida: el elemento aparece al entrar en pantalla y se oculta al salir
const revealables = document.querySelectorAll('[data-reveal]');

if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => entry.target.classList.toggle('is-visible', entry.isIntersecting));
        },
        { threshold: 0.12, rootMargin: '0px 0px -6% 0px' },
    );
    revealables.forEach((el) => observer.observe(el));
} else {
    revealables.forEach((el) => el.classList.add('is-visible'));
}

root.classList.add('reveal-ready');

// Sombra en la barra de navegacion al hacer scroll
const header = document.querySelector('[data-nav]');
const onScroll = () => header?.classList.toggle('nav-scrolled', window.scrollY > 12);
window.addEventListener('scroll', onScroll, { passive: true });
onScroll();
