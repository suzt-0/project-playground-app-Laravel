<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TEST-Project Description</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-green-50 text-slate-900 ">
  {{-- navbar here --}}
  @include('components.navbar-basic')
  {{-- 1st section --}}
  <section class="w-full md:pb-24 md:pt-8">
    <div class="w-full px-4 md:px-6">
      <div class="flex flex-col-reverse gap-2 md:gap-6 md:grid md:grid-cols-2">
        {{-- left --}}
        <div class="flex flex-col justify-center space-y-4">
          <div class="space-y-2">
            <h1 class="text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none">Turn Ideas into Reality</h1>
            <p class="max-w-[600px] text-slate-600 md:text-xl">Our powerful project management platform turns
              your ideas into reality, helping teams stay organized, collaborate effectively, and deliver projects on
              time.</p>
          </div>
          <div class="flex flex-col gap-2 min-[400px]:flex-row">
            @auth
            <a class="inline-flex h-10 items-center justify-center rounded-md px-8 text-sm font-medium text-primary-foreground shadow transition-colors bg-slate-300 hover:bg-indigo-600 hover:text-indigo-100"
            href="{{route('dashboard')}}">
            Dashboard
          </a>
            @else
            <a class="inline-flex h-10 items-center justify-center rounded-md px-8 text-sm font-medium text-primary-foreground shadow transition-colors bg-slate-400 hover:bg-slate-800 hover:text-stone-100"
              href="{{route('register')}}">
              Get Started
            </a>
            <a class="inline-flex h-10 items-center justify-center rounded-md border px-8 text-sm font-medium shadow-sm transition-colors bg-slate-300 hover:bg-indigo-600 hover:text-indigo-100"
              href="{{route('login')}}">
              Login
            </a>
            @endauth
          </div>
        </div>
        {{-- right --}}
        <div class="mx-auto overflow-hidden p-2 rounded-2xl object-cover w-full md:aspect-square">
          <img src="{{asset('images/banner-2.jpg')}}" width="550" height="550" alt="banner image"
            class="mx-auto  rounded-3xl object-cover md:order-last md:aspect-square">

        </div>
      </div>
    </div>
  </section>
  {{-- about section --}}
  <span id="about"></span>
  <section class="w-full py-12 md:py-24 lg:py-32">
    <div class=" px-4 md:px-6">
      <div class="flex flex-col items-center justify-center space-y-4 text-center">
        <div class="space-y-2">
          <h2 class="font-bold tracking-tighter text-4xl md:text-5xl lg:text-6xl">About Us</h2>
          <p class=" cursor-default text-center md:text-2xl  lg:text-3xl">We are <span class="text-blue-600 hover:underline">Solution Seekers</span>
            and we present to you
            <br> <span class="text-green-600 mb-6 hover:underline">Project Management System</span> <br>
            Easy-to-use tool for managing simpler projects without any hassel. Manage
            your projects, Join other projects and collaborate with your team to realize your ideas using a
            simple tool.
          </p>
        </div>
      </div>
    </div>
  </section>
  {{-- Meet the team --}}
  <section class="w-full py-12 mb-10 md:py-24 lg:py-32">
    <span id="team"></span>
    <div class=" py-24 sm:py-32">
      <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 ">
        <div class="w-full flex justify-center">
          <h2 class="font-bold tracking-tight text-4xl md:text-5xl lg:text-6xl">Meet the Team</h2>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
          <li>
            <a href="https://github.com/suzt-0" target="blank">
              <div class="rounded-lg overflow-hidden bg-slate-300 shadow-lg transition-all hover:scale-[1.02]">
                <div class="p-6 overflow-hidden">
                  <h2 class="text-2xl font-bold mb-2">Backend Developer</h2>
                  <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="{{ asset('images/sujit.png') }}" alt="Sujit Bhattarai">
                    <div>
                      <h3 class="text-xl font-semibold leading-7 tracking-tight">Sujit Bhattarai</h3>
                      {{-- <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p> --}}
                    </div>
                  </div>
                  <p class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                    Performed a crucial role in ensuring that the application's server-side is robust, secure, and
                    efficient,
                    ultimately providing a seamless experience for end users.
                  </p>

                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="https://github.com/suzt-0" target="blank">
              <div class="rounded-lg overflow-hidden bg-slate-300 shadow-lg transition-all hover:scale-[1.02]">
                <div class="p-6 overflow-hidden">
                  <h2 class="text-2xl font-bold mb-2">Frontend Developer</h2>
                  <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="{{ asset('images/sujit.png') }}" alt="Sujit Bhattarai">
                    <div>
                      <h3 class="text-xl font-semibold leading-7 tracking-tight">Sujit Bhattarai</h3>
                      {{-- <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p> --}}
                    </div>
                  </div>
                  <p class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                    Played a vital role in bringing the visual and interactive aspects of a web application to life,
                    ensuring that users have an engaging and seamless experience.

                  </p>

                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="https://github.com/suzt-0" target="blank">
              <div class="rounded-lg overflow-hidden bg-slate-300 shadow-lg transition-all hover:scale-[1.02]">
                <div class="p-6 overflow-hidden">
                  <h2 class="text-2xl font-bold mb-2">System Designer</h2>
                  <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="{{ asset('images/sujit.png') }}" alt="Sujit Bhattarai">
                    <div>
                      <h3 class="text-xl font-semibold leading-7 tracking-tight">Sujit Bhattarai</h3>
                      {{-- <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p> --}}
                    </div>
                  </div>
                  <p class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                    Ensured that web application is well-designed, robust, and aligned with expected objectives,
                    ultimately
                    contributing to the success of this project.

                  </p>

                </div>
              </div>
            </a>
          </li>

          <li>
            <a href="https://github.com/suzt-0" target="blank">
              <div class="rounded-lg overflow-hidden bg-slate-300 shadow-lg transition-all hover:scale-[1.02]">
                <div class="p-6 overflow-hidden">
                  <h2 class="text-2xl font-bold mb-2">Quality Assurance</h2>
                  <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="{{ asset('images/sujit.png') }}" alt="Sujit Bhattarai">
                    <div>
                      <h3 class="text-xl font-semibold leading-7 tracking-tight">Sujit Bhattarai</h3>
                      {{-- <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p> --}}
                    </div>
                  </div>
                  <p class="text-gray-600 h-max  overflow-hidden text-ellipsis max-h-12 md:max-h-12 lg:max-h-24">
                    Ensured that the web application is reliable, performs well, and meets proposed expectations,
                    ultimately
                    contributing to the success of the project.
                  </p>

                </div>
              </div>
            </a>
          </li>

          <!-- More people... -->
        </ul>
      </div>
    </div>
  </section>
  {{-- Contact us --}}
  <span id="contact"></span>
  <section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container px-4 md:px-6">
      <div class="flex flex-col items-center justify-center space-y-4 text-center">
        <div class="space-y-2">
          <h2 class="text-3xl font-bold tracking-tighter sm:text-5xl">Contact Us</h2>
          <p class="max-w-[900px] text-muted-foreground md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">Have
            a question or need help?</p>
        </div>
        <div class="mx-auto w-full max-w-sm gap-x-8 grid grid-cols-3">
          {{-- facebook --}}
          <a class="grid rounded-full overflow-hidden border-2 hover:border-green-500 border-spacing-1"
            href="https://www.facebook.com/SujitBhattarai2000/" target="blank">
            <img src="{{ asset('images/facebook.png') }}" alt="facebook">
          </a>
          {{--linkedin--}}
          <a class="grid rounded-full overflow-hidden border-2 hover:border-green-500 border-spacing-1"
            href="https://www.linkedin.com/in/sujit-bhattarai-617b28237" target="blank">
            <img src="{{ asset('images/linkedin.png') }}" alt="linkedin">
          </a>
          {{--github--}}
          <a class="grid rounded-full overflow-hidden border-2 hover:border-green-500 border-spacing-1"
            href="https://github.com/suzt-0" target="blank">
            <img src="{{ asset('images/github.png') }}" alt="github">
          </a>
        </div>
      </div>
    </div>
  </section>
  {{-- footer  --}}
  @include('components.footer')
</body>

</html>