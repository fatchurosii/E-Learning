@extends('layouts.dashboard')

@section('title', 'Role')

@section('content')

    <div class="p-5 bg-white rounded shadow-sm mt-28">
        <div class="grid grid-cols-6 mb-4 md:grid-cols-8 md:gap-4 ">
            <div class="col-span-3 mt-2 md:col-span-2">
                <a href="{{ route('role.create') }}"
                    class="w-full p-3 text-white bg-indigo-500 rounded shadow-sm focus:outline-none hover:bg-indigo-700">TAMBAH
                    ROLE</a>
            </div>
            <div class="col-span-3 md:col-span-6">
                <form action="{{ route('role.index') }}" method="GET">
                    <input type="text" name="search"
                        class="w-full p-2 bg-gray-200 border border-gray-200 rounded shadow-sm focus:outline-none focus:bg-white"
                        placeholder="ketik judul role dan enter">
                </form>
            </div>
        </div>

        <div class="overflow-x-auto md:relative sm:rounded-lg">
            <div class="flex items-center justify-between pb-4">

            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="items-center">
                        <th scope="col" class="px-6 py-3 ">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $key => $role)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900">
                                <div class="pl-3">
                                    <p class="text-base font-semibold">{{ $key + 1 }}</p>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                <p class="text-base font-medium">{{ $role->name }}</p>
                            </td>
                            <td class="inline-flex px-6 py-4 text-center ">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('role.destroy', $role) }}" method="POST">
                                    <button
                                        class="px-4 py-2 mr-2 text-xs text-white rounded bg-emerald-500 hover:border-indigo-700 focus:outline-none"><a
                                            href="{{ route('role.edit', $role) }}">EDIT</a></button>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-4 py-2 text-xs text-white bg-red-500 rounded hover:border-red-700 focus:outline-none">
                                        HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="p-3 mb-3 text-white bg-red-500 rounded shadow-sm">
                            Data Belum Tersedia!
                        </div>
                    @endforelse

                </tbody>
            </table>
        </div>
    @endsection
