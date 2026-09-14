<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('label');
            $table->text('description')->nullable();
            $table->string('icon_url')->nullable();
            $table->string('href')->nullable();
            $table->string('accent')->default('border-brand-line');
            $table->string('tag_text')->default('text-brand-navy');
            $table->string('tag_bg')->default('bg-white');
            $table->string('category');
            $table->string('category_label');
            $table->unsignedTinyInteger('sort_order')->default(0);
            $table->boolean('show_in_quick_access')->default(false);
            $table->boolean('show_in_service_grid')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['category', 'is_active']);
            $table->index(['show_in_quick_access', 'sort_order']);
            $table->index(['show_in_service_grid', 'sort_order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
