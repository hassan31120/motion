@extends('main.layouts.main')
@section('content')
    <!--service-->
    <h1 class="text-center mb-5 mt-5 fw-bold " data-aos="fade-up" data-aos-offset="250" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in-out" style="color: #1c138b
;" id="service">اعمالنا</h1>

    <div class="container" data-aos="-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
        data-aos-easing="ease-in-out">
        <div class="row d-flex justify-content-between">
            @foreach ($links as $link)
                <div class="col-lg-4 col-sm-6">
                    <div class="border rounded">
                        <div class="embed-responsive embed-responsive-16by9 rounded">
                            <iframe width="560" height="315" src="{{ $link->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <!-- <img src="./img/img1.gif" alt="" class=" img-fluid  mt-4"> -->
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $links->links() }}
        </div>

    </div>
@endsection
