@extends('app')

@section('stylesheets')
    <link rel='stylesheet' href={{ asset('/assets/css/shop-item.css') }} />
@endsection

@section('content')
    @include('front.components.navigation')

    <div class="container">

        <div class="row">

            @include('front.components.menu')

            <div class="col-lg-9">

                <div class="carda">

                    <!--Section: Products v.3-->
                    <section class="text-center mb-4">

                        <!--Grid row-->
                        <div class="row wow fadeIn">

                            @foreach ($category->products as $product)
                                <div class="col-lg-3 col-md-6 mb-4 mt-4">

                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        @foreach ($product->files as $file)
                                            <div class="view overlay">
                                                <img src={{ url($file->filename) }} class="card-img-top" alt="">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        @endforeach
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center">
                                            <!--Category & Title-->
                                            <a href="" class="grey-text">

                                                <h5><strong>{{ $product->name }}</strong></h5>

                                            </a>
                                            <h5>

                                                <button type="button" class="btn btn-secondary btn-sm">Do koszyka</button>

                                            </h5>

                                            <h4 class="font-weight-bold blue-text">
                                                <strong>{{ $product->price() }}zł</strong>
                                            </h4>

                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                            @endforeach
                        </div>
                        <!--Fourth column-->

                </div>
                <!--Grid row-->

                </section>
                <!-- /.col-lg-9 -->
                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn">
                    <ul class="pagination pg-blue">

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">1
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--Pagination-->
            </div>


        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="foot">

            <p class="m-0 text-center text-white">Informacje o sklepie (adres, zwroty, kontakt)</p>

            <!-- /.container -->
        </footer>
    @endsection
