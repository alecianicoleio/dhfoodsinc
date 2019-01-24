
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

                <section class="vc_section blog-header">
                  <div class="wpb_row section-wrap-tall">
                    <div class="vc_column_container">
                      <div class="vc_column-inner">

                        <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                        <p>
                          <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                            /* the time the post was published */
                            '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>', ''
                          ); ?>
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="bg-image">
                    <?php
                      if ( has_post_thumbnail() ) {
                          the_post_thumbnail('full');
                      } 
                    ?>
                  </div>
                </section>

                <section class="vc_section blog-body section-white">
                  <div class="vc_row wpb_row vc_row-fluid section-wrap">

                    <div class="wpb_column vc_column_container vc_col-sm-8">
                      <div class="vc_column-inner">
                        <section class="entry-content cf" itemprop="articleBody">
                          <?php
                            // the content (pretty self explanatory huh)

                            the_content();

                            /*
                             * Link Pages is used in case you have posts that are set to break into
                             * multiple pages. You can remove this if you don't plan on doing that.
                             *
                             * Also, breaking content up into multiple pages is a horrible experience,
                             * so don't do it. While there are SOME edge cases where this is useful, it's
                             * mostly used for people to get more ad views. It's up to you but if you want
                             * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                             *
                             * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                             *
                            */
                            wp_link_pages( array(
                              'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                              'after'       => '</div>',
                              'link_before' => '<span>',
                              'link_after'  => '</span>',
                            ) );
                          ?>
                        </section>
                      </div>
                    </div> 

                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner">
                        <div class="blog-sidebar">
                          <?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar2' ); ?>
                          <?php else : ?>
                            <div class="no-widgets">
                              <p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>

                  </div> 
                </section> 

                <section class="vc_section section-clear">
                  <div class="wpb_row section-wrap">
                    <div class="vc_column_container">
                      <div class="vc_column-inner">

                        <footer class="article-footer">

                          <?php printf( __( 'Categories', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

                          <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                        </footer> <?php // end article footer ?>

                      </div>
                    </div>
                  </div>
                </section> 
                  


