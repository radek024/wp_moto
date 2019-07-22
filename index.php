<?php get_header(); ?>
      <div id="carousel-generic" class="carousel carousel-fade slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-generic" data-slide-to="1"></li>
          <li data-target="#carousel-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" id="section1">
          <div class="item active">
            <img src="<?php if(get_theme_mod('s1-graphic-1', '')=='') echo get_template_directory_uri(). '/img/slider-1.jpg'; else echo get_theme_mod('s1-graphic-1', ''); ?>" alt="">
            <div class="carousel-caption">
              <h2><?php echo get_theme_mod('s1-title-1', 'WITAM SERDECZNIE NA STRONIE'); ?></h2>
              <p class="text"><?php echo get_theme_mod('s1-title-1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, iste.'); ?></p>
            </div>
          </div>
          <div class="item">
            <img src="<?php if(get_theme_mod('s1-graphic-2', '')=='') echo get_template_directory_uri(). '/img/slider-2.jpg'; else echo get_theme_mod('s1-graphic-2', ''); ?>" alt="">
            <div class="carousel-caption">
              <h2><?php echo get_theme_mod('s1-title-2', 'WITAM SERDECZNIE NA STRONIE'); ?></h2>
              <p class="text"><?php echo get_theme_mod('s1-title-2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, expedita!'); ?></p>
            </div>
          </div>
          <div class="item">
            <img src="<?php if(get_theme_mod('s1-graphic-3', '')=='') echo get_template_directory_uri(). '/img/slider-3.jpg'; else echo get_theme_mod('s1-graphic-3', ''); ?>" alt="">
            <div class="carousel-caption">
              <h2><?php echo get_theme_mod('s1-title-3', 'WITAM SERDECZNIE NA STRONIE'); ?></h2>
              <p class="text"><?php echo get_theme_mod('s1-title-3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, odit!'); ?></p>
            </div>
          </div>

        </div>
      </div>
      <article class="entry-text" id="section2">
        <h2 class="heading-title sr-only"><?php echo get_theme_mod('s2-title-1', 'Our Commitment'); ?></h2>
        <div class="row">
          <div class="col-md-5 col-md-push-7 hidden-sm hidden-xs parallax_section hidden-sm hidden-xs img-responsive" style="background-image: url(<?php echo get_theme_mod('s2-graphic-1', get_bloginfo('template_url').'/img/auto-1.jpg'); ?>);"></div>
          <section class="col-md-7 col-md-pull-5 text-content">
          <header class="heading">
            <h3 class="heading-title"><?php echo get_theme_mod('s2-title-1', 'Our Commitment'); ?></h3>
            <p class="heading-desc"><?php echo get_theme_mod('s2-subtitle-1', 'THANKS FOR VISITING OUR WEBSITE! WE HAVE NUMEROUS LOYAL CLIENTS ALL OVER THE GLOBE. THIS FACT PROVES THAT OUR COMPANY TAKES THE LEADING PLACE AMONG THE COMPETITORS.'); ?></p>
          </header>
            <p class="text"><?php echo get_theme_mod('s2-text-1', 'An impressive choice of new and used cars with photos, full technical information, and quality proved by us; thousands of dealers all over the world. We are ready to provide you with a full range of services for warranty and post-warranty maintenance and repair.'); ?></p>
          </section>
        </div>
      </article>
      <article class="about" id="section3">
        <h2 class="heading-title sr-only"><?php echo get_theme_mod('s3-title-1', 'KEYS TO SUCCESS'); ?></h2>
        <div class="wrapper row">
          <section class="keys col-sm-6">
            <header class="heading">
              <h3 class="heading-title"><?php echo get_theme_mod('s3-title-1', 'KEYS TO SUCCESS'); ?></h3>
              <p class="heading-desc"><?php echo get_theme_mod('s3-subtitle-1', 'WE CAN HELP YOU FIND ORIGINAL SPARE PARTS FOR YOUR CAR, NO MATTER WHAT AGE IT IS. WE PROVIDE CAR ENGINES, ACCESSORIES AND CONSUMABLES OF THE HIGHEST QUALITY FROM TRUSTED WORLDWIDE-KNOWN MANUFACTURERS.'); ?></p>
            </header>
            <p class="text"><?php echo get_theme_mod('s3-text-1', 'If you have a problem, we\'ll quickly and effectively eliminate the problem, perform all work connected with the repair of your vehicle, efficiently and inexpensive. We are ready to provide you with a full range of services for warranty and post-warranty maintenance and repair.'); ?></p>
            <a href="<?php echo get_theme_mod('s3-btn-url-1', '#'); ?>" class="btn btn-lg btn-danger"><?php echo get_theme_mod('s3-btn-text-1', 'READ MORE'); ?></a>
          </section>
          <section class="services col-sm-6">
            <header class="heading">
              <h2 class="heading-title"><?php echo get_theme_mod('s3-title-2', 'COMPREHENSIVE SERVICES'); ?></h2>
            </header>
            <ul class="services-list">
              <li class="service-item"><a href="<?php echo get_theme_mod('s3-list-url-1', '#'); ?>"><?php echo get_theme_mod('s3-list-text-1', 'Opcja 01 - fajna '); ?></a></li>
              <li class="service-item"><a href="<?php echo get_theme_mod('s3-list-url-2', '#'); ?>"><?php echo get_theme_mod('s3-list-text-2', 'Opcja 02 - fajna '); ?></a></li>
              <li class="service-item"><a href="<?php echo get_theme_mod('s3-list-url-3', '#'); ?>"><?php echo get_theme_mod('s3-list-text-3', 'Opcja 03 - fajna '); ?></a></li>
              <li class="service-item"><a href="<?php echo get_theme_mod('s3-list-url-4', '#'); ?>"><?php echo get_theme_mod('s3-list-text-4', 'Opcja 04 - fajna '); ?></a></li>
              <li class="service-item"><a href="<?php echo get_theme_mod('s3-list-url-5', '#'); ?>"><?php echo get_theme_mod('s3-list-text-5', 'Opcja 05 - fajna '); ?></a></li>
              <li class="service-item"><a href="<?php echo get_theme_mod('s3-list-url-6', '#'); ?>"><?php echo get_theme_mod('s3-list-text-6', 'Opcja 06 - fajna '); ?></a></li>
            </ul>
          </section>
        </div>
      </article>
      <section class="advantages" id="section4">
        <div class="parallax_section " style="background-image: url(<?php echo get_theme_mod('s4-graphic-1', get_bloginfo('template_url').'/img/slider-2.jpg'); ?>);">
          <div class="wrapper">
            <header class="heading col-sm-6 col-sm-offset-6">
              <h2 class="heading-title"><?php echo get_theme_mod('s4-title-1', 'MAKING TRANSPORTATION FAST AND SAFE'); ?></h2>
              <p class="text"><?php echo get_theme_mod('s4-text-1', 'With an average of more than 31 million visits each month, Cars is the leading online destination for car shoppers and owners. We offer credible and easy-to-understand information to help consumers research, price and find new and used vehicles and quality service and repair providers.'); ?></p>
            </header>
          </div>
        </div>
      </section>
      <article class="ext-about-us" id="section5">
        <h2 class="sr-only">Who we are</h2>
        <div class="wrapper row">
          <section class="feature col-sm-4">
            <header class="heading">
              <h3 class="heading-title"><?php echo get_theme_mod('s5-title-1', 'WHO WE ARE'); ?></h3>
              <p class="heading-desc"><?php echo get_theme_mod('s4-subtitle-1', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. APERIAM, ASSUMENDA!'); ?>
              </p>
            </header>
            <p class="text"><?php echo get_theme_mod('s4-text-1', 'You can find service centers of our company all over the world – from the USA to Japan. There is no better and cheaper way to buy, sell, rent or repair a car than to use our services. If you have any questions concerning our job, our support team will be glad to answer them.!'); ?></p>
            <a href="<?php echo get_theme_mod('s5-btn-url-1', 'WHO WE ARE'); ?>" class="btn btn-lg btn-danger"><?php echo get_theme_mod('s5-btn-text-1', 'WHO WE ARE'); ?></a>
          </section>
          <section class="feature col-sm-4">
            <header class="heading">
              <h3 class="heading-title"><?php echo get_theme_mod('s5-title-2', 'WHO WE ARE'); ?></h3>
              <p class="heading-desc"><?php echo get_theme_mod('s4-subtitle-2', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. APERIAM, ASSUMENDA!'); ?>
              </p>
            </header>
            <p class="text"><?php echo get_theme_mod('s4-text-2', 'You can find service centers of our company all over the world – from the USA to Japan. There is no better and cheaper way to buy, sell, rent or repair a car than to use our services. If you have any questions concerning our job, our support team will be glad to answer them.!'); ?></p>
            <a href="<?php echo get_theme_mod('s5-btn-url-2', 'WHO WE ARE'); ?>" class="btn btn-lg btn-danger"><?php echo get_theme_mod('s5-btn-text-2', 'WHO WE ARE'); ?></a>
          </section>
          <section class="feature col-sm-4">
            <header class="heading">
              <h3 class="heading-title"><?php echo get_theme_mod('s5-title-3', 'WHO WE ARE'); ?></h3>
              <p class="heading-desc"><?php echo get_theme_mod('s4-subtitle-3', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. APERIAM, ASSUMENDA!'); ?>
              </p>
            </header>
            <p class="text"><?php echo get_theme_mod('s4-text-3', 'You can find service centers of our company all over the world – from the USA to Japan. There is no better and cheaper way to buy, sell, rent or repair a car than to use our services. If you have any questions concerning our job, our support team will be glad to answer them.!'); ?></p>
            <a href="<?php echo get_theme_mod('s5-btn-url-3', 'WHO WE ARE'); ?>" class="btn btn-lg btn-danger"><?php echo get_theme_mod('s5-btn-text-3', 'WHO WE ARE'); ?></a>
          </section>
        </div>
      </article>
      <section class="summary" id="section6">
        <div class="row">
          <div class="col-md-6 col-md-push-6 hidden-sm hidden-xs parallax_section hidden-sm hidden-xs img-responsive" style="background-image: url(<?php echo get_theme_mod('s6-graphic-1', get_bloginfo('template_url').'/img/auto-2.jpg'); ?>);"></div>
          <div class="col-md-6 col-md-pull-6 text-content">
            <ul class="summary-list">
              <li class="summary-item">
                <div class="box"><i class="<?php echo get_theme_mod('s6-icon-1', 'fa fa-star'); ?>"></i></div>
                  <h2 class="item-heading"><a href="<?php echo get_theme_mod('s6-url-1', '#'); ?>" class="item-link"><?php echo get_theme_mod('s6-title-1', 'Tytuł 001'); ?></a></h2>
                </li>
                <li class="summary-item">
                  <div class="box"><i class="<?php echo get_theme_mod('s6-icon-2', 'fa fa-star'); ?>"></i></div>
                    <h2 class="item-heading"><a href="<?php echo get_theme_mod('s6-url-2', '#'); ?>" class="item-link"><?php echo get_theme_mod('s6-title-2', 'Tytuł 002'); ?></a></h2>
                  </li>
                  <li class="summary-item">
                    <div class="box"><i class="<?php echo get_theme_mod('s6-icon-3', 'fa fa-star'); ?>"></i></div>
                      <h2 class="item-heading"><a href="<?php echo get_theme_mod('s6-url-3', '#'); ?>" class="item-link"><?php echo get_theme_mod('s6-title-3', 'Tytuł 003'); ?></a></h2>
                    </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="footer" id="section7">
        <div class="row">
          <iframe src="<?php echo get_theme_mod('s7-map-1', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d158615.16835286378!2d22.698302849999997!3d51.5982553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1473958119838'); ?>" class="col-md-8 col-sm-12 map" allowfullscreen></iframe>
          <div class="col-md-4 col-sm-12 text-content">
            <div class="contact">
              <header class="heading">
                <h2 class="heading-title"><?php echo get_theme_mod('s7-title-1', 'CONTACTS'); ?></h2>
                <p class="heading-description"><?php echo get_theme_mod('s7-text-1', '4578 MARMORA ROAD <br> GLASGOW D04 89GR'); ?></p>
              </header>
              <p class="text"><?php echo get_theme_mod('s7-text-2', 'It doesn\'t matter where do you live. Call us and we\’ll help to solve all of your problems. The support team is waiting for your calls 24 hours a day, 7 days per week. Or connect us via email.'); ?></p>
            </div>

            <ul class="social-links">
              <li><a href="<?php echo get_theme_mod('s7-url-1', '#'); ?>"><div class="social-link"><i class="box fa fa-facebook"></i></div></a></li>
              <li><a href="<?php echo get_theme_mod('s7-url-2', '#'); ?>"><div class="social-link"><i class="box fa fa-twitter"></i></div></a></li>
              <li ><a href="<?php echo get_theme_mod('s7-title-3', '#'); ?>"><div class="social-link"><i class="box fa fa-google-plus-square"></i></div></a></li>
            </ul>
          </div>
        </div>
      </section>
<?php get_footer(); ?>
