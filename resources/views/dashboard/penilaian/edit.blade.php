@extends('dashboard.layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Penilaian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Penilaian</li>
        </ol>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Ubah Penilaian
            </div>
            <div class="card-body">
                <form action="{{ route('data-penilaian.update', $penilaian->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="mb-3 row">
                        <label for="alternatifs" class="col-2 text-end">Alternatif</label>
                        <div class="col-10">
                            <select id="alternatifs" class="form-select form-select-sm" id="alternatif_id"
                                name="alternatif_id" disabled>
                                @foreach ($alternatifs as $alternatif)
                                @if (old('alternatif_id', $penilaian->alternatif_id) == $alternatif->id)
                                <option value="{{ $alternatif->id }}" selected>{{ $alternatif->namaAlternatif }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C1x" class="col-2 text-end">Kecepatan Internet</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C1x')
                                    is-invalid
                                @enderror" id="C1x" name="C1x" required>
                                @foreach ($C1s as $c1)
                                @if (old('C1x', $penilaian->C1x) == $c1->nKecepatanInternet)
                                <option value="{{ $c1->nKecepatanInternet }}" selected>{{ $c1->kecepatanInternet }}</option>
                                @else
                                <option value="{{ $c1->nKecepatanInternet }}">{{ $c1->kecepatanInternet }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C1x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C2x" class="col-2 text-end">Stabilitas Koneksi</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C2x')
                                    is-invalid
                                @enderror" id="C2x" name="C2x" required>
                                @foreach ($C2s as $c2)
                                @if (old('C2x', $penilaian->C2x) == $c2->nStabilitasKoneksi)
                                <option value="{{ $c2->StabilitasKoneksi }}" selected>{{ $c2->StabilitasKoneksi }}</option>
                                @else
                                <option value="{{ $c2->nStabilitasKoneksi }}">{{ $c2->StabilitasKoneksi }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C2x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C3x" class="col-2 text-end">Jangkauan Geografis</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C3x')
                                    is-invalid
                                @enderror" id="C3x" name="C3x" required>
                                @foreach ($C3s as $c3)
                                @if (old('C3x', $penilaian->C3x) == $c3->njangkauanGeografis)
                                <option value="{{ $c3->njangkauanGeografis }}" selected>{{ $c3->jangkauanGeografis }}</option>
                                @else
                                <option value="{{ $c3->njangkauanGeografis }}">{{ $c3->jangkauanGeografis }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C3x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C4x" class="col-2 text-end">Harga dan Paket Layanan</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C4x')
                                    is-invalid
                                @enderror" id="C4x" name="C4x" required>
                                @foreach ($C4s as $c4)
                                @if (old('C4x', $penilaian->C4x) == $c4->nHargaDanPaketLayanan)
                                <option value="{{ $c4->nHargaDanPaketLayanan }}" selected>{{ $c4->HargaDanPaketLayanan }}</option>
                                @else
                                <option value="{{ $c4->nHargaDanPaketLayanan }}">{{ $c4->HargaDanPaketLayanan }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C4x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C5x" class="col-2 text-end">Kualitas Layanan Pelanggan</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C5x')
                                    is-invalid
                                @enderror" id="C5x" name="C5x" required>
                                @foreach ($C5s as $c5)
                                @if (old('C5x', $penilaian->C5x) == $c5->nKualitasLayananPelanggan)
                                <option value="{{ $c5->nKualitasLayananPelanggan }}" selected>{{ $c5->KualitasLayananPelanggan }}</option>
                                @else
                                <option value="{{ $c5->nKualitasLayananPelanggan }}">{{ $c5->KualitasLayananPelanggan }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C5x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card-fill"></i>
                                    Ubah</button>
                                <a href="{{ route('data-penilaian.index') }}" class="btn btn-danger"><i
                                        class="bi bi-x-circle"></i> Batal</a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="mb-3 row">
                        <label for="C6x" class="col-2 text-end">Response Time</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C6x')
                                    is-invalid
                                @enderror" id="C6x" name="C6x" required>
                                @foreach ($C6x as $c6)
                                @if (old('C6x', $penilaian->C6x) == $c6->nResponseTime)
                                <option value="{{ $c6->nResponseTime }}" selected>{{ $c6->responseTime }}</option>
                                @else
                                <option value="{{ $c6->nResponseTime }}">{{ $c6->responseTime }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C6x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div> --}}

                    {{-- <div class="mb-3 row">
                        <label for="C7x" class="col-2 text-end">Color Gamut</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C7x')
                                    is-invalid
                                @enderror" id="C7x" name="C7x" required>
                                @foreach ($C7s as $c7)
                                @if (old('C7x', $penilaian->C7x) == $c7->nColorGamut)
                                <option value="{{ $c7->nColorGamut }}" selected>{{ $c7->colorGamut }}</option>
                                @else
                                <option value="{{ $c7->nColorGamut }}">{{ $c7->colorGamut }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C7x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card-fill"></i>
                                    Ubah</button>
                                <a href="{{ route('data-penilaian.index') }}" class="btn btn-danger"><i
                                        class="bi bi-x-circle"></i> Batal</a>
                            </div>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</main>
@endsection