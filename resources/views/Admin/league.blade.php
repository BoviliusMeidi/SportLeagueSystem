<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')
    <main>
        <main class="px-28 py-8">
            <table class="w-full bg-white shadow-lg rounded-md border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">leagueID</th>
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">Region</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leagues as $league)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $league->league_id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $league->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $league->region }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div>
                {{ $leagues->links() }}
            </div>
            <div>
                @if ($leagues->hasMorePages())
                    <a href="{{ $leagues->nextPageUrl() }}">
                    </a>
                @endif
            </div>
        </main>
    </main>
    @include('layouts.footer')
</body>
</html>
