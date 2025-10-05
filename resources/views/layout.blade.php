<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Management</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js'])
</head>

<body class="bg-gray-900 text-gray-50">
    <nav class="w-full p-3 fixed left-0 top-0 bg-gray-950 flex items-center">
        <span class="material-icons">
            menu
        </span>
    </nav>
    <div class="mt-12 p-4">
        {{ $slot }}
    </div>
</body>

</html>
