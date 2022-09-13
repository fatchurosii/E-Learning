<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>

<body class="bg-gray-100">
    <div class="relative min-h-screen md:flex">
        <div class="fixed z-20 flex justify-between w-full p-6 bg-white md:hidden ">
            <p class="font-semibold text-primary">Naladhipa Courses</p>
            <nav x-data="{ open: false }">
                <button class="relative w-10 h-10 text-gray-500 bg-white mobile-menu-button focus:outline-none"
                    @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <div class="absolute block w-5 transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                        <span aria-hidden="true"
                            class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                            :class="{ 'rotate-45': open, ' -translate-y-1.5': !open }"></span>
                        <span aria-hidden="true"
                            class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                            :class="{ 'opacity-0': open }"></span>
                        <span aria-hidden="true"
                            class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                            :class="{ '-rotate-45': open, ' translate-y-1.5': !open }"></span>
                    </div>
                </button>
            </nav>
        </div>

        <aside
            class="fixed inset-y-0 left-0 z-50 flex-shrink-0 w-64 px-4 overflow-y-auto transition duration-200 transform -translate-x-full bg-white shadow-md md:h-fullp-6 sidebar shadow-slate-200 md:translate-x-0 md:relative">
            <div class="items-center px-4 py-6 pt-10 pb-10 bg-white border-b border-gray-100">
                <a href="" class="w-full text-base font-semibold cursor-pointer text-primary shadow-gray-50">
                    Naladhipa Courses</a>
            </div>

            <nav class="flex flex-col flex-1 px-4 pb-4 my-4 ">
                <div class="border-b border-gray-100">

                    {{-- Menu Siswa --}}
                    <button type="button"
                        class="mb-4  py-2.5 px-4 hover:bg-primary hover:text-white rounded-md cursor-pointer flex items-center gap-x-3"aria-controls="dropdown-example"
                        data-collapse-toggle="dropdown-example"><svg class="w-6 h-6" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg><span class="text-lg">Siswa</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kategori
                                Siswa</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Data
                                Siswa</a>
                        </li>
                    </ul>
                    {{-- Menu Mentor --}}
                    <a href=""
                        class="mb-4  py-2.5 px-4  hover:bg-primary hover:text-white rounded-md cursor-pointer flex items-center gap-x-3"><svg
                            class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg><span class="text-lg">Mentor</span></a>

                    {{-- Menu Kelas --}}
                    <button type="button"
                        class="mb-4   py-2.5 px-4  hover:bg-primary hover:text-white rounded-md cursor-pointer  flex items-center gap-x-3"
                        aria-controls="dropdown-kelas" data-collapse-toggle="dropdown-kelas"><svg class="w-6 h-6"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg><span class="text-lg">Kelas</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-kelas" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kategori
                                Kelas</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Data
                                Kelas</a>
                        </li>
                    </ul>

                    {{-- menu Rapor --}}
                    <a href=""
                        class="mb-4 text-base  py-2.5 px-4  hover:bg-primary hover:text-white rounded-md cursor-pointer flex items-center gap-x-3"><svg
                            class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg> <span class="text-lg "> Rapor</span></a>

                    {{-- Menu User --}}
                    <button type="button"
                        class="mb-4 py-2.5 px-4 hover:bg-primary hover:text-white rounded-md cursor-pointer flex items-center gap-x-3"aria-controls="dropdown-user"
                        data-collapse-toggle="dropdown-user"><svg class="w-6 h-6" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg><span class="text-lg">User</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-user" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Role</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Data
                                Siswa</a>
                        </li>
                    </ul>

                </div>

                {{-- Logout --}}
                <div class="my-4">
                    <a href=""
                        class="mb-4 my-4 text-base  py-2.5 px-4  hover:bg-primary hover:text-white rounded-md cursor-pointer flex items-center gap-x-3"><svg
                            class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg> <span class="text-lg ">Logout</span></a>
                </div>
            </nav>
        </aside>

        {{-- index --}}

        <div class="container flex-auto mx-auto">
            <div class="flex flex-col ">


                {{-- start card --}}
                <div class="grid gap-10 mb-10 lg:mt-20 mt-36 lg:grid-cols-3 sm:grid-cols-2 ">

                    <div class="flex items-center justify-between p-6 bg-white rounded-lg ">
                        <div>
                            <p class="text-lg font-normal text-gray-500">Jumlah Siswa</p>
                            <h1 class="text-5xl font-semibold text-primary">5</h1>
                        </div>
                        <div class="p-3 text-white rounded-lg bg-primary">
                            <svg class="w-12 h-12 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </div>

                    </div>

                    <div class="flex items-center justify-between p-6 bg-white rounded-lg">
                        <div>
                            <p class="text-lg font-normal text-gray-500">Total Kelas</p>
                            <h1 class="text-5xl font-semibold text-emerald-500">4</h1>
                        </div>
                        <div class="p-3 text-white rounded-lg bg-emerald-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>

                    </div>


                    <div class="flex items-center justify-between p-6 bg-white rounded-lg">
                        <div>
                            <p class="text-lg font-normal text-gray-500">Jumlah Mentor</p>
                            <h1 class="text-5xl font-semibold text-cyan-500">5</h1>
                        </div>
                        <div class="p-3 text-white rounded-lg bg-cyan-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>

                    </div>



                </div>
                {{-- end card --}}


                <div class="overflow-x-auto md:relative sm:rounded-lg">
                    <div class="flex items-center justify-between pb-4">
                    </div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alamat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor HP
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kelas
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full"
                                        src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Kedondong Kidul 1/26 D Surabaya Jawa Timur</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">0817239412</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Online</p>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full"
                                        src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Kedondong Kidul 1/26 D Surabaya Jawa Timur</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">0817239412</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Online</p>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full"
                                        src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Kedondong Kidul 1/26 D Surabaya Jawa Timur</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">0817239412</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Online</p>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full"
                                        src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Kedondong Kidul 1/26 D Surabaya Jawa Timur</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">0817239412</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Online</p>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full"
                                        src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Kedondong Kidul 1/26 D Surabaya Jawa Timur</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">0817239412</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-base font-medium">Online</p>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>



            </div>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
{{-- <script>
    const btn = document.querySelector(".mobile-menu-button");
    const sidebar = document.querySelector(".sidebar");


    btn.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    })
</script> --}}
<script src="{{ asset('js/script.js') }}" defer></script>

</html>
