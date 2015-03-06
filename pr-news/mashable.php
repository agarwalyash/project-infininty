<!DOCTYPE html>
<html>
<head>
  <title><?php //the_title(); ?></title>
  <link href=
  "http://rack.3.mshcdn.com/assets/app-2f8741e5f4acf61fa3e16a90c5c98f56.css"
  media="screen" rel="stylesheet" type="text/css">
  <link href=
  "http://rack.1.mshcdn.com/assets/posts-b4fccde9611fbb0c4ca02243d1a564ad.css"
  media="all" rel="stylesheet" type="text/css"><!--[if lte IE 8]>
<link href="http://rack.3.mshcdn.com/assets/iehax-957092b11e263c6b850533d06d5aaa2c.css" media="screen" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
          
 
<body class="body_posts body_show">
  <div id="peek">
    <div id="sticky">
    </div>


    <div id="scrollable">
      <div class="loader">
      </div>


      <div class="posts show" id="body-container">
        <div id="main">
          <div class="page-container">
            <div id="body">
              <hgroup class="page-header channel">
                <h2>

                <?php 
                  $category = get_the_category(); 
                  if($category[0]){
                  echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
                                  }
                ?>  



                </h2>
              </hgroup>


              <div class="flex-box">
                <div class="box-cell">
                  <div id="post-content">
                    <div id="post-slider">
                      <article class="full post">
                        <header class="article-header">
                          <h1 class="title"><?php the_title(); ?></h1>


                          <aside class=
                          "shares social">
                            <div class=
                            "total-shares"
                            data-index="0">
                              <em>
                              <?php 
                              $share_count = pssc_facebook()+pssc_twitter()+pssc_gplus(); 
                              if($share_count>=1000)
                                {
                                  echo (int)($share_count/1000) . ".";
                                  $share_count -= 1000 * (int)($share_count/1000);
                                  echo (int)($share_count/100) . "k";
                                }
                              else 
                                {
                                  echo $share_count;
                                }
                              ?>
                              </em>

                              <div class=
                              "caption">
                                Shares
                              </div>
                            </div>


                            <div class=
                            "share-buttons v2">
                            <?php require("social.php"); ?>
                            </div>
                          </aside>

                        <!--DISABLING FEATURED IMAGE
                          <figure class=
                          "article-image">
                            <a id="lead-image"
                            name="lead-image"></a>

                            <div class=
                            "microcontent-wrapper">
                            <img alt="Google1"
                            class="microcontent"
                            src=
                            "http://rack.1.mshcdn.com/media/ZgkyMDE1LzAzLzAyL2FkL0dvb2dsZTEuOGQzYWMuanBnCnAJdGh1bWIJOTUweDUzNCMKZQlqcGc/575ef9f0/5af/Google1.jpg">
                            </div>


                            <figcaption class=
                            "image-caption">
                              Google's Sundar
                              Pichai speaks at
                              Mobile World
                              Congress in
                              Barcelona.
                            </figcaption>


                            <div class="image-credit">
                              Image: Mashable,
                              William Sands
                            </div>
                          </figure>
                        -->


                      
                          <div class="article-info">
                            <a class="byline" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                            <?php 
                              userphoto_the_author_thumbnail();
                            ?>
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                              <?php the_author_meta( 'display_name' ); ?>
                            </a>
                            <div class="author_and_date">
                              <span class="author_name">
                              By <?php echo " "; the_author_meta( 'display_name' ); ?>
                              </span>
                              <!--DISABLING POST TIME
                              <time datetime="Mon, 02 Mar 2015 13:11:23 +0000">1
                              hour ago</time>
                              -->
                            </div></a>
                          </div>
                        </header>


                        <section class=
                        "article-content">
                          <?php the_content();    ?>
                
                          <p>BARCELONA â€” Google is
                          getting closer to
                          officially launching its
                          solar-powered drone program
                          Project Titan and will send
                          its first fleet into the
                          sky sometime this year.</p>


                          <p>Sundar Pichai, senior VP
                          at Google who oversees
                          Android, Chrome and Google
                          apps, took to the stage
                          Monday at Mobile World
                          Congress to outline how the
                          company is working on three
                          big programs aimed at
                          connecting some of the 4
                          billion people currently
                          without Internet
                          access.</p>


                          <p>Pichai said Project
                          Titan will fly lightweight
                          solar-powered airplanes to
                          serve as remote satellites.
                          The company â€” which
                          <a data-crackerjax=
                          "#post-slider" href=
                          "http://mashable.com/2014/04/14/google-buys-titan-aerospace-drones/">
                          acquired Titan in 2014</a>,
                          following rumors that
                          Facebook was pursuing the
                          startup â€” will use the
                          drones to hover above
                          certain areas and supply
                          connectivity to locations
                          below. It could also serve
                          spots that have been kicked
                          offline due to natural
                          disasters.</p>


                          <p>Pichai said Project
                          Titan is at the same stage
                          where Project Loon was two
                          years ago. Similarly,
                          <a id="loon-involves-sending-balloons"
                          name=
                          "loon-involves-sending-balloons">
                          </a></p>


                          <blockquote class=
                          "microcontent-wrapper pullquote">
                          <span class="microcontent">
                            Loon involves sending
                            balloons into the sky
                            to serve as floating
                            cell towers, but it
                            covers greater regions
                            from above (Titan
                            focuses more on
                            specific, narrower
                            areas).</span>
                          </blockquote>


                          <p>Loon has already
                          undergone testing in
                          Australia and South America
                          and is heavily working with
                          partners to get it off the
                          ground, he added.</p>


                          <p>"When I first heard the
                          idea, I thought it was a
                          crazy idea, and these
                          balloons are really big,"
                          Pichai said. "The notion
                          that you can run these
                          things to scale, which
                          sounds like science
                          fiction... but we will see
                          a lot of progress in the
                          next few years where we can
                          turn it into a real service
                          for users."</p>


                          <p>Google's third program
                          called Project Blank
                          started a year ago and aims
                          to bring connectivity to
                          rural and urban areas
                          across the world.</p>


                          <p>"We built a fiber
                          network and worked with
                          local providers to provide
                          4G services," Pichai said.
                          "We are going to roll out
                          Project Plank to Africa
                          this year."</p>


                          <p>Pichai said that the
                          move for big companies like
                          Facebook and its
                          Internet.org initiative to
                          get more people in remote
                          regions to access the web
                          is a strong and important
                          step.</p>


                          <p>"I'm glad companies like
                          Facebook and others around
                          the world are working on
                          these types of
                          technologies," he said.</p>


                          <p>Facebook CEO Mark
                          Zuckerberg is scheduled to
                          speak at MWC 2015 on the
                          same stage this
                          evening.</p>


                          <p><em>Have something to
                          add to this story? Share it
                          in the comments.</em>
                          </p>
                        </section>


                        <footer class="article-topics">
                          Tags: 
                          <?php the_tags('  ',', '); ?>
                          
                          Categories: 
                          <?php the_category(', '); ?>
                        </footer>
                      </article>
                    </div>
                  </div>
                </div>


                <aside class="box-cell sidebar">
                  <h1 class="ribbon hot">What's Hot</h1>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>