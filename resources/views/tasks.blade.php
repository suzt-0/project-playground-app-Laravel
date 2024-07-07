<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Project-Playground</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- navbar starts here --}}
    @include('components.navbar-basic')
    {{-- navbar ends here --}}


    <main class="flex min-h-[calc(100vh_-_theme(spacing.16))] flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
            {{-- <a href="{{route('comments.show', $task->comment->id)}}">Dashboard</a>/ --}}
            <a href="{{route('dashboard')}}">Dashboard</a>/
            <a href="">My Projects</a>/
            <a href="">{Project-name}</a>/
            <a href="">Tasks</a>/..
        </h3>

        <div class="rounded-lg bg-slate-50 max-w-6xl w-full mx-auto flex flex-col gap-8">
            <div class="shadow-slate-600 focus-within:shadow-slate-900 shadow-sm rounded-lg border">
                <div class="flex-1 p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-4">
                            <div class="space-y-1">
                                {{-- Title of the Card --}}
                                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                                    {Project name} Tasks</h3>
                            </div>
                        </div>

                        <a href="{{route('create-task')}}"
                            class="border border-slate-300 bg-slate-200 hover:bg-slate-700 hover:text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            Create task
                        </a>

                    </div>
                    <div class="grid gap-4">
                        @php
                        $example=1;
                        echo
                        '
                        
                         <div class="rounded-lg border-2 shadow-lg cursor-pointer hover:bg-slate-800 hover:text-slate-50">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                                    Task name
                                </h3>
                                <div class="flex items-center gap-2">
                                    <div class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                                      Task Status
                                    </div>
                                    <div class="text-sm">
                                        Due date: duedate
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        '
                        ;
                        @endphp

                       <!-- <div class="rounded-lg border-2 shadow-lg cursor-pointer hover:bg-slate-800 hover:text-slate-50">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                                    Task name
                                </h3>
                                <div class="flex items-center gap-2">
                                    {{-- Task status --}}
                                    <div class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                                      Task Status
                                    </div>
                                    {{-- Task Due-date--}}
                                    <div class="text-sm">
                                        Due date: duedate
                                    </div>
                                </div>
                            </div> 
                        -->
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>