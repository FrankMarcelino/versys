<header id="header" class="transparent--fixed">
  <!--  padding-sm, padding-md, padding-lg  -->
  <div class="wrap-header--padding-lg">
    <nav class="main-navigation">
      <!--  Header Logo  -->
      <!--  class: height-sm, height-md, height-lg  -->
      <div id="logo" class="height-lg">
        <a class="navbar-brand" href="/">
          <picture class="colored">
            <source
              srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-azul.png"
              type="image/png"
            />
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-zul.png"
              alt="Logo"
            />
          </picture>
          <picture class="light">
            <source
              srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-branca.avif 2x, <?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-branca.avif 1x"
              type="image/avif"
            />
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-branca.avif"
              alt="Logo"
            />
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
      <div
        id="mobile-menu"
        data-visible="lg"
        aria-expanded="false"
        role="navigation"
      >
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
