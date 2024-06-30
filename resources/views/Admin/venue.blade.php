<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')
    <main class="px-28 py-8">
        <table class="w-full bg-white shadow-lg rounded-md border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">VenueID</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Country</th>
                    <th class="border border-gray-300 px-4 py-2">City</th>
                    <th class="border border-gray-300 px-4 py-2">Capacity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($venues as $venue)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $venue->venue_id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $venue->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $venue->country }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $venue->city }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $venue->capacity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div>
        {{ $venues->links() }}
    </div>
    <div>
        @if ($venues->hasMorePages())
            <a href="{{ $venues->nextPageUrl() }}">
            </a>
        @endif
    </div>
    </main>
    @include('layouts.footer')
</body>

</html>
