<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Cartórios em Rede') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#edf1f5] text-[#1f2937] antialiased">
        <header class="bg-[#153d73] shadow-[0_4px_14px_rgba(21,61,115,0.12)]">
            <div class="mx-auto flex h-[80px] max-w-[1280px] items-center justify-between gap-6 px-4 sm:px-6 lg:px-8">
                <img src="https://www.figma.com/api/mcp/asset/3cebaeb0-e542-4c24-a7a8-a02f7d8941de.png" alt="Cartórios do Brasil" class="h-[36px] w-auto object-contain sm:h-[42px]" />

                <nav class="hidden items-center gap-5 text-[12px] font-semibold text-white xl:flex xl:gap-6">
                    <a href="#" class="whitespace-nowrap transition-opacity hover:opacity-80">Registro Civil de Pessoas Naturais</a>
                    <a href="#" class="whitespace-nowrap transition-opacity hover:opacity-80">Registro de Imóveis</a>
                    <a href="#" class="whitespace-nowrap transition-opacity hover:opacity-80">Registro de Títulos e Documentos e de Pessoas Jurídicas</a>
                    <a href="#" class="whitespace-nowrap transition-opacity hover:opacity-80">Tabelionato de Notas</a>
                    <a href="#" class="whitespace-nowrap transition-opacity hover:opacity-80">Tabelionato de Protestos</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-[1280px] px-4 pb-16 pt-0 sm:px-6 lg:px-8">
            <section id="banner-home" class="relative overflow-hidden rounded-b-[28px] bg-[linear-gradient(90deg,_#f2f4f7_0%,_#ffffff_35%,_#ffffff_68%,_#f2f4f7_100%)] shadow-[0_18px_36px_rgba(15,29,54,0.08)] lg:h-[532px]">
                <div class="absolute inset-y-0 right-0 hidden w-[60%] lg:block">
                    <img src="https://www.figma.com/api/mcp/asset/9bad48fe-e164-4ba2-9dc7-a25c03e73fb4.png" alt="Banner do Cartório" class="h-full w-full object-contain object-right" />
                </div>

                <div class="relative z-10 flex min-h-[300px] flex-col justify-center px-4 py-8 sm:px-8 sm:py-10 lg:min-h-[532px] lg:pl-[20%] xl:pl-[26%]">
                    <p class="text-[26px] font-extrabold uppercase tracking-[-0.04em] text-[#2db0df] sm:text-[34px] lg:text-[42px]">Cartórios do Brasil</p>
                    <p class="mt-3 max-w-[520px] text-[14px] font-bold uppercase tracking-[0.08em] text-[#1a3f6b] sm:text-[16px] lg:text-[18px]">
                        Central de Serviços Eletrônicos do Cidadão
                    </p>
                </div>
            </section>

            <section class="relative z-10 mx-auto -mt-8 rounded-[22px] border border-[#d7dfe8] bg-white p-4 shadow-[0_18px_30px_rgba(16,38,64,0.08)] sm:p-6 lg:-mt-12 lg:p-8">
                <h2 class="text-[15px] font-extrabold uppercase tracking-[0.08em] text-[#153d73] sm:text-[18px]">Acesso Rápido</h2>

                <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-5">
                    <a href="https://www.rtdbrasil.org.br/" target="_blank" class="group flex min-h-[280px] flex-col rounded-[20px] border border-[#7cc447] bg-white p-4 text-left shadow-[0_8px_18px_rgba(18,52,90,0.04)] transition-all duration-200 hover:-translate-y-1 hover:shadow-[0_18px_28px_rgba(20,54,95,0.09)]">
                        <div class="mb-4 flex h-[52px] w-[52px] items-center justify-center rounded-full bg-[#edf3f8]">
                            <img src="https://www.figma.com/api/mcp/asset/d0f50ac4-182b-48a0-9c00-7225cb762241.png" alt="" class="h-[24px] w-[24px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-[#f8fbf6] px-2.5 py-1 text-[10px] font-bold uppercase leading-tight tracking-[0.06em] text-[#7cc447]">Registro Civil de Pessoas Naturais</span>
                        <p class="text-[20px] font-extrabold leading-tight text-[#153d73]">Pedido de Certidões</p>
                        <p class="mt-3 text-[15px] leading-[1.55] text-[#5d6776]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>

                    <a href="https://registradores.onr.org.br/servicos/actitulo/frmAcompanhamentoTitulo.aspx" target="_blank" class="group flex min-h-[280px] flex-col rounded-[20px] border border-[#ff8a1d] bg-white p-4 text-left shadow-[0_8px_18px_rgba(18,52,90,0.04)] transition-all duration-200 hover:-translate-y-1 hover:shadow-[0_18px_28px_rgba(20,54,95,0.09)]">
                        <div class="mb-4 flex h-[52px] w-[52px] items-center justify-center rounded-full bg-[#edf3f8]">
                            <img src="https://www.figma.com/api/mcp/asset/7187cb99-bbc3-488a-af5a-25a4eb969c20.png" alt="" class="h-[27px] w-[27px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-[#fff9f3] px-2.5 py-1 text-[10px] font-bold uppercase leading-tight tracking-[0.06em] text-[#ff8a1d]">Registro de Imóveis</span>
                        <p class="text-[20px] font-extrabold leading-tight text-[#153d73]">Acompanhamento Registral</p>
                        <p class="mt-3 text-[15px] leading-[1.55] text-[#5d6776]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>

                    <a href="https://www.rtdbrasil.org.br/coletaassinatura/assinardocumento" target="_blank" class="group flex min-h-[280px] flex-col rounded-[20px] border border-[#8a5cf6] bg-white p-4 text-left shadow-[0_8px_18px_rgba(18,52,90,0.04)] transition-all duration-200 hover:-translate-y-1 hover:shadow-[0_18px_28px_rgba(20,54,95,0.09)]">
                        <div class="mb-4 flex h-[52px] w-[52px] items-center justify-center rounded-full bg-[#edf3f8]">
                            <img src="https://www.figma.com/api/mcp/asset/973c87d4-0fa5-4583-a13c-19dd9c710364.png" alt="" class="h-[27px] w-[27px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-[#f8f5ff] px-2.5 py-1 text-[10px] font-bold uppercase leading-tight tracking-[0.06em] text-[#8a5cf6]">Pessoa Jurídica, Títulos e documentos</span>
                        <p class="text-[20px] font-extrabold leading-tight text-[#153d73]">Assinatura Eletrônica de Documentos</p>
                        <p class="mt-3 text-[15px] leading-[1.55] text-[#5d6776]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>

                    <a href="https://www.e-notariado.org.br/customer/certificate-request" target="_blank" class="group flex min-h-[280px] flex-col rounded-[20px] border border-[#23b7bf] bg-white p-4 text-left shadow-[0_8px_18px_rgba(18,52,90,0.04)] transition-all duration-200 hover:-translate-y-1 hover:shadow-[0_18px_28px_rgba(20,54,95,0.09)]">
                        <div class="mb-4 flex h-[52px] w-[52px] items-center justify-center rounded-full bg-[#edf3f8]">
                            <img src="https://www.figma.com/api/mcp/asset/ab40a91d-80b8-450d-bc75-2933aa830784.png" alt="" class="h-[30px] w-[30px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-[#f2fcfd] px-2.5 py-1 text-[10px] font-bold uppercase leading-tight tracking-[0.06em] text-[#23b7bf]">Tabelionato de Notas</span>
                        <p class="text-[20px] font-extrabold leading-tight text-[#153d73]">Certificado Digital Notarizado</p>
                        <p class="mt-3 text-[15px] leading-[1.55] text-[#5d6776]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>

                    <a href="https://www.pesquisaprotesto.com.br/servico/consulta-documento" target="_blank" class="group flex min-h-[280px] flex-col rounded-[20px] border border-[#4fa3ff] bg-white p-4 text-left shadow-[0_8px_18px_rgba(18,52,90,0.04)] transition-all duration-200 hover:-translate-y-1 hover:shadow-[0_18px_28px_rgba(20,54,95,0.09)]">
                        <div class="mb-4 flex h-[52px] w-[52px] items-center justify-center rounded-full bg-[#edf3f8]">
                            <img src="https://www.figma.com/api/mcp/asset/1ee44ae4-3ac1-41f7-8755-0634bde282c9.png" alt="" class="h-[27px] w-[27px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-[#f1f9ff] px-2.5 py-1 text-[10px] font-bold uppercase leading-tight tracking-[0.06em] text-[#4fa3ff]">Tabelionato de Protesto</span>
                        <p class="text-[20px] font-extrabold leading-tight text-[#153d73]">Consulta de CPF/CNPJ</p>
                        <p class="mt-3 text-[15px] leading-[1.55] text-[#5d6776]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                </div>
            </section>

            <section class="mt-10 rounded-[20px] bg-[#f5f7fa] p-5 sm:p-6 lg:p-8">
                <h2 class="text-[20px] font-extrabold uppercase tracking-[0.08em] text-[#153d73] sm:text-[25px]">Quem Somos</h2>
                <p class="mt-4 max-w-[1180px] text-[15px] leading-[1.8] text-[#59657a] sm:text-[18px]">
                    Nesta página você encontra acesso rápido, seguro e oficial aos principais serviços digitais prestados pelos Cartórios brasileiros, organizados por especialidade. As centrais foram criadas com o objetivo de simplificar e facilitar o atendimento ao cidadão e às empresas, permitindo acesso integralmente online aos mais diversos atos notariais e registrais. Nesta página você confere as funcionalidades oferecidas por cada central e acessa diretamente os serviços desejados com confiança, praticidade e segurança jurídica.
                </p>
            </section>

            <section class="mt-10">
                <h2 class="text-center text-[20px] font-extrabold uppercase tracking-[0.08em] text-[#153d73] sm:text-[25px]">Todos os serviços</h2>

                <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @php
                        $services = [
                            ['title' => 'Registro Civil de Pessoas Naturais', 'color' => 'green'],
                            ['title' => 'Registro de Imóveis', 'color' => 'orange'],
                            ['title' => 'Registro de Títulos e Documentos', 'color' => 'purple'],
                            ['title' => 'Tabelionato de Notas', 'color' => 'teal'],
                            ['title' => 'Tabelionato de Protestos', 'color' => 'blue'],
                            ['title' => 'Cartórios de Registro e Notas', 'color' => 'gray'],
                        ];
                    @endphp

                    @foreach ($services as $service)
                        @php
                            $style = match ($service['color']) {
                                'green' => 'border-[#7cc447] text-[#7cc447] bg-[#f7fbf4]',
                                'orange' => 'border-[#ff8a1d] text-[#ff8a1d] bg-[#fff8f3]',
                                'purple' => 'border-[#8a5cf6] text-[#8a5cf6] bg-[#f7f5ff]',
                                'teal' => 'border-[#23b7bf] text-[#23b7bf] bg-[#f2fcfd]',
                                'blue' => 'border-[#4fa3ff] text-[#4fa3ff] bg-[#f3f9ff]',
                                default => 'border-[#d7dfe8] text-[#153d73] bg-white',
                            };
                        @endphp

                        <div class="rounded-[14px] border bg-white p-4 shadow-[0_8px_18px_rgba(18,52,90,0.04)] transition-transform duration-200 hover:-translate-y-1 {{ $style }}">
                            <span class="inline-flex rounded-[10px] border border-current bg-white px-3 py-2 text-[11px] font-bold uppercase tracking-[0.06em] {{ $style }}">
                                {{ $service['title'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
    </body>
</html>
