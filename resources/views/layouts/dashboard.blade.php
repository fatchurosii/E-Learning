<!doctype html>
<html class="scroll-smooth" x-data="data()" lang="en">

@include('includes.dashboard.meta')

<title>@yield('title' | 'Naladhipa')</title>

@stack('before-style')
@include('includes.dashboard.style')
@stack('after-style')

<body class="antialiased bg-gray-100">
    <div class="relative min-h-screen md:flex">
        @include('components.header')

        @include('components.sidebar')

        {{-- index --}}

        <div class="container flex-auto mx-auto">
            <div class="flex flex-col ">

                @yield('content')

            </div>
        </div>

</body>

@stack('before.script')
@include('includes.dashboard.script')
@stack('after.script')

</html>
