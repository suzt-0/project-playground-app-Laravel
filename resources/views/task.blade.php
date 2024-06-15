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
    {{-- navbar starts here  --}}
    @include('components.navbar-basic')
    {{-- navbar ends here  --}}

</body>

</html>