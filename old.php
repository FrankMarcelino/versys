<?php get_header(); ?>
<body>
    <!--  Main Wrap  -->
    <div id="main-wrap">
        <!--  Header & Menu  -->
        <!--  class: fixed, bg, white, transparent  -->
        <header id="header" class="transparent--fixed">
            <!--  padding-sm, padding-md, padding-lg  -->
            <div class="wrap-header--padding-lg">
                <nav class="main-navigation">
                    <!--  Header Logo  -->
                    <!--  class: height-sm, height-md, height-lg  -->
                    <div id="logo" class="height-lg">
                        <a class="navbar-brand" href="/">
                            <picture class="light">
                                <source srcset="assets/img/Logo_white@2x.png 2x, assets/img/Logo_white.png 1x" type="image/png">
                                <img src="assets/img/Logo_white.png.png" alt="Logo">
                            </picture>
                            <picture class="colored">
                                <source srcset="assets/img/Logo@2x.png 2x, assets/img/Logo.png 1x" type="image/png" />
                                <img src="assets/img/Logo.png" alt="Logo">
                            </picture>
                        </a>
                    </div>
                    <!--  END Header Logo  -->
                    <!--  Menu  -->
                    <div id="main-menu" aria-expanded="false" role="navigation">
                        <div class="menu-holder" data-hidden="lg">
                            <ul>
                                <!--  dropdown menu  -->
                                <!--  class: shadow, round, icon, bgitems  -->
                                <li class="dropdown-parent--shadow--round--icon--bgitems">
                                    <!--  class: active  -->
                                    <a href="javascript:void(0)" class="active">Home</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="index.html">Home Agency</a></li>
                                            <li><a href="index-creative.html">Home Creative</a></li>
                                            <li><a href="index-corporate.html">Home Corporate</a></li>
                                            <li><a href="index-classic.html">Home Classic</a></li>
                                            <li><a href="index-video.html">Home Video</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <!--  END: dropdown menu  -->
                                <li class="dropdown-parent--shadow--round--icon--bgitems">
                                    <!--  class: active  -->
                                    <a href="javascript:void(0)">About</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="about.html">About Classic</a></li>
                                            <li><a href="about-agency.html">About Agency</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown-parent--shadow--round--icon--bgitems">
                                    <!--  class: active  -->
                                    <a href="javascript:void(0)">Pages</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="project.html">Project 1</a></li>
                                            <li><a href="project-2.html">Project 2</a></li>
                                            <li><a href="post.html">Post</a></li>
                                            <li><a href="privacy.html">Privacy Policy</a></li>
                                            <li><a href="404.html">404 page</a></li>
                                            <li><a href="style-guide.html">Style Guide</a></li>
                                            <li><a href="plugins.html">Plugins</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown-parent--shadow--round--icon--bgitems">
                                    <!--  class: active  -->
                                    <a href="javascript:void(0)">Blog</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="blog.html">Blog Classic</a></li>
                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="portfolio.html">Portfolio</a>
                                </li>
                                <li class="dropdown-parent--shadow--round--icon--bgitems">
                                    <!--  class: active  -->
                                    <a href="javascript:void(0)">Contacts</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="contact.html">Contacts Classic</a></li>
                                            <li><a href="contact-maps.html">Contacts Maps</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="cta">
                            <a href="#" class="btn--medium--round--border">contact us</a>
                        </div>
                        <div class="menu-button" data-visible="lg">
                            <div class="icons">
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                            </div>
                        </div>
                    </div>
                    <div id="mobile-menu" data-visible="lg" aria-expanded="false" role="navigation">
                        <!-- class: -bg -->
                        <div class="mobile-wrap">
                            <!-- class: -dotted, -border -->
                            <div class="main-links--border col-12">
                                <ul>
                                    <li class="dropdown-parent--icon" aria-expanded="false">
                                        <a href="javascript:void(0)">Home</a>
                                        <div class="dropdown-inner">
                                            <ul>
                                                <li><a href="index.html">Home Agency</a></li>
                                                <li><a href="index-creative.html">Home Creative</a></li>
                                                <li><a href="index-corporate.html">Home Corporate</a></li>
                                                <li><a href="index-classic.html">Home Classic</a></li>
                                                <li><a href="index-video.html">Home Video</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-parent--icon" aria-expanded="false">
                                        <a href="javascript:void(0)">About</a>
                                        <div class="dropdown-inner">
                                            <ul>
                                                <li><a href="about.html">About Classic</a></li>
                                                <li><a href="about-agency.html">About Agency</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-parent--icon" aria-expanded="false">
                                        <a href="javascript:void(0)">Pages</a>
                                        <div class="dropdown-inner">
                                            <ul>
                                                <li><a href="project.html">Project 1</a></li>
                                                <li><a href="project-2.html">Project 2</a></li>
                                                <li><a href="post.html">Post</a></li>
                                                <li><a href="privacy.html">Privacy Policy</a></li>
                                                <li><a href="404.html">404 page</a></li>
                                                <li><a href="style-guide.html">Style Guide</a></li>
                                                <li><a href="plugins.html">Plugins</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-parent--icon" aria-expanded="false">
                                        <a href="javascript:void(0)">Blog</a>
                                        <div class="dropdown-inner">
                                            <ul>
                                                <li><a href="blog.html">Blog Classic</a></li>
                                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="portfolio.html">Portfolio</a>
                                    </li>
                                    <li class="dropdown-parent--icon" aria-expanded="false">
                                        <a href="javascript:void(0)">Contacts</a>
                                        <div class="dropdown-inner">
                                            <ul>
                                                <li><a href="contact.html">Contacts Classic</a></li>
                                                <li><a href="contact-maps.html">Contacts Maps</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  END Menu  -->
                </nav>
            </div>
        </header>
        <!--  END Header & Menu  -->

        <!--  Page Header  -->
        <!--  class: image, round, hfixedlg, hfixedmd, hfixedsm  -->
        <div class="page-header--agency" data-padding data-bg="template">
            <div class="container">
                <div class="row align-items-md-center">
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="sectiontitle-element--light">
                            <h1 class="big">The <em class="underline--colortwo">quickest</em> way to create your website</h1>
                            <p>User experience business-to-business ramen pitch infrastructure seed money analytics channels burn rate</p>
                            <a href="#" class="btn--big--icon--light--primary--shadow--round">More info<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-7 offset-xl-1">
                        <div class="square-element">
                            <div class="info">
                                <div class="image">
                                    <img data-unveil src="#" data-src="/assets/img/bg" data-src-retina="assets/img/pageheader-agency@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END Page Header  -->
        <!--  Page Content  -->
        <div class="page-content">
            <!--  Icon Section  -->
            <section data-padding>
                <div class="container">
                    <div data-aos="fade-up" class="row" data-padding="xstop">
                        <div class="col-12">
                            <div class="sectiontitle-element--inline">
                                <div class="wrapper">
                                    <span class="toptitle--line--primary">Our Services</span>
                                    <h2><span>Find out what</span><span><em>we can do</em> for you</span></h2>
                                </div>
                                <div class="wrapper">
                                    <a href="#" class="btn--big--icon--round--colortwo--alt"><span>View All</span><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-padding="smtop">
                        <div data-aos="fade-up" data-aos-delay="100" class="col-12 col-md-4">
                            <div class="icon-element--box--round--shadow--colorone">
                                <div class="info">
                                    <div class="icon--shadow--light"><i class="feather icon-edit-2"></i></div>
                                    <div class="text">
                                        <h6>Branding</h6>
                                        <p>Social media advisor validation infographic stock launch party customer supply chain product management</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="200" class="col-12 col-md-4">
                            <div class="icon-element--box--round--shadow--colorone">
                                <div class="info">
                                    <div class="icon--shadow--light"><i class="feather icon-layout"></i></div>
                                    <div class="text">
                                        <h6>Design</h6>
                                        <p>First mover advantage non-disclosure agreement user experience partner network assets seed money low</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="300" class="col-12 col-md-4">
                            <div class="icon-element--box--round--shadow--colorone">
                                <div class="info">
                                    <div class="icon--shadow--light"><i class="feather icon-code"></i></div>
                                    <div class="text">
                                        <h6>Development</h6>
                                        <p>Gamification innovator crowdfunding infrastructure market seed money social proof user experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  END Icon Section  -->
            <!--  Image Text  -->
            <section data-padding data-bg="grey">
                <div class="container">
                    <div class="row align-items-lg-center">
                        <div data-aos="fade" class="col-12 col-lg-6">
                            <div class="sectiontitle-element">
                                <span class="toptitle--line--primary">About Us</span>
                                <h2>We equip <em>growing companies</em> with outstanding digital products and experiences</h2>
                                <p>Social media advisor validation infographic stock launch party customer supply chain product management research &amp; development burn rate branding.</p>
                                <a href="#" class="btn--big--icon--round--colortwo--alt"><span>Read More</span><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="200" class="col-12 col-lg-6">
                            <div class="square-element">
                                <div class="info">
                                    <div class="image">
                                        <img data-unveil src="#" data-src="assets/img/aboutus-agency.png" data-src-retina="assets/img/aboutus-agency@2x.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  END Image Text  -->
            <!--  Description  -->
            <section data-padding="top">
                <div class="container">
                    <div class="row">
                        <div data-aos="fade-up" data-aos-delay="100" class="col-12 col-md-4">
                            <div class="icon-element--round--left--colorone">
                                <div class="info">
                                    <div class="icon--shadow">
                                        <span class="light">1</span>
                                    </div>
                                    <div class="text">
                                        <h6>Our Mission</h6>
                                    </div>
                                    <div class="description">
                                        <p>Seed money bootstrapping startup partnership venture. Facebook crowdfunding customer. Hypotheses alpha handshake influencer research & development client bootstrapping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="200" class="col-12 col-md-4">
                            <div class="icon-element--round--left--colorone">
                                <div class="info">
                                    <div class="icon--shadow">
                                        <span class="light">2</span>
                                    </div>
                                    <div class="text">
                                        <h6>Our Vision</h6>
                                    </div>
                                    <div class="description">
                                        <p>Business-to-business entrepreneur advisor agile development startup facebook. Infrastructure strategy market graphical user interface series A financing advisor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="300" class="col-12 col-md-4">
                            <div class="icon-element--round--left--colorone">
                                <div class="info">
                                    <div class="icon--shadow">
                                        <span class="light">3</span>
                                    </div>
                                    <div class="text">
                                        <h6>Our Values</h6>
                                    </div>
                                    <div class="description">
                                        <p>Crowdfunding market bootstrapping non-disclosure agreement. Non-disclosure agreement churn rate release customer client iPhone responsive web design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Separator Line  -->
                    <div class="row" data-padding="top">
                        <div class="col-12">
                            <div class="separator-element"></div>
                        </div>
                    </div>
                    <!--  END Separator Line  -->
                </div>
            </section>
            <!--  END Description  -->
            <!--  Portfolio  -->
            <section data-aos="fade" data-padding>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sectiontitle-element--inline">
                                <div class="wrapper">
                                    <span class="toptitle--line--primary">Case Studies</span>
                                    <h2><span>Create and</span><span><em>make your dream</em></span></h2>
                                </div>
                                <div class="wrapper">
                                    <div class="navigation-element--border--round--light portfolio-wrap">
                                        <div class="navigation justify-content-md-end">
                                            <div class="nav--prev">
                                                <i class="feather icon-arrow-left"></i>
                                            </div>
                                            <div class="nav--next">
                                                <i class="feather icon-arrow-right"></i>
                                            </div>
                                            <a href="portfolio.html" class="btn--big--colortwo--round">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-padding="xstop">
                        <div class="col-12">
                            <div class="portfolio-carousel owl-carousel">
                                <!--  Single Project  -->
                                <div class="square-element--project--overlay">
                                    <div class="info">
                                        <div class="image">
                                            <img class="owl-lazy" src="#" data-src="assets/img/case-1.jpg" data-src-retina="assets/img/case-1@2x.jpg" alt="">
                                            <div class="icon--tr--square--primary"><i class="feather icon-plus"></i></div>
                                            <div class="meta">
                                                <h3>Hello Branding Identity</h3>
                                                <p>Branding</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="project.html" class="link"></a>
                                </div>
                                <!--  END Single Project  -->
                                <div class="square-element--project--overlay">
                                    <div class="info">
                                        <div class="image">
                                            <img class="owl-lazy" src="#" data-src="assets/img/case-2.jpg" data-src-retina="assets/img/case-2@2x.jpg" alt="">
                                            <div class="icon--tr--square--primary"><i class="feather icon-plus"></i></div>
                                            <div class="meta">
                                                <h3>Visual Company</h3>
                                                <p>Design</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="project-2.html" class="link"></a>
                                </div>
                                <div class="square-element--project--overlay">
                                    <div class="info">
                                        <div class="image">
                                            <img class="owl-lazy" src="#" data-src="assets/img/case-3.jpg" data-src-retina="assets/img/case-3@2x.jpg" alt="">
                                            <div class="icon--tr--square--primary"><i class="feather icon-plus"></i></div>
                                            <div class="meta">
                                                <h3>Synphony App</h3>
                                                <p>Development</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="project.html" class="link"></a>
                                </div>
                                <div class="square-element--project--overlay">
                                    <div class="info">
                                        <div class="image">
                                            <img class="owl-lazy" src="#" data-src="assets/img/case-4.jpg" data-src-retina="assets/img/case-4@2x.jpg" alt="">
                                            <div class="icon--tr--square--primary"><i class="feather icon-plus"></i></div>
                                            <div class="meta">
                                                <h3>E-book Alrifne</h3>
                                                <p>Branding</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="project-2.html" class="link"></a>
                                </div>
                                <div class="square-element--project--overlay">
                                    <div class="info">
                                        <div class="image">
                                            <img class="owl-lazy" src="#" data-src="assets/img/case-5.jpg" data-src-retina="assets/img/case-5@2x.jpg" alt="">
                                            <div class="icon--tr--square--primary"><i class="feather icon-plus"></i></div>
                                            <div class="meta">
                                                <h3>UBA Business School</h3>
                                                <p>Design</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="project.html" class="link"></a>
                                </div>
                                <div class="square-element--project--overlay">
                                    <div class="info">
                                        <div class="image">
                                            <img class="owl-lazy" src="#" data-src="assets/img/case-6.jpg" data-src-retina="assets/img/case-6@2x.jpg" alt="">
                                            <div class="icon--tr--square--primary"><i class="feather icon-plus"></i></div>
                                            <div class="meta">
                                                <h3>Circle Logo Design</h3>
                                                <p>Development</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="project-2.html" class="link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  END Portfolio  -->
            <!--  Full Width Section  -->
            <section class="fullrow-element--image" data-margin="xstop" data-bg="grey">
                <div class="image" style="background-image: url(assets/img/testimonial-agency@2x.jpg);"></div>
                <div class="main-wrapper">
                    <div class="inner-wrapper" data-padding="xs">
                        <div data-aos="fade" class="icon-element--testimonial">
                            <div class="info">
                                <div class="text">
                                    <p>“Accelerator mass market churn rate stock interaction design market conversion venture equity. Marketing scrum project android iteration investor holy grail technology success market founders equity iPhone venture gen-z.“
                                    </p>
                                    <span class="author">Martin Drew <em class="meta">Head of Business Developer</em></span>
                                    <img class="logo" data-unveil src="#" data-src="assets/img/logo-placeholder-2.png" data-src-retina="assets/img/logo-placeholder-2@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  END Full Width Section  -->
            <!--  Blog  -->
            <section data-padding>
                <div class="container">
                    <div data-aos="fade" class="row">
                        <div data-aos="fade" class="col-12 col-lg-4">
                            <div class="sectiontitle-element">
                                <span class="toptitle--line--primary">News</span>
                                <h2><span>Latest posts.</span><span><em>Stay tuned!</em></span></h2>
                                <p>Holy grail bandwidth stealth niche market freemium buyer traction. A/B testing paradigm shift stealth return on investment android startup user experience bootstrapping funding partnership agile development innovator network
                                    effects. Beta series A financing buzz creative. </p>
                                <a href="#" class="btn--big--icon--round--colortwo--alt"><span>Read More</span><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!--  Single Article  -->
                        <div data-aos="fade" data-aos-delay="100" class="col-12 col-md-4">
                            <article class="rectangle-element--article--boxed--shadow">
                                <div class="info">
                                    <div class="image">
                                        <img data-unveil src="#" data-src="assets/img/post-1.jpg" data-src-retina="assets/img/post-1@2x.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <div class="meta--image">
                                            <div class="author--round">
                                                <img data-unveil src="#" data-src="assets/img/author-1.jpg" data-src-retina="assets/img/author-1@2x.jpg" alt="">
                                            </div>
                                            <div class="tags">
                                                <time class="e-date" datetime="2020-07-05T07:55:21+02:00">5 Luglio 2020</time>
                                                <ul class="categories">
                                                    <li><a href="#">Category</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h3>User experience business-to-business pitch</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad…</p>
                                    </div>
                                </div>
                                <a href="post.html" class="link"></a>
                            </article>
                        </div>
                        <!--  END Single Article  -->
                        <div data-aos="fade" data-aos-delay="200" class="col-12 col-md-4">
                            <article class="rectangle-element--article--boxed--shadow">
                                <div class="info">
                                    <div class="image">
                                        <img data-unveil src="#" data-src="assets/img/post-2.jpg" data-src-retina="assets/img/post-2@2x.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <div class="meta--image">
                                            <div class="author--round">
                                                <img data-unveil src="#" data-src="assets/img/author-2.jpg" data-src-retina="assets/img/author-2@2x.jpg" alt="">
                                            </div>
                                            <div class="tags">
                                                <time class="e-date" datetime="2020-07-05T07:55:21+02:00">5 Luglio 2020</time>
                                                <ul class="categories">
                                                    <li><a href="#">Category</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h3>Channels business model canvas network effects</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad…</p>
                                    </div>
                                </div>
                                <a href="post.html" class="link"></a>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!--  END Blog  -->
            <!--  Partners  -->
            <section data-aos="fade" data-padding>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sectiontitle-element">
                                <h2>Our <em>partners</em></h2>
                            </div>
                            <div class="logo-element">
                                <ul>
                                    <li>
                                        <a href=""><img data-unveil src="#" data-src="assets/img/logo-placeholder-1@2x.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href=""><img data-unveil src="#" data-src="assets/img/logo-placeholder-2@2x.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href=""><img data-unveil src="#" data-src="assets/img/logo-placeholder-3@2x.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href=""><img data-unveil src="#" data-src="assets/img/logo-placeholder-4@2x.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href=""><img data-unveil src="#" data-src="assets/img/logo-placeholder-5@2x.png" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  END Partners  -->
            <!--  CTA Box  -->
            <section class="ctabox-element--center--light" data-aos="fade" data-padding="xstop" data-bg="template">
                <div class="container">
                    <div class="row" data-padding="xs">
                        <div class="col-12">
                            <div class="text">
                                <h2>Create a new project, now </h2>
                                <p>Contact us now, and we are ready to do what you want</p>
                                <a href="#" class="btn--big--light--primary--round" target="_self">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  END CTA Box  -->
        </div>
        <!--  END Page Content  -->

<?php get_footer(); ?>
