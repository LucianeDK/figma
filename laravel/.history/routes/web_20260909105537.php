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
        ->when($request->filled('category'), fn ($query) => $query->where('category', $request->string('category')))
        ->orderBy('sort_order')
        ->get();

    return response()->json([
        'html' => view('partials.service-cards', compact('serviceCards'))->render(),
    ]);
})->name('services.index');
