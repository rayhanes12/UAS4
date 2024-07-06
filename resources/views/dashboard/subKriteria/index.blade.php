@extends('dashboard.layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Sub Kriteria</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Sub Kriteria</li>
        </ol>
        <div class="row">
            <div class="col-xl-6">
                <div class="card text-bg-light mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Daftar Sub Kecepatan Internet(C1)
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($sub_kriterias as $sub_kriteria)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sub_kriteria->kecepatanInternet }}</td>
                                    <td>{{ $sub_kriteria->nKecepatanInternet}}</td>
                                    <td>
                                        <div class="btn-group-sm" role="group">
                                            <a href="{{ route('data-sub-kriteria.edit', $sub_kriteria->slug) }}"
                                                class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card text-bg-light mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Daftar Sub Kriteria Stabilitas Koneksi (C2)
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($sub_kriteria1s as $sub_kriteria1)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sub_kriteria1->StabilitasKoneksi }}</td>
                                    <td>{{ $sub_kriteria1->nStabilitasKoneksi }}</td>
                                    <td>
                                        <div class="btn-group-sm" role="group">
                                            <a href="{{ route('data-sub-kriteria1.edit', $sub_kriteria1->slug) }}"
                                                class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card text-bg-light mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Daftar Sub Kriteria Jangkauan Geografis (C3)
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($sub_kriteria2s as $sub_kriteria2)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sub_kriteria2->jangkauanGeografis }}</td>
                                    <td>{{ $sub_kriteria2->njangkauanGeografis }}</td>
                                    <td>
                                        <div class="btn-group-sm" role="group">
                                            <a href="{{ route('data-sub-kriteria2.edit', $sub_kriteria2->slug) }}"
                                                class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card text-bg-light mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Daftar Sub Kriteria Harga dan Paket Layanan (C4)
                    </div>
                    <div class="card-body">
                        <table id="example3" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($sub_kriteria3s as $sub_kriteria3)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sub_kriteria3->HargaDanPaketLayanan }}</td>
                                    <td>{{ $sub_kriteria3->nHargaDanPaketLayanan }}</td>
                                    <td>
                                        <div class="btn-group-sm" role="group">
                                            <a href="{{ route('data-sub-kriteria3.edit', $sub_kriteria3->slug) }}"
                                                class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card text-bg-light mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Daftar Sub Kriteria Kualitas Layanan Pelanggan (C5)
                    </div>
                    <div class="card-body">
                        <table id="example4" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($sub_kriteria4s as $sub_kriteria4)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sub_kriteria4->KualitasLayananPelanggan }}</td>
                                    <td>{{ $sub_kriteria4->nKualitasLayananPelanggan }}</td>
                                    <td>
                                        <div class="btn-group-sm" role="group">
                                            <a href="{{ route('data-sub-kriteria4.edit', $sub_kriteria4->slug) }}"
                                                class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Sub Kriteria</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
           
        </div>
     
    </div>
</main>
@endsection

@push('table')
<script>
    $(document).ready(function () {
            $('#example1').DataTable();
        });
</script>
<script>
    $(document).ready(function () {
            $('#example2').DataTable();
        });
</script>
<script>
    $(document).ready(function () {
            $('#example3').DataTable();
        });
</script>
<script>
    $(document).ready(function () {
            $('#example4').DataTable();
        });
</script>
<script>
    $(document).ready(function () {
            $('#example5').DataTable();
        });
</script>
<script>
    $(document).ready(function () {
            $('#example6').DataTable();
        });
</script>
@endpush