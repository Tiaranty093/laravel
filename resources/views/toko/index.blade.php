@extends('template/main')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/png/post.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/png/banner.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/png/adopt.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection 

@section('content2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/png/KUCING2.PNG" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">KUCING</h5>
        <p class="card-text">SILAHKAN DIPILIH KUCING LUCU DAN MENGGEMASKAN </p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/png/anjing.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">ANJING</h5>
        <p class="card-text">SILAHKAN DIPILIH ANJING LUCU DAN MENGGEMASKAN</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/png/makanan.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">MAKANAN</h5>
        <p class="card-text">MANAKAN ANJING DAN KUCING 100% BAHAN SEGAR</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/png/aksesories kucing dan anjing.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">AKSESORIES</h5>
        <p class="card-text">AKSESORIES KUCING DAN ANJING</p>
      </div>
    </a>
    </div>
  </div>
</div>
@endsection 

