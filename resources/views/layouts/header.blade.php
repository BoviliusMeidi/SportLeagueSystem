<header class="bg-primary-300 text-text-300 py-5 px-6 flex justify-between items-center">
    <div class="flex-row items-center px-8">
        <a href="" class="flex items-center ">
            <span class="material-symbols-sharp bg-primary-100 text-text-100 hover:bg-primary-200 hover:text-text-300 rounded-full py-2 px-2 mr-5">
                sports_soccer
            </span>
            <h2 class="text-2xl hover:underline">SportLeagueSystem</h2>
        </a>
    </div>
    <div class="flex-row items-center px-8">
        <form action="" method="GET" class="rounded-full bg-primary-100  w-screen max-w-md flex items-center">
            <span class="material-symbols-sharp text-text-100 rounded-full ml-2 py-2 px-2 ">
                search
            </span>
            <input type="text" name="query" id="" placeholder="Search..." class="ml-3 text-text-100 focus:outline-none bg-transparent placeholder-text-200">
        </form>
    </div>
    <div class="flex items-center px-8 mx-4 text-xl text-text-100">
        <a href="" class="flex items-center">
            <h2 class="px-4 py-2 bg-primary-100 hover:bg-primary-200 hover:text-text-300 rounded-full mx-4">Home</h2>
        </a>
        <a href="" class="flex items-center">
            <h2 class="px-4 py-2 bg-primary-100 hover:bg-primary-200 hover:text-text-300 rounded-full mr-4">League</h2>
        </a>
        <a href="" class="flex items-center">
            <h2 class="px-4 py-2 bg-primary-100 hover:bg-primary-200 hover:text-text-300 rounded-full mr-4">Venue</h2>
        </a>
        <div class="cursor-pointer" id="theme-toggle">
            <span class="material-symbols-sharp bg-primary-100 hover:bg-primary-200 hover:text-text-300 rounded-full py-2 px-2 mr-4" id="theme-icon">
            </span>
        </div>
        <div class="">
            @if (Request::is('homepage'))
            <a href="{{ route('register')}}">
                <span class="material-symbols-sharp bg-primary-100 hover:bg-primary-200 hover:text-text-300 rounded-full py-2 px-2">
                    account_circle
                </span>
            </a>
            @else
            @auth
            <a href="{{ route('login') }}">
                <span class="material-symbols-sharp bg-primary-100 hover:bg-primary-200 hover:text-text-300 rounded-full py-2 px-2">
                    account_circle
                </span>
            </a>
            @endauth
            @endif
        </div>
    </div>
</header>
