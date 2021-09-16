@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7">
    <div class="container">
        <h2 class="title text-center mb-3">Саволҳои аксар вақт додашаванда</h2>
        <div class="accordion accordion-rounded" id="accordion-1">
            <div class="card card-box card-sm bg-light">
                <div class="card-header" id="heading-1">
                    <h2 class="card-title">
                        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            Харид тариқи насия аз sale.matin.tj чӣ маънӣ дорад?
                        </a>
                    </h2>
                </div>
                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-1">
                    <div class="card-body">
                        <i>Ин қарзи истеъмолии муфид ва қулай буда, тавассути он Шумо метавонед харид намуда, баъд пардохт намоед.</i>
                    </div>
                </div>
            </div>

            <div class="card card-box card-sm bg-light">
                <div class="card-header" id="heading-2">
                    <h2 class="card-title">
                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            Мӯҳлати баррасии дархости Шумо чанд рӯз аст?
                        </a>
                    </h2>
                </div>
                <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-1">
                    <div class="card-body">
                        <i>Мӯҳлати баррасии дархост аз 1 рӯзи корӣ мебошад.</i>
                    </div>
                </div>
            </div>

            <div class="card card-box card-sm bg-light">
                <div class="card-header" id="heading-3">
                    <h2 class="card-title">
                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            Кӣ метавонед қарзро барои харид барасмият дарорад?
                        </a>
                    </h2>
                </div>
                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-1">
                    <div class="card-body">
                        <i>Қарз танҳо дар сурати мавҷудияти ҳуҷҷатҳои тасдиқкунандаи пардохтпазирӣ (маълумотнома оиди даромад, корти нафақавӣ) дода мешавад.</i>
                    </div>
                </div>
            </div>

            <div class="card card-box card-sm bg-light">
                <div class="card-header" id="heading-4">
                    <h2 class="card-title">
                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            Чӣ хел ҳуҷҷатҳо барои қарз заруранд?
                        </a>
                    </h2>
                </div>
                <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-1">
                    <div class="card-body">
                        <ul class="nav-item">
                            <i class="mb-2"><b>Ҳамагӣ 2 ҳуҷҷатҳо:</b></i>
                            <li class="nav-link">
                                <i>- шиноснома ва РМА</i>
                            </li>
                            <li class="nav-link">
                                <i>- маълумотнома оиди даромад, нафақа, патент, интиқоли пулӣ.</i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card card-box card-sm bg-light">
                <div class="card-header" id="heading-5">
                    <h2 class="card-title">
                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            Чӣ мешавад агар ман пардохти қарзро батаъхир гузорам?
                        </a>
                    </h2>
                </div>
                <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-1">
                    <div class="card-body">
                        <i>Барои ҳар рӯзи таъхир дар ҳаҷми 0,5%, вале на кам аз 15 сомонӣ дар як рӯз ҷарима ситонида мешавад.</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-xl-7">
                <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                    <div class="col text-center">
                        <h3 class="cta-title text-white">Агар Шумо саволҳои бештар дошта бошед</h3>
                    </div>

                    <div class="col-auto text-center mt-4 mt-md-0">
                        <a href="{{ route('info.contact') }}" class="btn btn-outline-white">
                            <span>Муроҷат</span><i class="icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection