  <!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <x-partials.head-meta />
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
  </head>

  <body>
    <x-partials.preloader />
    <x-partials.header />
    {{ $slot }}
    <x-partials.footer />

    <x-partials.script-tag />
  </body>

  </html>
