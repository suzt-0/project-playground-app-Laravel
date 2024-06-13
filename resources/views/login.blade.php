@vite('resources/css/app.css')
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
            <a href="{{route('home')}}" class="mr-5 hover:text-gray-900 hover:underline hover:decoration-gray-900">Home</a>
            <a href="#" class="mr-5 hover:text-gray-900 hover:underline hover:decoration-gray-900">About</a>
            <a href="#" class="mr-5 hover:text-gray-900 hover:underline hover:decoration-gray-900">Contacts</a>
            <a href="#" class="mr-5 hover:text-gray-900 hover:underline hover:decoration-gray-900">User Manual</a>
        </nav>
    </div>
</header>
<main class="flex justify-center align-middle mt-20 ">
    <div class="w-full max-w-xl flex flex-col gap-5">
      <h1 class="block text-3xl font-medium leading-6 text-gray-800 p-5">Login</h1>
        <form class="bg-indigo-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
              Username
            </label>
            <input class="bg-white focus:outline-blue-700 focus:shadow-outline border border-blue-500 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"" id="email" type="email" placeholder="Enter your email">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
              Password
            </label>
            <input class="bg-white   focus:outline-blue-700 focus:shadow-outline border border-blue-500 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" id="password" type="password" placeholder="Enter Your Password">
            <p class="text-red-500 text-xs italic">Please choose a password.</p>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              Sign In
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
              Forgot Password?
            </a>
          </div>
        </form>
      </div>
</main>