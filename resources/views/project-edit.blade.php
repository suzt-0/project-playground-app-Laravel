<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TEST-Project Edit</title>
  @notifyCss
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-100 text-slate-700">
  {{-- navbar starts --}}
  @include('components.navbar')
  {{-- navbar ends --}}
{{-- 
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
  @endif --}}


  {{-- back links starts--}}
  {{-- <div>
    dashboard/
    {{$project->name}}/..
  </div> --}}
  {{-- back links ends--}}
  <div class="mt-5 p-5 lg:p-10 ">
    <div class="rounded-lg w-full border shadow  bg-slate-50 border-slate-400">
      <div class="flex flex-col space-y-1.5 p-5">
        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Edit Project</h3>
        <p class="text-sm ">Update the details for this project.</p>
      </div>
      <div class="p-4 ">
        <form method="POST" action="{{ route('projects.update', $project->id) }}" class="grid gap-4">
          @csrf
          @method('PATCH')
          <div class="grid md:grid-cols-2 gap-4">
            <div class="grid gap-2">
              <label class="text-sm font-medium leading-none o"
                for="name">Project Name</label>
              <input
                class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-sm  border-slate-400 outline-none focus-within:border-slate-500"
                id="name" name="name" type="text" value="{{ $project->name }}">
            </div>
            <div class="grid gap-2">
              <label class="text-sm font-medium leading-none o"
                for="description">Description</label>
              <textarea
                class="flex  w-full rounded-md border border-input bg-background px-3 py-2 text-sm border-slate-400 outline-none focus-within:border-slate-500"
                id="description" name="description" placeholder="Enter project description"
                rows="3">{{ $project->description }}</textarea>
            </div>
            <div class="grid gap-2">
              <label class="text-sm font-medium leading-none o"
                for="start_date">Start Date</label>
              <input class="border rounded p-1  border-slate-400 outline-none focus-within:border-slate-500" name="start_date" id="start_date" type="date"
                value="{{ $project->start_date }}">
            </div>
            <div class="grid gap-2">
              <label class="text-sm font-medium leading-none o"
                for="due_date">Due Date</label>
              <input class="border rounded p-1 border-slate-400 outline-none focus-within:border-slate-500" name="due_date" id="due_date" type="date"
                value="{{ $project->due_date }}">
            </div>
            <div class="grid gap-2">
              <label class="text-sm font-medium leading-none o"
                for="status">Status</label>
              <select id="status" name="status" class="mt-1 p-2 w-auto border rounded-md  border-slate-400 outline-none focus-within:border-slate-500">
                <option class="bg-slate-800 text-slate-50" value="Not-Started" {{ $project->status == 'Not-Started' ?
                  'selected' : '' }}>Not Started</option>
                <option class="bg-slate-800 text-slate-50" value="Ongoing" {{ $project->status == 'Ongoing' ? 'selected'
                  :
                  '' }}>Ongoing</option>
                <option class="bg-slate-800 text-slate-50" value="Completed" {{ $project->status == 'Completed' ?
                  'selected' : '' }}>Completed</option>
                <option class="bg-slate-800 text-slate-50" value="Dropped" {{ $project->status == 'Dropped' ? 'selected'
                  :
                  '' }}>Dropped</option>
              </select>
            </div>
          </div>
          <div class="items-center p-6 flex justify-end">
            <button type="submit"
              class="border border-slate-300 bg-slate-200 hover:bg-slate-700 hover:text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
              Edit Project
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- footer starts --}}
  {{-- @include('components.footer') --}}
  {{-- footer ends --}}
  <x-notify::notify />
  @notifyJs
</body>

</html>