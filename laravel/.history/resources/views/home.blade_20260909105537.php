@php
    $selectedCategory = request('category');
    $serviceCards = App\Models\Card::query()
        ->where('is_active', true)
        ->where('show_in_service_grid', true)
        ->when($selectedCategory, fn ($query) => $query->where('category', $selectedCategory))
        ->orderBy('sort_order')
        ->get();

    $quickAccessCards = App\Models\Card::query()
        ->where('is_active', true)
        ->where('show_in_quick_access', true)
        ->orderBy('sort_order')
        ->get();

    $categories = App\Models\Card::query()
        ->where('is_active', true)
        ->where('show_in_service_grid', true)
        ->where('category', '!=', 'cartorios_registro_notas')
        ->select('category', 'category_label')
        ->distinct()
        ->orderBy('category_label')
        ->get();
@endphp

@extends('layouts.site')

@section('content')
    <main class="mx-auto max-w-[1280px] px-4 pb-16 sm:px-6 lg:px-8">
        <section id="banner-home" class="relative overflow-hidden rounded-b-[28px] bg-[linear-gradient(90deg,_#f2f4f7_0%,_#ffffff_35%,_#ffffff_68%,_#f2f4f7_100%)] shadow-[0_18px_36px_rgba(15,29,54,0.08)] lg:h-[var(--spacing-banner-h)]">
            <div class="absolute inset-y-0 right-0 hidden w-[60%] lg:block">
                <img src="https://www.figma.com/api/mcp/asset/9bad48fe-e164-4ba2-9dc7-a25c03e73fb4.png" alt="Banner do Cartório" class="h-full w-full object-contain object-right" />
            </div>

            <div class="relative z-10 flex min-h-[300px] flex-col justify-center px-4 py-8 sm:px-8 sm:py-10 lg:min-h-[var(--spacing-banner-h)] lg:pl-[18%] xl:pl-[24%]">
                <p class="text-[26px] font-extrabold uppercase tracking-[-0.04em] text-brand-cyan sm:text-[34px] lg:text-[42px]">
                    Cartórios do Brasil
                </p>
                <p class="mt-3 max-w-[520px] text-[14px] font-bold uppercase tracking-[0.08em] text-brand-navy sm:text-[16px] lg:text-[18px]">
                    Central de Serviços Eletrônicos do Cidadão
                </p>
            </div>
        </section>

        <section class="relative z-10 mx-auto -mt-8 rounded-[22px] border border-brand-line bg-white p-4 shadow-[0_18px_30px_rgba(16,38,64,0.08)] sm:p-6 lg:-mt-12 lg:p-8">
            <h2 class="text-[15px] font-extrabold uppercase tracking-[0.08em] text-brand-navy sm:text-[18px]">Acesso Rápido</h2>

            <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-5">
                @foreach ($quickAccessCards as $card)
                    <x-home.quick-card
                        :href="$card->href"
                        :label="$card->label"
                        :title="$card->title"
                        :description="$card->description"
                        :icon="$card->icon_url"
                        :accent="$card->accent"
                        :tagText="$card->tag_text"
                        :tagBg="$card->tag_bg"
                    />
                @endforeach
            </div>
        </section>

        <section class="mt-10 rounded-[20px] bg-[#f5f7fa] p-5 sm:p-6 lg:p-8">
            <h2 class="text-[20px] font-extrabold uppercase tracking-[0.08em] text-brand-navy sm:text-[25px]">Quem Somos</h2>
            <p class="mt-4 max-w-[1180px] text-[15px] leading-[1.8] text-brand-muted sm:text-[18px]">
                Nesta página você encontra acesso rápido, seguro e oficial aos principais serviços digitais prestados pelos Cartórios brasileiros, organizados por especialidade. As centrais foram criadas com o objetivo de simplificar e facilitar o atendimento ao cidadão e às empresas, permitindo acesso integralmente online aos mais diversos atos notariais e registrais. Nesta página você confere as funcionalidades oferecidas por cada central e acessa diretamente os serviços desejados com confiança, praticidade e segurança jurídica.
            </p>
        </section>

        <section class="mt-10">
            <h2 class="text-center text-[20px] font-extrabold uppercase tracking-[0.08em] text-brand-navy sm:text-[25px]">Todos os serviços</h2>

            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ url('/') }}" data-category="" class="service-category-tab inline-flex rounded-full border px-4 py-2 text-[11px] font-bold uppercase tracking-[0.06em] {{ is_null($selectedCategory) ? 'border-brand-navy bg-brand-navy text-white' : 'border-brand-line bg-white text-brand-navy' }}">
                    Todos
                </a>

                @foreach ($categories as $category)
                    <a href="{{ url('/?category=' . $category->category) }}" data-category="{{ $category->category }}" class="service-category-tab inline-flex rounded-full border px-4 py-2 text-[11px] font-bold uppercase tracking-[0.06em] {{ $selectedCategory === $category->category ? 'border-brand-navy bg-brand-navy text-white' : 'border-brand-line bg-white text-brand-navy' }}">
                        {{ $category->category_label }}
                    </a>
                @endforeach
            </div>

            <div id="service-cards" class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                @include('partials.service-cards')
            </div>
        </section>
    </main>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const tabs = document.querySelectorAll('.service-category-tab');
                const cards = document.querySelector('#service-cards');

                tabs.forEach((tab) => {
                    tab.addEventListener('click', async (event) => {
                        event.preventDefault();

                        const category = tab.dataset.category;
                        const params = category ? `?category=${encodeURIComponent(category)}` : '';

                        tabs.forEach((item) => {
                            item.classList.remove('border-brand-navy', 'bg-brand-navy', 'text-white');
                            item.classList.add('border-brand-line', 'bg-white', 'text-brand-navy');
                        });
                        tab.classList.remove('border-brand-line', 'bg-white', 'text-brand-navy');
                        tab.classList.add('border-brand-navy', 'bg-brand-navy', 'text-white');
                        cards.setAttribute('aria-busy', 'true');

                        try {
                            const response = await fetch(`{{ route('services.index') }}${params}`, {
                                headers: { Accept: 'application/json' },
                            });

                            if (!response.ok) {
                                throw new Error('Não foi possível carregar os serviços.');
                            }

                            const data = await response.json();
                            cards.innerHTML = data.html;
                            window.history.replaceState({}, '', tab.href);
                        } catch (error) {
                            window.location.href = tab.href;
                        } finally {
                            cards.removeAttribute('aria-busy');
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
