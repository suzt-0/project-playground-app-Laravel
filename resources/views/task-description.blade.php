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
          <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Team Members
          </h3>
          <p class="text-sm text-muted-foreground">The team working on the project.</p>
        </div>
        <div class="p-6 grid gap-4">
          <div class="grid border rounded p-3 gap-4  max-h-80 overflow-y-auto">
            {{-- member list Starts --}}
            @foreach ($members as $member)
            {{-- <li>{{ $member->name }} ({{ $member->email }})</li> --}}
            <div class="flex p-1 items-center gap-4">
              <div class="grid gap-1">
                <div class="font-medium first-letter:capitalize">{{ $member->name }}</div>
                <div class="text-sm text-muted-foreground">{{ $member->email }}</div>
              </div>
            </div>
            @endforeach
            {{-- member list Ends --}}
          </div>
        </div>
      </div>
    </div>
    <div class="max-w-6xl w-full mx-auto">
      <div class="rounded-lg border bg-slate-50 shadow-sm">
        <div class="flex flex-col space-y-1.5 p-6">
          <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Tasks</h3>
          <p class="text-sm text-muted-foreground">The tasks that need to be completed for this project.
          </p>
        </div>
        <div class="p-6 grid gap-4">
          <div class="relative w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
              <thead class="[&amp;_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                  <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                    Task</th>
                  <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                    Assigned to</th>
                  <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                    Status</th>
                </tr>
              </thead>
              <tbody class="[&amp;_tr:last-child]:border-0">
                {{-- task list starts --}}
                @foreach ($tasks as $task)
                <tr class="border-b  transition-colors hover:bg-slate-200 data-[state=selected]:bg-muted">
                  {{-- name and description --}}
                  <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                    {{-- task name --}}
                    <div class="font-medium">{{$task->name}}</div>
                    {{-- task description --}}
                    <div class="text-sm text-muted-foreground">Task Info</div>
                  </td>
                  {{-- assigned to --}}
                  <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                    <div class="flex items-center gap-2">
                      <div class="font-medium">{{$task->user->name}}</div>
                    </div>
                  </td>
                  {{-- status --}}
                  <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                    <div
                      class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80"
                      data-v0-t="badge">{{$task->status}}</div>
                  </td>
                </tr>
                @endforeach
                {{-- task list ends --}}
              </tbody>
            </table>
          </div>
        </div>
        <div class="p-6 flex items-center justify-end">

          <form action="{{ route('tasks.setProjectId')}}" method="POST">
            @csrf
            <input type="hidden" name="project_id" id="project_id" value="{{ $project->id }}">
            <button type="submit"
              class="border border-slate-300 bg-slate-200 hover:bg-slate-700 hover:text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
              <svg data-id="30" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="w-4 h-4 mr-2">
                <path d="M5 12h14"></path>
                <path d="M12 5v14"></path>
              </svg>
              Add Task
            </button>
          </form>
        </div>
      </div>
  </main>

  {{-- footer starts --}}
  @include('components.footer')
  {{-- footer ends --}}

</body>

</html>