<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
<div class="min-h-full">
  <x-navbar></x-navbar>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{$slot}}
        <x-header>{{ $judul }}</x-header>
    </div>
  </main>
</div>
</body>
</html>