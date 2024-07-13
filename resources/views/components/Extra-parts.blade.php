<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>

@vite('resources/css/app.css')


{{-- <div class="grid gap-4" data-id="39">
  <div data-id="40">
    <div class="flex items-center justify-between" data-id="41">
      <h3 class="text-lg font-medium" data-id="42">Tasks</h3>
      <button
        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3"
        data-id="43">Add Task</button>
    </div>
    <div class="mt-2 space-y-2" data-id="44">
      <div class="flex items-center justify-between rounded-md bg-muted/40 px-4 py-2" data-id="45">
        <div data-id="46">
          <h4 class="font-medium" data-id="47">Finalize marketing materials</h4>
          <p class="text-sm " data-id="48">Due date: 05/15/2023</p>
        </div>
        <button
          class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
          data-id="49">Edit</button>
      </div>
      <div class="flex items-center justify-between rounded-md bg-muted/40 px-4 py-2" data-id="50">
        <div data-id="51">
          <h4 class="font-medium" data-id="52">Schedule social media posts</h4>
          <p class="text-sm " data-id="53">Due date: 05/20/2023</p>
        </div>
        <button
          class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
          data-id="54">Edit</button>
      </div>
    </div>
  </div>
  <div data-id="55">
    <div class="flex items-center justify-between" data-id="56">
      <h3 class="text-lg font-medium" data-id="57">Members</h3>
      <button
        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3"
        data-id="58">Add Member</button>
    </div>
    <div class="mt-2 space-y-2" data-id="59">
      <div class="flex items-center justify-between rounded-md bg-muted/40 px-4 py-2" data-id="60">
        <div class="flex items-center gap-2" data-id="61">
          <span class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full" data-id="62">
            <img class="aspect-square h-full w-full" data-id="63" src="/placeholder-user.jpg">
          </span>
          <div data-id="65">
            <h4 class="font-medium" data-id="66">John Doe</h4>
            <p class="text-sm " data-id="67">Project Manager</p>
          </div>
        </div>
        <button
          class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
          data-id="68">
          <svg data-id="69" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
            <path d="M18 6 6 18">

            </path>
            <path d="m6 6 12 12">

            </path>
          </svg>
          <span class="sr-only" data-id="70">Remove</span>
        </button>
      </div>
      <div class="flex items-center justify-between rounded-md bg-muted/40 px-4 py-2" data-id="71">
        <div class="flex items-center gap-2" data-id="72">
          <span class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full" data-id="73">
            <img class="aspect-square h-full w-full" data-id="74" src="/placeholder-user.jpg">
          </span>
          <div data-id="76">
            <h4 class="font-medium" data-id="77">Jane Doe</h4>
            <p class="text-sm " data-id="78">Designer</p>
          </div>
        </div>
        <button
          class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
          data-id="79">
          <svg data-id="80" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
            <path d="M18 6 6 18">

            </path>
            <path d="m6 6 12 12">

            </path>
          </svg>
          <span class="sr-only" data-id="81">Remove</span>
        </button>
      </div>
    </div>
  </div>
</div> --}}

{{-- member list --}}
<div class="p-6 grid gap-4">
  <div class="grid border rounded p-3 gap-4  h-56 overflow-y-auto">
    <div class="flex items-center gap-4">
      <div class="grid gap-1">
        <div class="font-medium">John Doe</div>
        <div class="text-sm text-muted-foreground">Project Manager</div>
      </div>
    </div>
    <div class="flex items-center gap-4">
      <div class="grid gap-1">
        <div class="font-medium">John Doe</div>
        <div class="text-sm text-muted-foreground">Project Manager</div>
      </div>
    </div>
    <div class="flex items-center gap-4">
      <div class="grid gap-1">
        <div class="font-medium">John Doe</div>
        <div class="text-sm text-muted-foreground">Project Manager</div>
      </div>
    </div>
    <div class="flex items-center gap-4">
      <div class="grid gap-1">
        <div class="font-medium">John Doe</div>
        <div class="text-sm text-muted-foreground">Project Manager</div>
      </div>
    </div>
    <div class="flex items-center gap-4">
      <div class="grid gap-1">
        <div class="font-medium">John Doe</div>
        <div class="text-sm text-muted-foreground">Project Manager</div>
      </div>
    </div>
    <div class="flex items-center gap-4">
      <div class="grid gap-1">
        <div class="font-medium">John Doe</div>
        <div class="text-sm text-muted-foreground">Project Manager</div>
      </div>
    </div>
  </div>
</div>
{{-- image  --}}
 <span class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full">
                <img class="aspect-square h-full w-full" src="/placeholder-user.jpg">
              </span>
{{-- progress Bar  --}}
   <div class=" flex items-center gap-2">
            <div aria-valuemax="100" aria-valuemin="0" role="progressbar" data-state="indeterminate" data-max="100"
              class="relative h-2 w-full overflow-hidden rounded-full bg-slate-900 flex-1">
              <div data-state="indeterminate" data-max="100" class="h-full w-full flex-1 bg-slate-300 transition-all"
                style="transform: translateX(75%);">
              </div>
            </div>
            <div class="text-base">75%</div>
        </div>

  {{-- toggle menue --}}
 <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 text-right"><button
                      class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10"
                      aria-haspopup="true" type="button" id="radix-:re:" aria-expanded="false" data-state="closed">
                      <svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-4 h-4">
                        <polyline points="18 8 22 12 18 16"></polyline>
                        <polyline points="6 8 2 12 6 16"></polyline>
                        <line x1="2" x2="22" y1="12" y2="12"></line>
                        </svg><span class="sr-only">Toggle menu</span>
                    </button></td>
                </tr>

  {{-- button --}}
  <div class="items-center p-6 flex justify-end">
    <button type="submit"
      class="border border-slate-300 bg-slate-200 hover:bg-slate-700 hover:text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
      <svg data-id="30" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="w-4 h-4 mr-2">
        <path d="M5 12h14"></path>
        <path d="M12 5v14"></path>
      </svg>
      Join Project
    </button>
  </div>

