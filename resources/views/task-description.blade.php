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
    {{-- <div>
      dashboard/
      {{$task->project->name}}/
      {{$task->name}}/..
    </div> --}}

    <div class="w-full grid grid-cols-4 xl:grid-cols-5 gap-8">
      {{-- Task Card Starts --}}
      <div class="rounded-lg border col-span-4 xl:col-span-3 bg-slate-50 shadow-sm">
        <div class="flex flex-col space-y-1.5 p-5">
          <h3 class="whitespace-nowrap text-3xl font-semibold leading-none tracking-tight">{{$task->name}}
        </div>
        <div class="p-6 grid gap-4">
          <div class="grid md:grid-cols-1 gap-4">
            <div class="grid-cols-1">
              <div class="text-xl font-medium">Description</div>
              <div class="text-base rounded p-2 border h-40 overflow-y-auto">{{$task->description}}</div>
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
          <div class="grid grid-cols-1 gap-4">
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
            @if (Auth::user()->id == $task->project->admin_id)
            <div>
              <div class="items-center p-3 flex justify-end gap-2">
                {{-- Delete button --}}

                <form action="{{route('tasks.destroy', $task->id)}}" method="POST">@method('DELETE') @csrf
                  <button type="submit"
                    class="border p-1 border-slate-300 bg-slate-200 hover:bg-rose-700 hover:text-rose-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                    <svg viewBox="0 0 24 24" width="30" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width=""></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path d="M10 12V17" stroke="currentcolor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round">
                        </path>
                        <path d="M14 12V17" stroke="currentcolor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round">
                        </path>
                        <path d="M4 7H20" stroke="currentcolor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round">
                        </path>
                        <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10"
                          stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z"
                          stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                    Delete
                  </button>
                </form>

                {{-- Edit button --}}
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
            @endif
          </div>
        </div>
      </div>
      {{-- Task Card Ends Here --}}

      {{-- comment section starts here --}}
      <div class="grid col-span-4 xl:col-span-2 grid-rows-2 gap-y-2 ">

        {{-- suggestions here --}}
        <div class="rounded-lg border bg-slate-50 ">
          <div class="space-y-1 p-4">
            <div class="grid grid-cols-2">
              <h3 class="whitespace-nowrap text-3xl font-semibold leading-none tracking-tight">Suggestions</h3>
            </div>
            <div class="p-1 grid grid-cols-1 gap-4">
              <div class="grid font-normal text-slate-600 rounded gap-4 p-2 max-h-56 overflow-y-auto">
                @forelse ($suggestions as $suggestion)
                <div class="flex p-3 text-slate-600 border rounded items-center ">
                  <div class="grid grid-cols-1 gap-1">
                    <div class="text-lg italic first-letter:capitalize">{{$suggestion->comment_text}}</div>
                  </div>
                </div>
                @empty
                <div class="flex p-1 items-center gap-4">
                  <div class="grid gap-1">
                    <div class="text-lg italic">No Suggestions Yet</div>
                  </div>
                </div>
                @endforelse
              </div>
              @if (Auth::user()->id == $task->project->admin_id)
                {{-- suggestion starts --}}
                <div>
                  <form class="grid grid-cols-3 gap-x-3" method="POST" action="{{route('comments.store',$task->id)}}">
                    @csrf
                    <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                    <select name="comment_type" hidden>
                      <option value="suggestion" selected hidden></option>
                    </select>
                    <input name="comment_text"
                      class="col-span-2 bg-slate-200 border border-slate-500 outline-0 p-2 w-full rounded-lg italic"
                      placeholder="Add new suggestion here" type="text">
                    <button class="ml-2 w-fit border rounded-lg p-3 bg-slate-700 text-slate-200 grid grid-cols-3"
                      type="submit" class="p-2">
                      <div class="w-fit">
                        <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor"
                          class="flex-shrink-0 h-6 w-6 text-inherit -ml-1 -mr-1 col-span-1">
                          <path stroke-width="2"
                            d="M2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0zM12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 13a2 2 0 100-4 2 2 0 000 4z">
                          </path>
                        </svg>
                      </div>
                      <div class="col-span-2">
                        Suggest
                      </div>
                    </button>
                  </form>
                </div>
                {{-- suggestions ends --}}
              @endif
            </div>
          </div>
        </div>

        {{-- issues here --}}
        <div class="rounded-lg border bg-slate-50">
          <div class="space-y-1 p-4">
            <div class="grid grid-cols-2">
              <h3 class="whitespace-nowrap text-3xl font-semibold leading-none tracking-tight">Issues</h3>
            </div>
            <div class="p-1 grid grid-cols-1 gap-4">
              <div class="grid font-normal text-slate-600 rounded gap-4 p-2 max-h-56 overflow-y-auto">
                @forelse ($issues as $issue)
                <div class="flex p-3 text-slate-600 border rounded items-center ">
                  <div class="grid grid-cols-1 gap-1">
                    <div class="text-lg italic first-letter:capitalize"> {{$issue->comment_text}} </div>
                  </div>
                </div>
                @empty
                <div class="flex p-1 items-center gap-4">
                  <div class="grid gap-1">
                    <div class="text-lg">No issues Yet</div>
                  </div>
                </div>
                @endforelse
              </div>
              @if (Auth::user()->id == $task->user_id)
              {{-- raise issue starts --}}
              <div>
                <form class="grid grid-cols-3 gap-x-3" method="POST" action="{{route('comments.store',$task->id)}}">
                  @csrf
                  <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                  <select name="comment_type" hidden>
                    <option value="issue" selected hidden></option>
                  </select>
                  <input name="comment_text"
                    class="col-span-2 bg-slate-200 border border-slate-500 outline-0 p-2 w-full rounded-lg italic"
                    placeholder="Add new issue here" type="text">
                  <button class="ml-2 w-fit border rounded-lg p-3 bg-slate-700 text-slate-200 grid grid-cols-3"
                    type="submit" class="p-2">
                    <div class="w-fit">
                      <svg aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 h-6 w-6 text-inherit -ml-1 -mr-1 col-span-1">
                        <path stroke-width="2"
                          d="M2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0zM12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 13a2 2 0 100-4 2 2 0 000 4z">
                        </path>
                      </svg>
                    </div>
                    <div class="col-span-2">
                      Raise Issue
                    </div>
                  </button>
                </form>
              </div>
              {{-- raise issue ends --}}
              @endif
            </div>
          </div>
        </div>
      </div>
      {{-- comment section ends here --}}

    </div>


  </main>

  {{-- footer starts --}}
  {{-- @include('components.footer') --}}
  {{-- footer ends --}}
  <x-notify::notify />
  @notifyJs
</body>

</html>