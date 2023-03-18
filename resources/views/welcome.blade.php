@include('headerindex')


<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div class="site-content-inner">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section id="jh-scroll-here" class="jh-section job-categories-section v1">
                        <div class="container">
                            <div class="section-header">
                                <h3 class="section-title">Categorias</h3>
                                <span class="section-sub-title">{{ $numero_de_localidades }} Localidades</span>
                            </div>
                            <div class="job-categories-section__inner">
                                <ul class="job-categories">
                                    @foreach ($localidades_empresas as $localidad_empresa)
                                        <li class="job-category">
                                            <a href="https://jobhunt.madrasthemes.com/job-category/construction/">
                                                <div class="media-icon">
                                                    <i class="la la-building-o"></i>
                                                </div>
                                                <div class="media-caption">
                                                    <h4 class="category-titile">{{ $localidad_empresa->localidad }}</h4>
                                                    <span class="job-count">{{ $localidad_empresa->total }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                    <!--li class="job-category">
                                        <a href="https://jobhunt.madrasthemes.com/job-category/corodinator/">
                                            <div class="media-icon">
                                                <i class="la la-users"></i>
                                            </div>
                                            <div class="media-caption">
                                                <h4 class="category-titile">Corodinator</h4>
                                                <span class="job-count">1 open position</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="job-category">
                                        <a href="https://jobhunt.madrasthemes.com/job-category/employer/">
                                            <div class="media-icon">
                                                <i class="la la-gears"></i>
                                            </div>
                                            <div class="media-caption">
                                                <h4 class="category-titile">Employer</h4>
                                                <span class="job-count">4 open positions</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="job-category">
                                        <a href="https://jobhunt.madrasthemes.com/job-category/financial-career/">
                                            <div class="media-icon">
                                                <i class="la la-money"></i>
                                            </div>
                                            <div class="media-caption">
                                                <h4 class="category-titile">Financial Career</h4>
                                                <span class="job-count">1 open position</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="job-category">
                                        <a href="https://jobhunt.madrasthemes.com/job-category/information-technology/">
                                            <div class="media-icon">
                                                <i class="la la-desktop"></i>
                                            </div>
                                            <div class="media-caption">
                                                <h4 class="category-titile">Information Technology</h4>
                                                <span class="job-count">4 open positions</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="job-category">
                                        <a href="https://jobhunt.madrasthemes.com/job-category/marketing/">
                                            <div class="media-icon">
                                                <i class="la la-line-chart"></i>
                                            </div>
                                            <div class="media-caption">
                                                <h4 class="category-titile">Marketing</h4>
                                                <span class="job-count">3 open positions</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="job-category">
                                        <a href="https://jobhunt.madrasthemes.com/job-category/quality-check/">
                                            <div class="media-icon">
                                                <i class="la la-certificate"></i>
                                            </div>
                                            <div class="media-caption">
                                                <h4 class="category-titile">Quality check</h4>
                                                <span class="job-count">1 open position</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="job-category">
                                        <a href="https://jobhunt.madrasthemes.com/job-category/real-estate/">
                                            <div class="media-icon">
                                                <i class="la la-globe"></i>
                                            </div>
                                            <div class="media-caption">
                                                <h4 class="category-titile">Real Estate</h4>
                                                <span class="job-count">1 open position</span>
                                            </div>
                                        </a>
                                    </li-->
                                </ul>
                                <div class="action">
                                    <a class="action-link"
                                        href="https://jobhunt.madrasthemes.com/browse-job-categories/">Ver Todas las
                                        Categorias</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="jh-section banners-block with-action"
                        style="background-image: url( https://jobhunt.madrasthemes.com/wp-content/uploads/2018/08/parallax1.jpg );">
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
                    <section class="jh-section job-list-section">
                        <div class="container">
                            <div class="section-header">
                                <h3 class="section-title">Empresas Destacadas</h3>
                                <span class="section-sub-title">Las empresas destacadas</span>
                            </div>
                            <div class="job_listings" data-location="" data-keywords="" data-show_filters="false"
                                data-show_pagination="false" data-per_page="6" data-orderby="featured" data-order="DESC"
                                data-categories="" data-featured="true">
                                <ul class="job_listings list">
                                    <!--listar empresas-->
                                    @foreach ($empresas as $empresa)
                                        <li
                                            class="post-61 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-information-technology job_listing_type-full-time job_listing_salary-5000-10000 job_listing_career_level-lead job_listing_experience-6-7-years job_listing_gender-male job_listing_industry-information-technology job_listing_qualification-bachelor-degree job-type-full-time job_position_featured">
                                            <a href="/empresa/{{ $empresa->id }}">
                                                <div class="job-listing-company-logo"><img class="company_logo"
                                                        src="https://jobhunt.madrasthemes.com/wp-content/uploads/2018/07/2.png"
                                                        alt="GUXOFT"></div>
                                                <div class="job-details">
                                                    <div class="job-details-inner">
                                                        <h3 class="job-listing-loop-job__title">
                                                            {{ $empresa->denominacion }}</h3>
                                                        <div class="job-listing-company company">
                                                            <strong>{{ $empresa->localidad }}</strong>
                                                        </div>
                                                        <div class="job-location location">
                                                            <i class="la la-map-marker"></i>{{ $empresa->pagina_web }}
                                                        </div>
                                                    </div>
                                                    <div class="job-listing-meta meta">
                                                        <ul class="job-types">
                                                            <li class="job-type full-time"style="width:max-content">
                                                                {{ $empresa->provincia }} </li>
                                                        </ul><span class="job-published-date date"><time
                                                                datetime="2022-11-18">Antiguedad:
                                                                {{ $empresa->antiguedad }}
                                                                años</time></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach

                                    <!--li class="post-58 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-information-technology job_listing_type-temporary job_listing_qualification-certificate job-type-temporary job_position_featured"
                                                    data-longitude="37.9838096" data-latitude="23.7275388">
                                                    <a
                                                        href="https://jobhunt.madrasthemes.com/job/front-end-software-engineer-athens/">
                                                        <div class="job-listing-company-logo"><img
                                                                class="company_logo"
                                                                src="https://jobhunt.madrasthemes.com/wp-content/uploads/2018/07/4.png"
                                                                alt="Norson"></div>
                                                        <div class="job-details">
                                                            <div class="job-details-inner">
                                                                <h3 class="job-listing-loop-job__title">Front End
                                                                    Developer</h3>
                                                                <div class="job-listing-company company">
                                                                    <strong>Norson</strong>
                                                                </div>
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Athens, Greece
                                                                </div>
                                                            </div>
                                                            <div class="job-listing-meta meta">
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Athens, Greece
                                                                </div>
                                                                <ul class="job-types">
                                                                    <li class="job-type temporary">
                                                                        Temporary </li>
                                                                </ul><span class="job-published-date date"><time
                                                                        datetime="2022-11-18">4 months
                                                                        ago</time></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="post-54 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-sales job_listing_type-part-time job-type-part-time job_position_featured"
                                                    data-longitude="55.755826" data-latitude="37.6172999">
                                                    <a
                                                        href="https://jobhunt.madrasthemes.com/job/gcb-product-sales-specialist-russia-cis/">
                                                        <div class="job-listing-company-logo"><img
                                                                class="company_logo"
                                                                src="https://jobhunt.madrasthemes.com/wp-content/uploads/2018/07/3.png"
                                                                alt="General Electric"></div>
                                                        <div class="job-details">
                                                            <div class="job-details-inner">
                                                                <h3 class="job-listing-loop-job__title">JEB Product
                                                                    Sales Specialist, Russia &amp; CIS</h3>
                                                                <div class="job-listing-company company">
                                                                    <strong>General Electric</strong>
                                                                </div>
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Moscow, Russia
                                                                </div>
                                                            </div>
                                                            <div class="job-listing-meta meta">
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Moscow, Russia
                                                                </div>
                                                                <ul class="job-types">
                                                                    <li class="job-type part-time">
                                                                        Part Time </li>
                                                                </ul><span class="job-published-date date"><time
                                                                        datetime="2022-11-18">4 months
                                                                        ago</time></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="post-52 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-supporting job_listing_type-freelance job-type-freelance job_position_featured"
                                                    data-longitude="45.1" data-latitude="15.2000001">
                                                    <a
                                                        href="https://jobhunt.madrasthemes.com/job/technical-support-specialist/">
                                                        <div class="job-listing-company-logo"><img
                                                                class="company_logo"
                                                                src="https://jobhunt.madrasthemes.com/wp-content/uploads/2018/07/1.png"
                                                                alt="Man Power Group"></div>
                                                        <div class="job-details">
                                                            <div class="job-details-inner">
                                                                <h3 class="job-listing-loop-job__title">Technical
                                                                    Support Specialist</h3>
                                                                <div class="job-listing-company company">
                                                                    <strong>Man Power Group</strong>
                                                                </div>
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Croatia
                                                                </div>
                                                            </div>
                                                            <div class="job-listing-meta meta">
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Croatia
                                                                </div>
                                                                <ul class="job-types">
                                                                    <li class="job-type freelance">
                                                                        Freelance </li>
                                                                </ul><span class="job-published-date date"><time
                                                                        datetime="2022-11-18">4 months
                                                                        ago</time></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="post-46 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-employer job_listing_type-full-time job-type-full-time job_position_featured"
                                                    data-longitude="38.8338816" data-latitude="-104.8213634">
                                                    <a
                                                        href="https://jobhunt.madrasthemes.com/job/usa-co-colorado-springs-donor-relations-manager/">
                                                        <div class="job-listing-company-logo"><img
                                                                class="company_logo"
                                                                src="https://jobhunt.madrasthemes.com/wp-content/uploads/2018/07/6.png"
                                                                alt="Habitat for Humanity International"></div>
                                                        <div class="job-details">
                                                            <div class="job-details-inner">
                                                                <h3 class="job-listing-loop-job__title">USA – CO,
                                                                    Colorado Springs – Donor Relations Manager</h3>
                                                                <div class="job-listing-company company">
                                                                    <strong>Habitat for Humanity International</strong>
                                                                </div>
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Colorado Springs,
                                                                    CO, USA
                                                                </div>
                                                            </div>
                                                            <div class="job-listing-meta meta">
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Colorado Springs,
                                                                    CO, USA
                                                                </div>
                                                                <ul class="job-types">
                                                                    <li class="job-type full-time">
                                                                        Full Time </li>
                                                                </ul><span class="job-published-date date"><time
                                                                        datetime="2022-11-18">4 months
                                                                        ago</time></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="post-42 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-quality-check job_listing_type-part-time job-type-part-time job_position_featured"
                                                    data-longitude="47.760111" data-latitude="-122.2054452">
                                                    <a
                                                        href="https://jobhunt.madrasthemes.com/job/hardware-verification-validation-engineer/">
                                                        <div class="job-listing-company-logo"><img
                                                                class="company_logo"
                                                                src="https://jobhunt.madrasthemes.com/wp-content/uploads/2018/07/3.png"
                                                                alt="Fhilips"></div>
                                                        <div class="job-details">
                                                            <div class="job-details-inner">
                                                                <h3 class="job-listing-loop-job__title">Hardware
                                                                    Verification &amp; Validation Engineer</h3>
                                                                <div class="job-listing-company company">
                                                                    <strong>Fhilips</strong>
                                                                </div>
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Bothell, WA, USA
                                                                </div>
                                                            </div>
                                                            <div class="job-listing-meta meta">
                                                                <div class="job-location location">
                                                                    <i class="la la-map-marker"></i>Bothell, WA, USA
                                                                </div>
                                                                <ul class="job-types">
                                                                    <li class="job-type part-time">
                                                                        Part Time </li>
                                                                </ul><span class="job-published-date date"><time
                                                                        datetime="2022-11-18">4 months
                                                                        ago</time></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li-->
                                </ul>
                                <a class="load_more_jobs" href="/empresas"><strong>Ver más</strong></a>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</div>
