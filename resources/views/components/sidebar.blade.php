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
                class="mb-4  py-2.5 px-4  hover:bg-primary hover:text-white rounded-md cursor-pointer flex items-center gap-x-3"aria-controls="dropdown-example"
                data-collapse-toggle="dropdown-example"><svg class="w-6 h-6" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                class="mb-4 py-2.5 px-4  hover:bg-primary hover:text-white rounded-md cursor-pointer flex items-center gap-x-3"><svg
                    class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg><span class="text-lg">Mentor</span></a>

            {{-- Menu Kelas --}}
            <button type="button"
                class="mb-4   py-2.5 px-4  hover:bg-primary hover:text-white rounded-md cursor-pointer  flex items-center gap-x-3"
                aria-controls="dropdown-kelas" data-collapse-toggle="dropdown-kelas"><svg class="w-6 h-6" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                data-collapse-toggle="dropdown-user"><svg class="w-6 h-6" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                    <a href="{{ route('role.index') }}"
                        class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Role</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Data
                        User</a>
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
