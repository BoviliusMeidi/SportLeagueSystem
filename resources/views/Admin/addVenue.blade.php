<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark overflow-hidden">
    @include('layouts.header')
    <main class="px-28 py-8 mb-10">
        <form method="POST" action="{{ route('createVenue') }}" class="w-full flex flex-col items-center">
            @csrf
            @method('POST')
            <table class="w-2/3 bg-white shadow-lg rounded-md border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2"></th>
                        <th class="border border-gray-300 px-4 py-2">Add Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <td class="border border-gray-300 px-4 py-2">
                            <input type="text" name="name" placeholder="name" autocomplete="off"
                                value="{{ old('name') }}"
                                class="w-full border px-2 py-1 focus:outline-none focus:ring-2 focus:bg-gray-200 rounded-md">
                        </td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Country</th>
                        <td class="border border-gray-300 px-4 py-2">
                            <input type="text" name="country" placeholder="country" autocomplete="off" value="{{ old('country') }}"
                                class="w-full border px-2 py-1 focus:outline-none focus:ring-2 focus:bg-gray-200 rounded-md">
                        </td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">City</th>
                        <td class="border border-gray-300 px-4 py-2">
                            <input type="text" name="city" placeholder="city" autocomplete="off"
                                value="{{ old('city') }}"
                                class="w-full border px-2 py-1 focus:outline-none focus:ring-2 focus:bg-gray-200 rounded-md">
                        </td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Capacity</th>
                        <td class="border border-gray-300 px-4 py-2">
                            <input type="text" name="capacity" placeholder="capacity" autocomplete="off" value="{{ old('capacity') }}"
                                class="w-full border px-2 py-1 focus:outline-none focus:ring-2 focus:bg-gray-200 rounded-md">
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="flex flex-row justify-between w-2/3">
                <a href="{{ route('venue') }}" class="px-12 py-2 bg-primary-300 text-white rounded-md">Back</a>
                <button type="submit" class="px-12 py-2 bg-red-600 text-white rounded-md">Submit</button>
            </div>
        </form>
    </main>
    @include('layouts.footer')
</body>
</html>
