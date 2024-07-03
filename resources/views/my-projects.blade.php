<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My projects</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- navbar starts here --}}
    @include('components.navbar-basic')
    {{-- navbar ends here --}}
    
    <div class="m-4 p-4 rounded-lg bg-slate-200 border-slate-400 shadow-lg">
        <div class="flex justify-between">
            <h2 class="text-2xl font-bold mb-5 md:mb-10 lg:mb-20">My projects</h2>

            <a href="{{route('create-project')}}"
                class="border border-slate-700 text-slate-400 bg-slate-700 hover:bg-slate-200 hover:text-slate-700  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium  focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-4 h-4 mr-2">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                </svg>
                Create Project
            </a>
        </div>
        <div class="grid m-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            echo
            '
             <a href="">
                <div class="mx-auto my-auto ">
                    <div
                        class="rounded-lg w-full overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.02]">
                        <div class="p-6 rounded-lg m-2">
                            <div class="flex flex-col ">
                                <h2 class="text-xl font-bold mb-2">
                                    { Project Title}
                                </h2>
                                <div class="">
                                    <div
                                        class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold focus:outline-none focus:ring-1 focus:ring-ring focus:ring-offset-1">
                                        {Task Status}
                                    </div>
                                    <div class="text-sm inline-flex w-fit items-center text-green-700 ">
                                        Due:{duedate}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 border-2 rounded-xl h-28">
                                <p
                                    class="text-gray-600 px-3 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                                    Project Description
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
            
            '
            ;
            @endphp
           
        </div>
    </div>
   
@include('components.footer')
</body>

</html>
{{-- screen based hidding element --}}
{{-- <div class="m-2 border-2 rounded-xl h-28  hidden md:block lg:block"> --}}

    {{-- a sampple card non edited version --}}
    {{--
    <div class="mx-auto my-auto">
        <div class="rounded-lg overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.02]">
            <div class="p-6 overflow-hidden">
                <h2 class="text-xl font-bold mb-2">Card Title</h2>
                <p class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                    This is a description of the card content. It can be a few sentences
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet tempore id ut quidem
                    voluptate similique excepturi in? Placeat animi dolor ipsam provident libero. Laboriosam
                    hic, animi voluptate quo earum vero. Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Exercitationem, enim alias. Perspiciatis dolor, illo consequatur aliquam fuga,
                    doloribus accusantium enim earum similique itaque accusamus hic, sunt fugit deleniti
                    deserunt facilis?
                </p>
            </div>
        </div>
    </div>
    --}}

    {{-- Used html/static version of card used --}}
    {{--
    <div class="mx-auto my-auto">
        <div class="rounded-lg w-fit overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.02]">
            <div class="p-6 overflow-hidden">
                <div class="flex flex-col ">
                    <h2 class="text-xl font-bold mb-2">Project Tiltle</h2>
                    <div class="">
                        <div
                            class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold focus:outline-none focus:ring-1 focus:ring-ring focus:ring-offset-1">
                            Task Status
                        </div>
                        <div class="text-sm inline-flex w-fit items-center text-green-700 ">
                            Due:{duedate}
                        </div>
                    </div>
                </div>
                <div class="mt-2 border-2 rounded-xl h-28">
                    <p class="text-gray-600 px-3 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro temporibus error
                        veritatis
                        accusamus,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro temporibus error
                        veritatis
                        accusamus,
                    </p>
                </div>
            </div>
        </div>
    </div>
    --}}