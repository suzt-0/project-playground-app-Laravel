<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Started</title>
    @notifyCss
    @vite('resources/css/app.css')
</head>

<body class="bg-emerald-50 text-slate-800 ">
    {{-- navbar starts here --}}
    @include('components.navbar-basic')
    {{-- navbar ends here--}}

    {{-- Contains main body --}}
    <div class=" flex min-h-full flex-col justify-start px-6 py-12 lg:px-8">
        {{-- Register text --}}
        <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
            <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight">
               Register Your Account</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- Register form starts here --}}

            <form class="space-y-6" action="{{route('register')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div>
                    <label for="userName" class="block text-sm font-medium leading-6">User Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" required
                            class="block w-full rounded-md border-0 py-2 px-3 shadow-sm ring-1 ring-inset ring-slate-400 placeholder:text-gray-400 focus:outline-slate-600 focus:ring-slate-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" required
                            class="block w-full rounded-md border-0 py-2 px-3 shadow-sm ring-1 ring-inset ring-slate-400 placeholder:text-gray-400 focus:outline-slate-600 focus:ring-slate-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6">Password</label>

                        {{-- <div class="text-sm">
                            <p class="italic font-semibold text-gray-600" >Minimum 8 characters</p>
                        </div> --}}
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-2 px-3  shadow-sm ring-1 ring-inset ring-slate-400 placeholder:text-gray-400 focus:outline-slate-600 focus:ring-slate-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6">Cofirm Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password_confirmation" type="password"required
                            class="block w-full rounded-md border-0 py-2 px-3  shadow-sm ring-1 ring-inset ring-slate-400 placeholder:text-gray-400 focus:outline-slate-600 focus:ring-slate-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-slate-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500">Register</button>
                </div>
            </form>
            {{-- Register form ends here --}}

            {{-- Redirection to Login form here --}}
            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account?
                <a href="{{route('login')}}" class="font-semibold leading-6 text-slate-600 hover:text-emerald-600">Login</a>
            </p>
        </div>
    </div>
<x-notify::notify />
  @notifyJs
</body>

</html>