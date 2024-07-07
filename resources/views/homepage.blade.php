<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')
    <div class="flex h-auto">
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
                                <a href="" class="ml-4">
                                    <span class="material-symbols-sharp">
                                        trending_flat
                                    </span>
                                </a>
                            </div>
                            <hr class="border-t-3 border-gray-600">
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <div class="flex justify-center py-2">
                                <a href=""
                                    class="bg-red-10 w-2/3 text-center border-2 border-gray-600 rounded-lg">
                                    View All Match Games
                                </a>
                            </div>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
        <section class="basis-3/4 overflow-hidden p-5 break-words">
            <div class="flex flex-row bg-lime-200 h-full">
                <div class="basis-2/3 flex object-center bg-gray-300 justify-center m-2">
                    <a href="">
                        <img src="{{ asset('images/news/news-thumbnail.jpg') }}" alt="Club"
                            class="w-full h-auto rounded-lg shadow-md">
                        <label for="category" class="font-bold text-lg">News</label>
                        <h1 class="text-4xl font-bold mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam molestias, ipsam aperiam libero
                            natus voluptas fugit vero, quaerat possimus similique perferendis mollitia. Dolor impedit
                            cupiditate architecto at quidem in molestiae.</p>
                    </a>
                </div>
                <div class="basis-1/3 flex flex-col m-2 bg-primary-200">
                    <div>
                        <img src="{{ asset('images/clubs/Manchester-United.png') }}" alt="Club"
                            class="w-96 h-auto rounded-lg shadow-md">
                    </div>
                    <div>
                        <img src="{{ asset('images/clubs/Manchester-United.png') }}" alt="Club"
                            class="w-96 h-auto rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.footer')
</body>

</html>
