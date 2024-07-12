<!DOCTYPE html>
<html lang="en" class="bg-gray-100">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Project-Playground</title>
  @vite('resources/css/app.css')
  @vite('resources/css/dashboard.css')
</head>

<body>

  @include('components.navbar')
  {{-- navbar ends here --}}

  <main class=" p-5 space-y-4">
    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row justify-between">
      <div class="mr-6">
        {{-- <h1 class="text-5xl text-gray-900 font-semibold mb-1.5">{{ Auth::user()->name}}</h1> --}}
        <h1 class="text-5xl first-letter:capitalize text-gray-900 font-semibold mb-1.5">{{ Auth::user()->name }}</h1>
      </div>
      <div class="flex flex-wrap items-start justify-end -mb-3">
        <a href="{{route('joinProjects.create')}}"
          class="inline-flex px-5 py-3 text-slate-600 hover:bg-slate-600 hover:text-slate-200 border border-slate-600 hover:scale-105 rounded-md mb-3">
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor"
            class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
          </svg>
          Join Existing Project
        </a>
        <a href="{{route('projects.create')}}"
          class="inline-flex px-5 py-3 text-slate-50 bg-slate-600 hover:bg-inherit hover:text-slate-600 border border-slate-600 hover:scale-105 rounded-md ml-6 mb-3">
          <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor"
            class="flex-shrink-0 h-6 w-6 text-inherit -ml-1 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg>
          Create new project
        </a>
      </div>
    </div>
    <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
      {{-- My projects --}}
      <a href="{{route('projects.index')}}">
        <div
          class="flex items-center p-8 bg-slate-300 hover:bg-slate-200 border border-slate-200 hover:border hover:border-slate-700 rounded-lg">
          <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-slate-600 bg-slate-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <circle xmlns="http://www.w3.org/2000/svg" cx="12" cy="7" r="4" stroke-width="2" stroke-linecap="round" />
              <path xmlns="http://www.w3.org/2000/svg"
                d="M5.33788 18.3206C5.99897 15.5269 8.77173 14 11.6426 14H12.3574C15.2283 14 18.001 15.5269 18.6621 18.3206C18.79 18.8611 18.8917 19.4268 18.9489 20.0016C19.0036 20.5512 18.5523 21 18 21H6C5.44772 21 4.99642 20.5512 5.0511 20.0016C5.1083 19.4268 5.20997 18.8611 5.33788 18.3206Z"
                stroke-width="2" stroke-linecap="round" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">{{ $myProject }}</span>
            <span class="block text-gray-600">My Projects</span>
          </div>
        </div>
      </a>

      {{-- Join Projetcs --}}
      <a href="{{route('projects.joined')}}">
        <div
          class="flex items-center p-8 bg-slate-300 hover:bg-slate-200 border border-slate-200 hover:border hover:border-slate-700  rounded-lg">
          <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-slate-600 bg-slate-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">{{$joinedProject}}</span>
            <span class="block text-gray-500">Joined Projects</span>
          </div>
        </div>
      </a>

      {{-- Completed Projects --}}
      <a href="{{route('projects.completed')}}">
        <div
          class="flex items-center p-8 bg-slate-300 hover:bg-slate-200 border border-slate-200 hover:border hover:border-slate-700 rounded-lg">
          <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-slate-600 bg-slate-100 rounded-full mr-6">
            <svg width="50px" height="50px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.5 12.5L10.167 17L19.5 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>

          </div>
          <div>
            <span class="block text-2xl font-bold">{{$completedProject}}</span>
            <span class="block text-gray-500">Completed Projects</span>
          </div>
        </div>
      </a>

      {{-- Failed Projects --}}
      <a href="{{route('projects.failed')}}">
        <div
          class="flex items-center p-8 bg-slate-300 hover:bg-slate-200 border border-slate-200 hover:border hover:border-slate-700 rounded-lg">
          <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-slate-600 bg-slate-100 rounded-full mr-6">
            <svg width="50px" height="50px" fill="currentColor" stroke="currentColor" viewBox="0 0 48 48"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M26.8,24l5.6-5.6a2,2,0,0,0-2.8-2.8L24,21.2l-5.6-5.6a2,2,0,0,0-2.8,2.8L21.2,24l-5.6,5.6a1.9,1.9,0,0,0,0,2.8,1.9,1.9,0,0,0,2.8,0L24,26.8l5.6,5.6a1.9,1.9,0,0,0,2.8,0,1.9,1.9,0,0,0,0-2.8Z" />
            </svg>

          </div>
          <div>
            <span class="block text-2xl font-bold">{{$failedProject}}</span>
            <span class="block text-gray-500">Failed Projects</span>
          </div>
        </div>
      </a>

    </section>
    <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 xl:grid-rows-1 xl:grid-flow-col gap-2">
      {{-- task list card --}}
      <div class="row-span-3 col-span-2  bg-white shadow rounded-lg">
        <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
          <span>Tasks to do</span>


        </div>
        <div class="grid gap-4 mx-1 py-3 h-fit cursor-all-scroll">
         
          @foreach ($tasks as $task)

          {{-- <a href="{{route(" view-task")}}"> --}}
          <a href="">
            <div
              class="rounded-lg  border-2 shadow-lg cursor-pointer text-slate-700 hover:text-slate-800 hover:border-slate-500 hover:bg-slate-50">
              <div class="flex flex-col space-y-1 p-6">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                  {{ $task->name }}
                </h3>
                <div class="flex items-center gap-2">
                  <div
                    class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                    {{ $task->priority }}
                  </div>
                  <div class="text-sm">
                    Due date: {{ $task->due_date }}
                  </div>
                </div>
              </div>
            </div>
          </a>
          @endforeach

          {{-- <a href="{{route(" view-task")}}"> --}}
          {{-- <a href="">
            <div
              class="rounded-lg  border-2 shadow-lg cursor-pointer text-slate-700 hover:text-slate-800 hover:border-slate-500 hover:bg-slate-50">
              <div class="flex flex-col space-y-1 p-6">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                  Task name
                </h3>
                <div class="flex items-center gap-2">
                  <div
                    class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                    Task Status
                  </div>
                  <div class="text-sm">
                    Due date: {data} days left
                  </div>
                </div>
              </div>
            </div>
          </a> --}}
        </div>
      </div>
      {{-- Quote card --}}
      <div class=" row-span-3 col-span-1 md:col-span-2 ">
        <div class=" bg-white shadow rounded-lg">
          <div class="px-6 py-5 font-semibold font-mono text-2xl border-b border-gray-100">
            Quote of the day
          </div>
          <div class="p-4 flex-grow">
            <div
              class="flex items-center justify-center h-full px-4 py-24 text-gray-200 text-xl font-semibold bg-gray-700 border-2 border-gray-200 border-dotted rounded-md">
              {{ strip_tags(\Illuminate\Foundation\Inspiring::quote()) }}
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('components.footer')
  </main>
  </div>
</body>

</html>