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
    <div class="m-8 p-8 rounded-lg bg-slate-200 border-slate-400 shadow-lg">
        <h2 class="text-2xl font-bold mb-5 md:mb-10 lg:mb-20">My projects</h2>
        <div class="grid m-2 md:grid-cols-2 xl:grid-cols-3 gap-4">
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
        </div>



    </div>

</body>

</html>