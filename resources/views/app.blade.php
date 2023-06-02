<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RealEstate</title>
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/7972/7972450.png" />
        <style>
            body {
                margin-bottom: 0!important;
            }
        </style>
    </head>
    <body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-300 mb-0">
        @inertia
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </body>
</html>
