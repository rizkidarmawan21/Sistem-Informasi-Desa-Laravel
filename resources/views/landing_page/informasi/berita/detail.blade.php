@extends('landing_page.layouts.app')

@section('title')
    Detail Berita ...
@endsection
@section('content')
    <div id="breadcrumb" class="container my-4 my-md-4 my-lg-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('informasi.berita.index') }}">Berita</a></li>
                <li class="breadcrumb-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
                    eius!</li>
            </ol>
        </nav>
    </div>

    <div id="details-news" class="container">
        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur expedita officia numquam autem
            maiores?</h1>
        <p id="info-news" class="my-4"><i class="fa-solid fa-calendar-days me-1"></i>
            April, 20 ,
            2023

            <i class="fa-solid fa-user ms-2 me-1"></i>
            Admin
        </p>

        <img id="thumbnail" src="{{ asset('img/landing-page/carousel-1.png') }}" class="img-thumbnail">

        <div id="content-desc" class="my-5 lh-lg" align="justify">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sint, sit magnam, natus, culpa velit ea
                eius ut cumque earum voluptatum alias reprehenderit blanditiis harum in debitis. Consequatur velit
                inventore cum earum est, corrupti laudantium, accusamus, debitis iste perferendis ipsa. Sint, odit!
                Harum iure inventore perspiciatis voluptas minima officia deserunt reiciendis sunt voluptatem
                facere! Consequuntur, asperiores. Dolor earum eos officiis nulla cumque ipsum beatae porro animi
                odio sit sequi quas quam assumenda distinctio exercitationem ex doloribus, saepe sed voluptatum quia
                nemo excepturi? Quisquam iusto harum, nulla suscipit veritatis pariatur quaerat illo aspernatur
                alias earum expedita eaque! Necessitatibus dolor aliquam cumque aspernatur quam laborum ipsam at
                quos, consectetur enim modi numquam quas ab nemo ipsa molestiae doloribus sapiente, dolorum beatae
                delectus blanditiis obcaecati fugit facere! Obcaecati dolorum ratione non optio veniam nemo,
                necessitatibus sequi exercitationem quos praesentium nulla eligendi consequatur illo, repudiandae
                delectus. Optio vero beatae provident in at voluptate ab distinctio laboriosam commodi, nisi cum
                nobis veniam voluptatum vel dolorum pariatur ducimus, amet magni odit ullam culpa sed magnam
                similique. Cumque magnam sunt dolorum aut corrupti doloribus nihil voluptas cupiditate. Officia quae
                repellendus modi placeat. Reiciendis, pariatur. Quo cupiditate aperiam harum, similique voluptate
                architecto ullam placeat unde veritatis. Cumque, harum?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sint, sit magnam, natus, culpa velit ea
                eius ut cumque earum voluptatum alias reprehenderit blanditiis harum in debitis. Consequatur velit
                inventore cum earum est, corrupti laudantium, accusamus, debitis iste perferendis ipsa. Sint, odit!
                Harum iure inventore perspiciatis voluptas minima officia deserunt reiciendis sunt voluptatem
                facere! Consequuntur, asperiores. Dolor earum eos officiis nulla cumque ipsum beatae porro animi
                odio sit sequi quas quam assumenda distinctio exercitationem ex doloribus, saepe sed voluptatum quia
                nemo excepturi? Quisquam iusto harum, nulla suscipit veritatis pariatur quaerat illo aspernatur
                alias earum expedita eaque! Necessitatibus dolor aliquam cumque aspernatur quam laborum ipsam at
                quos, consectetur enim modi numquam quas ab nemo ipsa molestiae doloribus sapiente, dolorum beatae
                delectus blanditiis obcaecati fugit facere! Obcaecati dolorum ratione non optio veniam nemo,
                necessitatibus sequi exercitationem quos praesentium nulla eligendi consequatur illo, repudiandae
                delectus. Optio vero beatae provident in at voluptate ab distinctio laboriosam commodi, nisi cum
                nobis veniam voluptatum vel dolorum pariatur ducimus, amet magni odit ullam culpa sed magnam
                similique. Cumque magnam sunt dolorum aut corrupti doloribus nihil voluptas cupiditate. Officia quae
                repellendus modi placeat. Reiciendis, pariatur. Quo cupiditate aperiam harum, similique voluptate
                architecto ullam placeat unde veritatis. Cumque, harum?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sint, sit magnam, natus, culpa velit ea
                eius ut cumque earum voluptatum alias reprehenderit blanditiis harum in debitis. Consequatur velit
                inventore cum earum est, corrupti laudantium, accusamus, debitis iste perferendis ipsa. Sint, odit!
                Harum iure inventore perspiciatis voluptas minima officia deserunt reiciendis sunt voluptatem
                facere! Consequuntur, asperiores. Dolor earum eos officiis nulla cumque ipsum beatae porro animi
                odio sit sequi quas quam assumenda distinctio exercitationem ex doloribus, saepe sed voluptatum quia
                nemo excepturi? Quisquam iusto harum, nulla suscipit veritatis pariatur quaerat illo aspernatur
                alias earum expedita eaque! Necessitatibus dolor aliquam cumque aspernatur quam laborum ipsam at
                quos, consectetur enim modi numquam quas ab nemo ipsa molestiae doloribus sapiente, dolorum beatae
                delectus blanditiis obcaecati fugit facere! Obcaecati dolorum ratione non optio veniam nemo,
                necessitatibus sequi exercitationem quos praesentium nulla eligendi consequatur illo, repudiandae
                delectus. Optio vero beatae provident in at voluptate ab distinctio laboriosam commodi, nisi cum
                nobis veniam voluptatum vel dolorum pariatur ducimus, amet magni odit ullam culpa sed magnam
                similique. Cumque magnam sunt dolorum aut corrupti doloribus nihil voluptas cupiditate. Officia quae
                repellendus modi placeat. Reiciendis, pariatur. Quo cupiditate aperiam harum, similique voluptate
                architecto ullam placeat unde veritatis. Cumque, harum?</p>
        </div>
    </div>
@endsection
