@include('headersuperior')
<title>{{ $empresa->denominacion }} | EMPRESITE</title>
<meta name="description"
    content="Descubre {{ $empresa->denominacion }} en el listado de empresas Empresite. ¡No busques más, Empresite es tu guía para encontrar lo que necesitas en el mundo empresarial!">
@include('header')
<header class="site-content-page-header"
    style="background: url(/img/listado-de-empresas.jpg) center center no-repeat fixed">
    <div class="site-content-page-header-inner">
        <div class="company-search-block">
            <div class="section-header">

            </div>
            <div class="company-search-form">
                <form method="GET" action="/empresas/">
                    <div class="company-search-keywords">
                        <label class="sr-only" for="search">Keywords</label>
                        <input type="text" id="search" name="search"
                            placeholder="Busca por CIF, Nombre de Empresa, Provincia..." class="ui-autocomplete-input"
                            autocomplete="off" value="{{ $search }}">
                    </div>
                    <div class="company-search-submit">
                        <button type="submit" value="Search"><i class="la la-search"></i><span
                                class="company-search-text">Search</span></button>
                    </div>

                </form>
            </div>
        </div>
        <div class="jh-scroll-to">
            <a href="#jh-scroll-here" title="Scroll Button"><i class="la la-arrow-down"></i></a>
        </div>
    </div>
</header>
<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div class="site-content-inner">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="single_company_listing">
                        <div class="single-company-listing__inner">
                            <div id="jh-scroll-here" class="single-company-listing__content-area">
                                <div class="company_listing-single-company">
                                    <div class="company-listing-single-company__title-type">
                                        <h1 class="section-title" style="font-size: 32px;line-height: 1.5;">
                                            {{ $empresa->denominacion }}</h1>
                                        <ul class="company-types">
                                            @if ($empresa->cif != '')
                                                <li class="company-type full-time">
                                            @endif
                                            {{ $empresa->cif }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single-company-listing-company__contact">

                                    </div>
                                </div>
                                <div class="single-company-listing__widget single-company-listing__overview"
                                    style="border:none;">
                                    <ul class="single-company-listing__widget--content"style="border:none;">
                                        <li>
                                            <div class="single-company-listing-overview__detail">
                                                <div class="single-company-listing-overview__detail--icon"><i
                                                        class="la la-map-marker"></i></div>
                                                <div class="single-company-listing-overview__detail--content">
                                                    <h6>Dirección</h6>
                                                    <div class="single-company-listing-overview__detail-content--value">
                                                        <div class="location"><a class="google_map_link"
                                                                href="https://maps.google.com/maps?q={{ $empresa->direccion }}&amp;zoom=21&amp;maptype=roadmap&amp;sensor=false"
                                                                target="_blank">{{ $empresa->direccion }},
                                                                {{ $empresa->localidad }}, {{ $empresa->provincia }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-company-listing-overview__detail">
                                                <div class="single-company-listing-overview__detail--icon"><i
                                                        class="la la-phone"></i></div>
                                                <div class="single-company-listing-overview__detail--content">
                                                    <h6>Télefono</h6>
                                                    <div class="single-company-listing-overview__detail-content--value">
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
                                            <div class="single-company-listing-overview__detail">
                                                <div class="single-company-listing-overview__detail--icon"><i
                                                        class="la la-calendar"></i></div>
                                                <div class="single-company-listing-overview__detail--content">
                                                    <h6>Antiguedad</h6>
                                                    <div class="single-company-listing-overview__detail-content--value">
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
                                            <div class="single-company-listing-overview__detail">
                                                <div class="single-company-listing-overview__detail--icon"><i
                                                        class="la la-link"></i> </div>
                                                <div class="single-company-listing-overview__detail--content">
                                                    <h6>Página Web</h6>
                                                    <div class="single-company-listing-overview__detail-content--value">
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
                                            <div class="single-company-listing-overview__detail">
                                                <div class="single-company-listing-overview__detail--icon"><i
                                                        class="la la-envelope"></i></div>
                                                <div class="single-company-listing-overview__detail--content">
                                                    <h6>Correo Electrónico</h6>
                                                    <div class="single-company-listing-overview__detail-content--value">
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
                                            <div class="single-company-listing-overview__detail">
                                                <div class="single-company-listing-overview__detail--icon"><i
                                                        class="la la-industry"></i></div>
                                                <div class="single-company-listing-overview__detail--content">
                                                    <h6>Actividad CNAE</h6>
                                                    <div class="single-company-listing-overview__detail-content--value">
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
                            <div class="single-company-listing__sidebar-area">

                                <div class="company_application application">
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
