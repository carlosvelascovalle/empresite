@include('header')
<header class="site-content-page-header"
    style="background: url(/img/listado-de-empresas.jpg) center center no-repeat fixed">
    <div class="site-content-page-header-inner">
        <div class="job-search-block">
            <div class="section-header">
                <h1 class="section-title">{{ $empresa->denominacion }}</h1>
                <h2 class="section-sub-title">{{ $empresa->actividad_cnae }}</h2>
            </div>
        </div>
        <div class="jh-scroll-to">
            <a href="#jh-scroll-here" title="Scroll Button"><i class="la la-arrow-down"></i></a>
        </div>
    </div>
</header>
