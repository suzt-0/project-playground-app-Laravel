<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Projects</title>
    @notifyCss
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-50 text-slate-800 ">
    {{-- navbar starts here --}}
    @include('components.navbar')
    {{-- navbar ends here --}}
    @php
    $isAdminForAnyProject = $Projects->contains(function ($project) {
    return Auth::user()->id == $project->admin_id;
    });
    @endphp

    <div class="m-4 p-4 rounded-lg bg-slate-200 border-slate-400 shadow-lg">

        <div class="flex justify-between">
            <h2 class="text-3xl font-semibold mb-5 md:mb-10 lg:mb-20">Projects</h2>
            @if($isAdminForAnyProject)
            <a href="{{route('projects.create')}}"
                class="border text-slate-200 bg-slate-700 hover:bg-green-700 hover:text-slate-100 transition-colors inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium h-10 px-4 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-4 h-4 mr-2">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                </svg>
                Create Project
            </a>
            @endif
        </div>

        <div class="grid m-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($Projects as $project)
            <a href="{{route('projects.show', $project->id)}}">
                <div class="mx-auto my-auto ">
                    <div
                        class="rounded-lg w-full overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.05]">
                        <div class="p-6 rounded-lg m-2">
                            <div class="flex flex-col ">
                                <h2 class="text-xl font-bold mb-2">
                                    {{ $project->name }}
                                </h2>
                                <div class="">
                                    <div
                                        class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold focus:outline-none focus:ring-1 focus:ring-ring focus:ring-offset-1">
                                        {{ $project->status }}
                                    </div>
                                    <div
                                        class="text-sm inline-flex w-fit items-center text-green-700 rounded-full border px-2.5 py-0.5 ">
                                        Due: {{ $project->due_date }}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 border-2 rounded-xl h-28">
                                <p
                                    class="text-gray-600 px-3 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                                    {{ $project->description }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
            @empty
            <div class="mx-auto col-span-3 text-slate-500 text-6xl">
                No Projects To Show (ɔ ͡❛ -͡❛ )ɔ
            </div>
            @endforelse

        </div>
    </div>
    {{-- @if ($errors->any())
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

    @include('components.footer') --}}

    <x-notify::notify />
    @notifyJs
</body>

</html>