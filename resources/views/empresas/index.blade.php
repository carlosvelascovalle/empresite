@include('headerindex')
<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div class="site-content-inner">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <ul id="jh-scroll-here" class="company_listings list-classic">
                        @foreach ($empresas as $empresa)
                            <li class="company_listing type-company_listing status-publish has-post-thumbnail hentry company_listing_category-information-technology company_listing_type-full-time company_listing_salary-5000-10000 company_listing_career_level-lead company_listing_experience-6-7-years company_listing_gender-male company_listing_industry-information-technology company_listing_qualification-bachelor-degree company-type-full-time company_position_featured"
                                data-longitude="48.379433" data-latitude="31.1655799">
                                <a href="/empresa/{{ $empresa->slug }}">
                                    <div class="company-details">
                                        <div class="company-details-inner">
                                            <h3 class="company-listing-loop-company__title">{{ $empresa->denominacion }}
                                            </h3>
                                            <div class="company-listing-company company">
                                                <strong
                                                    style="text-transform: lowercase">{{ $empresa->pagina_web }}</strong>
                                            </div>
                                            <div class="company-location location">
                                                <i class="la la-map-marker"></i>{{ $empresa->localidad }}
                                            </div>
                                        </div>
                                        <div class="company-listing-meta meta">
                                            <ul class="company-types">
                                                <li class="provincia {{ strtolower($empresa->provincia) }}">
                                                    {{ $empresa->provincia }} </li>
                                            </ul>
                                            {@if ($empresa->antiguedad > 0)
                                                <span class="company-published-date date"><time
                                                        datetime="2022-11-18">Antiguedad:
                                                        {{ $empresa->antiguedad }}
                                                        años</time>
                                                </span>
                                            @endif}
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                        <nav class="wpjm-pagination">
                            {{ $empresas->links() }}
                        </nav>
                </main>
            </div>
        </div>
    </div>
</div>
@include('footer')
