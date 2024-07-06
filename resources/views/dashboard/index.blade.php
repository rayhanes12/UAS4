@extends('dashboard.layouts.main')

@section('container')
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
      <div class="col-lg-6">
        <div class="card text-bg-light mb-4 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Weighted Product</h5>
            <p class="card-text">
              Sistem Pendukung Keputusan (SPK) menggunakan metode Weighted Product untuk membantu pengguna dalam memilih ISP yang paling sesuai dengan preferensi dan kriteria yang telah ditetapkan.
            </p>
            <p class="card-text">
              Sistem ini membantu pengguna untuk membuat keputusan yang lebih informasional dan sesuai dengan preferensi pribadi mereka dalam memilih penyedia layanan internet. Dengan menggunakan metode Weighted Product, pengguna dapat memperoleh rekomendasi ISP terbaik yang memenuhi kebutuhan mereka, seperti kecepatan koneksi yang diinginkan, stabilitas yang diharapkan, harga yang terjangkau, dan pelayanan yang baik.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-4 shadow-sm">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-chart-pie me-1"></i>
            Pie Chart Perbandingan Nilai Bobot Setiap Kriteria
          </div>
          <div class="card-body">
            <canvas id="myPieChart" width="100%" height="50"></canvas>
          </div>
          <div class="card-footer small text-muted text-center">
            Terakhir Diperbarui: {{ $formattedUpdatedAtKriteria }}
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-4">
      <!-- Add more content here if needed -->
    </div>
  </div>
</main>

<script>
  let dataKriteriaNama = @json($dataKriteriaNama);
  let dataKriteriaBobot = @json($dataKriteriaBobot);
  let dataNilaiV = @json($dataNilaiV);
  let dataNamaAlternatif = @json($dataNamaAlternatif); 
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="js/chart-bar-demo.js"></script>
<script src="js/chart-pie-demo.js"></script>
@endsection
