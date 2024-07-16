<header class="text-gray-700 w-full ">
    <div class="container border-b border-gray-300 flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="{{route('home')}}"">
        <svg width="40px" height="40px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="SVGRepo_iconCarrier">
              <g id="Combined-Shape" fill="#3949AB"   transform="translate(64.000000, 34.346667)">
                <path
                  d="M192,-7.10542736e-15 L384,110.851252 L384,242.986 L341.333,242.986 L341.333,157.655 L213.333,231.555 L213.333,431.088 L192,443.405007 L0,332.553755 L0,110.851252 L192,-7.10542736e-15 Z M341.333333,264.32 L341.333,328.32 L405.333333,328.32 L405.333333,370.986667 L341.333,370.986 L341.333333,434.986667 L298.666667,434.986667 L298.666,370.986 L234.666667,370.986667 L234.666667,328.32 L298.666,328.32 L298.666667,264.32 L341.333333,264.32 Z M42.666,157.654 L42.6666667,307.920144 L170.666,381.82 L170.666,231.555 L42.666,157.654 Z M192,49.267223 L66.1333333,121.936377 L192,194.605531 L317.866667,121.936377 L192,49.267223 Z">
                </path>
              </g>
            </g>
        </svg>
        <span class="ml-3 text-gray-700 text-2xl">Project Management System</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center p-1">
        <a href="{{route('dashboard')}}"
          class="mr-4 p-2  hover:text-gray-900 hover:underline hover:decoration-gray-900 ">Dashboard</a>
        <a href="{{route('home')}}"
          class="mr-4 p-2  hover:text-gray-900 hover:underline hover:decoration-gray-900">About</a>
        <a href="{{route('home')}}"
          class="mr-4 p-2  hover:text-gray-900 hover:underline hover:decoration-gray-900">Contacts</a>
        {{-- <button
          class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
          <span class="sr-only">Notifications</span>
          <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
          <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button> --}}
        <form action="{{ route('logout') }}" method="post">@csrf
          {{-- <span class="">Log out</span> --}}
          <button  type="submit"
            class=" text-gray-400  hover:text-rose-600 focus:bg-gray-100 focus:text-gray-600 rounded">
            <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
          </button>
        </form>
      </nav>
    </div>
  </header>