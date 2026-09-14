<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'label',
        'description',
        'icon_url',
        'href',
        'accent',
        'tag_text',
        'tag_bg',
        'category',
        'category_label',
        'sort_order',
        'show_in_quick_access',
        'show_in_service_grid',
        'is_active',
    ];

    protected $casts = [
        'show_in_quick_access' => 'boolean',
        'show_in_service_grid' => 'boolean',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];
}
