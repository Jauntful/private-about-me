
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Raphael Grignani</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Keywords" content="Raphael Grignani, San Francisco, Jauntful, CEO, designer; entrepreneur, speaker, freelancer;">
  <meta name="description" content="Raphaël Grignani is a designer living in San Francisco and co-founder of Jauntful. Previously, he designed products and led teams for Nokia, Method, Google, Heath Ceramics, amongst others.">
  <meta name="abstract" content="Designer and Entrepreneur. Co-founder of Jauntful.">
  <meta http-equiv="Content-Language" content="EN">
  <meta name="author" content="">
  <meta name="distribution" content="Global">
  <meta name="revisit-after" content="1 days">
  <meta name="robots" content="FOLLOW,INDEX, NOODP">


  <!-- Le styles -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/css/aboutme.css" rel="stylesheet">
  <script src="//use.typekit.net/efl2tlb.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <!-- Le javascript -->
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script type="text/javascript">
        var poster = function() {
          var viewportWidth  = document.documentElement.clientWidth
          , viewportHeight = document.documentElement.clientHeight

          jQuery('.bio').css('min-height', viewportHeight + 'px');
        }

        jQuery(document).ready(function() {
          poster();
        });

        jQuery(window).on('resize',function() {
          poster();
        });

      </script>

  </head>
  <body>

    <section class="bio">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-3 profile-img col-sm-push-8">
            <img src="<?php bloginfo('template_directory'); ?>/img/raphaelgrignani.jpg" class="img-responsive img-circle">
          </div>
          <div class="col-xs-12 col-sm-7 col-sm-pull-3">
            <p class="text--lead">My name is Rapha&euml;l Grignani. I'm a designer living in San Francisco. I currently lead the Growth design team at <a href="http://creative.pinterest.com/">Pinterest</a>. Previously, I cofounded/CEOed <a href="https://jauntful.com/">Jauntful</a>. I also did stuff for Nokia, Method, Google, Heath Ceramics, amongst others.</p>
            <p class="text--lead">I co-founded the IxDA Interaction Awards to document and celebrate contemporary design.</p>
            <p class="text--lead">See my <a href="https://twitter.com/grignani">tweets</a>, <a href="http://instagram.com/raphaelgrignani">photos</a>, and <a href="https://www.pinterest.com/grignani">pins</a> for more personal details.</p>
            <p class="text--lead"><a href='javascript:noSpam("hei", "grignani.org?subject=My name is ...")'>Email me</a> for work and speaking inquiries, or just to say hello.</p>
          </div>

        </div>
      </div>
      <div class="scrollDown">
           <a href="#details"><i class="glyphicon glyphicon-chevron-down"></i></a>
        </div>
    </section>

    <section class="details" id="details">
      <div class="container">
        <div class="row">
          <div class=" col-xs-12 col-sm-6 col-md-3">
            <h5 class="products">Selected Works</h5>
            <ul><?php query_posts('category_name=products&showposts=20'); ?>
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <li><strong><?php the_title() ?></strong><br /><?php the_content() ?></li>
                <?php endwhile; else: ?>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
              <?php endif; ?>
            </ul>
          </div>
          <div class=" col-xs-12 col-sm-6 col-md-3">
            <h5 class="talks">Talks</h5>
            <ul><?php query_posts('category_name=talks&showposts=20'); ?>
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <li><strong><?php the_title() ?></strong><br /><?php the_content() ?></li>
                <?php endwhile; else: ?>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
              <?php endif; ?>
            </ul>
          </div>
          <div class=" col-xs-12 col-sm-6 col-md-3">
            <h5 class="academia">Academia &amp; Workshops</h5>
            <ul><?php query_posts('category_name=academia'); ?>
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <li><strong><?php the_title() ?></strong><br /><?php the_content() ?></li>
                <?php endwhile; else: ?>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
              <?php endif; ?>
            </ul>
            <h5 class="patents">Granted Patents</h5>
            <ul><?php query_posts('category_name=patents'); ?>
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <li><strong><?php the_title() ?></strong><br /><?php the_content() ?></li>
                <?php endwhile; else: ?>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
              <?php endif; ?>
            </ul>
            <p>And <strong>eight pending patents</strong>.</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <h5 class="publications">Publications &amp; Press</h5>
            <ul><?php query_posts('category_name=press'); ?>
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <li><strong><?php the_title() ?></strong><br /><?php the_content() ?></li>
                <?php endwhile; else: ?>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2 contact">
            <p class="text--lead"><a href='javascript:noSpam("hei", "grignani.org?subject=My name is ...")'>Email me</a> for work and speaking inquiries.</p>
          </div>
        </div>
      </div>
    </section>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-59931402-1', 'auto');
    ga('send', 'pageview');

  </script>
   <script language="JavaScript" type="text/javascript">
    <!--
    function noSpam(user,domain) {
      locationstring = 'mailto:' + user + '@' + domain;
      window.location = locationstring;
    }
  -->
</script>

</body>
</html>
