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


    {{-- back links starts--}}
    <div class="">
        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
            {{-- <a href="{{route('comments.show', $task->comment->id)}}">Dashboard</a>/ --}}
            <a href="{{route('dashboard')}}">Dashboard</a>/
            <a href="">My Projects</a>/
            <a href="">{Project-name}</a>/
            <a href="">Tasks</a>/..
        </h3>

    </div>
    {{-- back links ends--}}
    <div class="mx-14 mt-4 mb-40">
        <div class="rounded-lg border shadow-sm w-full bg-white border-slate-900">
            <div class="flex flex-col space-y-1.5 p-5">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Edit Project</h3>
                <p class="text-sm ">Update the details for this project.</p>
            </div>
            <div class="p-4 ">
                <form method="POST" action="{{ route('tasks.update', $task->id) }}" class="grid gap-4">
                    @csrf
                    @method('PATCH')
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="grid gap-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="name">Project Name</label>
                            <input
                                class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-sm  file:border-0 file:bg-transparent file:text-sm "
                                id="name" name="name" type="text" value="{{ $task->name }}">
                        </div>
                        <div class="grid gap-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="description">Description</label>
                            <textarea
                                class="flex  w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus-visible:ring-1 focus-visible:ring-slate-900 "
                                id="description" name="description" placeholder="Enter project description"
                                rows="3">{{ $task->description }}</textarea>
                        </div>
                        <div class="grid gap-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="start_date">Start Date</label>
                            <input class="border rounded p-1 " name="start_date" id="start_date" type="date"
                                value="{{ $task->start_date }}">
                        </div>
                        <div class="grid gap-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="due_date">Due Date</label>
                            <input class="border rounded p-1" name="due_date" id="due_date" type="date"
                                value="{{ $task->due_date }}">
                        </div>
                        <div class="grid gap-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="status">Status</label>
                            <select id="status" name="status" class="mt-1 p-2 w-auto border rounded-md ">
                                <option class="bg-slate-800 text-slate-50" value="Not Assigned" {{ $task->status =='Not Assigned' ?'selected' : '' }}>Not Assigned</option>
                                <option class="bg-slate-800 text-slate-50" value="Assigned" {{ $task->status == 'Assigned'? 'selected':'' }}>Assigned</option>
                                <option class="bg-slate-800 text-slate-50" value="Ongoing" {{ $task->status == 'Ongoing'? 'selected':'' }}>Ongoing</option>
                                <option class="bg-slate-800 text-slate-50" value="Completed" {{ $task->status =='Completed' ?'selected' : '' }}>Completed</option>
                            </select>
                        </div>
                        <div class="grid gap-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="status">Priority</label>
                            <select id="priority" name="priority" class="mt-1 p-2 w-auto border rounded-md ">
                                <option class="bg-slate-800 text-slate-50" value="low" {{ $task->Priority =='low' ?'selected' : '' }}>low</option>
                                <option class="bg-slate-800 text-slate-50" value="medium" {{ $task->Priority == 'medium'? 'selected':'' }}>medium</option>
                                <option class="bg-slate-800 text-slate-50" value="high" {{ $task->Priority == 'high'? 'selected':'' }}>high</option>
                                <option class="bg-slate-800 text-slate-50" value="urgent" {{ $task->Priority =='urgent' ?'selected' : '' }}>urgent</option>
                            </select>
                        </div>
                        {{-- <div class="grid gap-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="status">Assigned to</label>
                            <select id="user_id" name="user_id" class="mt-1 p-2 w-auto border rounded-md ">
                                @if(isset($members) && $members->count() > 0)
                                @foreach($members as $member)
                                <option class="bg-slate-800 text-slate-50" value="{{$member->id}}" {{ $member->id ==$task->user_id ?'selected' : '' }}>{{$member->name}}</option>
                                @endforeach
                                @else
                                <option class="bg-slate-800 text-slate-50" disabled selected >No members to assign</option>
                                @endif
                            </select>
                        </div> --}}
                        <div class="grid gap-2">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="user_id">Assigned to</label>
                            <select id="user_id" name="user_id" class="mt-1 p-2 w-auto border rounded-md">
                                @if(isset($members) && $members->count() > 0)
                                    @foreach($members as $member)
                                        <option class="bg-slate-800 text-slate-50" value="{{ $member->id }}" {{ $member->id == $task->user_id ? 'selected' : '' }}>
                                            {{ $member->name }}
                                        </option>
                                    @endforeach
                                @else
                                    <option class="bg-slate-800 text-slate-50" disabled selected>No members to assign</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="items-center p-6 flex justify-end">
                        <button type="submit"
                            class="border border-slate-300 bg-slate-200 hover:bg-slate-700 hover:text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                            Edit Task
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- footer starts --}}
    @include('components.footer')
    {{-- footer ends --}}
    <x-notify::notify />
  @notifyJs
</body>

</html>