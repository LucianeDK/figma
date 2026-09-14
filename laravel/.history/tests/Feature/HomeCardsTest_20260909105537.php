<?php

namespace Tests\Feature;

use App\Models\Card;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeCardsTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_reads_cards_from_database_for_quick_access_and_services(): void
    {
        Card::create([
            'title' => 'Pedido de Certidões',
            'label' => 'Registro Civil de Pessoas Naturais',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'icon_url' => 'https://example.com/icon.png',
            'href' => 'https://example.com/certidoes',
            'accent' => 'border-brand-green',
            'tag_text' => 'text-brand-green',
            'tag_bg' => 'bg-[#f7fbf4]',
            'category' => 'registro_civil',
            'category_label' => 'Registro Civil de Pessoas Naturais',
            'sort_order' => 1,
            'show_in_quick_access' => true,
            'show_in_service_grid' => true,
            'is_active' => true,
        ]);

        Card::create([
            'title' => 'Acompanhamento Registral',
            'label' => 'Registro de Imóveis',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'icon_url' => 'https://example.com/icon-2.png',
            'href' => 'https://example.com/imoveis',
            'accent' => 'border-brand-orange',
            'tag_text' => 'text-brand-orange',
            'tag_bg' => 'bg-[#fff8f3]',
            'category' => 'registro_imoveis',
            'category_label' => 'Registro de Imóveis',
            'sort_order' => 2,
            'show_in_quick_access' => true,
            'show_in_service_grid' => true,
            'is_active' => true,
        ]);

        $response = $this->get('/?category=registro_civil');

        $response->assertOk();
        $response->assertSee('Pedido de Certidões');
        $response->assertSee('Todos os serviços');
    }

    public function test_service_cards_can_be_filtered_without_rendering_the_removed_category_tab(): void
    {
        Card::create([
            'title' => 'Serviço de Registro',
            'label' => 'Registro de Imóveis',
            'description' => 'Descrição do serviço.',
            'icon_url' => 'https://example.com/icon.png',
            'href' => '#',
            'accent' => 'border-brand-orange',
            'tag_text' => 'text-brand-orange',
            'tag_bg' => 'bg-[#fff8f3]',
            'category' => 'registro_imoveis',
            'category_label' => 'Registro de Imóveis',
            'sort_order' => 1,
            'show_in_quick_access' => false,
            'show_in_service_grid' => true,
            'is_active' => true,
        ]);

        Card::create([
            'title' => 'Serviço de Cartórios',
            'label' => 'Cartórios de Registro e Notas',
            'description' => 'Descrição do serviço.',
            'icon_url' => 'https://example.com/icon-2.png',
            'href' => '#',
            'accent' => 'border-brand-line',
            'tag_text' => 'text-brand-navy',
            'tag_bg' => 'bg-white',
            'category' => 'cartorios_registro_notas',
            'category_label' => 'Cartórios de Registro e Notas',
            'sort_order' => 2,
            'show_in_quick_access' => false,
            'show_in_service_grid' => true,
            'is_active' => true,
        ]);

        $response = $this->get('/services?category=registro_imoveis', [
            'Accept' => 'application/json',
        ]);

        $response->assertOk();
        $response->assertJsonPath('html', fn (string $html): bool => str_contains($html, 'Serviço de Registro'));
        $response->assertJsonPath('html', fn (string $html): bool => ! str_contains($html, 'Serviço de Cartórios'));

        $homeResponse = $this->get('/');
        $homeResponse->assertSee('Serviço de Cartórios');
        $homeResponse->assertDontSee('Cartórios de Registro e Notas</a>');
    }
}
