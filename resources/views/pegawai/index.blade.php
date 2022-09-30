@extends ('layouts.main')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <a href="{{route ('dashboard.pegawai.create') }}" class="btn btn-success mb-4">+ Tambah Data</a>
            <div class="overflow-x-auto">
            <table id="maintable" class="table w-full">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th>Gol</th>
                                <th>Agama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $jabatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$jabatan->nip}}</td>
                                <td>{{$jabatan->nama}}</td>
                                <td>{{$jabatan->jenis_kelamin}}</td>
                                <td>{{$jabatan->status_nikah}}</td>
                                <td>{{$jabatan->golongan->kode_golongan}}</td>
                                <td>{{$jabatan->agama}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{route ('dashboard.pegawai.destroy', $jabatan->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-solid fa-trash"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route ('dashboard.pegawai.edit', $jabatan->id) }}" class="btn btn-warning">
                                                <i class="fas fa-solid fa-pen"></i>
                                                Edit
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route ('dashboard.pegawai.show', $jabatan->id) }}" class="btn btn-warning">
                                                <i class="fas fa-solid fa-pen"></i>
                                                Details
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
    </div>
</x-app-layout>
@endsection
