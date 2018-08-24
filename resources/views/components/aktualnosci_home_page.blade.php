<div class="col-lg-4 mt-5 mt-md-0 aktualnosci">
    <div class="card shadow-v2 z-index-5" data-offset-top-xl="-160">
        <div class="card-header bg-primary text-white border-bottom-0" style="background-color: #4e7fff!important;">
            <span class="lead font-semiBold text-uppercase">
              Aktualności
            </span>
        </div>

        @foreach($aktualnosciDB as $aktualnosc)
            <div class="p-4 border-bottom wow fadeInUp">
                <p class="text-primary mb-1 dodgerbluenohover">
                    @php
                        echo Carbon\Carbon::parse($aktualnosc->created_at)->format('d F, Y');
                    @endphp
                </p>
                <a href='{{url("aktualnosc_$aktualnosc->id")}}'>
                    {{$aktualnosc->title}}
                </a>
            </div>
        @endforeach
        <div class="p-4">
            <a href="{{url('/aktualnosci')}}" class="btn btn-link pl-0 btnallacti">
                Zobacz wszystkie aktualności
            </a>
        </div>
    </div>
</div>