<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create-Project</title>
  @notifyCss
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-100 text-slate-700">
  @include('components.navbar')
  <div class=" flex flex-col w-full min-h-screen">
    <main class=" p-4 md:p-12">
      <div class="bg-slate-50 rounded-lg  max-w-3xl mx-auto flex flex-col gap-8">
        {{-- error display --}}
        {{-- @if ($errors->any())
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
        @endif --}}

        {{-- form starts --}}
        <form action="{{route('projects.store')}}" method="POST"
          class="shadow-slate-300 shadow rounded-lg border border-slate-200">
          @csrf
          <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
            <div class="space-y-1">
              <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Create New Project</h3>
              <p class="text-sm text-muted-foreground">Fill out the form to create a new project.</p>
            </div>
          </div>

          <div class="p-6 grid gap-4">
            <div class="grid md:grid-cols-2 gap-4">
              {{-- name --}}
              <div class="grid gap-2">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="name">
                  Project Name
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input  px-3 py-2 text-sm outline-none border-slate-400 focus-within:border-2 "
                  id="name" name="name" placeholder="Enter project name" />
              </div>
              {{-- description --}}
              <div class="grid gap-2">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="description">
                  Description
                </label>
                <textarea
                  class="flex w-full rounded-md border border-input  px-3 py-2 text-sm outline-none border-slate-400 focus-within:border-2"
                  id="description" name="description" placeholder="Enter project description" rows="3"></textarea>
              </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
              {{-- Start-date --}}
              <div class="grid gap-2">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="start_date	">
                  Start Date
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm outline-none border-slate-400 focus-within:border-2  "
                  type="date" id="start_date" name="start_date" />
              </div>
              {{-- Due-date --}}
              <div class="grid gap-2">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="due_date">
                  Due Date
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm outline-none border-slate-400 focus-within:border-2  "
                  type="date" id="due_date" name="due_date" />
              </div>

            </div>
            <div class="grid md:grid-cols-2 gap-4">
              {{-- Status --}}
              <div class="grid gap-2">
                <label for="status"
                  class="text-sm font-medium leading-none">Status</label>
                <select id="status" name="status" class="mt-1 p-2 w-auto border rounded-md outline-none border-slate-400 focus-within:border-2">
                  <option class="bg-slate-800 text-slate-50" selected value="Not-Started">Not Started</option>
                  <option class="bg-slate-800 text-slate-50" value="Ongoing">Ongoing</option>
                  <option class="bg-slate-800 text-slate-50" value="Completed">Completed</option>
                  <option class="bg-slate-800 text-slate-50" value="Dropped">Dropped</option>
                </select>
              </div>
            </div>
          </div>


          {{-- submit button --}}
          <div class="items-center p-6 flex justify-end">

            <input type="submit"
              class="bg-slate-700 text-slate-100 hover:bg-emerald-700 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium cursor-pointer h-10 px-4 py-2"
              value="Create Project">
          </div>

        </form>
        {{-- form ends --}}
      </div>
    </main>
  </div>
  <x-notify::notify />
  @notifyJs
</body>

</html>
{{-- <script>
  var quill = new Quill('#editor-container', {
          theme: 'snow'
      });

      var form = document.querySelector('form');
      form.onsubmit = function() {
          var content = document.querySelector('input[name=project-description]');
          content.value = quill.root.innerHTML;
      };
</script> --}}