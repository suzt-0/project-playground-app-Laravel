<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.navbar-basic')
    <h2 class="text-2xl m-2 font-bold mb-5 md:mb-10 lg:mb-20">My projects</h2>
    <main class="flex-1 p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-id="6">
        <div class="rounded-lg border shadow-sm bg-card text-card-foreground" data-id="7" data-v0-t="card">
            <div class="flex flex-col space-y-1.5 p-6" data-id="8">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight" data-id="9">Website
                    Redesign</h3>
                <p class="text-sm text-muted-foreground" data-id="10">Updating the company website</p>
            </div>
            <div class="p-6" data-id="11">
                <div class="flex items-center justify-between" data-id="12">
                    <div class="flex items-center gap-2" data-id="13"><span
                            class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8 border" data-id="14"><img
                                class="aspect-square h-full w-full" data-id="15" src="/placeholder-user.jpg"></span>
                        <div data-id="17">
                            <div class="font-medium" data-id="18">John Doe</div>
                            <div class="text-xs text-muted-foreground" data-id="19">Project Lead</div>
                        </div>
                    </div>
                    <div class="text-xs text-muted-foreground" data-id="20">Due: June 30, 2024</div>
                </div>
                <div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full my-4"
                    data-id="21"></div>
                <div class="flex items-center justify-between" data-id="22">
                    <div class="text-sm font-medium" data-id="23">Progress</div>
                    <div class="text-sm font-medium" data-id="24">75%</div>
                </div>
                <div class="w-full  rounded-full h-2 mt-2" data-id="25">
                    <div class="bg-primary h-2 rounded-full w-3/4" data-id="26"></div>
                </div>
            </div>
        </div>
        <div class="rounded-lg border shadow-sm bg-card text-card-foreground" data-id="27" data-v0-t="card">
            <div class="flex flex-col space-y-1.5 p-6" data-id="28">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight" data-id="29">Mobile App
                    Development</h3>
                <p class="text-sm text-muted-foreground" data-id="30">Building a new mobile app</p>
            </div>
            <div class="p-6" data-id="31">
                <div class="flex items-center justify-between" data-id="32">
                    <div class="flex items-center gap-2" data-id="33"><span
                            class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8 border" data-id="34"><img
                                class="aspect-square h-full w-full" data-id="35" src="/placeholder-user.jpg"></span>
                        <div data-id="37">
                            <div class="font-medium" data-id="38">Jane Doe</div>
                            <div class="text-xs text-muted-foreground" data-id="39">Project Lead</div>
                        </div>
                    </div>
                    <div class="text-xs text-muted-foreground" data-id="40">Due: August 15, 2024</div>
                </div>
                <div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full my-4"
                    data-id="41"></div>
                <div class="flex items-center justify-between" data-id="42">
                    <div class="text-sm font-medium" data-id="43">Progress</div>
                    <div class="text-sm font-medium" data-id="44">50%</div>
                </div>
                <div class="w-full bg-muted rounded-full h-2 mt-2" data-id="45">
                    <div class="bg-primary h-2 rounded-full w-1/2" data-id="46"></div>
                </div>
            </div>
        </div>
        <div class="rounded-lg border shadow-sm bg-card text-card-foreground" data-id="47" data-v0-t="card">
            <div class="flex flex-col space-y-1.5 p-6" data-id="48">
                <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight" data-id="49">Marketing
                    Campaign</h3>
                <p class="text-sm text-muted-foreground" data-id="50">Planning a new marketing campaign</p>
            </div>
            <div class="p-6" data-id="51">
                <div class="flex items-center justify-between" data-id="52">
                    <div class="flex items-center gap-2" data-id="53"><span
                            class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8 border" data-id="54"><img
                                class="aspect-square h-full w-full" data-id="55" src="/placeholder-user.jpg"></span>
                        <div data-id="57">
                            <div class="font-medium" data-id="58">Sarah Johnson</div>
                            <div class="text-xs text-muted-foreground" data-id="59">Project Lead</div>
                        </div>
                    </div>
                    <div class="text-xs text-muted-foreground" data-id="60">Due: November 1, 2024</div>
                </div>
                <div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full my-4"
                    data-id="61"></div>
                <div class="flex items-center justify-between" data-id="62">
                    <div class="text-sm font-medium" data-id="63">Progress</div>
                    <div class="text-sm font-medium" data-id="64">25%</div>
                </div>
                <div class="w-full bg-muted rounded-full h-2 mt-2" data-id="65">
                    <div class="bg-primary h-2 rounded-full w-1/4" data-id="66"></div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>