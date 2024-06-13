<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Project-Playground</title>
    @vite('resources/css/app.css')
    @vite('resources/css/dashboard.css')
</head>

<body>
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
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                {{-- added a underline upon a hover --}}
                <a href="#" class="mr-5 hover:text-gray-900 hover:underline hover:decoration-gray-900">About</a>
                <a href="#" class="mr-5 hover:text-gray-900 hover:underline hover:decoration-gray-900">Contacts</a>
                <a href="#" class="mr-5 hover:text-gray-900 hover:underline hover:decoration-gray-900">User Manual</a>
            </nav>
        </div>
    </header>


    <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 flex-col md:flex-row items-center">

            <div class="flex flex-col mb-16 items-center text-center md:w-1/2 md:pr-16 md:items-start md:text-left md:mb-0 lg:flex-grow">

                <h1 class="title-font text-3xl mb-4 font-medium text-gray-900 sm:text-4xl ">Project
                    <br class="hidden lg:inline-block">
                    Management System 
                </h1>
               {{-- Tried adding a typing animations --}}
                   <h2><q class="mb-8 leading-relaxed p-0 m-0 typewriter max-w-fit ">Manage your Projects more efficiently with Project Management System</q></h2>
                <div class="flex justify-center">

                    <a href="{{route('signup')}}">
                        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 rounded text-lg focus:outline-none hover:bg-indigo-600">
                            Signup
                        </button>
                        </a>

                    <a href="{{route('login')}}">
                        <button class="ml-4 inline-flex text-gray-800 bg-gray-300 border-0 py-2 px-6 rounded text-lg focus:outline-none hover:bg-gray-400 hover:text-gray-900">
                            Login
                        </button>
                    </a>
                    
                </div>
            </div>

            <div class="w-5/6 md:w-1/2 lg:w-full lg:max-w-lg">
                <img class="object-cover object-center rounded" src="https://dummyimage.com/720x600/edf2f7/a5afbd">
            </div>
        </div>
    </section>
</body>

</html>