<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create-Project</title>
  {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
  {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
  {{--
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> --}}
  {{--
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script> --}}
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
  @include('components.navbar')
  <div class="bg-slate-100 flex flex-col w-full min-h-screen">
    <main class="flex min-h-[calc(100vh_-_theme(spacing.16))] flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
      <div class="rounded-lg bg-slate-300 max-w-6xl w-full mx-auto flex flex-col gap-8">
        {{-- error display --}}
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

        {{-- form starts --}}
        <form action="{{route('projects.store')}}" method="POST"
          class="shadow-slate-300 shadow-2xl rounded-lg border border-slate-400">
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
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
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
                  class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
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
                  class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background"
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
                  class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background"
                  type="date" id="due_date" name="due_date" />
              </div>

            </div>
            <div class="grid md:grid-cols-2 gap-4">
              {{-- Status --}}
              <div class="grid gap-2">
                <label for="status"
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Status</label>
                <select id="status" name="status" class="mt-1 p-2 w-auto border rounded-md  focus:ring-2">
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
              class="bg-slate-400 hover:bg-slate-700 hover:text-slate-200 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 cursor-pointer disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2"
              value="Create Project">
          </div>

        </form>
        {{-- form ends --}}
      </div>
    </main>
  </div>
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