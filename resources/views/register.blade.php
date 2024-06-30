<!DOCTYPE html>
<html lang="en" class="h-full">
@include('layouts.head')

<body class="bg-primary-100 w-full h-full flex justify-center">
    <main class="text-text-100 flex min-h-full flex-col justify-center w-2/3 px-6 py-12">
        <div class="flex flex-col items-center">
            <span class="material-symbols-sharp mx-auto" style="font-size: 4rem">
                sports_soccer
            </span>
            <h2 class="text-center text-3xl py-2">Create your account</h2>
        </div>
        <div class="flex flex-col items-center justify-center ">
            <form class="space-y-6 w-full max-w-md" action="{{ route('register.post') }}" method="POST">
                @csrf
                <div>
                    <label for="username" class="block text-sm leading-6 px-1 font-medium">Username</label>
                    <div class="mt-1">
                        <input id="username" name="username" type="username" placeholder="Username"
                            value="{{ old('username') }}" autocomplete="username" required
                            class="block w-full rounded-md shadow-sm border-0 p-1.5 ring-1 ring-inset ring-primary-300 placeholder:text-text-200 focus:ring-1 focus:ring-inset focus:ring-primary-300">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm leading-6 px-1 font-medium">Email address</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" placeholder="Email address"
                            value="{{ old('email') }}" autocomplete="email" required
                            class="block w-full rounded-md shadow-sm border-0 p-1.5 ring-1 ring-inset ring-primary-300 placeholder:text-text-200 focus:ring-1 focus:ring-inset focus:ring-primary-300">
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm leading-6 px-1 font-medium">Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" placeholder="Password"
                            value="{{ old('password') }}" autocomplete="password" required
                            class="block w-full rounded-md shadow-sm border-0 p-1.5 ring-1 ring-inset ring-primary-300 placeholder:text-text-200 focus:ring-1 focus:ring-inset focus:ring-primary-300">
                    </div>
                </div>
                <div>
                    <label for="confirmpassword" class="block text-sm leading-6 px-1 font-medium">Confirm
                        Password</label>
                    <div class="mt-1">
                        <input id="confirmpassword" name="confirmpassword" type="password"
                            placeholder="Confirm Password" value="{{ old('confirmpassword') }}"
                            autocomplete="confirmpassword" required
                            class="block w-full rounded-md shadow-sm border-0 p-1.5 ring-1 ring-inset ring-primary-300 placeholder:text-text-200 focus:ring-1 focus:ring-inset focus:ring-primary-300">
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-primary-200 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary-300 hover:text-text-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-300">Create
                        account</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </form>
            <p class="mt-10 text-center text-sm">
                I already have an account,
              <a href="login" class="font-semibold leading-6 text-text-100 hover:underline">Sign in</a>
            </p>
        </div>
    </main>
</body>

</html>
