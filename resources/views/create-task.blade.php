<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create-task</title>
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
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
  @include('components.navbar-basic')
  <div class="bg-gray-200 flex flex-col w-full min-h-screen">
    <main class="flex min-h-[calc(100vh_-_theme(spacing.16))] flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
      <div class="rounded-lg bg-slate-50 max-w-6xl w-full mx-auto flex flex-col gap-8">
        <div class="shadow-slate-600 focus-within:border-slate-600 focus-within:border-2 shadow-2xl  rounded-lg border bg-card text-card-foreground ">
          <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
            <div class="space-y-1">
              <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Create New Task</h3>
              <p class="text-sm text-muted-foreground">Fill out the form to create and assign a new task.</p>
            </div>
          </div>
          <form  method="POST">
            <div class="p-6 grid gap-4">
              <div class="grid md:grid-cols-2 gap-4">
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="project-name">
                    Project Name
                  </label>
                  <input
                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="project-name" placeholder="Enter project name" />
                </div>
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="project-description">
                    Description
                  </label>
                  <textarea
                    class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="project-description" placeholder="Enter project description" rows="3"></textarea>
                </div>
              </div>
              <div class="grid md:grid-cols-2 gap-4">
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="start-date">
                    Start Date
                  </label>
                  <input
                    class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background"
                    type="date" id="start-date" />
                </div>
                <div class="grid gap-2">
                  <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="end-date">
                    End Date
                  </label>
                  <input
                    class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background"
                    type="date" id="end-date" />
                </div>
              </div>
            </div>
            <div class="items-center p-6 flex justify-end">
              <button
                class="border border-slate-300 bg-slate-200 hover:bg-slate-700 hover:text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                Create Project
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</body>

</html>