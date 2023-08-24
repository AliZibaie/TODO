<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">welcome <?php echo $name ;echo ' '.$age; ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
        </div>
    </div>
</div>
<section id="feature" class="feature-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature">
                    <i class="fa fa-magic"></i>
                    <div class="feature-content">
                        <h4>Web Design</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                    </div>
                </div>
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature">
                    <i class="fa fa-gift"></i>
                    <div class="feature-content">
                        <h4>Graphics Design</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                    </div>
                </div>
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature">
                    <i class="fa fa-wordpress"></i>
                    <div class="feature-content">
                        <h4>Wordpress Theme</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                    </div>
                </div>
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature">
                    <i class="fa fa-plug"></i>
                    <div class="feature-content">
                        <h4>Wordpress Plugin</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
<div class="about-us-section-2">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="skill-shortcode">

                    <!-- Progress Bar -->
                    <div class="skill">
                        <p>Web Design</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="60" style="width: 60%;">
                                <span class="progress-bar-span">60%</span>
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Bar -->
                    <div class="skill">
                        <p>HTML &amp; CSS</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="95" style="width: 95%;">
                                <span class="progress-bar-span">95%</span>
                                <span class="sr-only">95% Complete</span>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Bar -->
                    <div class="skill">
                        <p>Wordpress</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="80" style="width: 80%;">
                                <span class="progress-bar-span">80%</span>
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Bar -->
                    <div class="skill">
                        <p>Joomla</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="100" style="width: 100%;">
                                <span class="progress-bar-span">100%</span>
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Bar -->
                    <div class="skill">
                        <p>Extension</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="70" style="width: 70%;">
                                <span class="progress-bar-span">70%</span>
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide about-slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/about-01.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/about-02.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/about-03.jpg" alt="">
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<div class="container my-5">
    <div class="p-5 text-center bg-body-tertiary rounded-3">
        <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100"><use xlink:href="#bootstrap"></use></svg>
        <h1 class="text-body-emphasis">Jumbotron with icon</h1>
        <p class="col-lg-8 mx-auto fs-5 text-muted">
            This is a custom jumbotron featuring an SVG image at the top, some longer text that wraps early thanks to a responsive <code>.col-*</code> class, and a customized call to action.
        </p>
        <div class="d-inline-flex gap-2 mb-5">
            <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
                Call to action
                <svg class="bi ms-2" width="24" height="24"><use xlink:href="#arrow-right-short"></use></svg>
            </button>
            <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
                Secondary link
            </button>
        </div>
    </div>
</div>