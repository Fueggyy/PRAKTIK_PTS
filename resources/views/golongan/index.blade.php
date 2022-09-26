@extends ('layouts.main')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Golongan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <a href="{{route ('dashboard.golongan.create') }}" class="btn btn-success mb-4">+ Tambah Data</a>
            <table id="maintable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Nama Jabatan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($golongans as $jabatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$jabatan->kode_golongan}}</td>
                                <td>{{$jabatan->nama_golongan}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{route ('dashboard.golongan.destroy', $jabatan->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-solid fa-trash"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route ('dashboard.golongan.edit', $jabatan->id) }}" class="btn btn-warning">
                                                <i class="fas fa-solid fa-pen"></i>
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

  
</x-app-layout>
@endsection
