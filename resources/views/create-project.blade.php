<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Craete-Project</title>
    {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
    {{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> --}}
 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.navbar-basic')
<div class="bg-slate-200 flex flex-col w-full min-h-screen">
    <main class="flex min-h-[calc(100vh_-_theme(spacing.16))] flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
      <div class="rounded-lg bg-slate-50 max-w-6xl w-full mx-auto flex flex-col gap-8">
        <div class="shadow-slate-600 shadow-2xl rounded-lg border bg-card text-card-foreground " data-v0-t="card">
          <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
            <div class="space-y-1">
              <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Create New Project</h3>
              <p class="text-sm text-muted-foreground">Fill out the form to create a new project.</p>
            </div>
          </div>
          <div class="p-6 grid gap-4">
            <div class="grid md:grid-cols-2 gap-4">
              <div class="grid gap-2">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="project-name"
                >
                  Project Name
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                  id="project-name"
                  placeholder="Enter project name"
                />
              </div>
              <div class="grid gap-2">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="project-description"
                >
                  Description
                </label>
                <textarea
                  class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                  id="project-description"
                  placeholder="Enter project description"
                  rows="3"
                ></textarea>
              </div>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
              <div class="grid gap-2">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="start-date"
                >
                  Start Date
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background"
                  type="date"
                  id="start-date"
                />
              </div>
              <div class="grid gap-2">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="end-date"
                >
                  End Date
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background"
                  type="date"
                  id="end-date"
                />
              </div>
            </div>
          </div>
          <div class="items-center p-6 flex justify-end">
            <button class="hover:bg-slate-700 hover:text-slate-200 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
              Create Project
            </button>
          </div>
        </div>
        {{-- <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
              <div class="space-y-1">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Website Redesign</h3>
                <p class="text-sm text-muted-foreground">Redesign the company website.</p>
              </div>
              <div class="flex items-center gap-2">
                <div class="bg-green-500 text-green-50 px-2 py-1 rounded-md text-xs font-medium">In Progress</div>
                <div class="text-muted-foreground text-sm">Due: June 30, 2023</div>
              </div>
            </div>
            <div class="p-6">
              <p>
                The website redesign project aims to modernize the company's online presence and improve user
                experience.
              </p>
            </div>
            <div class="items-center p-6 flex justify-end">
              <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                View Details
              </button>
            </div>
          </div>
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
              <div class="space-y-1">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                  Mobile App Development
                </h3>
                <p class="text-sm text-muted-foreground">Build a mobile app for our customers.</p>
              </div>
              <div class="flex items-center gap-2">
                <div class="bg-yellow-500 text-yellow-50 px-2 py-1 rounded-md text-xs font-medium">On Hold</div>
                <div class="text-muted-foreground text-sm">Due: August 15, 2023</div>
              </div>
            </div>
            <div class="p-6">
              <p>
                The mobile app development project will provide our customers with a convenient way to access our
                services on the go.
              </p>
            </div>
            <div class="items-center p-6 flex justify-end">
              <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                View Details
              </button>
            </div>
          </div>
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
              <div class="space-y-1">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                  CRM System Implementation
                </h3>
                <p class="text-sm text-muted-foreground">Implement a new CRM system for the sales team.</p>
              </div>
              <div class="flex items-center gap-2">
                <div class="bg-red-500 text-red-50 px-2 py-1 rounded-md text-xs font-medium">Overdue</div>
                <div class="text-muted-foreground text-sm">Due: May 1, 2023</div>
              </div>
            </div>
            <div class="p-6">
              <p>
                The CRM system implementation project will streamline our sales process and improve customer
                relationship management.
              </p>
            </div>
            <div class="items-center p-6 flex justify-end">
              <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                View Details
              </button>
            </div>
          </div>
        </div> --}}
      </div>
    </main>
  </div>
  <script>
   var quill = new Quill('#editor-container', {
            theme: 'snow'
        });

        var form = document.querySelector('form');
        form.onsubmit = function() {
            var content = document.querySelector('input[name=project-description]');
            content.value = quill.root.innerHTML;
        };
  </script>
</body>

</html>