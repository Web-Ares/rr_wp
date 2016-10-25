<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<!-- site__content -->
<div class="site__content">

    <!-- host -->
    <div class="host host_2" data-more="true" data-anchor="true">

        <!-- host__inner -->
        <div class="host__inner">

            <!-- host__head -->
            <div class="host__head">
                <div>
                    <span class="host__offer">OFFER EXPIRES: <span class="host__offer-date">9/21/2016</span> 5PM:00 EST</span>
    
                    <?php if($discount = get_field('percent_of_discount')):
                        $discount_1 = '<span class="host__discount">'.$discount.'</span>';
                    endif; ?>
    
                    <h2 class="site__title site__title_2"><span><?php the_field('title') ?> <?= $discount_1 ?></span></h2>
                </div>
            </div>
            <!-- /host__head -->

            <!-- host__items -->
            <div class="host__items">

                <?php if( have_rows('list_of_advantages') ): ?>
                <!-- site__list -->
                <ul class="site__list">
                           <?php  while ( have_rows('list_of_advantages') ) : the_row(); ?>

                               <li><?php the_sub_field('newf_advantage'); ?></li>
                                
                                <?php
                    endwhile; ?>
                    </ul>
                    <!-- /site__list -->
               <?php endif; ?>


                <!-- host__clients -->
                <div class="host__clients">
                    <?php if($image = get_field('choose_the_image_of_clients')){
                        $alt = get_post_meta($image['ID'] , '_wp_attachment_image_alt', true);
                        ?>

                        <img src="<?= $image['url'] ?>"  title="<?= $image['description'] ?>" alt="<?= $alt ?>">

                  <?php   } ?>

                </div>
                <!-- /host__clients -->

            </div>
            <!-- /host__items -->

            <!-- guy -->
            <div class="guy">
                <img src="<?= DIRECT ?>img/guy-body2.png" width="180" height="401" alt="Image">

                <div class="guy__hand" data-rotate-start="50" data-rotate-finish="0">
                    <img src="<?= DIRECT ?>img/guy-hand.png" width="172" height="95" alt="Image">
                </div>

            </div>
            <!-- /guy -->

        </div>
        <!-- /host__inner -->

        <!-- learn-more -->
        <a href="#" class="learn-more">learn more</a>
        <!-- /learn-more -->

        <!-- clouds -->
        <div class="clouds clouds_1">
            <img src="<?= DIRECT ?>img/cloud1.png" width="148" height="205" alt="Image">
        </div>
        <!-- /clouds -->

    </div>
    <!-- host -->

    <!-- information -->
    <div class="information" data-more="true" data-anchor="true">

        <!-- information__inner -->
        <div class="information__inner">

            <h2 class="site__title"><?php the_field('title_of_block') ?></h2>

            <!-- information__items -->
            <div class="information__items">
                <div>
                    <!-- information__device -->
                    <div class="information__device">
                        <?php if($image = get_field('choose_the_device_image')){
                            $alt = get_post_meta($image['ID'] , '_wp_attachment_image_alt', true);
                            ?>

                            <img src="<?= $image['url'] ?>"  title="<?= $image['description'] ?>" alt="<?= $alt ?>">

                        <?php   } ?>
                    </div>
                    <!-- /information__device -->

                </div>
                <div>
                    <?php if( have_rows('list_of_information') ): ?>
                        <!-- site__list -->
                        <ul class="site__list">
                            <?php  while ( have_rows('list_of_information') ) : the_row(); ?>

                                <li><?php the_sub_field('newf_information'); ?></li>

                                <?php
                            endwhile; ?>
                        </ul>
                        <!-- /site__list -->
                    <?php endif; ?>

                    <!-- information__awards -->
                    <div class="information__awards">
                        <?php if($image = get_field('choose_the_awards_image')){
                            $alt = get_post_meta($image['ID'] , '_wp_attachment_image_alt', true);
                            ?>

                            <img src="<?= $image['url'] ?>"  title="<?= $image['description'] ?>" alt="<?= $alt ?>">

                        <?php   } ?>
                    </div>
                    <!-- /information__awards -->

                </div>

            </div>
            <!-- /information__items -->

        </div>
        <!-- /information__inner -->

        <!-- learn-more -->
        <a href="#" class="learn-more">learn more</a>
        <!-- /learn-more -->

        <!-- clouds -->
        <div class="clouds clouds_2">
            <img src="<?= DIRECT ?>img/cloud2.png" width="134" height="196" alt="Image">
        </div>
        <!-- /clouds -->

    </div>
    <!-- /information -->

    <!-- setup-process -->
    <div class="setup-process" data-anchor="true">

        <!-- setup-process__inner -->
        <div class="setup-process__inner">

            <h2 class="site__title"><?php the_field('title_of_block_3') ?></h2>

            <span class="site__sub-title"><?php the_field('sub_title_field') ?></span>



                <?php if( have_rows('steps_names') ): ?>
            <!-- setup-process__actions -->
            <div class="setup-process__actions">
                         
                        <?php     while ( have_rows('steps_names') ) : the_row(); ?>
                        <!-- setup-process__actions-item -->
                        <div class="setup-process__actions-item">
                                <span><?php the_sub_field('step') ?></span>
                        </div>
                        <!-- /setup-process__actions-item -->
                                <?php
                
                            endwhile; ?>

            </div>
                    <!-- /setup-process__actions -->
                      <?php   endif; ?>



            <h3 class="site__sub-title"><?php the_field('title_for_system_setup_list') ?></h3>

            <?php if( have_rows('system_setup_list') ): ?>
                <!-- site__list -->
                <ul class="site__list site__list_2">
                    <?php  while ( have_rows('system_setup_list') ) : the_row(); ?>

                        <li><?php the_sub_field('new_item'); ?></li>

                        <?php
                    endwhile; ?>
                </ul>
                <!-- /site__list -->
            <?php endif; ?>


            <a href="<?= get_the_permalink(59) ?>" class="btn btn_arrow"><?php the_field('button_text') ?></a>
            <?php if($payment = get_field('payment_required_field')){ ?>
                <span class="setup-process__info"><?= $payment ?></span>
           <?php  } ?>


            <!-- guy -->
            <div class="guy guy_2">
                <img src="<?= DIRECT ?>img/guy-body.png" width="180" height="401" alt="Image">

                <div class="guy__hand" data-rotate-start="50" data-rotate-finish="0">
                    <img src="<?= DIRECT ?>img/guy-hand.png" width="172" height="95" alt="Image">
                </div>

            </div>
            <!-- /guy -->

        </div>
        <!-- /setup-process__inner -->

        <!-- clouds -->
        <div class="clouds clouds_1">
            <img src="<?= DIRECT ?>img/cloud1.png" width="148" height="205" alt="Image">
        </div>
        <!-- /clouds -->

        <!-- clouds -->
        <div class="clouds clouds_2">
            <img src="<?= DIRECT ?>img/cloud2.png" width="134" height="196" alt="Image">
        </div>
        <!-- /clouds -->

    </div>
    <!-- /setup-process -->

</div>
<!-- /site__content -->

<!-- site__anchors -->
<div class="site__anchors">
    <a href="#">anchor1</a>
    <a href="#">anchor2</a>
    <a href="#">anchor3</a>
</div>
<!-- /site__anchors -->


<?php get_footer(); ?>
