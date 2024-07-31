<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Invitation</title>
  @notifyCss
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    {{-- -- navbar starts -- --}}
    @include('components.navbar')
    {{-- -- navbar ends -- --}}
    <main class="flex flex-1 flex-col gap-4 p-4 md:p-20 ">
        <div class="rounded-lg bg-slate-50 max-w-fit mx-auto flex flex-col gap-8">
            <div class="shadow-md rounded-lg border">
                <div class="space-y-1.5 p-6 flex flex-row items-center justify-between">
                    <div class="space-y-1">
                        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Invitation</h3>
                        <p class="text-sm text-muted-foreground">Enter the email of the user you want to invite to join
                            your project!!</p>
                    </div>
                </div>
                <form action="{{route('mail.send',$project->id)}}" method="POST">
                    @csrf
                    <div class="p-6 grid gap-4">
                        <div class="grid gap-4">
                            {{-- Project name --}}
                            <div class="grid gap-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="email">
                                    Email
                                </label>
                                <input type="email"
                                    class="flex w-full rounded-md border border-slate-400 hover:placeholder-slate-700 outline-none focus-within:border-2 text-slate-800 px-3 py-2 text-sm"
                                    id="email" name="email" placeholder="Enter email to invite" />
                            </div>
                        </div>

                        <div class="items-center p-6 flex justify-end">
                            <button type="submit"
                                class="border border-slate-300 bg-slate-700 hover:bg-blue-700 text-slate-200  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                                Send Invite
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </main>
    <x-notify::notify />
  @notifyJs

</body>

</html>