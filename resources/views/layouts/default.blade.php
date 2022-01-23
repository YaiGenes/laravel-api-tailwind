<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
    <body class="bg-gray-100 text-gray-700">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-4 gap-4 my-10">
                @yield('foreach')
            </div>
                @yield('pagination')
        </div>
    </body>
</html>