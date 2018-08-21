@extends('layouts.app_no_footer_nav')
<section class="height-100vh flex-center">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-primary display-1">404</h1>
                <h2 class="mb-4">
                    Ups! Nie znaleziono takiej strony!
                </h2>
                <p>
                    Link który podałeś jest prawdopodobie zły lub strona została usunięta.
                </p>
                <a href="{{url('/')}}" class="btn btn-rounded btn-primary mt-4 btnreadmore">Wróć do strony głównej</a>
            </div>
        </div> <!-- END row-->
    </div> <!-- END container-->

</section>
