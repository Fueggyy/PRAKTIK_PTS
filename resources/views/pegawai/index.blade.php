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
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <a href="{{route ('dashboard.pegawai.create') }}" class="btn btn-success mb-4">+ Tambah Data</a>
            <table id="maintable" class="table table-striped table-bordered" style="width:100%">
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
                                   
                                        <div class="d-flex justify-content-center">
                                           
                                            <form action="{{route ('dashboard.pegawai.destroy', $jabatan->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button  class="btn btn-danger">
                                                    <i class="fas fa-solid fa-trash"></i>
                                                    Hapus
                                                </button>
                                            
                                        
                                        
                                            <a href="{{ route ('dashboard.pegawai.edit', $jabatan->id) }}" class="btn btn-success">
                                                <i class="fas fa-solid fa-pen"></i>
                                                Edit
                                            </a>
                                        
                                        
                                        
                                            <a href="{{ route ('dashboard.pegawai.show', $jabatan->id) }}" class="btn btn-warning">
                                                <i class="fas fa-solid fa-pen"></i>
                                                Details
                                            </a>
                                        </form>
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
