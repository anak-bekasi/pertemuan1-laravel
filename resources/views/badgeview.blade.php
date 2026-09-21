<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badgeview</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-10">

    <h1 class="text-2xl font-bold mb-6">
        Tampilan Badge
    </h1>

    <div class="flex gap-4">

        <p> Gula pasir: </p>
        <x-badge status="Aman" />

        <p> Gula jawa: </p>
        <x-badge status="Menipis" />

        <p> Gula madura: </p>
        <x-badge status="Habis" />

    </div>

</body>
</html>