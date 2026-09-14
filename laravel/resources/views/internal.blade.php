@extends('layouts.internal')

@section('internal-content')
    <section class="-mt-8 pt-8 lg:-mt-12 lg:pt-12">
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
            @foreach ($cards as $card)
                <x-home.quick-card
                    :href="$card->href ?? '#'"
                    :label="$card->category_label"
                    :title="$card->title"
                    :description="$card->description"
                    :icon="$card->icon_url"
                    :accent="$card->accent"
                    :tagText="$card->tag_text"
                    :tagBg="$card->tag_bg"
                    variant="service"
                />
            @endforeach
        </div>
    </section>

    <section class="mt-10 rounded-[20px] bg-[#f5f7fa] p-5 sm:p-6 lg:p-8">
        <p class="max-w-[1180px] text-[15px] leading-[1.8] text-brand-muted sm:text-[18px]">
            {{ $intro }}
        </p>
    </section>
@endsection