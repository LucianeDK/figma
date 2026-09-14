@extends('layouts.site')

@section('content')
    @include('partials.internal-page-header', ['title' => $title])

    <main class="mx-auto max-w-[1280px] px-4 pb-16 sm:px-6 lg:px-8">
        @yield('internal-content')
    </main>
@endsection