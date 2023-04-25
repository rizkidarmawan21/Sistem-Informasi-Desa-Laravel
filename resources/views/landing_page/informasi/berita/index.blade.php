@extends('landing_page.layouts.app')

@section('title')
    Informasi Berita
@endsection

@section('content')
    <!-- Board News -->
    <div id="board-news" class="mt-4 container">
        <div class="row mb-4">
            <div class="col-md-8">
                <h1 id="title-board" class="">Berita Terkini</h1>
            </div>
            <div class="col-md-4 align-self-center">
                <input class="form-control" id="exampleDataList" placeholder="Cari Berita...">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <a href="" id="box">
                    <div class="overlay">
                        <img src="{{ asset('img/landing-page/news/overlay.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <img src="{{ asset('img/landing-page/carousel-1.png') }}" class="d-block w-100" alt="...">

                    <div id="category" class="p-4">
                        <span class="badge text-bg-danger fs-6">TOP NEWS</span>
                    </div>
                    <div id="body" class="p-4 col-md-9 text-white">
                        <p><i class="fa-solid fa-calendar-days me-1" style="color: #ffffff;"></i> April, 20 ,
                            2023
                        </p>
                        <h3 class="ln-lg">Petani berhasil memanen 20 ton padi dan siap di jual.</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mt-2 mt-md-0 mt-lg-0">
                <a href="" id="box-2" class="mb-2">
                    <div class="overlay">
                        <img src="{{ asset('img/landing-page/news/overlay.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <img src="{{ asset('img/landing-page/carousel-1.png') }}" class="d-block w-100" alt="...">
                    <div id="category" class="p-4">
                        <span class="badge text-bg-danger">TOP NEWS</span>
                    </div>
                    <div id="body" class="p-3 col-md-9 text-white ">
                        <p><i class="fa-solid fa-calendar-days me-1" style="color: #ffffff;"></i> April, 20 ,
                            2023
                        </p>
                        <h6 class="ln-lg">Petani berhasil memanen 20 ton padi dan siap di jual.</h5>
                    </div>
                </a>
                <div class="my-2"></div>
                <a href="" id="box-3">
                    <div class="overlay">
                        <img src="{{ asset('img/landing-page/news/overlay.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <img src="{{ asset('img/landing-page/carousel-1.png') }}" class="d-block w-100" alt="...">
                    <div id="category" class="p-4">
                        <span class="badge text-bg-danger">TOP NEWS</span>
                    </div>
                    <div id="body" class="p-3 col-md-9 text-white">
                        <p><i class="fa-solid fa-calendar-days me-1" style="color: #ffffff;"></i> April, 20 ,
                            2023
                        </p>
                        <h6 class="ln-lg">Petani berhasil memanen 20 ton padi dan siap di jual.</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--End  Board News -->


    <div id="list-news" class="mt-5 container ">
        <div class="row">
            <div class="col-md-8">
                <div id="card-news" class="row mb-4" onclick="window.location.href='index.html';">
                    <div id="thumbnail" class="col-5">
                        <img src="{{ asset('img/landing-page/carousel-1.png') }}" width="100%"
                            class="object-cover d-block rounded-20" alt="...">
                    </div>
                    <div id="body" class="col-7">
                        <div>
                            <h4>Petani berhasil memanen 20 ton padi dan siap di jual memanen 20 ton padi dan
                                siap di
                                jual</h4>
                            <p id="info-news"><i class="fa-solid fa-calendar-days me-1"></i>
                                April, 20 ,
                                2023

                                <i class="fa-solid fa-user ms-2 me-1"></i>
                                Admin
                            </p>
                            <p id="desc" class="ln-lg d-block desc text-black" align="justify">Lorem ipsum
                                dolor
                                sit, amet
                                consectetur adipisicing
                                elit. Quisquam quibusdam quo vel recusandae quam enim at eos voluptatibus, alias
                                beatae
                                odio repellat facere placeat, obcaecati harum omnis facilis quis sed dicta culpa
                                soluta
                                blanditiis nemo asperiores cum? Reiciendis, hic! Totam voluptate iusto ipsum
                                accusantium
                                consectetur quod vel eveniet, illum quo at pariatur, dolorem saepe culpa
                                assumenda
                                tempora quos consequatur iste!</p>

                            <a href=""
                                class="btn btn-sm bg-primary-2 d-none d-md-inline d-lg-inline text-white">Lihat
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-4">
                <div id="latest-news">
                    <div id="header" class="card col-6">
                        <h5 class="mt-2 mx-4">TERBARU</h5>
                    </div>
                    <div id="body" class="card py-3 px-4">
                        <div class="mt-4"></div>
                        <a href="">
                            <div id="card-new-latest" class="row mb-1">
                                <div class="col-6">
                                    <img src="{{ asset('img/landing-page/carousel-1.png') }}" width="100%"
                                        height="95" class="object-cover d-block" alt="...">
                                </div>
                                <div class="col-6">
                                    <h6>Petani berhasil memanen 20 ton padi dan siap di jual </h6>
                                    <p id="info-news" class="mt-3"><i class="fa-solid fa-calendar-days me-1"></i>
                                        April, 20 ,
                                        2023
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div id="card-new-latest" class="row mb-1">
                                <div class="col-6">
                                    <img src="{{ asset('img/landing-page/carousel-1.png') }}" width="100%"
                                        height="95" class="object-cover d-block" alt="...">
                                </div>
                                <div class="col-6">
                                    <h6>Petani berhasil memanen 20 ton padi dan siap di jual </h6>
                                    <p id="info-news" class="mt-3"><i class="fa-solid fa-calendar-days me-1"></i>
                                        April, 20 ,
                                        2023
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div id="card-new-latest" class="row mb-1">
                                <div class="col-6">
                                    <img src="{{ asset('img/landing-page/carousel-1.png') }}" width="100%"
                                        height="95" class="object-cover d-block" alt="...">
                                </div>
                                <div class="col-6">
                                    <h6>Petani berhasil memanen 20 ton padi dan siap di jual </h6>
                                    <p id="info-news" class="mt-3"><i class="fa-solid fa-calendar-days me-1"></i>
                                        April, 20 ,
                                        2023
                                    </p>
                                </div>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav aria-label="..." class="container my-5">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
@endsection