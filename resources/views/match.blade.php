<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')
    <div class="flex">
        <section class="basis-1/4 overflow-hidden py-5 bg-blue-300 px-2 break-words dark:bg-blue-800">
        </section>
        <section class="basis-3/4 overflow-hidden p-5 break-words">
            <div class="container mx-auto mt-8">
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4">
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center">
                            <img src="url_to_home_team_logo" alt="Home Team Logo" class="h-10 w-10 mr-4">
                            <div>
                                <h3 class="text-xl font-bold">Home Team Name</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Match Time</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="text-center mr-4">
                                <h3 class="text-xl font-bold">1</h3> <!-- Home Team Score -->
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-bold">2</h3> <!-- Away Team Score -->
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="url_to_away_team_logo" alt="Away Team Logo" class="h-10 w-10 ml-4">
                            <div>
                                <h3 class="text-xl font-bold">Away Team Name</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Match Time</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg font-bold">Head to Head</h4>
                        <p>Head to head details here...</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg font-bold">Statistics</h4>
                        <p>Match statistics here...</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')
</body>

</html>
