<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>
   {{-- Search bar --}}
    <div class="w-80">
      <svg aria-hidden="true" viewbox="0 0 20 20" fill="currentColor"
        class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
        <path fill-rule="evenodd"
          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
          clip-rule="evenodd" />
      </svg>
      <input type="text" role="search" placeholder="Search..."
        class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
    </div>


    {{-- A card  --}}

    <div class="flex items-center p-8 bg-white shadow rounded-lg">
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
      </div>
 

      {{-- screen based hidding element --}}
<div class="m-2 border-2 rounded-xl h-28  hidden md:block lg:block">
  <p class="text-3xl">I am a block</p>
  </div>