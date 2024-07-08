<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
@include('layouts.head')

<body class="bg-primary-100 dark:bg-primary-dark">
    @include('layouts.header')
    <h1 class="font-bold mx-28 text-3xl mt-4">
        Teams
    </h1>
    <article class="grid grid-cols-5 gap-4 mx-24 my-12 hover:animate-background rounded-xl bg-gradient-to-r">
        @foreach ($teams['response'] as $team)
            <a href="{{ route('detailTeam', ['name'=> $team['team']['name'], 'id'=> $team['team']['id']]) }}" class="block">
                <div class="rounded-[10px] w-full h-40 bg-white p-4 !pt-6 sm:p-6 hover:bg-gray-400">
                    <img src="{{ $team['team']['logo'] }}" alt="{{ $team['team']['name'] }} Logo" width="80">
                    <h3 class="mt-5 text-lg font-bold text-gray-900">
                        {{ $team['team']['name']  }}
                    </h3>
                </div>
            </a>
        @endforeach
    </article>
    @include('layouts.footer')
</body>

</html>
