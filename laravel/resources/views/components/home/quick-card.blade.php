@props([
    'href' => '#',
    'label' => '',
    'title' => '',
    'description' => '',
    'icon' => '',
    'accent' => 'border-brand-green',
    'tagText' => 'text-brand-green',
    'tagBg' => 'bg-[#f7fbf4]',
    'variant' => 'quick',
])

<a href="{{ $href }}" target="_blank" rel="noopener noreferrer"
   class="group flex flex-col rounded-[20px] border bg-white text-left shadow-[0_8px_18px_rgba(18,52,90,0.04)] transition-all duration-200 hover:-translate-y-1 hover:shadow-[0_18px_28px_rgba(20,54,95,0.09)] {{ $variant === 'service' ? 'min-h-[274px] p-5' : 'min-h-[var(--spacing-card-h)] p-4' }} {{ $accent }}">
    <div class="flex h-[49px] w-[49px] shrink-0 items-center justify-center rounded-full bg-[#e2e5ef] {{ $variant === 'service' ? '' : 'mb-4' }}">
        <img src="{{ $icon }}" alt="" class="h-[24px] w-[24px] object-contain" />
    </div>

    <span class="{{ $variant === 'service' ? 'mt-[15px] bg-white text-[12px]' : 'mb-3 bg-transparent text-[10px]' }} inline-flex w-fit rounded-[10px] p-0 font-bold uppercase leading-tight tracking-[0.06em] {{ $tagText }}">
        {{ $label }}
    </span>

    <p class="{{ $variant === 'service' ? 'mt-[15px]' : '' }} text-[20px] font-extrabold leading-tight text-brand-navy">{{ $title }}</p>
    <p class="{{ $variant === 'service' ? 'mt-[15px] text-[18px] leading-normal' : 'mt-3 text-[15px] leading-[1.55]' }} text-brand-muted">{{ $description }}</p>
</a>
