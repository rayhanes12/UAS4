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
                Tambah Penilaian
            </div>
            <div class="card-body">
                <form action="{{ route('data-penilaian.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label for="alternatif_id" class="col-2 text-end">Alternatif</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('alternatif_id')
                                    is-invalid
                                @enderror" id="alternatif_id" name="alternatif_id" required>
                                <option value="">-- Pilih Alternatif --</option>
                                @foreach ($alternatifs as $alternatif)
                                @if (old('alternatif_id') == $alternatif->id)
                                <option value="{{ $alternatif->id }}" selected>{{ $alternatif->namaAlternatif }}
                                </option>
                                @else
                                <option value="{{ $alternatif->id }}">{{ $alternatif->namaAlternatif }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('alternatif_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <input type="hidden" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required>

                    <div class="mb-3 row">
                        <label for="C1x" class="col-2 text-end">Kecepatan Internet</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C1x')
                                    is-invalid
                                @enderror" id="C1x" name="C1x" required>
                                <option value="">-- Pilih Kecepatan Internet--</option>
                                @foreach ($C1s as $c1)
                                @if (old('C1x') == $c1->id)
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
                                <option value="">-- Pilih Stabilitas Koneksi--</option>
                                @foreach ($C2s as $c2)
                                @if (old('C2x') == $c2->id)
                                <option value="{{ $c2->nStabilitasKoneksi }}" selected>{{ $c2->StabilitasKoneksi }}</option>
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
                        <label for="C3x" class="col-2 text-end"> Jangkauan Geografis</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C3x')
                                    is-invalid
                                @enderror" id="C3x" name="C3x" required>
                                <option value="">-- Pilih Jangkauan Geografis --</option>
                                @foreach ($C3s as $c3)
                                @if (old('C3x') == $c3->id)
                                <option value="{{ $c3->njangkauanGeografis}}" selected>{{ $c3->jangkauanGeografis }}</option>
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
                                <option value="">-- Pilih Harga dan Paket Layanan --</option>
                                @foreach ($C4s as $c4)
                                @if (old('C4x') == $c4->id)
                                <option value="{{ $c4->nHargaDanPaketLayanan}}" selected>{{ $c4->HargaDanPaketLayanan }}</option>
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
                                <option value="">-- Pilih Kualitas Layanan Pelanggan --</option>
                                @foreach ($C5s as $c5)
                                @if (old('C5x') == $c5->id)
                                <option value="{{ $c5->nKualitasLayananPelanggan}}" selected>{{ $c5->KualitasLayananPelanggan }}</option>
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
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card-fill"></i>
                            Tambah & tambah lagi</button>
                        <a href="{{ route('data-penilaian.index') }}" class="btn btn-danger"><i
                                class="bi bi-x-circle"></i> Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

@push('slug')
<script>
    const alternatif_id = document.querySelector("#alternatif_id");
        const slug = document.querySelector('#slug');

        const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        function generateString(length) {
            let result = ' ';
            const charactersLength = characters.length;
            for ( let i = 0; i < length; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            return result;
        }

        alternatif_id.addEventListener("change", () => {
            // let preslug = alternatif_id.value;
            preslug = generateString(8);
            slug.value = preslug.toLowerCase();
        });
</script>
@endpush