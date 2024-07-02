<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')
    <div class="flex h-screen">
        <section class="basis-1/4 overflow-hidden py-5 bg-blue-300 px-10 break-words">
            <div class="bg-green-200 rounded-xl">
                <table class="">
                    <thead>
                        <tr>
                            <div>
                                <h1 class="text-center font-bold">MatchWeek {1}</h1>
                                <h1 class="text-center">All times shown are your <b>local time</b></h1>
                                <h1 class="text-center">{Date}</h1>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <div class="flex flex-row justify-between py-2 bg-white">
                                <div class="flex-grow text-center">
                                    <h2 class="font-bold">
                                        MUN {Logo} {00:20} {Logo} FUL
                                    </h2>
                                </div>
                                <button class="ml-4">
                                    <span class="material-symbols-sharp">
                                        trending_flat
                                    </span>
                                </button>
                            </div>
                            <hr class="border-t-3 border-gray-600">
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <div class="flex justify-center py-2">
                                <a href="" class="bg-red-10 w-2/3 text-center border-2 border-gray-600 rounded-lg">
                                    View All Match Games
                                </a>
                            </div>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
        <section class="basis-3/4 overflow-hidden p-5 break-words">
            <h1 class="text-3xl font-bold">News</h1>
        </section>
    </div>
    @include('layouts.footer')
</body>

</html>
