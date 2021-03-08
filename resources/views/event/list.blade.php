@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row mt-5">
    <div class="col-md-3">
      <h3>Daftar Event</h3>
      Kembangkan jaringan dan belajar dari mahasiswa terbaik
    </div>
    <div class="col-md-9">
      <form class="" action="cari" method="get">
        <div class="input-group mb-3">
            <input type="text" name="key" class="form-control shadow-sm" placeholder="Cari Event" value="{{ old('key') }}" aria-label="Cari Event" aria-describedby="button-addon2">
            <button class="btn btn-outline-primary shadow-sm" type="button" id="button-addon2">Cari</button>
        </div>
        <hr>
      </form>

    </div>
  </div>
    <div class="row mt-2">
        <div class="col-md-9 offset-md-3 d-flex flex-wrap justify-content-around">

                @foreach($event as $e)
                    <div class="card border-0 rounded-0 shadow m-4" style="width: 22rem;">
                        <img class="card-img-top" src="{{ $e->url_gambar }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ $e->id }}" class="text-primary">{{ $e->judul }}</a></h5>
                            <span class="badge bg-dark">{{ $e->kategori }}</span>
                            <p class="card-text text-sm"> {{ $e->deskripsi }} </p>
                        </div>
                        <div class="card-footer">
                            Card footer
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
             {{-- Pagination --}}
             <div class="d-flex justify-content-center">
                {!! $event->links() !!}
            </div>
        </div>
    </div>
</div>

<script>
  var li = document.querySelectorAll('.pagination li');

  console.log(li);

  li.forEach(function(e){
    e.classList.add('page-item');
    var c = e.children[0];
    c.classList.add('page-link');
  });
</script>

@endsection
