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

    <section id="#home" class="max-w-full pt-24 pb-20 lg:pt-28 md:pt-20 lg:pb-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="self-center w-full px-4 lg:w-1/2">
                    <h1 class="text-3xl font-semibold text-primary md:text-4xl lg:text-4xl">
                        Bimbel Bahasa Inggris untuk anak - anak dengan Mentor yang berpengalaman
                    </h1>
                    <h2 class="py-5 mb-5 text-sm font-medium text-gray-400 lg:text-lg">
                        Dengan bergabung dengan Naladhipa Courses anak anda akan merasakan pengalaman yang seru saat
                        belajar bahasa inggris
                    </h2>
                    <div class="items-center justify-between">
                        <ul class="flex flex-row py-10 space-x-5 lg:md:space-x-10">
                            <li>
                                <a href="#"
                                    class="px-10 py-4 text-xl font-semibold text-white rounded-xl bg-primary">
                                    Yuk Gabung
                                </a>
                            </li>
                            <li class="-mt-3 text-lg font-semibold text-dark">
                                <span class="px-3">10+</span>
                                <br>
                                <span>Siswa</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="self-end w-full px-4 lg:w-1/2 lg:py-0 ">
                    <img src="{{ asset('/assets/img/Hero.png') }}" class="hidden lg:block" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="#feature" name="feature" class="py-5 lg:py-10 lg:pb-20 bg-secondary lg:max-w-full">
        <div class="container">
            <div class="py-8 mb-10 text-center lg:px-72 lg:py-20 lg:mb-5">
                <h1 class="text-2xl font-semibold lg:text-4xl text-primary"> Naladhipa Courses merupakan tempat
                    terbaik
                    untuk bimbel
                    Bahasa Inggris </h1>
            </div>
            <div class="flex-wrap px-3 py-5 lg:py-20 lg:flex gap-y-10 lg:px-10">
                <div class="pb-5 lg:w-4/12 md:w-6/12">
                    <div class="max-w-sm p-6 border border-gray-200 shadow-lg bg-primary rounded-xl">
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
                                            Terjangkau</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p class="pt-5 mb-3 text-lg font-normal text-white dark:text-gray-400">Dengan harga mulai 100
                            ribu perbulan anak anda sudah bisa mengikuti bimbel disini.</p>

                    </div>

                </div>
                <div class="pb-5 lg:w-4/12 md:w-6/12">
                    <div class="max-w-sm p-6 border border-gray-200 shadow-lg bg-primary rounded-xl">
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
                                            Flexible</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p class="pt-5 mb-3 text-lg font-normal text-white dark:text-gray-400">Pembelajaran dengan waktu
                            yang flexible, orang tua dapat memilih jadwal bimbel</p>

                    </div>

                </div>
                <div class="pb-5 lg:w-4/12 md:w-6/12">
                    <div class="max-w-sm p-6 border border-gray-200 shadow-lg bg-primary rounded-xl">
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
                        <p class="pt-5 mb-3 text-lg font-normal text-white dark:text-gray-400">Dengan menggunakan
                            metode Fun
                            Learning, siswa dapat lebih cepat belajar</p>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="#about" name="about" class="py-10 bg-white lg:py-20 ">
        <div class="container">
            <div class="px-4 text-left">
                <h1 class="pb-2 text-xl font-semibold lg:text-3xl text-primary">
                    Kenalan yuk sama Mentor di
                </h1>
                <h1 class="text-3xl font-semibold lg:text-4xl text-primary">
                    Naladhipa Course
                </h1>
            </div>
            <div class="flex-wrap px-3 py-5 lg:px-4 lg:py-10 lg:flex gap-y-10 ">
                <div class="items-center self-center pb-10 lg:w-6/12">
                    <img src="{{ asset('/assets/img/Mentor.png') }}" class="max-w-xs lg:max-w-lg "alt="">
                </div>
                <div class="items-center self-center lg:w-6/12">
                    <h1 class="py-2 text-4xl font-semibold">Mentor Albert</h1>
                    <h1 class=" text-dark lg:text-2xl">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged
                    </h1>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
