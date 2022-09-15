@extends('layouts.dashboard', ['title' => 'Tambah Role'])

@section('content')
    <div class="p-5 bg-white rounded shadow-sm">
        <form action="{{ route('role.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mt-5">
                <label class="text-2xl text-dark ">NAMA ROLE</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full p-2 mt-2 bg-gray-200 border border-gray-200 rounded shadow-sm focus:outline-none focus:bg-white"
                    placeholder="Nama Role">

            </div>
            <div class="mt-5">
                <button type="submit"
                    class="p-2 text-white bg-indigo-500 rounded shadow-sm focus:outline-none hover:bg-indigo-700">SIMPAN
                    POST</button>
            </div>

        </form>
    </div>
@endsection
