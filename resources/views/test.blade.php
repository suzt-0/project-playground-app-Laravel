<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing purposes only</title>
    @vite('resources/css/dashboard.css')
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    {{-- navbar starts here --}}
    <header class="text-gray-700 body-font border-b border-gray-200">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="#" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Project Management System</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center p-1">
                <a href="{{route('home')}}"
                    class="mr-5 hover:text-gray-900 hover:underline hover:decoration-gray-900">Home</a>
                <a href="#" class="mr-5 p-1 hover:text-gray-900 hover:underline hover:decoration-gray-900">About</a>
                <a href="#" class="mr-5 p-1 hover:text-gray-900 hover:underline hover:decoration-gray-900">Contacts</a>
                <a href="#" class="mr-5 p-1 hover:text-gray-900 hover:underline hover:decoration-gray-900">User
                    Manual</a>
            </nav>
        </div>
    </header>
    {{-- navbar ends here--}}

    {{-- Contains main body --}}
    <div class=" flex min-h-full flex-col justify-start px-6 py-12 lg:px-8">
        {{-- Sign in text --}}
        <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
            <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Sign in to your
                account</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- Signin form starts here --}}
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-indigo-400 placeholder:text-gray-400 focus:outline-indigo-600 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-indigo-400 placeholder:text-gray-400 focus:outline-indigo-600 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            </form>
            {{-- Signin form ends here --}}

            {{-- Redirection to signup form here --}}
            <p class="mt-10 text-center text-sm text-gray-500">
                Not a member?
                <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Get Started!!</a>
            </p>
        </div>
    </div>

</body>

</html>