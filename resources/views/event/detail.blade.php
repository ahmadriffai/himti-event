@extends('layouts.master')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-sm-6 text-center mb-5">
            <img src="{{ $event->url_gambar }}" class="img-fluid shadow" width="300" alt="...">
          </div>
          <div class="col-sm-6 d-flex flex-column align-items-start justify-content-center">
            <h2>{{ $event->judul }}</h2>
            <span class="badge bg-dark">{{ $event->kategori }}</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <p>Terbuka Hingga:<br>
        <b>{{ $event->tanggal }}</b>
        </p>
        <p>
          Sisa Kuota:<br>
          {{ $event->kuota }}
        </p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-9 px-5">
        <h4>Informasi</h4>
        <p>
        Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Rabu, 10 Maret 2021 pukul 19.00 - 20.00 WIB Live di Youtube pada link berikut: bit.ly/IDCampXDicoding-LIVE (jangan lupa klik tanda lonceng untuk pengingat).
        <p>
        Untuk kamu yang ingin mendapatkan sertifikat kehadiran dan giveaway, silakan untuk mendaftar terlebih dahulu dengan klik “Daftar Gratis”.
        </p>
        <hr>
        <p>
          {{ $event->deskripsi }}
        </p>
        <hr>
        <h4>Rundown Acara</h4>
        <p>
          19.00 - 19.10 Pembukaan oleh moderator (Dimas Catur Wibowo - Google Associate Android Developer, Code Reviewer Dicoding).
          19.10 - 19.30 Widyarso Joko Purnomo (Google Associate Cloud Engineer, Curriculum Developer Dicoding), materi yang akan dibawakan "Fitur Terbaru Flutter di Tahun 2021."
        </p>
      </div>

      
      
      <div class="col-md-3 d-flex flex-column">
        <h4>Keikutsetaan</h4>
        <div class="alert alert-danger" role="alert">
          Anda Belum Terdaftar Pada {{ $event->kategori }}
        </div>
        <a href="#" class="btn btn-danger">Daftar {{ $event->kategori }}</a>
        <br>
        <h4 class="mt-4">Jadwal Pelaksanaan</h4>
        <p>{{ $event->tanggal }} - Selesai</p>
        <br>
        <h4 class="mt-4">Lokasi</h4>
        <p>{{ $event->tempat }}</p>

      </div>
    </div>
</div>
@endsection
