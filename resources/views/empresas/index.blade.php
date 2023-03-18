@include('headerindex')
<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div class="site-content-inner">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <ul id="jh-scroll-here" class="job_listings list-classic">
                        @foreach ($empresas as $empresa)
                            @php($slug = Str::slug($empresa->denominacion, '-', 'es'))
                            <li class="post-61 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-information-technology job_listing_type-full-time job_listing_salary-5000-10000 job_listing_career_level-lead job_listing_experience-6-7-years job_listing_gender-male job_listing_industry-information-technology job_listing_qualification-bachelor-degree job-type-full-time job_position_featured"
                                data-longitude="48.379433" data-latitude="31.1655799">
                                <a href="/empresa/{{ $slug }}">
                                    <div class="job-listing-company-logo"><img class="company_logo"
                                            src="https://jobhunt.madrasthemes.com/wp-content/uploads/2018/07/2.png"
                                            alt="GUXOFT"></div>
                                    <div class="job-details">
                                        <div class="job-details-inner">
                                            <h3 class="job-listing-loop-job__title">{{ $empresa->denominacion }}</h3>
                                            <div class="job-listing-company company">
                                                <strong
                                                    style="text-transform: lowercase">{{ $empresa->pagina_web }}</strong>
                                            </div>
                                            <div class="job-location location">
                                                <i class="la la-map-marker"></i>{{ $empresa->localidad }}
                                            </div>
                                        </div>
                                        <div class="job-listing-meta meta">
                                            <ul class="job-types">
                                                <li class="job-type full-time">
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
                        <nav class="wpjm-pagination">
                            {{ $empresas->links() }}
                        </nav>
                </main>
            </div>
        </div>
    </div>
</div>
@include('footer')
