@extends ('layouts.main')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Kepegawaian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="card-body">

<form method="POST" action="{{ route('dashboard.detail.store') }}">
    @csrf

    <div class="row mb-3">
        <label for="nip" class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label>

        <div class="col-md-6">
            <input id="nip" type="text" class="form-control @error ('kode_golongan') is-invalid @enderror" name="nip" required>

            @error ('kode_golongan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
    </div>

    <div class="row mb-3">
        <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

        <div class="col-md-6">
            <input id="nama" type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" required>

            @error ('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
    </div>

    <div class="row mb-3">
        <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>

        <div class="col-md-6">
            
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="">-- PILIH JK --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            @error ('kode_golongan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
    </div>

    <div class="row mb-3">
        <label for="golongan_id" class="col-md-4 col-form-label text-md-end">{{ __('Golongan') }}</label>

        <div class="col-md-6">
            <select name="golongan_id" id="golongan_id" class="form-control">
                <option>{{ __('--PILIH GOLONGAN--') }}</option>
                @foreach($golongan as $item)
                <option value="{{ $item->id }}">{{ $item->nama_golongan }}</option>
                @endforeach
            </select>

            @error ('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Tambah') }}
            </button>

        </div>
    </div>

</form>
</div>
            </div>
        </div>
    </div>

  
</x-app-layout>
@endsection
