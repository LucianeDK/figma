<header class="relative bg-brand-navy shadow-[0_4px_14px_rgba(20,61,115,0.15)]">
    <div class="mx-auto flex h-[var(--spacing-header-h)] max-w-[1280px] items-center justify-between gap-6 px-4 sm:px-6 lg:px-8">
        <a href="{{ url('/') }}" class="flex items-center" aria-label="Página inicial">
            <img
                src="https://www.figma.com/api/mcp/asset/3cebaeb0-e542-4c24-a7a8-a02f7d8941de.png"
                alt="Cartórios do Brasil"
                class="h-[36px] w-auto object-contain sm:h-[42px]"
            >
        </a>

        <nav class="hidden items-center gap-5 text-[12px] font-semibold text-white xl:flex xl:gap-6">
            <a href="#" class="whitespace-nowrap transition-opacity duration-150 hover:opacity-80">Registro Civil de Pessoas Naturais</a>
            <a href="#" class="whitespace-nowrap transition-opacity duration-150 hover:opacity-80">Registro de Imóveis</a>
            <a href="#" class="whitespace-nowrap transition-opacity duration-150 hover:opacity-80">Registro de Títulos e Documentos e de Pessoas Jurídicas</a>
            <a href="#" class="whitespace-nowrap transition-opacity duration-150 hover:opacity-80">Tabelionato de Notas</a>
            <a href="#" class="whitespace-nowrap transition-opacity duration-150 hover:opacity-80">Tabelionato de Protestos</a>
        </nav>

        <button
            type="button"
            id="mobile-menu-toggle"
            class="inline-flex min-h-11 min-w-11 items-center justify-center rounded-md border border-white/30 text-white transition-colors hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/80 xl:hidden"
            aria-label="Abrir menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >
            <span class="sr-only">Abrir menu</span>
            <span class="flex w-6 flex-col gap-1.5" aria-hidden="true">
                <span class="h-0.5 w-full bg-current"></span>
                <span class="h-0.5 w-full bg-current"></span>
                <span class="h-0.5 w-full bg-current"></span>
            </span>
        </button>
    </div>

    <nav id="mobile-menu" class="absolute inset-x-0 top-full z-50 hidden border-t border-white/15 bg-brand-navy px-4 py-4 shadow-[0_12px_20px_rgba(20,61,115,0.2)] xl:hidden" aria-label="Menu principal móvel">
        <div class="mx-auto flex max-w-[1280px] flex-col gap-3 sm:px-2">
            <a href="#" class="rounded-md px-3 py-2 text-sm font-semibold text-white transition-colors hover:bg-white/10">Registro Civil de Pessoas Naturais</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-semibold text-white transition-colors hover:bg-white/10">Registro de Imóveis</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-semibold text-white transition-colors hover:bg-white/10">Registro de Títulos e Documentos e de Pessoas Jurídicas</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-semibold text-white transition-colors hover:bg-white/10">Tabelionato de Notas</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-semibold text-white transition-colors hover:bg-white/10">Tabelionato de Protestos</a>
        </div>
    </nav>
</header>
