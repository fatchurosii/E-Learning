<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>

<header class="pt-10 lg:pt-6">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center text-lg font-semibold text-primary">
                Naladhipa Course
            </a>
            <div class="flex md:order-2">
                <button type="button"
                    class="px-5 py-2.5 mr-3 hover:shadow-lg font-semibold text-center text-white rounded-lg bg-primary hover:bg-purple-600 focus:ring-4 focus:outline-none focus:ring-purple-300 text-sm md:mr-0">Masuk</button>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-base text-primary md:text-primary md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-base text-gray-700 md:hover:text-purple-700 md:p-0">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-base text-gray-700 md:hover:text-purple-700 md:p-0">Testimonials</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-base text-gray-700 md:hover:text-purple-700 md:p-0">Harga</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-base text-gray-700 md:hover:text-purple-700 md:p-0">Kontak</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>


<body class="antialiased ">

    <section id="#home" class="lg:pt-28 pt-24 md:pt-20  max-w-full lg:pb-36 pb-20">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="self-center w-full px-4 lg:w-1/2">
                    <h1 class="text-3xl font-semibold text-primary md:text-4xl lg:text-4xl">
                        Bimbel Bahasa Inggris untuk anak - anak dengan Mentor yang berpengalaman
                    </h1>
                    <h2 class="py-5 mb-5 font-medium text-gray-400 lg:text-lg text-sm">
                        Dengan bergabung dengan Naladhipa Courses anak anda akan merasakan pengalaman yang seru saat
                        belajar bahasa inggris
                    </h2>
                    <div class="items-center justify-between">
                        <ul class="flex flex-row lg:md:space-x-10 space-x-5 py-10">
                            <li>
                                <a href="#"
                                    class="px-10 py-4 font-semibold text-xl text-white rounded-xl bg-primary">
                                    Yuk Gabung
                                </a>
                            </li>
                            <li class="text-dark text-lg font-semibold -mt-3">
                                <span class="px-3">10+</span>
                                <br>
                                <span>Siswa</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="self-end w-full px-4 lg:w-1/2 lg:py-0 ">
                    <img src="{{ asset('/assets/img/Hero.png') }}" class="lg:block hidden" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="#feature" class="bg-secondary lg:max-w-full py-10 ">
        <div class="container">
            <div class="text-center lg:px-72 lg:py-20 py-8 lg:mb-5 mb-10">
                <h1 class="text-2xl lg:text-4xl font-semibold text-primary"> Naladhipa Courses merupakan tempat
                    terbaik
                    untuk bimbel
                    Bahasa Inggris </h1>
            </div>
            <div class="lg:flex flex-wrap gap-y-10 lg:px-10 px-3">
                <div class="lg:w-4/12 md:w-6/12">
                    <div class="p-6 max-w-sm bg-primary rounded-xl shadow-lg border border-gray-200">
                        <div class="items-center justify-between">
                            <ul class="flex flex-row space-x-5">
                                <li>
                                    <img src="{{ asset('/assets/img/Time-Circle.svg') }}" class="w-16 h-16"
                                        alt="time">
                                </li>
                                <li class="mt-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-semibold tracking-tight text-white dark:text-white">
                                            Fun Learning</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p class="mb-3 text-lg font-normal text-white dark:text-gray-400 pt-5">Dengan menggunakan
                            metode Fun
                            Learning, siswa dapat lebih cepat belajar</p>

                    </div>

                </div>
                <div class="lg:w-4/12 md:w-6/12">
                    <div class="p-6 max-w-sm bg-primary rounded-xl shadow-lg border border-gray-200">
                        <div class="items-center justify-between">
                            <ul class="flex flex-row space-x-5">
                                <li>
                                    <img src="{{ asset('/assets/img/Time-Circle.svg') }}" class="w-16 h-16"
                                        alt="time">
                                </li>
                                <li class="mt-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-semibold tracking-tight text-white dark:text-white">
                                            Fun Learning</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p class="mb-3 text-lg font-normal text-white dark:text-gray-400 pt-5">Dengan menggunakan
                            metode Fun
                            Learning, siswa dapat lebih cepat belajar</p>

                    </div>

                </div>
                <div class="lg:w-4/12 md:w-6/12">
                    <div class="p-6 max-w-sm bg-primary rounded-xl shadow-lg border border-gray-200">
                        <div class="items-center justify-between">
                            <ul class="flex flex-row space-x-5">
                                <li>
                                    <img src="{{ asset('/assets/img/Time-Circle.svg') }}" class="w-16 h-16"
                                        alt="time">
                                </li>
                                <li class="mt-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-semibold tracking-tight text-white dark:text-white">
                                            Fun Learning</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p class="mb-3 text-lg font-normal text-white dark:text-gray-400 pt-5">Dengan menggunakan
                            metode Fun
                            Learning, siswa dapat lebih cepat belajar</p>

                    </div>

                </div>

            </div>
        </div>
    </section>

</body>

</html>
