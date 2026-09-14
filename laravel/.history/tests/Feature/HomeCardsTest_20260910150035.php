<?php

namespace Tests\Feature;

use App\Models\Card;
use Tests\TestCase;

class HomeCardsTest extends TestCase
{
    public function test_home_page_reads_cards_from_database_for_quick_access_and_services(): void
    {
        $quickAccessCard = Card::query()
            ->where('is_active', true)
            ->where('show_in_quick_access', true)
            ->firstOrFail();
        $serviceCard = Card::query()
            ->where('is_active', true)
            ->where('show_in_service_grid', true)
            ->firstOrFail();

        $response = $this->get('/?category=' . $serviceCard->category);

        $response->assertOk();
        $response->assertSee($quickAccessCard->title);
        $response->assertSee($serviceCard->title);
        $response->assertSee('Todos os serviços');
    }

    public function test_service_filter_returns_only_the_selected_category_and_hides_one_category_tab(): void
    {
        $propertyService = Card::query()
            ->where('category', 'registro_imoveis')
            ->where('is_active', true)
            ->where('show_in_service_grid', true)
            ->firstOrFail();
        $registryService = Card::query()
            ->where('category', 'cartorios_registro_notas')
            ->where('is_active', true)
            ->where('show_in_service_grid', true)
            ->firstOrFail();

        $allServicesResponse = $this->get('/services', ['Accept' => 'application/json']);
        $filteredResponse = $this->get('/services?category=registro_imoveis', ['Accept' => 'application/json']);
        $homeResponse = $this->get('/');

        $allServicesResponse->assertOk();
        $allServicesResponse->assertJsonPath('html', fn (string $html): bool => str_contains($html, $propertyService->title));
        $allServicesResponse->assertJsonPath('html', fn (string $html): bool => str_contains($html, $registryService->title));

        $filteredResponse->assertOk();
        $filteredResponse->assertJsonPath('html', fn (string $html): bool => str_contains($html, $propertyService->title));
        $filteredResponse->assertJsonPath('html', fn (string $html): bool => ! str_contains($html, $registryService->title));

        $homeResponse->assertSee($registryService->title);
        $homeResponse->assertDontSee('>Cartórios de Registro e Notas</a>');
    }
}
