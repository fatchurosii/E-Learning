@extends('layouts.dashboard')
@section('title', 'Edit Role')

@section('content')
    <div class="p-5 mt-20 bg-white rounded shadow-sm">
        <form action="{{ route('role.update', $role) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-5">
                <label>Nama Role</label>
                <input type="text" name="name" value="{{ old('role', $role->name) }}"
                    class="w-full p-2 mt-2 bg-gray-200 border border-gray-200 rounded shadow-sm focus:outline-none focus:bg-white"
                    placeholder="Nama Role">
            </div>
            <div class="mt-5">
                <button type="submit"
                    class="p-2 text-white bg-indigo-500 rounded shadow-sm focus:outline-none hover:bg-indigo-700">UPDATE
                    ROLE</button>
            </div>

        </form>
    </div>
@endsection
