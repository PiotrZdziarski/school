@extends('layouts.app_no_footer_nav')


<section class="padding-y-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h2 class="text-center paddingBottom-20 colordodgerblue">Aktualności</h2>
                <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
                            Dodaj
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
                            Edytuj
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
                        <div class="card shadow-v3" style="box-shadow:0 0 30px 0 rgba(0, 0, 0, 0.10)">
                            <div class="card-header border-bottom">
                                <h3 class="mt-2">
                                    Dodaj
                                </h3>
                            </div>
                            <div class="card-body">
                                <form action="{{url('/addaktualnosc')}}" method="POST" class="px-lg-4">
                                    <div class="input-group input-group--focus mb-3">
                                        <input name="title" maxlength="80" type="text"
                                               class="form-control pl-0 padding-10" placeholder="Tytuł">
                                    </div>
                                    <div class="input-group input-group--focus mb-3">
                                        <textarea name="description" rows="3" maxlength="200" title="opis"
                                                  class="form-control pl-0 padding-10"
                                                  placeholder="Krótki opis"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary btnreadmore">Dodaj</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Tabs_1-2" role="tabpanel">
                        <div class="container padding-2-low-width containeredits">
                            @foreach($aktualnosciDB as  $aktualnosc)
                                <div class="w-100 flexboxallwidth aktualnosc">
                                    <div class="titleaktualnosc">{{$aktualnosc->title}}</div>
                                    <div class="utility"><i data-toggle="collapse" href="#collapse{{$aktualnosc->id}}"
                                                            class="ti-pencil colordodgerblue colordodgerbluehover pointer"></i>
                                    </div>
                                    <div class="utility"><i data-toggle="modal" data-target="#delete{{$aktualnosc->id}}"
                                                            class="ti-trash colorred pointer"></i></div>
                                </div>
                                @include('components.deleteaktualnosci')
                                <div class="collapse collapseedit boxshadow" id="collapse{{$aktualnosc->id}}">
                                    <div class="card card-body">
                                        <form action="{{url('/editaktualnosc')}}" method="POST" class="px-lg-4">
                                            <input type="hidden" value="{{$aktualnosc->id}}" name="id">
                                            <div class="input-group input-group--focus mb-3">
                                                <input maxlength="80" name="title" type="text"
                                                       class="form-control pl-0 padding-10"
                                                       value="{{$aktualnosc->title}}">
                                            </div>
                                            <div class="input-group input-group--focus mb-3">
                                                <textarea rows="3" name="description" maxlength="200" title="opis"
                                                          class="form-control pl-0 padding-10">{{$aktualnosc->description}}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-primary btnreadmore">Edytuj
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- END tab-content-->
            </div> <!-- END col-12 -->
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>
