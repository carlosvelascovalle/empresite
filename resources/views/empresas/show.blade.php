@include('header')

<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div class="site-content-inner">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="single_job_listing">
                        <div class="single-job-listing__inner">
                            <div class="single-job-listing__content-area">
                                <div class="job_listing-single-job-info">
                                    <div class="job-listing-single-job__title-type">
                                        <h3 class="job-listing-single-job__title">{{ $empresa->denominacion }}</h3>
                                        <ul class="job-types">
                                            <li class="job-type full-time">
                                                Full Time </li>
                                        </ul>
                                    </div>
                                    <div class="job-listing-single-location-salary-posted">
                                        <div class="location"><i class="la la-map-marker"></i><a class="google_map_link"
                                                href="https://maps.google.com/maps?q=Ukraine&amp;zoom=14&amp;size=512x512&amp;maptype=roadmap&amp;sensor=false"
                                                target="_blank">Ukraine</a></div>
                                        <div class="job-listing_single_job__salary"><i
                                                class="la la-money"></i><span>Monthly Salary : </span>
                                            <ul>
                                                <li><a href="https://jobhunt.madrasthemes.com/job-salary/5000-10000/">$5000
                                                        - $10000</a></li>
                                            </ul>
                                        </div>
                                        <div class="date-posted"><i class="la la-calendar"></i><time
                                                datetime="2022-11-18">Posted 4 months ago</time></div>
                                    </div>
                                    <div class="job-listing_single_job__category"><label>Roles :</label>
                                        <ul>
                                            <li><a
                                                    href="https://jobhunt.madrasthemes.com/job-career-level/lead/">Lead</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-job-listing__description job-description">
                                    <h3>Job Description</h3>
                                    <p>We are looking for a smart Frontend Engineer who can participate in
                                        building our next generation interface. You will get a chance to get
                                        your hands dirty with our core product working directly with the
                                        Leadership and Business. You will also participate in web security,
                                        compatibility and experience design.</p>
                                    <p>This involves a lot of collaboration with the engineering and R&amp;D
                                        Teams to prioritise and launch new features. You will also play an
                                        important role in deployments, product roadmaps and data security.
                                    </p>
                                    <h3>Experience</h3>
                                    <p>Minimum of 3 Years relevant experience with JS libraries and ReactJS
                                    </p>
                                    <h3>Must Have</h3>
                                    <ul>
                                        <li>Proficient in &nbsp;ReactJS and other5modern JS
                                            libraries/frameworks</li>
                                        <li>Proficient in ES6/7 object oriented JavaScript and architecture
                                            and development of Single page web applications.</li>
                                        <li>Basic understanding of nodeJS and its package managers like npm
                                            and yarn.</li>
                                        <li>Proficient in flux pattern based development and libraries build
                                            upon it like redux, mobX and its derivative micro frameworks
                                            like reduxForm etc.</li>
                                        <li>Proficient in Event handling/event driven programming and
                                            creating event observers at appropriate abstraction levels.</li>
                                        <li>Strong understanding of build tools like web-pack, its
                                            configuration, scripting and environment management
                                            (dev/test/prod).</li>
                                        <li>Basic knowledge of HTML5, CSS3 and its frameworks and
                                            pre-processors.</li>
                                        <li>Should be able to resolve cross browser incompatibilities
                                            associates with JS and CSS…</li>
                                        <li>Working Knowledge of D3 and similar JS charting libraries</li>
                                    </ul>
                                    <h3>Nice to Have</h3>
                                    <ul>
                                        <li>Working knowledge of User Experience Design</li>
                                        <li>Working knowledge of REST API design.</li>
                                        <li>Working knowledge of responsive design.</li>
                                        <li>Good understanding of Web 2.0 and Semantic Web standards.</li>
                                        <li>Good understanding of data-structures and algorithms.</li>
                                        <li>Ability to understand and balance performance tradeoffs.</li>
                                        <li>Experience with programming languages like Ruby on Rails,
                                            Python, Node JS</li>
                                        <li>Experience in deploying complex systems in AWS</li>
                                        <li>Experience with best practices such as A/B testing.</li>
                                    </ul>
                                    <h3>Just to Add</h3>
                                    <p>Creative Workplace and open work culture. Creativity and out of the
                                        box thinking is nurtured.</p>
                                    <p><strong>Some&nbsp;perks:&nbsp;</strong>Excellent Filter Coffee, Free
                                        lunches, PS4 and Fooseball breaks, stocked kitchen topped up with a
                                        nice set of people to work&nbsp;with!</p>
                                </div>
                                <div class="single-job-listing__widget single-job-listing__overview">
                                    <h5 class="single-job-listing__widget--title">Job Overview</h5>
                                    <ul class="single-job-listing__widget--content">
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-money"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Offered Salary</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a
                                                                    href="https://jobhunt.madrasthemes.com/job-salary/5000-10000/">$5000
                                                                    - $10000</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-mars-double"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Gender</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a
                                                                    href="https://jobhunt.madrasthemes.com/job-gender/male/">Male</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-bar-chart"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Career Level</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a
                                                                    href="https://jobhunt.madrasthemes.com/job-career-level/lead/">Lead</a>
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
                                                    <h6>Industry</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a
                                                                    href="https://jobhunt.madrasthemes.com/job-industry/information-technology/">Information
                                                                    Technology</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-sliders"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Experience</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a
                                                                    href="https://jobhunt.madrasthemes.com/job-experience/6-7-years/">6-7
                                                                    Years</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-job-listing-overview__detail">
                                                <div class="single-job-listing-overview__detail--icon"><i
                                                        class="la la-graduation-cap"></i></div>
                                                <div class="single-job-listing-overview__detail--content">
                                                    <h6>Qualification</h6>
                                                    <div class="single-job-listing-overview__detail-content--value">
                                                        <ul>
                                                            <li><a
                                                                    href="https://jobhunt.madrasthemes.com/job-qualification/bachelor-degree/">Bachelor
                                                                    Degree</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-job-listing__sidebar-area">
                                <div class="single-job-listing-company company">
                                    <div class="single-job-listing-company__logo">
                                        <img class="company_logo"
                                            src="https://jobhunt.madrasthemes.com/wp-content/uploads/2018/07/2.png"
                                            alt="GUXOFT">
                                    </div>
                                    <div class="single-job-listing-company__details">
                                        <h3 class="single-job-listing-company__name"><a
                                                href="https://jobhunt.madrasthemes.com/company/guxoft/">Guxoft</a>
                                        </h3>
                                        <div class="single-job-listing-company__contact">
                                            <a class="single-job-listing-company__contact--website"
                                                href="http://www.guxoft.com" target="_blank"
                                                rel="nofollow">http://www.guxoft.com</a>
                                            <span class="single-job-listing-company__contact--phone">+41
                                                237 264 839</span>
                                            <a class="single-job-listing-company__contact--application-email"
                                                href="mailto:guxoft@demo.com" target="_blank"
                                                rel="nofollow">guxoft@demo.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="job_application application">
                                    <input type="button" class="application_button button" value="Apply for job">
                                    <div class="application_details" style="display: none;">
                                        <p>To apply for this job <strong>email your details to</strong> <a
                                                class="job_application_email"
                                                href="mailto:Goxoft@demo.com?subject=Application%20via%20Networking%20Engineer%20listing%20on%20https%3A%2F%2Fjobhunt.madrasthemes.com">Goxoft@demo.com</a>
                                        </p>
                                        <hr>
                                        <form class="apply_with_resume" method="post"
                                            action="https://jobhunt.madrasthemes.com/submit-resume/">
                                            <p>You can apply to this job and others using your online
                                                resume. Click the link below to submit your online resume
                                                and email your application to this employer.</p>
                                            <p>
                                                <input type="submit"
                                                    name="wp_job_manager_resumes_apply_with_resume_create"
                                                    value="Submit Resume &amp; Apply">
                                                <input type="hidden" name="job_id" value="61">
                                            </p>
                                        </form>
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
