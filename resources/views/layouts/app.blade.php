<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marco Guarnera">
    <meta name="description" content="Layout">
    <!-- Title -->
    <title>@yield("page-title", "")</title>
    <!-- File JavaScript -->
    @vite("resources/js/app.js")
</head>

<body>
    <!-- Main Header -->
    @include("partials.main-header")
    <!-- Main -->
    <main>
        @yield("main")
    </main>
    <!-- Main Footer -->
    @include("partials.main-footer")
</body>

</html>
