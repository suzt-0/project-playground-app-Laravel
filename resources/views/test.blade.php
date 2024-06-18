<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Testing purpposes only</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
  {{-- trying to create a navbar component for dashboard --}}
  <header class="text-gray-700 body-font border-b border-gray-200">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">

      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="{{route('home')}}"">
            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
        stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
        viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Project Management System</span>
      </a>

      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center p-1">
        <a href="{{route('home')}}"
          class="mr-5 p-1 hover:text-gray-900 hover:underline hover:decoration-gray-900">Home</a>
        <a href="#" class="mr-5 p-1 hover:text-gray-900 hover:underline hover:decoration-gray-900">About</a>
        <a href="#" class="mr-5 p-1 hover:text-gray-900 hover:underline hover:decoration-gray-900">Contacts</a>
        <a href="#" class="mr-5 p-1 hover:text-gray-900 hover:underline hover:decoration-gray-900">User Manual</a>

        <button
          class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
          <span class="sr-only">Notifications</span>
          <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
          <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button>

        <button
          class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
          <span class="sr-only">Log out</span>
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
          </svg>
        </button>

      </nav>
    </div>
    {{--Search bar--}}

    {{-- <div class="w-80">
      <svg aria-hidden="true" viewbox="0 0 20 20" fill="currentColor"
        class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
        <path fill-rule="evenodd"
          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
          clip-rule="evenodd" />
      </svg>
      <input type="text" role="search" placeholder="Search..."
        class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
    </div>
  </header> --}}

  {{-- navbar ends here --}}

  <main class="p-6 sm:p-10 space-y-6">
    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
      <div class="mr-6">
        <h1 class="text-5xl text-gray-900 font-semibold mb-2.5">Dashboard</h1>
        <h2 class=" text-2xl text-gray-900 font-semibold ml-2">Sujit Bhattarai</h2>
      </div>
      <div class="flex flex-wrap items-start justify-end -mb-3">
        <button
          class="inline-flex px-5 py-3 text-indigo-600 hover:text-indigo-700 focus:text-indigo-700 hover:bg-indigo-100 focus:bg-indigo-100 border border-indigo-600 rounded-md mb-3">
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor"
            class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
          </svg>
          Join Existing Project
        </button>
        <button
          class="inline-flex px-5 py-3 text-white bg-indigo-600 hover:bg-indigo-700 focus:bg-indigo-700 rounded-md ml-6 mb-3">
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor"
            class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg>
          Create new project
        </button>
      </div>
    </div>
    <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
      <div class="flex items-center p-8 bg-white shadow rounded-lg">
        <div
          class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-indigo-600 bg-blue-100 rounded-full mr-6">
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <circle xmlns="http://www.w3.org/2000/svg" cx="12" cy="7" r="4" stroke-width="2" stroke-linecap="round" />
            <path xmlns="http://www.w3.org/2000/svg"
              d="M5.33788 18.3206C5.99897 15.5269 8.77173 14 11.6426 14H12.3574C15.2283 14 18.001 15.5269 18.6621 18.3206C18.79 18.8611 18.8917 19.4268 18.9489 20.0016C19.0036 20.5512 18.5523 21 18 21H6C5.44772 21 4.99642 20.5512 5.0511 20.0016C5.1083 19.4268 5.20997 18.8611 5.33788 18.3206Z"
              stroke-width="2" stroke-linecap="round" />
          </svg>
        </div>
        <div>
          <span class="block text-2xl font-bold">22</span>
          <span class="block text-gray-600">My Projects</span>
        </div>
      </div>
      <div class="flex items-center p-8 bg-white shadow rounded-lg">
        <div
          class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>
        <div>
          <span class="block text-2xl font-bold">20</span>
          <span class="block text-gray-500">Joined Projects</span>
        </div>
      </div>
      <div class="flex items-center p-8 bg-white shadow rounded-lg">
        <div
          class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
          {{-- <svg fill="#000000" width="800px" height="800px" viewBox="0 0 1920 1920"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M960 1807.059c-467.125 0-847.059-379.934-847.059-847.059 0-467.125 379.934-847.059 847.059-847.059 467.125 0 847.059 379.934 847.059 847.059 0 467.125-379.934 847.059-847.059 847.059M960 0C430.645 0 0 430.645 0 960s430.645 960 960 960 960-430.645 960-960S1489.355 0 960 0M854.344 1157.975 583.059 886.69l-79.85 79.85 351.135 351.133L1454.4 717.617l-79.85-79.85-520.206 520.208Z"
              fill-rule="evenodd" />
          </svg> --}}

          {{-- <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path d="M11 19.5H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M11 12.5H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M11 5.5H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M3 5.5L4 6.5L7 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M3 12.5L4 13.5L7 10.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M3 19.5L4 20.5L7 17.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg> --}}

          <svg width="800px" height="800px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.5 12.5L10.167 17L19.5 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>

        </div>
        <div>
          <span class="block text-2xl font-bold">30</span>
          <span class="block text-gray-500">Completed Projects</span>
        </div>
      </div>

      {{-- <div class="flex items-center p-8 bg-white shadow rounded-lg">
        <div
          class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
          </svg>
        </div>

        <div>
          <span class="inline-block text-2xl font-bold">4</span>
          <span class="inline-block text-xl text-gray-500 font-semibold">(40%)</span>
          <span class="block text-gray-500"></span>
        </div>
      </div> --}}
      <div class="flex items-center p-8 bg-white shadow rounded-lg">
        <div
          class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
          <svg width="800px" height="800px" fill="currentColor" stroke="currentColor" viewBox="0 0 48 48"
            xmlns="http://www.w3.org/2000/svg">
            {{-- <title>stop-warning</title>
            <g id="Layer_2" data-name="Layer 2">
              <g id="invisible_box" data-name="invisible box">
                <rect width="48" height="48" fill="none" />
              </g>
              <g id="icons_Q2" data-name="icons Q2">
                <g> --}}
                  {{--
                  <path
                    d="M43.4,15.1,32.9,4.6A2,2,0,0,0,31.5,4h-15a2,2,0,0,0-1.4.6L4.6,15.1A2,2,0,0,0,4,16.5v15a2,2,0,0,0,.6,1.4L15.1,43.4a2,2,0,0,0,1.4.6h15a2,2,0,0,0,1.4-.6L43.4,32.9a2,2,0,0,0,.6-1.4v-15A2,2,0,0,0,43.4,15.1ZM40,30.6,30.6,40H17.4L8,30.6V17.4L17.4,8H30.6L40,17.4Z" />
                  --}}
                  <path
                    d="M26.8,24l5.6-5.6a2,2,0,0,0-2.8-2.8L24,21.2l-5.6-5.6a2,2,0,0,0-2.8,2.8L21.2,24l-5.6,5.6a1.9,1.9,0,0,0,0,2.8,1.9,1.9,0,0,0,2.8,0L24,26.8l5.6,5.6a1.9,1.9,0,0,0,2.8,0,1.9,1.9,0,0,0,0-2.8Z" />
                  {{--
                </g>
              </g>
            </g> --}}
          </svg>

        </div>
        <div>
          <span class="block text-2xl font-bold">10</span>
          <span class="block text-gray-500">Failed Projects</span>
        </div>
      </div>
    </section>
    <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6">
      <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">
        <div class="px-6 py-5 font-semibold border-b border-gray-100">Notes for self</div>
        <div class="p-4 flex-grow">
          <div
            class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
            Things to do</div>
        </div>
      </div>
      <div class="flex items-center p-8 bg-white shadow rounded-lg">
        <div
          class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
            <path fill="#fff"
              d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
          </svg>
        </div>
        <div>
          <span class="block text-2xl font-bold">15</span>
          <span class="block text-gray-500">Lessons left for this week</span>
        </div>
      </div>
      <div class="flex items-center p-8 bg-white shadow rounded-lg">
        <div
          class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <div>
          <span class="block text-2xl font-bold">{ time left } </span>
          <span class="block text-gray-500">Time left for nearest deadline</span>
        </div>
      </div>
      <div class="row-span-3 bg-white shadow rounded-lg">
        <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
          <span>Tasks to do</span>
          <button type="button"
            class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600"
            id="options-menu" aria-haspopup="true" aria-expanded="true">
            Descending
            <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
        </div>
        <div class="overflow-y-auto" style="max-height: 24rem;">
          <ul class="p-6 space-y-6">
            <li class="flex items-center">
              <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/512/25/25252.png" alt="Annette Watson profile picture">
              </div>
              <span class="text-gray-600">Introduction To HTML</span>
              <span class="ml-auto font-semibold">9.3</span>
            </li>
            <li class="flex items-center">
              <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/128/888/888847.png" alt="Calvin Steward profile picture">
              </div>
              <span class="text-gray-600">Introduction To CSS</span>
              <span class="ml-auto font-semibold">8.9</span>
            </li>
            <li class="flex items-center">
              <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/128/888/888847.png" alt="Ralph Richards profile picture">
              </div>
              <span class="text-gray-600">CSS Flexbox & Grid</span>
              <span class="ml-auto font-semibold">8.7</span>
            </li>
            <li class="flex items-center">
              <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/128/5968/5968292.png" alt="Bernard Murphy profile picture">
              </div>
              <span class="text-gray-600">Introduction To Javascript</span>
              <span class="ml-auto font-semibold">8.2</span>
            </li>
            <li class="flex items-center">
              <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/128/5968/5968292.png"
                  alt="Arlene Robertson profile picture">
              </div>
              <span class="text-gray-600">Javascript 2</span>
              <span class="ml-auto font-semibold">8.2</span>
            </li>
            <li class="flex items-center">
              <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                <img
                  src="https://cdn-icons.flaticon.com/png/128/4908/premium/4908200.png?token=exp=1655149979~hmac=a537e2c99e97f1b4957aa6cb708874bd"
                  alt="Jane Lane profile picture">
              </div>
              <span class="text-gray-600">Introduction To Git</span>
              <span class="ml-auto font-semibold">8.1</span>
            </li>
            <li class="flex items-center">
              <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                <img
                  src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.79614a5f61617ba49a0891494521226b.svg"
                  alt="Pat Mckinney profile picture">
              </div>
              <span class="text-gray-600">Tailwind CSS</span>
              <span class="ml-auto font-semibold">7.9</span>
            </li>
            <li class="flex items-center">
              <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/128/5968/5968672.png" alt="Norman Walters profile picture">
              </div>
              <span class="text-gray-600">Bootstrap</span>
              <span class="ml-auto font-semibold">7.7</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="flex flex-col row-span-3 bg-white shadow rounded-lg">
        <div class="px-6 py-5 font-semibold border-b border-gray-100">Your Aim Of Getting Into Tech</div>
        <div class="p-4 flex-grow">
          <div
            class="flex items-center justify-center h-full px-4 py-24 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
            To be a front end developer<br>To be a cloud engineer</div>
        </div>
      </div>
      {{-- try to create a footer component --}}

      {{--
    </section>
    <section class="text-right font-semibold text-gray-500">
      <a href="#" class="text-purple-600 hover:underline">Recreated by Mozia Precious Chibundu &#10083;</a> with <a
        href="https://tailwindcss.com/" class="text-teal-400 hover:underline">Tailwind CSS</a>

    </section> --}}
  </main>
  </div>
</body>

</html>