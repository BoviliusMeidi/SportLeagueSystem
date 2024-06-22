<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
    @include('layouts.head')
<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')
    @include('layouts.footer')
</body>
</html>


