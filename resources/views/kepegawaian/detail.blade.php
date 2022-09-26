@extends ('layouts.main')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="card-body">

    <form method="GET" action="{{ route('dashboard.pegawai.index') }}">
        @csrf

        <div class="row mb-3">
            <label for="nip" class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label>

            <div class="col-md-6">
                <input id="nip" type="text" class="form-control @error ('kode_golongan') is-invalid @enderror" name="nip" value="{{ $pegawai->nip }}" readonly>

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
                <input id="nama" type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" value="{{ $pegawai->nama }}" readonly>

                @error ('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>

            <div class="col-md-6">
                <input id="nama" type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" value="{{ $pegawai->jenis_kelamin }}" readonly>

                @error ('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

            <div class="col-md-6">
                <input id="nama" type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" value="{{ $pegawai->status_nikah }}" readonly>

                @error ('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Agama') }}</label>

            <div class="col-md-6">
                <input id="nama" type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" value="{{ $pegawai->agama }}" readonly>

                @error ('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Gol') }}</label>

            <div class="col-md-6">
                <input id="nama" type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" value="{{ $pegawai->golongan->kode_golongan }}" readonly>

                @error ('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama Golongan') }}</label>

            <div class="col-md-6">
                <input id="nama" type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" value="{{ $pegawai->golongan->nama_golongan }}" readonly>

                @error ('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <a href="{{ route('dashboard.pegawai.index') }}" class="btn btn-primary">Back</a>

            </div>
        </div>

    </form>
</div>
            </div>
        </div>
    </div>

  
</x-app-layout>
@endsection
