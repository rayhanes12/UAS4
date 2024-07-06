@extends('dashboard.layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Alternatif</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Alternatif</li>
        </ol>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar Alternatif
            </div>
            <div class="d-flex justify-content-start">
                <div class="ms-3 mt-3">
                    <a href="{{ route('data-alternatif.create') }}" class="btn btn-primary btn-sm"><i
                            class="bi bi-plus-lg"></i> Tambah Alternatif</a>
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kode Alternatif</th>
                            <th class="text-center">Nama Alternatif</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($alternatifs as $alternatif)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $alternatif->kodeAlternatif }}</td>
                            <td>{{ $alternatif->namaAlternatif }}</td>
                            <td>
                                <div class="btn-group-sm" role="group">
                                    <a href="{{ route('data-alternatif.edit', $alternatif->slug) }}"
                                        class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                    @livewire('alternatif-alert', ['alternatifId' => $alternatif->id])
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kode Alternatif</th>
                            <th class="text-center">Nama Alternatif</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection