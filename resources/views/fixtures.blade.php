<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')

    <div class="container mx-auto my-4">
        <div class="p-6">
            <div class="text-center mb-4">
                <h1 class="font-bold text-2xl">Fixtures</h1>
                <p>All times shown are your <b>local time</b></p>
            </div>
            <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
                <tbody>
                    @if (isset($fixtures['response']))
                        @php
                            $groupedFixtures = [];
                            foreach ($fixtures['response'] as $fixture) {
                                $date = date('Y-m-d', strtotime($fixture['fixture']['date']));
                                $groupedFixtures[$date][] = $fixture;
                            }
                        @endphp

                        @foreach ($groupedFixtures as $date => $fixturesByDate)
                            <tr>
                                <td colspan="5"
                                    class="px-6 py-4 bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-gray-100 text-center">
                                    <h2 class="text-lg font-bold">{{ date('l, d F Y', strtotime($date)) }}</h2>
                                </td>
                            </tr>
                            @foreach ($fixturesByDate as $fixture)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer" onclick="window.location='{{ route('homepage') }}">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-end items-center">
                                            <div class="text-sm font-medium mr-4 text-gray-900 dark:text-gray-100">
                                                {{ $fixture['teams']['home']['name'] }}
                                            </div>
                                            <img src="{{ $fixture['teams']['home']['logo'] }}"
                                                alt="{{ $fixture['teams']['home']['name'] }}"
                                                class="w-10 h-10 rounded-full mr-4">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ date('H:i', strtotime($fixture['fixture']['date'])) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img src="{{ $fixture['teams']['away']['logo'] }}"
                                                alt="{{ $fixture['teams']['away']['name'] }}"
                                                class="w-10 h-10 rounded-full mr-4">
                                            <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                {{ $fixture['teams']['away']['name'] }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                {{ $fixture['fixture']['venue']['name'] }},
                                            </div>
                                            <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                {{ $fixture['fixture']['venue']['city'] }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#"
                                            class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-500">
                                            View Details
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>
