@include('headerinteriores')

<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div class="site-content-inner">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="single_job_listing">
                        <div class="single-job-listing__inner">
                            <div id="jh-scroll-here" class="single-job-listing__content-area">
                                <div class="job_listing-single-job">
                                    <div class="job-listing-single-job__title-type">
                                        <h1 class="section-title" style="font-size: 32px;line-height: 1.5;">
                                            {{ $empresa->denominacion }}</h1>
                                        <h2 class="section-sub-title">{{ $empresa->actividad_cnae }}</h2>
                                        <ul class="job-types">
                                            @if ($empresa->cif != '')
                                                <li class="job-type full-time">
                                            @endif
                                            {{ $empresa->cif }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single-job-listing-company__contact">

                                    </div>
                                </div>
                                <div class="single-job-listing__widget single-job-listing__overview"
                                    style="border:none;">
                                    <ul class="single-job-listing__widget--content"style="border:none;">
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-map-marker"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Dirección</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <div class="location"><a class="google_map_link"
                                                                href="https://maps.google.com/maps?q={{ $empresa->denominacion }}&amp;zoom=21&amp;maptype=roadmap&amp;sensor=false"
                                                                target="_blank">{{ $empresa->direccion }},
                                                                {{ $empresa->localidad }}, {{ $empresa->provincia }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-phone"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Télefono</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a href="tel:{{ $empresa->telefono }}">{{ $empresa->telefono }}
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-calendar"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Antiguedad</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><span>
                                                                    {{ $empresa->antiguedad }} años</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-link"></i> </div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Página Web</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a href=" {{ $empresa->pagina_web }}" target="_blank"
                                                                    rel="nofollow">{{ $empresa->pagina_web }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-envelope"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Correo Electrónico</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a
                                                                    href="mailto:{{ $empresa->email }}">{{ $empresa->email }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-industry"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Actividad CNAE</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a href="#">{{ $empresa->actividad_cnae }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-job-listing__sidebar-area">

                                <div class="job_application application">
                                    <div class="application_details" style="display: none;">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@include('footer')
