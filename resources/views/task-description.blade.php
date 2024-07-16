<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TEST-Project Description</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
  {{-- navbar starts --}}
  @include('components.navbar')
  {{-- navbar ends --}}
  @if ($errors->any())
  <div>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if (session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif

  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <main class="flex-1 flex flex-col text-slate-700 gap-4 p-4 md:gap-8 md:p-10">
    {{-- back links --}}
    <div>
      dashboard/
      {{$task->project->name}}/
      {{$task->name}}/..
    </div>

    <div class="w-full grid md:grid-cols-3 gap-8">
      {{-- Task Card Starts --}}
      <div class="rounded-lg border md:col-span-2 bg-slate-50 shadow-sm">
        <div class="flex flex-col space-y-1.5 p-5">
          <h3 class="whitespace-nowrap text-3xl font-semibold leading-none tracking-tight">{{$task->name}}
        </div>
        <div class="p-6 grid gap-4">
          <div class="grid md:grid-cols-1 gap-4">
            <div class="grid-cols-1">
              <div class="text-xl font-medium">Description</div>
              <div class="text-base rounded p-2 border h-56 overflow-y-auto">{{$task->description}}</div>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <div class="text-sm font-medium">Start Date</div>
              <div class="text-base">{{$task->start_date}}</div>
            </div>
            <div>
              <div class="text-sm font-medium">Due Date</div>
              <div class="text-base">{{$task->due_date}}</div>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <div class="text-sm font-medium">Status
              </div>
              <div class="text-base">
                <div
                  class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2  bg-secondary text-secondary-foreground hover:bg-secondary/80"
                  data-v0-t="badge"> {{$task->status}}
                </div>
              </div>
            </div>
            <div>
              <div class="text-sm font-medium">Priority</div>

              <div class="text-base">
                <div
                  class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2  bg-secondary text-secondary-foreground hover:bg-secondary/80"
                  data-v0-t="badge"> {{$task->priority}}</div>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <div class="text-sm font-medium">Assigned to</div>
              <div class="text-base">
                @if ($task->user)
                <div
                  class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 first-letter:capitalize">
                  {{ $task->user->name }}</div>
                @else
                <div
                  class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 first-letter:capitalize">
                  Not assigned</div>
                @endif
              </div>
            </div>
            <div>
              <div class="items-center p-3 flex justify-end">
                <a href="{{ route('tasks.edit', $task->id) }}"
                  class="border p-1 border-slate-300 bg-slate-200 hover:bg-slate-700 hover:text-slate-200 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                  <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.56078 20.2501L20.5608 8.25011L15.7501 3.43945L3.75012 15.4395V20.2501H8.56078ZM15.7501 5.56077L18.4395 8.25011L16.5001 10.1895L13.8108 7.50013L15.7501 5.56077ZM12.7501 8.56079L15.4395 11.2501L7.93946 18.7501H5.25012L5.25012 16.0608L12.7501 8.56079Z"
                        fill="currentcolor"></path>
                    </g>
                  </svg>
                  Edit
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Task Card Ends Here --}}

      {{-- comment section starts here --}}
      <div class="grid grid-rows-2 gap-y-2 ">
        
        {{-- suggestions here --}}
        <div class="rounded-lg border bg-slate-50">
          <div class="flex flex-col space-y-1.5 p-5">
            <h3 class="whitespace-nowrap text-3xl font-semibold leading-none tracking-tight">Suggestions
          </div>
        </div>

        {{-- issues here --}}
        <div class="rounded-lg border bg-slate-50">
          <div class="flex flex-col space-y-1.5 p-5">
            <h3 class="whitespace-nowrap text-3xl font-semibold leading-none tracking-tight">Issues
          </div>
        </div>
      </div>
      {{-- comment section ends here --}}

    </div>


  </main>

  {{-- footer starts --}}
  @include('components.footer')
  {{-- footer ends --}}

</body>

</html>