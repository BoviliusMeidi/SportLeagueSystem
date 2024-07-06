<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')
    <section class="flex justify-center bg-red-300 dark:bg-primary-dark dark:text-white p-6 shadow-lg my-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between space-y-4 md:space-y-0 w-full max-w-full">
            <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-6">
                <img src="{{ asset('images/clubs/Manchester-United.png') }}" alt="Club" class="w-32 h-auto rounded-lg shadow-md">
                <div class="flex flex-col justify-center text-left space-y-2">
                    <h1 class="text-5xl font-extrabold text-white">{{ $team->name }}</h1>
                    <div class="flex flex-col md:flex-row md:space-x-5 space-y-2 md:space-y-0">
                        <h1 class="text-xl font-semibold">Est: {{ $team->founded }}</h1>
                        <h1 class="text-xl font-semibold">{{ $team->venue->name }}, {{ $team->venue->city }}, {{ $team->venue->country }}</h1>
                        <h1 class="text-xl font-semibold">Capacity: {{ $team->venue->capacity }}</h1>
                    </div>
                </div>
            </div>
            <img src="{{ asset('images/clubs/Manchester-United.png') }}" alt="Club" class="w-96 h-auto rounded-lg shadow-md">
        </div>
    </section>
    @include('layouts.footer')
</body>
</html>
