<?php

use App\Models\Card;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $selectedCategory = request('category');

    $quickAccessCards = Card::query()
        ->where('is_active', true)
        ->where('show_in_quick_access', true)
        ->orderBy('sort_order')
        ->get();

    $serviceCards = Card::query()
        ->where('is_active', true)
        ->where('show_in_service_grid', true)
        ->when($selectedCategory, fn ($query) => $query->where('category', $selectedCategory))
        ->orderBy('sort_order')
        ->get();

    $categories = Card::query()
        ->where('is_active', true)
        ->where('show_in_service_grid', true)
        ->select('category', 'category_label')
        ->distinct()
        ->orderBy('category_label')
        ->get();

    return view('home', [
        'quickAccessCards' => $quickAccessCards,
        'serviceCards' => $serviceCards,
        'categories' => $categories,
        'selectedCategory' => $selectedCategory,
    ]);
});
