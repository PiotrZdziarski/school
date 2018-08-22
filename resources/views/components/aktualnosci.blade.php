<div class="col-lg-4 mt-5 mt-md-0">
    <div class="card shadow-v1 z-index-5 aktualnosci_sidebar"
         style="box-shadow: 0 10px 20px #eaeaea; margin-bottom: 20px;">
        <div class="card-header bg-primary text-white border-bottom-0"
             style="background-color: white !important; padding-top: 25px !important; padding-bottom: 25px !important; color: #333333!important;border-top: 3px solid #0b9dff; border-bottom: .5px solid #dddddd !important;">
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
                <a href="#">
                    {{$aktualnosc->title}}
                </a>
            </div>
        @endforeach
        <div class="p-4">
            <a href="#" class="btn btn-link pl-0 btnallacti">
                Zobacz wszystkie aktualności
            </a>
        </div>
    </div>
</div>