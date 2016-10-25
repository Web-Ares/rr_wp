<?php
/**
 * Template Name: Checkout Page
 */
get_header(); ?>


<!-- site__content -->
<div class="site__content">

    <!-- choose-data -->
    <div class="choose-data">
        <form action="#">



            <!-- choose-data__items -->
            <div class="choose-data__items">

                <!-- location -->
                <div class="location location_1">

                    <!-- choose-data__center -->
                    <div class="choose-data__center">

                        <h1 class="site__title site__title_3"><span><?php the_field('primary_service_title') ?></span></h1>


                        <?php if( have_rows('locations') ): ?>

                        <!-- location__radio -->
                        <div class="location__radio">
                                  <?php   $locationCount = 1;
                                    while ( have_rows('locations') ) : the_row();
                                        $value = get_sub_field('city_name');
                                        if($locationCount == 1){
                                            $checked = 'checked';
                                        } else {
                                            $checked ='';
                                        }
                                        ?>



                                            <!-- nice-radio -->
                                            <div class="nice-radio">
                                                <input type="radio" name="location" value="<?= $value ?>" id="location<?= $locationCount ?>" <?= $checked ?>>
                                                <label for="location<?= $locationCount ?>">
                                                    <span><?= $value ?></span>

                                                    <!-- location__list -->
                                        <span class="location__list">
                                            <?php if( have_rows('city') ):

                                                        while ( have_rows('city') ) : the_row(); ?>

                                                              <span><?php  the_sub_field('info_item'); ?></span>

                                                            <?php

                                                        endwhile;
                                                    endif; ?>
                                        </span>
                                                    <!-- /location__list -->

                                                </label>
                                            </div>
                                            <!-- /nice-radio -->



                                        <?php
                                        $locationCount++;
                                    endwhile; ?>
                            </div>
                            <!-- /location__radio -->
                              <?php   endif; ?>

                    </div>
                    <!-- /choose-data__center -->

                    <!-- clouds -->
                    <div class="clouds clouds_2">
                        <img src="<?= DIRECT ?>img/cloud2.png" width="134" height="196" alt="Image">
                    </div>
                    <!-- /clouds -->

                </div>
                <!-- /location -->

            </div>
            <!-- /choose-data__items -->

            <!-- choose-data__items -->
            <div class="choose-data__items">

                <!-- capacity -->
                <div class="capacity">

                    <!-- choose-data__center -->
                    <div class="choose-data__center">

                        <h1 class="site__title site__title_3"><span><?php the_field('indicate_title') ?></span></h1>

                        <!-- capacity__field -->
                        <div class="capacity__field">

                            <input name="num-posts" id="num-posts" type="text" class="site__input" placeholder="<?php the_field('placeholder_text') ?>">

                            <?php if( have_rows('tariff_info_block') ): ?>
                            <!-- capacity__price -->
                            <div class="capacity__price">
                                      <?php   while ( have_rows('tariff_info_block') ) : the_row(); ?>


                                          <div><?php the_sub_field('new_info_line') ?></div>

                                            <?php
                                        endwhile; ?>
                            </div>
                            <!-- /capacity__price -->
                            <?php endif; ?>

                        </div>
                        <!-- /capacity__field -->

                        <?php if( have_rows('descriptions_block') ): ?>
                            <!-- capacity__description -->
                            <div class="capacity__description">
                                <?php   while ( have_rows('descriptions_block') ) : the_row(); ?>


                                    <span><?php the_sub_field('new_line_of_descriptions') ?></span>

                                    <?php
                                endwhile; ?>
                            </div>
                            <!-- /capacity__description -->
                        <?php endif; ?>
                        
                    </div>
                    <!-- /choose-data__center -->

                    <!-- clouds -->
                    <div class="clouds clouds_2">
                        <img src="<?= DIRECT; ?>img/cloud2.png" width="134" height="196" alt="">
                    </div>
                    <!-- /clouds -->

                </div>
                <!-- /capacity -->

            </div>
            <!-- /choose-data__items -->

            <!-- choose-data__items -->
            <div class="choose-data__items">

                <!-- options -->
                <div class="options">

                    <!-- choose-data__center -->
                    <div class="choose-data__center">

                        <h1 class="site__title site__title_3"><span>Select service options</span></h1>
                        <?php if( have_rows('options_list') ):
                            $count = 1;


                            ?>
                        <!-- options__checkbox -->
                        <div class="options__checkbox">
                                  <?php   while ( have_rows('options_list') ) : the_row();
                                      if($count == 1){
                                          $checked = 'checked';
                                      } else {
                                          $checked= '';
                                      }
                                      $name = 'name_'.$count;
                                      $value = get_sub_field('option');
                                      ?>

                                      <!-- nice-checkbox -->
                                      <div class="nice-checkbox">
                                          <input type="checkbox" name="<?= $name ?>" value="<?= $value ?>" id="<?= $name ?>" <?= $checked ?>>
                                          <label for="<?= $name ?>"><?= $value ?></label>
                                      </div>
                                      <!-- /nice-checkbox -->

                                        <?php
                                      $count++;
                                    endwhile;

                                  ?>
                        </div>
                            <!-- /options__checkbox -->
                               <?php  endif; ?>

                    </div>
                    <!-- /choose-data__center -->

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

                    <a href="<?= get_permalink(86) ?>" class="btn btn_2 btn_arrow btn_next" data-src="<?= get_the_permalink(86) ?>"><span>next</span></a>

                </div>
                <!-- /options -->

            </div>
            <!-- /choose-data__items -->

        </form>

        <!-- guy -->
        <div class="guy guy_2">
            <img src="<?= DIRECT ?>img/guy-body.png" width="180" height="401" alt="Guy">

            <div class="guy__hand" data-rotate-start="50" data-rotate-finish="0">
                <img src="<?= DIRECT ?>img/guy-hand.png" width="172" height="95" alt="guy">
            </div>

        </div>
        <!-- /guy -->

        <!-- clouds -->
        <div class="clouds clouds_1">
            <img src="<?= DIRECT ?>img/cloud1.png" width="148" height="205" alt="cloud">
        </div>
        <!-- /clouds -->

    </div>
    <!-- /choose-data -->

</div>
<!-- /site__content -->

<?php get_footer(); ?>
