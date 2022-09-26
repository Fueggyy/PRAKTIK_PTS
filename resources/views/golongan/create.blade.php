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

<form method="POST" action="{{ route('dashboard.golongan.store') }}">
    @csrf

    <div class="row mb-3">
        <label for="kode_golongan" class="col-md-4 col-form-label text-md-end">{{ __('Kode Golongan') }}</label>

        <div class="col-md-6">
            <input id="kode_golongan" type="text" class="form-control @error ('kode_golongan') is-invalid @enderror" name="kode_golongan" required>

            @error ('kode_golongan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
    </div>

    <div class="row mb-3">
        <label for="nama_golongan" class="col-md-4 col-form-label text-md-end">{{ __('Nama Golongan') }}</label>

        <div class="col-md-6">
            <input id="nama_golongan" type="text" class="form-control @error ('nama_golongan') is-invalid @enderror" name="nama_golongan" required>

            @error ('nama_golongan')
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
