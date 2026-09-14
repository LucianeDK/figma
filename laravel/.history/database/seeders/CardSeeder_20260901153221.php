<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = [
            [
                'title' => 'Pedido de Certidões',
                'label' => 'Registro Civil de Pessoas Naturais',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'icon_url' => 'https://www.figma.com/api/mcp/asset/d0f50ac4-182b-48a0-9c00-7225cb762241.png',
                'href' => 'https://www.rtdbrasil.org.br/',
                'accent' => 'border-brand-green',
                'tag_text' => 'text-brand-green',
                'tag_bg' => 'bg-[#f7fbf4]',
                'category' => 'registro_civil',
                'category_label' => 'Registro Civil de Pessoas Naturais',
                'sort_order' => 1,
                'show_in_quick_access' => true,
                'show_in_service_grid' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Acompanhamento Registral',
                'label' => 'Registro de Imóveis',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'icon_url' => 'https://www.figma.com/api/mcp/asset/7187cb99-bbc3-488a-af5a-25a4eb969c20.png',
                'href' => 'https://registradores.onr.org.br/servicos/actitulo/frmAcompanhamentoTitulo.aspx',
                'accent' => 'border-brand-orange',
                'tag_text' => 'text-brand-orange',
                'tag_bg' => 'bg-[#fff8f3]',
                'category' => 'registro_imoveis',
                'category_label' => 'Registro de Imóveis',
                'sort_order' => 2,
                'show_in_quick_access' => true,
                'show_in_service_grid' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Assinatura Eletrônica de Documentos',
                'label' => 'Pessoa Jurídica, Títulos e documentos',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'icon_url' => 'https://www.figma.com/api/mcp/asset/973c87d4-0fa5-4583-a13c-19dd9c710364.png',
                'href' => 'https://www.rtdbrasil.org.br/coletaassinatura/assinardocumento',
                'accent' => 'border-brand-purple',
                'tag_text' => 'text-brand-purple',
                'tag_bg' => 'bg-[#f7f5ff]',
                'category' => 'titulos_documentos',
                'category_label' => 'Registro de Títulos e Documentos',
                'sort_order' => 3,
                'show_in_quick_access' => true,
                'show_in_service_grid' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Certificado Digital Notarizado',
                'label' => 'Tabelionato de Notas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'icon_url' => 'https://www.figma.com/api/mcp/asset/ab40a91d-80b8-450d-bc75-2933aa830784.png',
                'href' => 'https://www.e-notariado.org.br/customer/certificate-request',
                'accent' => 'border-brand-teal',
                'tag_text' => 'text-brand-teal',
                'tag_bg' => 'bg-[#f2fcfd]',
                'category' => 'tabelionato_notas',
                'category_label' => 'Tabelionato de Notas',
                'sort_order' => 4,
                'show_in_quick_access' => true,
                'show_in_service_grid' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Consulta de CPF/CNPJ',
                'label' => 'Tabelionato de Protesto',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'icon_url' => 'https://www.figma.com/api/mcp/asset/1ee44ae4-3ac1-41f7-8755-0634bde282c9.png',
                'href' => 'https://www.pesquisaprotesto.com.br/servico/consulta-documento',
                'accent' => 'border-brand-blue',
                'tag_text' => 'text-brand-blue',
                'tag_bg' => 'bg-[#f3f9ff]',
                'category' => 'tabelionato_protestos',
                'category_label' => 'Tabelionato de Protestos',
                'sort_order' => 5,
                'show_in_quick_access' => true,
                'show_in_service_grid' => true,
                'is_active' => true,
            ],
        ];

        foreach ($cards as $card) {
            Card::query()->updateOrCreate(
                ['title' => $card['title']],
                $card,
            );
        }
    }
}
