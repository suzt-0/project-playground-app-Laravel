<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>User Profile</title>
  @notifyCss
  @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 text-slate-800">
  {{-- -- navbar starts -- --}}
  @include('components.navbar')
  {{-- -- navbar ends -- --}}
  <main class="grid xl:grid-cols-4 m-10 max-w-full gap-8  ">
    {{-- User Profile Card --}}
    <div class="grid gap-y-4 xl:col-span-3 border p-10  rounded-lg border-slate-300 shadow bg-slate-50 ">
      <div class="text-5xl font-semibold mb-10">
          User Profile
      </div>
      <div class="flex">
        <div class="p-2 flex items-center">
          Name
        </div>
        <div class="p-2">
          <input
          class=" cursor-default outline-none border-2 rounded-lg font-serif font-semibold text-slate-700 bg-slate-50 p-2 px-5"
          disabled
          value="{{$user->name}}"
          type="text">
          {{-- <span class="italic font-mono text-slate-300"> {Can be updated}</span> --}}
        </div>
      </div>
      <div class="flex">
        <div class="p-2 flex items-center">
          Email
        </div>
        <div class="p-2">
          <input
          class=" cursor-default outline-none border-2 rounded-lg font-serif font-semibold text-slate-700 bg-slate-50 p-2 px-5"
          disabled 
          value="{{$user->email}}"
          type="text">
        </div>
      </div>

      <div class="flex">
        <div class="p-2 flex items-center">
          Created at
        </div>
        <div class="p-2">
          <input
          class=" cursor-default outline-none border-2 rounded-lg font-serif font-semibold text-slate-700 bg-slate-50 p-2 px-5"
          disabled 
          value="{{$user->created_at}}"
          type="text">
        </div>
      </div>
      <div class="flex">
        <div class="p-2 flex items-center">
          Updated at
        </div>
        <div class="p-2">
          <input
          class=" cursor-default outline-none border-2 rounded-lg font-serif font-semibold text-slate-700 bg-slate-50 p-2 px-5"
          disabled 
          value="{{$user->updated_at}}"
          type="text">
        </div>
      </div>
      {{-- <div class="items-center p-3 flex justify-end gap-2">
        <a href=""
          class="border p-1 border-slate-300 bg-slate-200 hover:bg-slate-700 hover:text-slate-200 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
          <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M8.56078 20.2501L20.5608 8.25011L15.7501 3.43945L3.75012 15.4395V20.2501H8.56078ZM15.7501 5.56077L18.4395 8.25011L16.5001 10.1895L13.8108 7.50013L15.7501 5.56077ZM12.7501 8.56079L15.4395 11.2501L7.93946 18.7501H5.25012L5.25012 16.0608L12.7501 8.56079Z"
                fill="currentcolor"></path>
            </g>
          </svg>
          Update Profile
        </a>
      </div> --}}
    </div>
    {{-- User History Card --}}
    <div class=" xl:col-span-1 border p-10 rounded-lg border-slate-300 shadow bg-slate-50 grid gap-y-5 text-lg ">
      <div class="text-xl font-semibold">User History</div>
      {{-- Project Created  --}}
      <div class="border p-2 rounded-lg bg-slate-700 border-slate-400 text-slate-100 flex flex-col items-center">
        <div>
          Projects Created
        </div>
        <div>
          {{$myProject}}
        </div>
      </div>
      {{-- Joined Projects  --}}
      <div class="border p-2 rounded-lg bg-slate-700 border-slate-400 text-slate-100 flex flex-col items-center">
        <div>
          Joined Projects
        </div>
        <div>
          {{$joinedProject}}
        </div>
      </div>
      {{-- Completed Projects --}}
      <div class="border p-2 rounded-lg bg-slate-700 border-slate-400 text-slate-100 flex flex-col items-center">
        <div>
          Completed Projects
        </div>
        <div>
          {{$completedProject}}
        </div>
      </div>
      {{-- Failed Projects --}}
      <div class="border p-2 rounded-lg bg-slate-700 border-slate-400 text-slate-100 flex flex-col items-center">
        <div>
          Failed Projects
        </div>
        <div>
          {{$failedProject}}
        </div>
      </div>
    </div>
  </main>

  {{-- -- footer starts -- --}}
  {{-- @include('components.footer')  --}}
  {{-- -- footer ends -- --}}
  <x-notify::notify />
  @notifyJs
</body>

</html>