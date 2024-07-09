<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')
    <div class="m-8">
        @if (isset($standings['response'][0]['league']['name']))
            <div class="text-left mb-4">
                <h1 class="font-bold text-lg">{{ $standings['response'][0]['league']['name'] }}</h1>
                <img src="{{ $standings['response'][0]['league']['logo'] }}" alt="{{ $standings['response'][0]['league']['logo'] }} Logo" class="w-6 h-6 mr-2">
            </div>
        @else
            <div class="text-left mb-4">
                <h1 class="font-bold text-lg">{{ session('error') }}</h1>
            </div>
        @endif
        <table class="table-auto w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200 text-xs">
                    <th class="p-2">Position</th>
                    <th class="p-2">Club</th>
                    <th class="p-2">Played</th>
                    <th class="p-2">Won</th>
                    <th class="p-2">Drawn</th>
                    <th class="p-2">Lost</th>
                    <th class="p-2">GF</th>
                    <th class="p-2">GA</th>
                    <th class="p-2">GD</th>
                    <th class="p-2">Points</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($standings['response'][0]['league']['standings'][0]))
                    @foreach ($standings['response'][0]['league']['standings'][0] as $team)
                        <tr class="text-center border-b">
                            <td class="p-2 whitespace-nowrap">{{ $team['rank'] }}</td>
                            <a href="{{ route('detailTeam', ['name'=> $team['team']['name'], 'id'=> $team['team']['id']]) }}">
                                <td class="p-2 flex items-center justify-start whitespace-nowrap">
                                    <img src="{{ $team['team']['logo'] }}" alt="{{ $team['team']['name'] }}"
                                    class="w-6 h-6 mr-2">
                                    {{ $team['team']['name'] }}
                                </td>
                            </a>
                            <td class="p-2 whitespace-nowrap">{{ $team['all']['played'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $team['all']['win'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $team['all']['draw'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $team['all']['lose'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $team['all']['goals']['for'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $team['all']['goals']['againts'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $team['goalsDiff'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $team['points'] }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    @include('layouts.footer')
</body>

</html>
