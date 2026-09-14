<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.site-head')
    </head>
    <body class="bg-brand-surface text-slate-800 antialiased">
        @include('partials.site-header')

        <main>
            @yield('content')
        </main>

        @include('partials.site-footer')

        @stack('scripts')
    </body>
</html>
