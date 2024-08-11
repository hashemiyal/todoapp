</html>
<!DOCTYPE html>
<html lang="en">

<head>
    @livewireStyles
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App template</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>
    @livewire('navbar')
    @yield('content')
    @livewireScripts
    
</body>

</html>