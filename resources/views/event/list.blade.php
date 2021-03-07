@extends('layouts.master')

@section('content')
<div class="container">      
    <div class="row">
        <div class="col-md-3">
            <h3>Daftar Event</h3>
            Kembangkan jaringan dan belajar dari mahasiswa terbaik
        </div>
        <div class="col-md-9 d-flex flex-wrap justify-content-around">
                <div class="input-group mb-3">
                    <input type="text" class="form-control shadow-sm" placeholder="Cari Event" aria-label="Cari Event" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary shadow-sm" type="button" id="button-addon2">Cari</button>
                </div>
                @for ($i = 0; $i <6; $i++)
                    <div class="card border-0 shadow m-4" style="width: 22rem;">
                        <img class="card-img-top" src="https://pixabay.com/get/g300fd7d9f932962fd91c52299f08b212716f04c015f92b15651a33534284503feabce8474ca22df0fa1af3d048bf0648_1920.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" class="text-primary">Seminar Kerja Praktek Season 2</a></h5>
                            <p class="card-text text-sm">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            Card footer
                        </div>
                    </div>
                @endfor  
        </div>
    </div>
    <div class="row">
        <div class="col--md--12">
             {{-- Pagination --}}
             <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
