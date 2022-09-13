@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

    <main class="overflow-y-auto">
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
                            <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                alt="Jese image">
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
                            <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                alt="Jese image">
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
                            <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                alt="Jese image">
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
                            <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                alt="Jese image">
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
                            <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                alt="Jese image">
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
    </main>
@endsection
