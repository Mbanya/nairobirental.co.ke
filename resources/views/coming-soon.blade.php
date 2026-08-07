<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nairobi Rental — curated homes for rent in Nairobi. Coming soon.">

        <title>{{ config('app.name', 'Nairobi Rental') }} — Coming Soon</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-dvh bg-ink font-sans text-white antialiased">
        <div class="relative flex min-h-dvh flex-col overflow-hidden">
            <div aria-hidden="true" class="absolute inset-0">
                <img
                    src="{{ asset('images/nairobi-skyline.jpg') }}"
                    alt=""
                    class="size-full object-cover object-center scale-105 animate-ken-burns"
                >
                <div class="absolute inset-0 bg-ink/75"></div>
                <div class="absolute inset-0 bg-gradient-to-b from-ink/70 via-ink/60 to-ink/90"></div>
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(198,176,136,0.08),transparent_55%)]"></div>
            </div>

            <header class="relative z-10 flex items-center justify-end px-6 py-6 sm:px-10 lg:px-16">
                <a
                    href="tel:+254716516178"
                    class="animate-fade-up text-sm tracking-wide text-white/80 transition hover:text-gold"
                    style="animation-delay: 80ms"
                >
                    +254 716 516 178
                </a>
            </header>

            <main class="relative z-10 flex flex-1 flex-col items-center justify-center px-6 py-16 text-center sm:px-10">
                <p
                    class="mb-5 animate-fade-up font-display text-xs font-semibold tracking-[0.35em] uppercase text-gold"
                    style="animation-delay: 120ms"
                >
                    Your property guide
                </p>

                <h1
                    class="max-w-3xl animate-fade-up font-display text-5xl font-semibold tracking-tight text-white sm:text-6xl lg:text-7xl"
                    style="animation-delay: 200ms"
                >
                    Coming Soon
                </h1>

                <p
                    class="mt-6 max-w-xl animate-fade-up text-base leading-relaxed text-white/90 sm:text-lg"
                    style="animation-delay: 280ms"
                >
                    Curated rentals across Nairobi’s most desirable neighborhoods. We’re preparing something better — check back shortly.
                </p>

                <div
                    class="mt-10 flex animate-fade-up flex-col items-center gap-4 sm:flex-row"
                    style="animation-delay: 360ms"
                >
                    <a
                        href="mailto:wendyojiro@gmail.com"
                        class="inline-flex items-center gap-2 bg-gold px-7 py-3.5 text-sm font-semibold tracking-[0.14em] uppercase text-ink transition hover:bg-gold-light"
                    >
                        Get notified
                        <span aria-hidden="true">→</span>
                    </a>
                    <a
                        href="https://wa.me/254716516178"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 border border-white/25 px-7 py-3.5 text-sm font-semibold tracking-[0.14em] uppercase text-white transition hover:border-gold hover:text-gold"
                    >
                        WhatsApp
                    </a>
                </div>
            </main>

            <footer class="relative z-10 px-6 py-8 text-center sm:px-10">
                <p class="animate-fade-up text-xs tracking-[0.2em] uppercase text-white/45" style="animation-delay: 440ms">
                    © {{ date('Y') }} Nairobi Rental · Nairobi, Kenya
                </p>
            </footer>
        </div>
    </body>
</html>
