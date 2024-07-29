<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Join Project</title>
  @notifyCss
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
  {{-- navbar starts --}}
  @include('components.navbar')
  {{-- navbar ends --}}
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

  <div class=" flex flex-col w-full min-h-screen">
    <main class="flex min-h-[calc(100vh_-_theme(spacing.16))] flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
      <div class="rounded-lg bg-slate-50 max-w-6xl w-full mx-auto flex flex-col gap-8">
        <div class="shadow-slate-600 focus-within:shadow-slate-900 shadow-2xl rounded-lg border">
          <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
            <div class="space-y-1">
              <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Join Project</h3>
              <p class="text-sm text-muted-foreground">Fill out the form to join a already made project.</p>
            </div>
          </div>
          <form action="{{route('joinProjects.store')}}" method="POST">
            @csrf
            <div class="p-6 grid gap-4">
              <div class="grid md:grid-cols-1 gap-4">
                {{-- Project name --}}
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="name">
                    Project name
                  </label>
                  <input
                    class="flex w-full rounded-md border border-slate-400 focus:ring-offset-slate-600 hover:placeholder-slate-700 px-3 py-2 text-sm"
                    id="-name" name="name" placeholder="Enter Project Name" />
                </div>
                {{-- Project ID --}}
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="project_id">
                    Project ID
                  </label>
                  <input type="text"
                    class="flex w-full rounded-md border border-slate-400 focus:ring-offset-slate-600 hover:placeholder-slate-700 px-3 py-2 text-sm "
                    id="project_id" name="project_id" placeholder="Enter Project ID"></textarea>
                </div>
              </div>
            </div>

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
          </form>
        </div>
      </div>
    </main>
  </div>

  {{-- footer starts --}}
  @include('components.footer')
  {{-- footer ends --}}
  <x-notify::notify />
  @notifyJs
</body>

</html>