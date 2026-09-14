<?php

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function (Request $request) {
    $serviceCards = Card::query()
        ->where('is_active', true)
        ->where('show_in_service_grid', true)
        ->when($request->filled('category'), fn ($query) => $query->where('category', $request->input('category')))
        ->orderBy('sort_order')
        ->get();

    return response()->json([
        'html' => view('partials.service-cards', compact('serviceCards'))->render(),
    ]);
})->name('services.index');

$internalPages = [
    'registro-civil' => [
        'category' => 'registro_civil',
        'title' => 'Registro Civil de Pessoas Naturais',
        'intro' => 'Acesse os serviços digitais do Registro Civil de Pessoas Naturais para solicitar certidões, localizar registros e consultar informações com praticidade e segurança.',
    ],
    'registro-de-imoveis' => [
        'category' => 'registro_imoveis',
        'title' => 'Registro de Imóveis',
        'intro' => 'Encontre os serviços digitais do Registro de Imóveis para consultar, acompanhar e validar informações relacionadas aos registros imobiliários.',
    ],
    'titulos-e-documentos' => [
        'category' => 'titulos_documentos',
        'title' => 'Registro de Títulos e Documentos e de Pessoas Jurídicas',
        'intro' => 'Acesse serviços para registro, consulta, validação e assinatura de documentos, títulos e atos relacionados às pessoas jurídicas.',
    ],
    'tabelionato-de-notas' => [
        'category' => 'tabelionato_notas',
        'title' => 'Tabelionato de Notas',
        'intro' => 'Consulte os serviços eletrônicos do Tabelionato de Notas para atos notariais, certificados, autenticações e documentos digitais.',
    ],
    'tabelionato-de-protestos' => [
        'category' => 'tabelionato_protestos',
        'title' => 'Tabelionato de Protestos',
        'intro' => 'Acesse serviços de consulta, envio, anuência e certidões relacionados aos Tabelionatos de Protesto.',
    ],
];

foreach ($internalPages as $slug => $page) {
    Route::get('/'.$slug, function () use ($page) {
        $cards = Card::query()
            ->where('is_active', true)
            ->where('show_in_service_grid', true)
            ->where('category', $page['category'])
            ->orderBy('sort_order')
            ->get();

        return view('internal', [
            'cards' => $cards,
            'category' => $page['category'],
            'intro' => $page['intro'],
            'title' => $page['title'],
        ]);
    })->name('internal.'.$page['category']);
}
