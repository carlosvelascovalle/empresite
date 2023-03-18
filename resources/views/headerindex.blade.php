@include('header')
<header class="site-content-page-header"
    style="background: url(./img/listado-de-empresas.jpg) center center no-repeat fixed">
    <div class="site-content-page-header-inner">
        <div class="job-search-block">
            <div class="section-header">
                <h1 class="section-title">El Mejor Buscador de Empresas</h1>
                <h2 class="section-sub-title">Encuentra todas las empresas en nuestro listado de empresas</h2>
            </div>
            <div class="job-search-form">
                <form method="GET">
                    <div class="job-search-keywords">
                        <label class="sr-only" for="search">Keywords</label>
                        <input type="text" id="search" name="search"
                            placeholder="Job title, keywords or company name" class="ui-autocomplete-input"
                            autocomplete="off" value="{{ $search }}">
                    </div>
                    <div class="job-search-submit">
                        <button type="submit" value="Search"><i class="la la-search"></i><span
                                class="job-search-text">Search</span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="jh-scroll-to">
            <a href="#jh-scroll-here" title="Scroll Button"><i class="la la-arrow-down"></i></a>
        </div>
    </div>
</header>