{{-- Progress Bar  --}}
<div class="flex items-center gap-2" data-id="38">
  <div aria-valuemax="100" aria-valuemin="0" role="progressbar" data-state="indeterminate" data-max="100"
    class="relative h-2 w-full overflow-hidden rounded-full bg-slate-900 flex-1" data-id="39">
    <div data-state="indeterminate" data-max="100" class="h-full w-full flex-1 bg-slate-300 transition-all"
      style="transform: translateX(75%);"></div>
  </div>
  <div class="text-base" data-id="40">75%</div>
</div>

   {{-- Search bar --}}
    <div class="w-80 ">
      <svg aria-hidden="true" viewbox="0 0 20 20" fill="currentColor"
        class="absolute h-6 w-6 mt-2.5 ml-2  text-gray-400">
        <path fill-rule="evenodd"
          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
          clip-rule="evenodd" />
      </svg>
      <input type="text" role="search" placeholder="Search..."
        class="py-2 pl-10 pr-4 w-full border-4 border-transparent bg-slate-100 placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
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

{{-- a dropdown menu here --}}
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



 {{-- <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
              <div class="space-y-1">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Website Redesign</h3>
                <p class="text-sm text-muted-foreground">Redesign the company website.</p>
              </div>
              <div class="flex items-center gap-2">
                <div class="bg-green-500 text-green-50 px-2 py-1 rounded-md text-xs font-medium">In Progress</div>
                <div class="text-muted-foreground text-sm">Due: June 30, 2023</div>
              </div>
            </div>
            <div class="p-6">
              <p>
                The website redesign project aims to modernize the company's online presence and improve user
                experience.
              </p>
            </div>
            <div class="items-center p-6 flex justify-end">
              <button
                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                View Details
              </button>
            </div>
          </div>
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
              <div class="space-y-1">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                  Mobile App Development
                </h3>
                <p class="text-sm text-muted-foreground">Build a mobile app for our customers.</p>
              </div>
              <div class="flex items-center gap-2">
                <div class="bg-yellow-500 text-yellow-50 px-2 py-1 rounded-md text-xs font-medium">On Hold</div>
                <div class="text-muted-foreground text-sm">Due: August 15, 2023</div>
              </div>
            </div>
            <div class="p-6">
              <p>
                The mobile app development project will provide our customers with a convenient way to access our
                services on the go.
              </p>
            </div>
            <div class="items-center p-6 flex justify-end">
              <button
                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                View Details
              </button>
            </div>
          </div>
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
              <div class="space-y-1">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                  CRM System Implementation
                </h3>
                <p class="text-sm text-muted-foreground">Implement a new CRM system for the sales team.</p>
              </div>
              <div class="flex items-center gap-2">
                <div class="bg-red-500 text-red-50 px-2 py-1 rounded-md text-xs font-medium">Overdue</div>
                <div class="text-muted-foreground text-sm">Due: May 1, 2023</div>
              </div>
            </div>
            <div class="p-6">
              <p>
                The CRM system implementation project will streamline our sales process and improve customer
                relationship management.
              </p>
            </div>
            <div class="items-center p-6 flex justify-end">
              <button
                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                View Details
              </button>
            </div>
          </div>
        </div> --}}


        {{-- a sampple card non edited version --}}
    {{--
    <div class="mx-auto my-auto">
        <div class="rounded-lg overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.02]">
            <div class="p-6 overflow-hidden">
                <h2 class="text-xl font-bold mb-2">Card Title</h2>
                <p class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                    This is a description of the card content. It can be a few sentences
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet tempore id ut quidem
                    voluptate similique excepturi in? Placeat animi dolor ipsam provident libero. Laboriosam
                    hic, animi voluptate quo earum vero. Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Exercitationem, enim alias. Perspiciatis dolor, illo consequatur aliquam fuga,
                    doloribus accusantium enim earum similique itaque accusamus hic, sunt fugit deleniti
                    deserunt facilis?
                </p>
            </div>
        </div>
    </div>
    --}}

    {{-- Used html/static version of card used --}}
    {{--
    <div class="mx-auto my-auto">
        <div class="rounded-lg w-fit overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.02]">
            <div class="p-6 overflow-hidden">
                <div class="flex flex-col ">
                    <h2 class="text-xl font-bold mb-2">Project Tiltle</h2>
                    <div class="">
                        <div
                            class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold focus:outline-none focus:ring-1 focus:ring-ring focus:ring-offset-1">
                            Task Status
                        </div>
                        <div class="text-sm inline-flex w-fit items-center text-green-700 ">
                            Due:{duedate}
                        </div>
                    </div>
                </div>
                <div class="mt-2 border-2 rounded-xl h-28">
                    <p class="text-gray-600 px-3 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro temporibus error
                        veritatis
                        accusamus,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro temporibus error
                        veritatis
                        accusamus,
                    </p>
                </div>
            </div>
        </div>
    </div>
    --}}
