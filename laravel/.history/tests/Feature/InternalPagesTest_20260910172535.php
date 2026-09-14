<?php

namespace Tests\Feature;

use App\Models\Card;
use Tests\TestCase;

class InternalPagesTest extends TestCase
{
    public function test_internal_pages_render_their_category_cards_without_writing_to_the_database(): void
    {
        $pages = [
            'registro-civil' => 'registro_civil',
            'registro-de-imoveis' => 'registro_imoveis',
            'titulos-e-documentos' => 'titulos_documentos',
            'tabelionato-de-notas' => 'tabelionato_notas',
            'tabelionato-de-protestos' => 'tabelionato_protestos',
        ];

        foreach ($pages as $slug => $category) {
            $card = Card::query()
                ->where('category', $category)
                ->where('is_active', true)
                ->where('show_in_service_grid', true)
                ->firstOrFail();

            $response = $this->get('/'.$slug);

            $response->assertOk();
            $response->assertSee($card->title);
        }
    }
}
