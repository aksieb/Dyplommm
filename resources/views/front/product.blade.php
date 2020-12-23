@extends('layouts.app')
@section('stylesheets')
    <link rel='stylesheet' href={{ asset('/assets/css/shop-item.css') }} />
@endsection
@section('content')


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ url('/assets/img/5.jpg') }}" class="img-fluid" alt="...">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg></a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            </svg></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4">Świątecznik</h1>
                <div class="list-group">


                    <p>
                        <a class="btn btn-link" data-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            Sztuczne choinki
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <ul>
                            <li>JODŁA</li>
                            <li>ŚWIERK KAUKASKI</li>
                            <li>ŚWIERK NATURALNY</li>
                            <li>SOSNA DIAMENTOWA</li>
                            <li>SOSNA OŚNIEŻONA</li>
                            <li>SOSNA GÓRSKA</li>

                        </ul>
                    </div>
                    <p>
                        <a class="btn btn-link" data-toggle="collapse" href="#collapseExample2" role="button"
                            aria-expanded="false" aria-controls="collapseExample2">
                            Żywe drzewka
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample2">
                        <ul>
                            <li>JODŁA</li>
                            <li>ŚWIERK KAUKASKI</li>
                            <li>ŚWIERK NATURALNY</li>
                            <li>SOSNA DIAMENTOWA</li>
                            <li>SOSNA OŚNIEŻONA</li>
                            <li>SOSNA GÓRSKA</li>

                        </ul>
                    </div>
                    <p>
                        <a class="btn btn-link" data-toggle="collapse" href="#collapseExample3" role="button"
                            aria-expanded="false" aria-controls="collapseExample3">
                            Stroiki
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample3">
                        <ul>
                            <li>MINI CHOINKA</li>
                            <li>ŚWIECZNIK NA STÓŁ</li>
                            <li>NA DRZWI</li>
                            <li>NA PARAPET</li>
                            <li>NA OKNO</li>


                        </ul>
                    </div>
                    <p>
                        <a class="btn btn-link" data-toggle="collapse" href="#collapseExample4" role="button"
                            aria-expanded="false" aria-controls="collapseExample4">
                            Bombki
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample4">
                        <ul>
                            <li>PLASTIKOWE</li>
                            <li>METALOWE</li>
                            <li>SZKLANE</li>
                            <li>MATERIAŁOWE</li>
                            <li>ROBIONE RĘCZNIE</li>
                            <li>ZAMGLONE</li>

                        </ul>
                    </div>

                    <p>
                        <a class="btn btn-link" data-toggle="collapse" href="#collapseExample5" role="button"
                            aria-expanded="false" aria-controls="collapseExample5">
                            Lampki choinkowe
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample5">
                        <ul>
                            <li>JEDNOKOLOROWE</li>
                            <li>KOLOROWE</li>
                            <li>UKŁADY</li>
                            <li>GWIAZY</li>
                            <li>ŚWIECZKI</li>
                            <li>SOPLE</li>

                        </ul>
                    </div>
                    <p>
                        <a class="btn btn-link" data-toggle="collapse" href="#collapseExample6" role="button"
                            aria-expanded="false" aria-controls="collapseExample6">
                            Oświetlenie zewnętrzne
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample6">
                        <ul>
                            <li>KULE</li>
                            <li>SOPLE LODU</li>
                            <li>MIGOTAJĄCE</li>
                            <li>GWIAZDKI</li>
                            <li>RENIFERY</li>

                        </ul>
                    </div>
                    <p>
                        <a class="btn btn-link" data-toggle="collapse" href="#collapseExample7" role="button"
                            aria-expanded="false" aria-controls="collapseExample7">
                            Świeczki
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample7">
                        <ul>
                            <li>DŁUGIE</li>
                            <li>PACHNĄCE</li>
                            <li>KOLOROWE</li>
                            <li>MARMURKOWE</li>
                            <li>ZESTAWY</li>

                        </ul>
                    </div>

                    <p>
                        <a class="btn btn-link" data-toggle="collapse" href="#collapseExample8" role="button"
                            aria-expanded="false" aria-controls="collapseExample8">
                            Łańcuchy
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample8">
                        <ul>
                            <li>CHOINKOWE</li>
                            <li>NA PARAPET</li>
                            <li>OKIENNE</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-5">
                <!-- /.col-lg-3 -->
                <!--Section: Block Content-->
                <section class="mb-5">

                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">

                            <div id="mdb-lightbox-ui"></div>

                            <div class="mdb-lightbox">

                                <div class="row product-gallery mx-1">

                                    <div class="col-12 mb-0 mt-5">
                                        <figure class="view overlay rounded z-depth-1 main-img">
                                            <a href={{ url('/assets/img/b2.jpg') }} data-size="710x823">
                                                <img src={{ url('/assets/img/b2.jpg') }} class="img-fluid z-depth-1">
                                            </a>
                                        </figure>
                                        <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                                                data-size="710x823">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                                                    class="img-fluid z-depth-1">
                                            </a>
                                        </figure>
                                        <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                                                data-size="710x823">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                                                    class="img-fluid z-depth-1">
                                            </a>
                                        </figure>
                                        <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                                                data-size="710x823">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                                                    class="img-fluid z-depth-1">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="view overlay rounded z-depth-1 gallery-item">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                                                        class="img-fluid">
                                                    <div class="mask rgba-white-slight"></div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="view overlay rounded z-depth-1 gallery-item">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                                                        class="img-fluid">
                                                    <div class="mask rgba-white-slight"></div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="view overlay rounded z-depth-1 gallery-item">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                                                        class="img-fluid">
                                                    <div class="mask rgba-white-slight"></div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="view overlay rounded z-depth-1 gallery-item">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                                                        class="img-fluid">
                                                    <div class="mask rgba-white-slight"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="opis">

                                <h5><strong>Bombka haftowana</strong></h5>
                                <p class="mb-2 text-muted text-uppercase small">Bombki</p>

                                <p><span class="mr-1"><strong>50 zł</strong></span></p>
                                <p class="pt-1">Bombka haftowana robiona z doskonałą precyzją tak by pasowała zarówno do
                                    powieszenia na choince, jak i do dodania do ręcznie robionych ozdób.<br>
                                    Bombki wykonane są z znakomitej jakości specjalnych nici do haftowania, tak aby bombki
                                    zachowały swój kształt oraz kolor.</p>
                                <div class="table-responsive">
                                    <table class="table table-sm table-borderless mb-0">
                                        <tbody>

                                            <tr>
                                                <th class="pl-0 w-25" scope="row"><strong>Kategoria</strong></th>
                                                <td>Bombki</td>
                                            </tr>
                                            <tr>
                                                <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                                                <td>Beż</td>
                                            </tr>
                                            <tr>
                                                <th class="pl-0 w-25" scope="row"><strong>Produkcja</strong></th>
                                                <td>Wrocław</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="table-responsive mb-2">
                                    <table class="table table-sm table-borderless">
                                        <tbody>
                                            <tr>
                                                <td class="pl-0 pb-0 w-25"><strong>ILOŚĆ</strong></td>
                                                <!-- <td class="pb-0">Select size</td>!-->
                                            </tr>
                                            <tr>
                                                <td class="pl-0">
                                                    <div class="def-number-input number-input safari_only mb-0">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="minus"></button>
                                                        <input class="quantity" min="0" name="quantity" value="1"
                                                            type="number">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus"></button>
                                                    </div>
                                                </td>
                                                <!--<td>
                      <div class="mt-1">
                        <div class="form-check form-check-inline pl-0">
                          <input type="radio" class="form-check-input" id="small" name="materialExampleRadios"
                            checked>
                          <label class="form-check-label small text-uppercase card-link-secondary"
                            for="small">Small</label>
                        </div>
                        <div class="form-check form-check-inline pl-0">
                          <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                          <label class="form-check-label small text-uppercase card-link-secondary"
                            for="medium">Medium</label>
                        </div>
                        <div class="form-check form-check-inline pl-0">
                          <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                          <label class="form-check-label small text-uppercase card-link-secondary"
                            for="large">Large</label>
                        </div>
                      </div>
                    </td>
                    !-->
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Kup teraz</button>
                                <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
                                        class="fas fa-shopping-cart pr-2"></i>Dodaj do koszyka</button>
                            </div>
                        </div>
                    </div>

                </section>
                <!--Section: Block Content-->

            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer class="foot">

        <p class="m-0 text-center text-white">Informacje o sklepie (adres, zwroty, kontakt)</p>

        <!-- /.container -->
    </footer>
    </footer>
@endsection
