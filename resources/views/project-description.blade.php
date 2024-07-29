<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TEST-Project Description</title>
  @notifyCss
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
  {{-- navbar starts --}}
  @include('components.navbar')
  {{-- navbar ends --}}
  @if (Auth::user()->id == $project->admin_id)
  <div class="m-1 flex flex-row-reverse">
    {{-- Delete button --}}
    <div class="items-center p-3 flex justify-end">
      <form action="{{route('projects.destroy', $project->id)}}" method="POST">@method('DELETE') @csrf
        <button type="submit"
          class="border p-1 border-slate-300 bg-slate-200 hover:bg-rose-700 hover:text-rose-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
          <svg viewBox="0 0 24 24" width="30" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width=""></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M10 12V17" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              </path>
              <path d="M14 12V17" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              </path>
              <path d="M4 7H20" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              </path>
              <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="currentcolor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="currentcolor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
          </svg>
          Delete
        </button>
      </form>
    </div>
    {{-- Edit button --}}
    <div class="items-center p-3 flex justify-end">
      <a href="{{ route('projects.edit', $project->id) }}"
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
  @endif
  <main class="flex-1 flex flex-col text-slate-700 gap-4 p-5 md:gap-8 md:p-5">
    <div class="max-w-6xl w-full mx-auto grid md:grid-cols-2 gap-8">
      {{-- Project Card Starts --}}
      <div class="rounded-lg border bg-slate-50 shadow-sm">
        <div class="flex flex-col space-y-1.5 p-5">
          <h3 class="whitespace-nowrap text-3xl font-semibold leading-none tracking-tight">{{$project->name}}
        </div>
        <div class="p-6 grid gap-4">
          <div class="grid md:grid-cols-1 gap-4">
            <div class="grid-cols-1">
              <div class="text-xl font-medium">Description</div>
              <div class="text-base rounded p-2 border h-56 overflow-y-auto">{{$project->description}}</div>
            </div>
          </div>
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <div class="text-sm font-medium">Start Date</div>
              <div class="text-base">{{$project->start_date}}</div>
            </div>
            <div>
              <div class="text-sm font-medium">End Date</div>
              <div class="text-base">{{$project->due_date}}</div>
            </div>
          </div>
          <div class="grid md:grid-cols-2 gap-4">
            {{-- Progress bar --}}
            {{-- <div>
              <div class="text-sm font-medium">Progress</div>
              <div class="flex items-center gap-2">
                <div aria-valuemax="100" aria-valuemin="0" role="progressbar" data-state="indeterminate" data-max="100"
                  class="relative h-2 w-full overflow-hidden rounded-full bg-slate-700 flex-1">
                  <div data-state="indeterminate" data-max="100"
                    class="h-full w-full flex-1 bg-slate-300 transition-all" style="transform: translateX(75%);">
                  </div>
                </div>
                <div class="text-base">75%</div>
              </div>
            </div> --}}
            <div>
              <div class="text-sm font-medium">Status</div>

              <div class="text-base">
                <div
                  class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2  bg-secondary text-secondary-foreground hover:bg-secondary/80"
                  data-v0-t="badge"> {{ $project->status }}</div>
              </div>
              {{-- <div
                class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold focus:outline-none focus:ring-1 focus:ring-ring focus:ring-offset-1">
                {{ $project->status }}
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      {{-- Project Card Ends --}}

      {{-- Team Members Card Starts --}}
      <div class="rounded-lg border bg-slate-50 shadow-sm">
        <div class="flex flex-col space-y-1.5 p-6">
          <div class="grid grid-cols-2">
            <div>
              <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Team Members
              </h3>
              <p class="text-sm ">The team working on the project.</p>
            </div>
            <div>
              {{-- Invite button --}}
              @if (Auth::user()->id == $project->admin_id)
              <div class="p-2 flex items-center justify-end">
                <a href="{{ route('mail.invite', $project->id) }}">
                  <button type="submit"
                    class="border border-slate-300 bg-slate-200 hover:bg-green-700 hover:text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                    <svg data-id="30" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="w-4 h-4 mr-2">
                      <path d="M5 12h14"></path>
                      <path d="M12 5v14"></path>
                    </svg>
                    Invite
                  </button>
                </a>
              </div>
              @endif
            </div>
          </div>
          @if (Auth::user()->id == $project->admin_id)
          <p class="text-md italic">
            Share this project id to project members <br>
            {
            <span class="text-sm italic">Project name: {{$project->name}}</span>
            <span class="text-sm italic">Project id: {{$project->id}}</span>
            }
          </p>
          @endif
        </div>
        <div class="p-6 grid gap-4">
          <div class="grid border rounded p-3 gap-4  max-h-80 overflow-y-auto">
            {{-- member list Starts --}}
            @forelse ($members as $member)
            <div class="flex justify-between p-1 items-center gap-4">
              <div class="grid col-span-5 gap-1">
                <div class="font-medium first-letter:capitalize">{{ $member->name }}</div>
                <div class="text-sm ">{{ $member->email }}</div>
              </div>
              @if (Auth::user()->id == $project->admin_id)
                <div class="">
                  <div class="items-center flex justify-end">
                    <form action="{{route('members.remove',$member->pivot->id)}}" method="POST">
                      @method('DELETE') @csrf
                      <button type="submit"
                        class="border p-1 border-slate-300 bg-slate-200 hover:bg-rose-700 hover:text-rose-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                        Remove
                      </button>
                    </form>
                  </div>
                </div>
              @endif
            </div>
            @empty
            <div class="flex p-1 items-center gap-4">
              <div class="grid gap-1">
                <div class="text-lg">No members found</div>
              </div>
            </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
    <div class="max-w-6xl w-full mx-auto">
      <div class="rounded-lg border bg-slate-50 shadow-sm">
        <div class="flex flex-col space-y-1.5 p-6">
          <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Tasks</h3>
          <p class="text-sm ">The tasks that need to be completed for this project.
          </p>
        </div>
        <div class="p-6 grid gap-4">
          <div class="relative w-full overflow-auto">
            @if(isset($tasks) && $tasks->count() > 0)
            <table class="w-full text-sm">
              <thead class="">
                <tr class="border-b grid grid-cols-2 md:grid-cols-4 transition-colors">
                  <th class="h-12 px-4 text-left block align-middle font-medium">
                    Task</th>
                  <th class="h-12 px-4 text-left  align-middle font-medium">
                    Assigned-to</th>
                  <th class="h-12 px-4 text-left hidden md:grid align-middle font-medium ">
                    Status</th>
                  <th class="h-12 px-4 text-left hidden md:grid align-middle font-medium">
                    Priority</th>
                </tr>
              </thead>
              <tbody class="">
                {{-- task list starts --}}
                @foreach ($tasks as $task)
                <tr
                  class="border-b grid grid-cols-2 md:grid-cols-4 transition-colors hover:bg-slate-200 data-[state=selected]:bg-muted">
                  {{-- name and description --}}
                  <td class="p-4 align-middle ">
                    <a href="{{route('tasks.show',$task->id)}}">
                      {{-- task name --}}
                      <div class="font-medium ">{{$task->name}}</div>

                      {{-- task description --}}
                      <div class="text-sm ">{{$task->description}}</div>
                    </a>
                  </td>
                  {{-- assigned to --}}
                  <td class="p-4 align-middle ">
                    <a href="{{route('tasks.show',$task->id)}}">
                      <div class="flex items-center gap-2">
                        @if ($task->user)
                        <div class="font-medium first-letter:capitalize">{{ $task->user->name }}</div>
                        @else
                        <div class="font-medium first-letter:capitalize">Not assigned</div>
                        @endif
                      </div>
                    </a>
                  </td>
                  {{-- status --}}
                  <td class="p-4 hidden md:grid align-middle ">
                    <a href="{{route('tasks.show',$task->id)}}">
                      <div
                        class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80"
                        data-v0-t="badge">{{$task->status}}</div>
                    </a>
                  </td>
                  {{-- priority --}}
                  <td class="p-4 hidden md:grid align-middle ">
                    <a href="{{route('tasks.show',$task->id)}}">
                      <div
                        class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80"
                        data-v0-t="badge">{{$task->priority}}</div>
                    </a>
                  </td>
                </tr>
                @endforeach
                {{-- task list ends --}}
              </tbody>
            </table>
            @else
            <h1 class="text-lg"> No tasks found</h1>
            @endif
          </div>
        </div>
        @if (Auth::user()->id == $project->admin_id)
        <div class="p-6 flex items-center justify-end">
          <a href="{{ route('tasks.create', $project->id) }}">
            <button type="submit"
              class="border border-slate-300 bg-slate-200 hover:bg-green-700 hover:text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
              <svg data-id="30" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="w-4 h-4 mr-2">
                <path d="M5 12h14"></path>
                <path d="M12 5v14"></path>
              </svg>
              Add Task
            </button>
          </a>
        </div>
        @endif
      </div>
  </main>
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

  {{-- footer starts --}}
  @include('components.footer')
  {{-- footer ends --}}
  <x-notify::notify />
  @notifyJs
</body>

</html>