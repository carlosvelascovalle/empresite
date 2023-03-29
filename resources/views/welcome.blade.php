@include('headerindex')


<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div class="site-content-inner">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section id="jh-scroll-here" class="jh-section company-categories-section v1">
                        <div class="container">
                            <div class="section-header">
                                <h3 class="section-title">Categorias</h3>
                                <span class="section-sub-title">{{ $numero_de_localidades }} Localidades</span>
                            </div>
                            <div class="company-categories-section__inner">
                                <ul class="company-categories">
                                    @foreach ($localidades_empresas as $localidad_empresa)
                                        <li class="company-category">
                                            <a href="#">
                                                <div class="media-icon">
                                                    <i class="la la-building-o"></i>
                                                </div>
                                                <div class="media-caption">
                                                    <h4 class="category-titile">{{ $localidad_empresa->localidad }}</h4>
                                                    <span class="company-count">{{ $localidad_empresa->total }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="action">
                                    <a class="action-link" href="/">Proximamente</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="jh-section banners-block with-action" style="">
                        <div class="container">
                            <div class="banners-block-inner">
                                <div class="section-header">
                                    <h3 class="section-title">Encuentra cualquier empresa en nuestro
                                        listado
                                    </h3>
                                    <span class="section-sub-title">El resumen de todas las empresas de
                                        Cantabria en minutos con Empresite</span>
                                </div>
                                <div class="action">
                                    <a class="action-link" href="/empresas">Ver todas las empresas</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="jh-section company-list-section">
                        <div class="container">
                            <div class="section-header">
                                <h3 class="section-title">Empresas Destacadas</h3>
                                <span class="section-sub-title">Las empresas destacadas</span>
                            </div>
                            <div class="company_listings" data-location="" data-keywords="" data-show_filters="false"
                                data-show_pagination="false" data-per_page="6" data-orderby="featured" data-order="DESC"
                                data-categories="" data-featured="true">
                                <ul class="company_listings list">
                                    <!--listar empresas-->
                                    @foreach ($empresas as $empresa)
                                        <li
                                            class="company_listing type-company_listing status-publish has-post-thumbnail hentry company_listing_category-information-technology company_listing_type-full-time company_listing_salary-5000-10000 company_listing_career_level-lead company_listing_experience-6-7-years company_listing_gender-male company_listing_industry-information-technology company_listing_qualification-bachelor-degree company-type-full-time company_position_featured">
                                            <a href="/empresa/{{ $empresa->slug }}">
                                                <div class="company-listing-company-logo"></div>
                                                <div class="company-details">
                                                    <div class="company-details-inner">
                                                        <h3 class="company-listing-loop-company__title">
                                                            {{ $empresa->denominacion }}</h3>
                                                        <div class="company-listing-company company">
                                                            <strong>{{ $empresa->localidad }}</strong>
                                                        </div>
                                                        <div class="company-location location">
                                                            <i class="la la-map-marker"></i>{{ $empresa->pagina_web }}
                                                        </div>
                                                    </div>
                                                    <div class="company-listing-meta meta">
                                                        <ul class="company-types">
                                                            <li class="company-type full-time"style="width:max-content">
                                                                {{ $empresa->provincia }} </li>
                                                        </ul><span class="company-published-date date"><time
                                                                datetime="2022-11-18">Antiguedad:
                                                                {{ $empresa->antiguedad }}
                                                                años</time></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <a class="load_more_companys" href="/empresas"><strong>Ver más</strong></a>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</div>
