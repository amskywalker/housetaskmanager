<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $page_title }}</title>
</head>
<body class="w-screen h-screen dark:bg-gray-900 overflow-auto">
    <main class="w-full h-full px-7 py-8 overflow-auto">
        <div class="w-full flex justify-center ">
           {{ $content_title }}
        </div>
        {{ $content }}
    </main>
</body>
</html>
