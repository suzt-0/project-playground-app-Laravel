<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @notifyCss
    @vite('resources/css/app.css')
</head>

<body class="bg-emerald-50 text-slate-800 ">
    {{-- navbar starts here --}}
    @include('components.navbar-basic')
    {{-- navbar ends here--}}

    {{-- Contains main body --}}
    <div class="flex justify-center items-center">
        <div class="flex w-full min-h-full flex-col justify-start py-12 px-6 lg:px-8">
            {{-- Sign in text --}}
            <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                <h2 class=" text-center text-4xl font-bold leading-9 tracking-tight">
                    Login</h2>
            </div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                {{-- login form starts here --}}
                <form class="space-y-6" action="{{route('login')}}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full rounded-md border-0 py-2 px-3 shadow-sm ring-1 ring-inset ring-slate-400 placeholder:text-gray-400 focus:outline-slate-600 focus:ring-slate-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
    
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6">Password</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-slate-600 hover:text-blue-600">Forgot password?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="block w-full rounded-md border-0 py-2 px-3  shadow-sm ring-1 ring-inset ring-slate-400 placeholder:text-gray-400 focus:outline-slate-600 focus:ring-slate-600 sm:text-sm sm:leading-6">
                        </div>
                        <div class="mt-2 flex items-center gap-1">
                            <input  type="checkbox" id="remember_me" name="remember_me"
                                class="px-3  shadow-sm ring-1 ring-inset ring-slate-400 placeholder:text-gray-400 focus:outline-slate-600 focus:ring-slate-600 sm:text-sm sm:leading-6">
                                <label for="remember_me">Remember me</label>
                        </div>
                    </div>
    
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-slate-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-emerald-800 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-slate-600">Login</button>
                    </div>
                </form>
                {{-- Signin form ends here --}}
    
                {{-- Redirection to signup form here --}}
                <p class="mt-10 text-center text-sm text-gray-500">
                    Not a member?
                    <a href="{{route('register')}}" class="font-semibold leading-6 text-slate-800 hover:text-indigo-500">Register</a>
                </p>
            </div>
        </div>
    </div>
    <x-notify::notify />
    @notifyJs
</body>

</html>