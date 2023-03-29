@include('headersuperior')
<title>EMPRESITE | El Mejor Buscador de Empresas</title>
<meta name="description"
    content="Empresite es el lugar ideal para encontrar las empresas que necesitas. ¡No busques más, Empresite es tu guía para encontrar lo que necesitas en el mundo empresarial!">
<link rel="stylesheet" href="{{ asset('css/estilos-nuevos.css') }}">
@include('header')
<header class="site-content-page-header"
    style="background: url(/img/listado-de-empresas.jpg) center center no-repeat fixed">
    <div class="site-content-page-header-inner">
        <div class="company-search-block">

            <div class="company-search-form">
                <form class="search-company-form" method="GET">
                    <div class="company-search-keywords">
                        <label class="sr-only" for="search">Keywords</label>
                        <input type="text" id="search" name="search"
                            placeholder="Busca por CIF, Nombre de Empresa, localidad..." class="ui-autocomplete-input"
                            autocomplete="off" value="{{ $search }}">
                    </div>
                    <div class="company-search-submit">
                        <button type="submit" value="Search">
                            <div class="button-container-icon"><i class="la la-search"></i></div><span
                                class="company-search-text">Search</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="section-header">
                <h1 class="section-title">El Mejor Buscador de Empresas</h1>
                <h2 class="section-sub-title">Encuentra todas las empresas en nuestro listado de empresas</h2>
            </div>
        </div>
        <div class="jh-scroll-to">
            <a href="#jh-scroll-here" title="Scroll Button"><i class="la la-arrow-down"></i></a>
        </div>
    </div>
</header>
