<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>

<header class="bg-white  shadow-sm lg:shadow-none  w-full fixed z-10">
    <nav class="border-gray-200 py-2.5 rounded px-4 ">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center lg:text-2xl tracking-wide text-lg font-semibold text-primary">
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

    <section id="#" class="max-w-full pt-24 pb-20 lg:pt-28 md:pt-20 lg:pb-36">
        <div class="container mx-auto ">
            <div class="flex flex-wrap">
                <div class="self-center w-full lg:px-0 px-4 lg:w-1/2">
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

    <section id="feature" name="feature" class="py-5 lg:py-10 lg:pb-20 bg-secondary lg:max-w-full">
        <div class="container mx-auto">
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

    <section id="about" name="about" class="py-10 bg-white lg:py-20 ">
        <div class="container mx-auto">
            <div class="lg:px-0 px-4 text-left">
                <h1 class="pb-2 text-xl font-medium lg:text-3xl text-primary">
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
                    <h1 class="pb-2 text-4xl font-semibold">Mentor Albert</h1>
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

    <section class="py-10 bg-secondary lg:py-20" id="price" name="price">
        <div class="container mx-auto">
            <div class="lg:px-0 px-4 text-left">
                <h1 class="pb-2 text-xl font-semibold lg:text-3xl text-primary">
                    Pilihan Paket
                </h1>
            </div>
            <div class="flex-wrap px-3 py-5 lg:py-20 lg:flex gap-y-10  justify-center">
                <div class="pb-10 lg:w-4/12 md:w-6/12">
                    <div class="max-w-sm p-6 shadow-lg bg-white rounded-lg">
                        <div class="items-center">
                            <h1 class="text-primary pb-2 text-3xl font-semibold uppercase">Offline Class</h1>
                            <h2 class="text-gray-400 text-base font-normal pb-5">Benefit kelas</h2>
                        </div>
                        <ul class="grid grid-cols-1 gap-y-2 lg:gap-y-4 lg:text-base text-sm" role="list">
                            <li class="flex items-center text-dark"><svg class="w-6 h-6 text-primary mr-4"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>Belajar secara Offline</li>
                            <li class="flex items-center"><svg class="w-6 h-6 text-primary mr-4" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>Konsultasi belajar</li>
                            <li class="flex items-center"><svg class="w-6 h-6 text-primary mr-4" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>Akses kelas online</li>
                            <li class="flex items-center"><svg class="w-6 h-6 text-primary mr-4" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>4 x Pertemuan / bulan</li>
                        </ul>

                        <hr class="mt-4 mb-4">
                        <h1 class="text-dark text-2xl font-medium text-center"> 100 ribu / Bulan</h1>
                        <div class="mt-5 flex justify-center">
                            <a href="https://api.whatsapp.com/send?phone=081703876554&text=Halo%20saya%20ingin%20mendaftar%20paket%20kelas%20offline"
                                class=" py-3 text-center w-full rounded-xl bg-primary font-semibold text-white fade hover:bg-purple-700 hover:text-white ">
                                Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="pb-5 lg:w-4/12 md:w-6/12">
                    <div class="max-w-sm p-6 shadow-lg bg-white rounded-lg">
                        <div class="items-center">
                            <h1 class="text-primary pb-2 text-3xl font-semibold uppercase">Online Class</h1>
                            <h2 class="text-gray-400 text-base font-normal pb-5">Benefit kelas</h2>
                        </div>
                        <ul class="grid grid-cols-1 gap-y-2 lg:gap-y-4 lg:text-base text-sm" role="list">
                            <li class="flex items-center text-dark"><svg class="w-6 h-6 text-primary mr-4"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>Belajar secara Online (video call)</li>
                            <li class="flex items-center"><svg class="w-6 h-6 text-primary mr-4" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>Konsultasi belajar</li>
                            <li class="flex items-center"><svg class="w-6 h-6 text-primary mr-4" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>Akses kelas online</li>
                            <li class="flex items-center"><svg class="w-6 h-6 text-primary mr-4" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>8 x Pertemuan / bulan</li>
                        </ul>

                        <hr class="mt-4 mb-4">
                        <h1 class="text-dark text-2xl font-medium text-center"> 150 ribu / Bulan</h1>
                        <div class="mt-5 flex justify-center">
                            <a href="https://api.whatsapp.com/send?phone=081703876554&text=Halo%20saya%20ingin%20mendaftar%20paket%20kelas%20online"
                                class=" py-3 text-center w-full rounded-xl bg-primary font-semibold text-white fade hover:bg-purple-700 hover:text-white ">
                                Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="bg-white lg:py-36 py-20 " id="testimonials">
        <div class="container mx-auto">
            <div class="flex-wrap lg:flex ">
                <div class="lg:px-0 px-4 self-center lg:w-1/2 pb-10 lg:pb-0 ">
                    <h1 class="text-4xl font-medium text-gray-500 pb-5">Sebuah cerita</h1>
                    <h1 class="text-3xl lg:text-6xl font-semibold text-primary ">Pengalaman saat belajar di Naladhipa
                        Courses</h1>
                </div>
                <div class="lg:w-1/2 mt-5 self-end w-full lg:pl-40">
                    <div class="p-8 rounded-lg shadow-lg lg:max-w-md bg-white">
                        <div class="items-center justify-between">
                            <ul class="flex flex-row space-x-5">
                                <li>
                                    <img src="{{ asset('/assets/img/testi.png') }}" class="w-16 h-16" alt="time">
                                </li>
                                <li class="mt-5">
                                    <h5 class="mb-2 text-2xl font-semibold tracking-normal text-dark ">
                                        Soleh Panjaitan</h5>
                                </li>
                            </ul>
                        </div>
                        <p class="pt-5 mb-3 text-xl font-normal text-gray-400">" Saya sangat senang sekali
                            belajar di Naladhipa Courses karena mentornya sangat ramah dan saya disana belajar dengan
                            menyenangkan karena metode belajarnya sangat mengasyikkan. "</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white lg:py-20 py-10 mb-20" id="contact">
        <div class="container mx-auto">
            <div class="flex-wrap lg:flex">
                <div class="lg:px-0 px-4 self-center lg:w-1/2 pb-5  ">
                    <h1 class=" text-2xl lg:text-5xl font-semibold text-primary pb-5">Tertarik untuk
                        belajar ?</h1>
                    <h1 class="text-base lg:text-xl font-medium text-gray-400 mb-10 lg:mb-14">Silahkan segera hubungi
                        kontak
                        dibawah ini untuk konsultasi mengenai bimbingan belajar Naladhipa Courses</h1>
                    <a href="https://api.whatsapp.com/send?phone=081703876554"
                        class=" py-3 px-2 lg:py-4 font-semibold bg-primary text-white rounded-md lg:px-10"><i
                            class="fa-brands fa-whatsapp"></i>Silahkan
                        Hubungi
                        Via Whatsapp</a>
                </div>

                <div class="relative lg:w-1/2 mt-10 self-end w-full lg:pl-20 ">
                    <img src="{{ asset('/assets/img/kontak.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <footer class="w-full bg-footer-dark py-10 lg:py-20" id="footer">
        <div class="container mx-auto">
            <div class="flex-wrap justify-between lg:flex">
                <div class="lg:w-4/12 self-start pr-32  py-3">
                    <h1 class="text-white text-2xl lg:text-4xl font-semibold mb-3">Naladhipa Courses</h1>
                    <p class="text-white  text-base lg:text-lg font-regular">Merupakan bimbel bahasa inggris yang
                        menghadirkan konsep
                        fun learning dalam pembelajarannya</p>
                </div>
                <div class="py-3 lg:w-2/12">
                    <h1 class="text-white  font-semibold text-2xl lg:text-4xl mb-2">Follow us
                    </h1>
                    <ul class="flex-wrap flex flex-col space-y-1">
                        <li>
                            <a href="" class="text-white text-lg">Instagram</a>
                        </li>
                        <li>
                            <a href="" class="text-white text-lg">Facebook</a>
                        </li>
                    </ul>
                </div>
                <div class="py-3 lg:w-2/12">
                    <h1 class="text-white  font-semibold text-2xl lg:text-4xl mb-2">Kelas
                    </h1>
                    <ul class="flex-wrap flex flex-col space-y-1">
                        <li>
                            <a href="" class="text-white text-lg">Offline Class</a>
                        </li>
                        <li>
                            <a href="" class="text-white text-lg">Online Class</a>
                        </li>
                    </ul>
                </div>
                <div class=" py-3 lg:w-3/12">
                    <h1 class="text-white text-2xl lg:text-4xl font-semibold mb-2">Alamat</h1>
                    <p class="text-white text-semibold text-lg lg:text-2xl">Kendondong Kidul 1 / 26 D, Surabaya Jawa
                        Timur, Indonesia
                    </p>
                    <p class="text-white text-lg font-medium">081703876554</p>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>
