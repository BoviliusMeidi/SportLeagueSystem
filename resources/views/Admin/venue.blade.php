<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.notification')
    @include('layouts.header')
    <main class="px-28 py-8 h-screen">
        <table class="w-full mb-2 bg-white shadow-lg rounded-md border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">VenueID</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Country</th>
                    <th class="border border-gray-300 px-4 py-2">City</th>
                    <th class="border border-gray-300 px-4 py-2">Capacity</th>
                    <th class="border border-gray-300 px-4 py-2">Edit</th>
                    <th class="border border-gray-300 px-4 py-2">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($venues->sortBy('venue_id') as $venue)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $venue->venue_id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $venue->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $venue->country }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $venue->city }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $venue->capacity }}</td>
                        <td class="border border-gray-300 py-2 text-center"><a
                                href="{{ route('editVenue', ['venue' => $venue->venue_id]) }}"
                                class="bg-blue-300 px-6 rounded-lg py-0.5">Edit</a></td>
                        <td class="border border-gray-300 px-4 py-2 ">
                            <form method="POST" action="{{ route('deleteVenue', ['venue' => $venue->venue_id]) }}"
                                class="bg-red-600 text-white rounded-lg">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="py-2 mt-2 w-48 ml-1">
            <a href="{{ route('addVenue') }}" class=" bg-green-600 w-40 py-2 text-white rounded-lg">
                <button type="submit" class="px-2 w-full">Add New Venue</button>
            </a>
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
