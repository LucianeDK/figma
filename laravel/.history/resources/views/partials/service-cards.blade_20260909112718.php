@foreach ($serviceCards as $service)
    <x-home.quick-card
        :href="$service->href ?? '#'"
        :label="$service->category_label"
        :title="$service->title"
        :description="$service->description"
        :icon="$service->icon_url"
        :accent="$service->accent"
        :tagText="$service->tag_text"
        :tagBg="$service->tag_bg"
        variant="service"
    />
@endforeach