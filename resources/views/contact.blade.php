<!DOCTYPE html>
<html lang="en" class="bg-slate-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Project-Playground</title>
    @vite('resources/css/app.css')
    @vite('resources/css/dashboard.css')
</head>

<body>
    {{-- navbar starts here --}}
    @include('components.navbar-basic')
    {{-- navbar ends here --}}

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
            <div class="max-w-max col-span-1 lg:col-span-2">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet our Team</h2>
                <p class="mt-6 text-xl leading-8 text-gray-600">We are solution thinkers and we present to you "Project
                    Management System" a easy-to-use tool for managing simpler projects without any hassel. <br>Manage
                    your projects, Join other projects and collaborate with your team to realize your ideas using a
                    simple tool.</p>
            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">

                {{-- orginal version --}}

                {{-- <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander
                            </h3>
                            <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                        </div>
                    </div>
                </li> --}}

                {{-- edited version --}}
                <li>
                    <div class="rounded-lg overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.02]">
                        <div class="p-6 overflow-hidden">
                            <h2 class="text-xl font-bold mb-2">Backend Developer</h2>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    {{-- src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" --}}
                                    alt="Sujit Bhattarai">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Sujit Bhattarai</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                            <p
                                class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                                This is a description of the card content. It can be a few sentences

                            </p>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="rounded-lg overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.02]">
                        <div class="p-6 overflow-hidden">
                            <h2 class="text-xl font-bold mb-2">Frontend Developer</h2>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    {{-- src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" --}}
                                    alt="Sujit Bhattarai">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Sujit Bhattarai</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                            <p
                                class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                                This is a description of the card content. It can be a few sentences

                            </p>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="rounded-lg overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.02]">
                        <div class="p-6 overflow-hidden">
                            <h2 class="text-xl font-bold mb-2">Figma Designer</h2>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    {{-- src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" --}}
                                    alt="Sujit Bhattarai">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Sujit Bhattarai</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                            <p
                                class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                                This is a description of the card content. It can be a few sentences

                            </p>

                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="rounded-lg overflow-hidden bg-slate-100 shadow-lg transition-all hover:scale-[1.02]">
                        <div class="p-6 overflow-hidden">
                            <h2 class="text-xl font-bold mb-2">Quality Assurance</h2>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    {{-- src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" --}}
                                    alt="Sujit Bhattarai">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Sujit Bhattarai</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                            <p
                                class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                                This is a description of the card content. It can be a few sentences

                            </p>

                        </div>
                    </div>
                </li>

                <!-- More people... -->
            </ul>
        </div>
    </div>

</body>

</html>