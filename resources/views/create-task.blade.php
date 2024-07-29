<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create-task</title>
  {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
  @notifyCss
  @vite('resources/css/app.css')
  @vite('resources/css/buttonHover.css')
</head>
{{--

<body>
  <textarea name="editor1"></textarea>
  <script>
    CKEDITOR.replace('editor1');
  </script>
</body> --}}

<body>
  @include('components.navbar')
  <div class="bg-gray-200 flex flex-col w-full min-h-screen">
    <main class="flex min-h-[calc(100vh_-_theme(spacing.16))] flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
      <div class="rounded-lg bg-slate-50 max-w-6xl w-full mx-auto flex flex-col gap-8">
        <div class="shadow-slate-600 focus-within:shadow-slate-900 shadow-2xl rounded-lg border">
          <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
            <div class="space-y-1">
              <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Create New Task</h3>
              <p class="text-sm text-muted-foreground">Fill out the form to create and assign a new task.</p>
            </div>
          </div>
          <form action="{{ route('tasks.store', $project->id) }}" method="POST">
            @csrf
            {{-- <input type="hidden" name="project_id" value="{{$project_id }}"> --}}
            <div class="p-6 grid gap-4">
              <div class="grid gap-4 md:grid-cols-2 ">
                {{-- task name --}}
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="task-name">
                    Task name
                  </label>
                  <input
                    class="flex h-10 w-full rounded-lg border px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium  focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="name" name="name" placeholder="Enter task name" />
                </div>
                {{-- task description --}}
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="description">
                    Description
                  </label>
                  <textarea
                    class="flex min-h-[80px] w-full rounded-md border  px-3 py-2 text-sm ring-offset-background outline-none focus-visible:ring-2  focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="description" name="description" placeholder="Enter task description" rows="4"></textarea>
                </div>
              </div>
              <div class="grid md:grid-cols-2 gap-4">
                {{-- task assignment date --}}
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="start_date">
                    Start Date
                  </label>
                  <input
                    class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background"
                    type="date" name="start_date" id="start_date" />
                </div>
                {{-- task deadline --}}
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="due_date">
                    Due Date
                  </label>
                  <input
                    class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background"
                    type="date" name="due_date" id="due_date" />
                </div>
              </div>
            </div>
            <div class="items-center p-6 grid grid-cols-2 gap-4">
              {{-- task priority --}}
              <div class="grid gap-2">
                <label for="priority"
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Priority</label>
                <select id="priority" name="priority" class="mt-1 p-2 w-auto border rounded-md  focus:ring-2">
                  <option class="bg-slate-800 text-slate-50" value="low">Low</option>
                  <option class="bg-slate-800 text-slate-50" value="medium">Medium</option>
                  <option class="bg-slate-800 text-slate-50" value="high">High</option>
                  <option class="bg-slate-800 text-slate-50" value="urgent">Urgent</option>
                </select>
              </div>
              {{-- task status --}}
              <div class="grid gap-2">
                <label for="status"
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Status</label>
                <select id="status" name="status" class="mt-1 p-2 w-auto border rounded-md  focus:ring-2">
                  <option class="bg-slate-800 text-slate-50" value="Not Assigned">Not Assigned</option>
                  <option class="bg-slate-800 text-slate-50" value="Assigned">Assigned</option>
                  <option class="bg-slate-800 text-slate-50" value="Ongoing">Ongoing</option>
                  <option class="bg-slate-800 text-slate-50" value="Completed">Completed</option>
                </select>
              </div>
              {{-- task assigned to --}}
              <div class="grid gap-2">
                <label for="assigned"
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Assigned
                  to</label>
                <select name="user_id" id="user_id" class="mt-1 p-2 w-auto border rounded-md  focus:ring-2">
                  @if(isset($members) && $members->count() > 0)
                  @foreach($members as $member)
                  <option class="bg-slate-800 text-slate-50" value="{{$member->id}}">{{$member->name}}</option>
                  @endforeach
                  @else
                  <option class="bg-slate-800 text-slate-50" disabled selected >No members to assign</option>
                  @endif
                </select>
              </div>
            </div>
            <div class="items-center p-6 flex justify-end">
              <button
                class="border border-slate-300 bg-slate-200 hover:bg-slate-700 hover:text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                <svg data-id="30" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="w-4 h-4 mr-2">
                  <path d="M5 12h14"></path>
                  <path d="M12 5v14"></path>
                </svg>
                Create task
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>
    @if ($errors->any())
        <div class="alert alert-danger">
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
  </div>
  <x-notify::notify />
  @notifyJs
</body>

</html>