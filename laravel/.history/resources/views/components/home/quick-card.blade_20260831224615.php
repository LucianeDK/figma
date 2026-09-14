@props([
    'href' => '#',
    'label' => '',
    'title' => '',
    'description' => '',
    'icon' => '',
    'accent' => 'border-brand-green',
    'tagText' => 'text-brand-green',
    'tagBg' => 'bg-[#f7fbf4]',
])

<a href="{{ $href }}" target="_blank" rel="noopener noreferrer"
   class="group flex min-h-[var(--spacing-card-h)] flex-col rounded-[20px] border bg-white p-4 text-left shadow-[0_8px_18px_rgba(18,52,90,0.04)] transition-all duration-200 hover:-translate-y-1 hover:shadow-[0_18px_28px_rgba(20,54,95,0.09)] {{ $accent }}">
    <div class="mb-4 flex h-[52px] w-[52px] items-center justify-center rounded-full bg-[#edf3f8]">
        <img src="{{ $icon }}" alt="" class="h-[24px] w-[24px] object-contain" />
    </div>

    <span class="mb-3 inline-flex w-fit rounded-[10px] px-2.5 py-1 text-[10px] font-bold uppercase leading-tight tracking-[0.06em] {{ $tagBg }} {{ $tagText }}">
        {{ $label }}
    </span>

    <p class="text-[20px] font-extrabold leading-tight text-brand-navy">{{ $title }}</p>
    <p class="mt-3 text-[15px] leading-[1.55] text-brand-muted">{{ $description }}</p>
</a>
