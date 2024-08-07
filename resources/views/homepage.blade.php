<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.notification')
    @include('layouts.header')
    <div class="flex h-auto dark:bg-primary-dark">
        <section class="basis-1/4 overflow-hidden py-5 bg-blue-300 px-2 break-words dark:bg-blue-800">
            <div class="rounded-xl bg-white">
                <table class="w-full rounded-lg">
                    <thead>
                        <tr>
                            <div class="bg-green-200 rounded-t-xl">
                                <h1 class="text-center font-bold">MatchWeek {{ $fixtures[0]['league']['round'] ?? '' }}
                                </h1>
                                <h1 class="text-center">All times shown are your <b>local time</b></h1>
                            </div>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
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
                                        class="p-2 bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-gray-100 text-center">
                                        <h2 class="text-lg font-bold">{{ date('l, d F Y', strtotime($date)) }}</h2>
                                    </td>
                                </tr>
                                @foreach ($fixturesByDate as $fixture)
                                    <tr>
                                        <td colspan="5" class="px-4">
                                            <div class="flex flex-col object-center py-2 bg-white">
                                                <div class="flex flex-row items-center text-center">
                                                    <div class="object-center flex-1">
                                                        <div class="flex items-center justify-center mx-auto">
                                                            <h2 class="font-bold">
                                                                {{ $teamCodes[$fixture['teams']['home']['id']] }}
                                                            </h2>
                                                            <img src="{{ $fixture['teams']['home']['logo'] }}"
                                                                alt="{{ $fixture['teams']['home']['name'] }}"
                                                                class="w-6 h-6 mx-2">
                                                            <p>
                                                                {{ date('H:i', strtotime($fixture['fixture']['date'])) }}
                                                            </p>
                                                            <img src="{{ $fixture['teams']['away']['logo'] }}"
                                                                alt="{{ $fixture['teams']['away']['name'] }}"
                                                                class="w-6 h-6 mx-2">
                                                            <h2 class="font-bold">
                                                                {{ $teamCodes[$fixture['teams']['away']['id']] }}
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="ml-auto">
                                                        <span class="material-symbols-sharp">
                                                            trending_flat
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr class="border-t-3 border-gray-600">
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="flex w-full justify-center items-center text-center py-2">
                                <a href="{{ route('fixtures') }}" class="bg-red-500 text-white py-2 px-4 rounded-lg">
                                    View All Match Games
                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="bg-green-200 rounded-xl mt-3">
                @if (isset($standings['response'][0]['league']['name']))
                    <div class="text-center mb-4">
                        <h1 class="font-bold text-lg">{{ $standings['response'][0]['league']['name'] }}</h1>
                    </div>
                @else
                    <div class="text-center mx-4">
                        <h1 class="font-bold text-sm">{{ session('error') }}</h1>
                    </div>
                @endif
                <table class="table-auto w-full bg-white rounded-lg shadow-md">
                    <thead>
                        <tr class="bg-gray-200 text-xs">
                            <th class="p-2">Pos</th>
                            <th class="p-2">Club</th>
                            <th class="p-2">Pl</th>
                            <th class="p-2">GD</th>
                            <th class="p-2">Pts</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($standings['response'][0]['league']['standings'][0]))
                            @foreach ($standings['response'][0]['league']['standings'][0] as $team)
                                <tr class="text-center border-b">
                                    <td class="p-2 whitespace-nowrap">{{ $team['rank'] }}</td>
                                    <a
                                        href="{{ route('detailTeam', ['name' => $team['team']['name'], 'id' => $team['team']['id']]) }}">
                                        <td class="p-2 flex items-center justify-start whitespace-nowrap">
                                            <img src="{{ $team['team']['logo'] }}" alt="{{ $team['team']['name'] }}"
                                                class="w-6 h-6 mr-2">
                                            {{ $team['team']['name'] }}
                                        </td>
                                    </a>
                                    <td class="p-2 whitespace-nowrap">{{ $team['all']['played'] }}</td>
                                    <td class="p-2 whitespace-nowrap">{{ $team['goalsDiff'] }}</td>
                                    <td class="p-2 whitespace-nowrap">{{ $team['points'] }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-center py-2">
                                <a href="{{ route('standings') }}"
                                    class="bg-red-500 text-white py-2 px-4 rounded-lg inline-flex items-center justify-center">
                                    View More
                                    <span class="material-symbols-sharp ml-2">
                                        trending_flat
                                    </span>
                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
        <section class="basis-3/4 overflow-hidden p-5 break-words">
            <div class="flex flex-row h-full">
                <div class="basis-2/3 flex object-center justify-center m-2">
                    <a href="">
                        <img src="{{ asset('images/news/news-thumbnail.jpg') }}" alt="Club"
                            class="w-full h-auto rounded-lg shadow-md">
                        <label for="category" class="font-bold text-lg">News</label>
                        <h1 class="text-4xl font-bold mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam molestias, ipsam aperiam libero
                            natus voluptas fugit vero, quaerat possimus similique perferendis mollitia. Dolor impedit
                            cupiditate architecto at quidem in molestiae.</p>
                    </a>
                </div>
                <div class="basis-1/3 grid grid-rows-2 m-2 gap-2">
                    <div>
                        <a href="">
                            <img src="{{ asset('images/news/news-thumbnail.jpg') }}" alt="Club"
                                class="w-full h-auto rounded-lg shadow-md">
                            <label for="category" class="font-bold text-lg">News</label>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam molestias, ipsam aperiam
                                libero
                                natus voluptas fugit vero, quaerat possimus </p>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="{{ asset('images/news/news-thumbnail.jpg') }}" alt="Club"
                                class="w-full h-auto rounded-lg shadow-md">
                            <label for="category" class="font-bold text-lg">News</label>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam molestias, ipsam aperiam
                                libero
                                natus voluptas fugit vero, quaerat possimus </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.footer')
</body>

</html>
