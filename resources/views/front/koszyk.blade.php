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
            <!-- /.col-lg-3 -->
            <div class="col-lg-9 mt-5">
                <!--Section: Block Content-->
                <section>

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-8">

                            <!-- Card -->
                            <div class="card wish-list mb-3">
                                <div class="card-body">

                                    <h5 class="mb-4">Cart (<span>2</span> items)</h5>

                                    <div class="row mb-4">
                                        <div class="col-md-5 col-lg-3 col-xl-3">
                                            <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                                <img class="img-fluid w-100" src={{ url('/assets/img/b2.jpg') }}
                                                    alt="Sample">

                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-9 col-xl-9">
                                            <div>
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h5>Bombka haftowana</h5>
                                                        <p class="mb-3 text-muted text-uppercase small">Kategoria - Bombki
                                                        </p>
                                                        <p class="mb-2 text-muted text-uppercase small">Kolor - Beż</p>
                                                        <p class="mb-3 text-muted text-uppercase small">Produkcja - Wrocław
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <div class="def-number-input number-input safari_only mb-0 w-100">
                                                            <button
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                                class="minus"></button>
                                                            <input class="quantity" min="0" name="quantity" value="1"
                                                                type="number">
                                                            <button
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                                class="plus"></button>
                                                        </div>
                                                        <small id="passwordHelpBlock"
                                                            class="form-text text-muted text-center">
                                                            (Ilość, 1 szt)
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <a href="#!" type="button"
                                                            class="card-link-secondary small text-uppercase mr-3"><i
                                                                class="fas fa-trash-alt mr-1"></i> Usuń produkt </a>
                                                    </div>
                                                    <p class="mb-0"><span><strong>50 zł</strong></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                    <div class="row mb-4">
                                        <div class="col-md-5 col-lg-3 col-xl-3">
                                            <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                                <img class="img-fluid w-100" src={{ url('/assets/img/b6.jpg') }}
                                                    alt="Sample">

                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-9 col-xl-9">
                                            <div>
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h5>Bombka malowana</h5>
                                                        <p class="mb-3 text-muted text-uppercase small">Kategoria - Bombki
                                                        </p>
                                                        <p class="mb-2 text-muted text-uppercase small">Kolor - Biel </p>
                                                        <p class="mb-3 text-muted text-uppercase small">Produkcja - Łódź</p>
                                                    </div>
                                                    <div>
                                                        <div class="def-number-input number-input safari_only mb-0 w-100">
                                                            <button
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                                class="minus"></button>
                                                            <input class="quantity" min="0" name="quantity" value="1"
                                                                type="number">
                                                            <button
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                                class="plus"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <a href="#!" type="button"
                                                            class="card-link-secondary small text-uppercase mr-3"><i
                                                                class="fas fa-trash-alt mr-1"></i> Usuń produkt </a>

                                                    </div>
                                                    <p class="mb-0"><span><strong>30 zł</strong></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Dodanie produktu do
                                        koszyka nie powoduje rezerwacji produktu.</p>

                                </div>
                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="card mb-3">
                                <div class="card-body">

                                    <h5 class="mb-4">Oczekiwany czas dostawy</h5>

                                    <p class="mb-0"> Do 10 dni roboczych</p>
                                </div>
                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="card mb-3">
                                <div class="card-body">

                                    <h5 class="mb-4">Akceptujemy płatności</h5>

                                    <img class="mr-2" width="45px"
                                        src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                        alt="Visa">
                                    <img class="mr-2" width="45px"
                                        src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                        alt="American Express">
                                    <img class="mr-2" width="45px"
                                        src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                        alt="Mastercard">

                                </div>
                            </div>
                            <!-- Card -->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4">

                            <!-- Card -->
                            <div class="card mb-3">a
                                <div class="card-body">

                                    <h5 class="mb-3">Podsumowanie</h5>

                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            Cena produktów
                                            <span>80 zł</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            Dostawa
                                            <span>Gratis</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div>
                                                <strong>Cena zamówienia</strong>

                                            </div>
                                            <span><strong>80 zł</strong></span>
                                        </li>
                                    </ul>

                                    <button type="button"
                                        class="btn btn-primary btn-block waves-effect waves-light">Zamawiam</button>

                                </div>
                            </div>
                            <!-- Card -->


                        </div>
                        <!--Grid column-->
                    </div>
            </div>
            <!--Grid row-->

            </section>
            <!--Section: Block Content-->

            <!-- /.col-lg-9 -->

        </div>

    </div>

    <!-- /.container -->

    <!-- Footer -->
    <footer class="foot">

        <p class="m-0 text-center text-white">Informacje o sklepie (adres, zwroty, kontakt)</p>

        <!-- /.container -->
    </footer>
@endsection
