<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Cartórios em Rede') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#f3f3f3] text-[#1b1b18] antialiased">
        <header class="bg-[#1b4482]">
            <div class="mx-auto flex h-[80px] max-w-[1280px] items-center justify-between gap-8 px-8">
                <img src="https://www.figma.com/api/mcp/asset/3cebaeb0-e542-4c24-a7a8-a02f7d8941de.png" alt="Cartórios do Brasil" class="h-[42px] w-auto object-contain" />

                <nav class="hidden items-center gap-8 text-[18px] font-bold text-white lg:flex">
                    <a href="#" class="whitespace-nowrap">Registro Civil de Pessoas Naturais</a>
                    <a href="#" class="whitespace-nowrap">Registro de Imóveis</a>
                    <a href="#" class="whitespace-nowrap">Registro de Títulos e Documentos e de Pessoas Jurídicas</a>
                    <a href="#" class="whitespace-nowrap">Tabelionato de Notas</a>
                    <a href="#" class="whitespace-nowrap">Tabelionato de Protestos</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-[1280px] pb-16">
            <section id="banner-home" class="relative h-[532px] overflow-hidden bg-[linear-gradient(89.9785506505272deg,_#f5f5f5_0%,_#ffffff_28.368%,_#ffffff_74.517%,_#f5f5f5_99.995%)]">
                <div class="absolute right-0 top-0 h-full w-[760px]">
                    <img src="https://www.figma.com/api/mcp/asset/9bad48fe-e164-4ba2-9dc7-a25c03e73fb4.png" alt="Banner do Cartório" class="h-full w-full object-contain object-right" />
                </div>

                <div class="relative z-10 flex h-full flex-col justify-center pl-[322px]">
                    <p class="text-[42px] font-bold uppercase tracking-tight text-[#37ace2]">Cartórios do Brasil</p>
                    <p class="mt-3 text-[18px] font-bold uppercase text-[#1b4482]">Central de Serviços Eletrônicos do Cidadão</p>
                </div>
            </section>

            <section class="mx-auto mt-[-36px] w-[1280px] rounded-[20px] border border-[#d9d9d9] bg-white p-8 shadow-sm">
                <h2 class="text-[18px] font-bold uppercase text-[#1b4482]">Acesso Rápido</h2>

                <div class="mt-8 grid grid-cols-5 gap-5">
                    <a href="https://www.rtdbrasil.org.br/" target="_blank" class="flex h-[300px] flex-col rounded-[20px] border border-[#89c94e] bg-white p-5 text-left shadow-sm transition duration-150 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="mb-4 flex h-[49px] w-[49px] items-center justify-center rounded-[24.5px] bg-[#e2e5ef]">
                            <img src="https://www.figma.com/api/mcp/asset/d0f50ac4-182b-48a0-9c00-7225cb762241.png" alt="" class="h-[23px] w-[23px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-white px-2 py-1 text-[12px] font-bold uppercase text-[#89c94e]">Registro Civil de Pessoas Naturais</span>
                        <p class="text-[20px] font-bold text-[#1b4482]">Pedido de Certidões</p>
                        <p class="mt-3 text-[18px] leading-[1.4] text-[#5b5b59]">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </a>

                    <a href="https://registradores.onr.org.br/servicos/actitulo/frmAcompanhamentoTitulo.aspx" target="_blank" class="flex h-[300px] flex-col rounded-[20px] border border-[#ff7000] bg-white p-5 text-left shadow-sm transition duration-150 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="mb-4 flex h-[49px] w-[49px] items-center justify-center rounded-[24.5px] bg-[#e2e5ef]">
                            <img src="https://www.figma.com/api/mcp/asset/7187cb99-bbc3-488a-af5a-25a4eb969c20.png" alt="" class="h-[27px] w-[27px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-white px-2 py-1 text-[12px] font-bold uppercase text-[#ff7000]">Registro de Imóveis</span>
                        <p class="text-[20px] font-bold text-[#1b4482]">Acompanhamento Registral</p>
                        <p class="mt-3 text-[18px] leading-[1.4] text-[#5b5b59]">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </a>

                    <a href="https://www.rtdbrasil.org.br/coletaassinatura/assinardocumento" target="_blank" class="flex h-[300px] flex-col rounded-[20px] border border-[#9747ff] bg-white p-5 text-left shadow-sm transition duration-150 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="mb-4 flex h-[49px] w-[49px] items-center justify-center rounded-[24.5px] bg-[#e2e5ef]">
                            <img src="https://www.figma.com/api/mcp/asset/973c87d4-0fa5-4583-a13c-19dd9c710364.png" alt="" class="h-[27px] w-[27px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-white px-2 py-1 text-[12px] font-bold uppercase text-[#9747ff]">Pessoa Jurídica, Títulos e documentos</span>
                        <p class="text-[20px] font-bold text-[#1b4482]">Assinatura Eletrônica de Documentos</p>
                        <p class="mt-3 text-[18px] leading-[1.4] text-[#5b5b59]">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </a>

                    <a href="https://www.e-notariado.org.br/customer/certificate-request" target="_blank" class="flex h-[300px] flex-col rounded-[20px] border border-[#26b7c6] bg-white p-5 text-left shadow-sm transition duration-150 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="mb-4 flex h-[49px] w-[49px] items-center justify-center rounded-[24.5px] bg-[#e2e5ef]">
                            <img src="https://www.figma.com/api/mcp/asset/ab40a91d-80b8-450d-bc75-2933aa830784.png" alt="" class="h-[30px] w-[30px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-white px-2 py-1 text-[12px] font-bold uppercase text-[#26b7c6]">Tabelionato de Notas</span>
                        <p class="text-[20px] font-bold text-[#1b4482]">Certificado Digital Notarizado</p>
                        <p class="mt-3 text-[18px] leading-[1.4] text-[#5b5b59]">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </a>

                    <a href="https://www.pesquisaprotesto.com.br/servico/consulta-documento" target="_blank" class="flex h-[300px] flex-col rounded-[20px] border border-[#5cb3ff] bg-white p-5 text-left shadow-sm transition duration-150 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="mb-4 flex h-[49px] w-[49px] items-center justify-center rounded-[24.5px] bg-[#e2e5ef]">
                            <img src="https://www.figma.com/api/mcp/asset/1ee44ae4-3ac1-41f7-8755-0634bde282c9.png" alt="" class="h-[27px] w-[27px] object-contain" />
                        </div>
                        <span class="mb-3 inline-flex w-fit rounded-[10px] bg-white px-2 py-1 text-[12px] font-bold uppercase text-[#5cb3ff]">Tabelionato de Protesto</span>
                        <p class="text-[20px] font-bold text-[#1b4482]">Consulta de CPF/CNPJ</p>
                        <p class="mt-3 text-[18px] leading-[1.4] text-[#5b5b59]">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </a>
                </div>
            </section>

            <section class="mx-auto mt-12 w-[1280px] rounded-[20px] bg-[#f5f5f5] p-8">
                <h2 class="text-[25px] font-bold uppercase text-[#1b4482]">Quem Somos</h2>
                <p class="mt-5 max-w-[1220px] text-[18px] leading-[1.8] text-[#5b5b59]">
                    Nesta página você encontra acesso rápido, seguro e oficial aos principais serviços digitais prestados pelos Cartórios brasileiros, organizados por especialidade. As centrais foram criadas com o objetivo de simplificar e facilitar o atendimento ao cidadão e às empresas, permitindo acesso integralmente online aos mais diversos atos notariais e registrais. Nesta página você confere as funcionalidades oferecidas por cada central e acessa diretamente os serviços desejados com confiança, praticidade e segurança jurídica.
                </p>
            </section>

            <section class="mx-auto mt-12 w-[1280px]">
                <h2 class="text-center text-[25px] font-bold uppercase text-[#1b4482]">Todos os serviços</h2>

                <div class="mt-8 grid grid-cols-3 gap-4">
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
                                'green' => 'border-[#89c94e] text-[#89c94e]',
                                'orange' => 'border-[#ff7000] text-[#ff7000]',
                                'purple' => 'border-[#9747ff] text-[#9747ff]',
                                'teal' => 'border-[#26b7c6] text-[#26b7c6]',
                                'blue' => 'border-[#5cb3ff] text-[#5cb3ff]',
                                default => 'border-[#d9d9d9] text-[#1b4482]',
                            };
                        @endphp

                        <div class="rounded-[10px] border bg-white p-4 shadow-sm {{ $style }}">
                            <span class="inline-flex rounded-[10px] border bg-white px-3 py-1 text-[12px] font-bold uppercase {{ $style }}">
                                {{ $service['title'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
    </body>
</html>
