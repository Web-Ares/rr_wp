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

                <!-- choose-data__center -->
                <div class="choose-data__center">

                    <h1 class="site__title site__title_3"><span><?php the_field('rate_plan_title') ?></span></h1>

                    <!-- plans -->
                    <div class="plans">

                        <!-- plans__item -->
                        <div class="plans__item">

                            <!-- plans__head -->
                            <div class="plans__head">

                                <?php the_field('preview_text_copy') ?>

                            </div>
                            <!-- /plans__head -->

                            <!-- plans__list -->
                            <div class="plans__list">

                                <!-- plans__list-row -->
                                <div class="plans__list-row plans__list_caption plans__list-row_3">

                                    <!-- plans__list-col -->
                                    <div class="plans__list-col">
                                        Minutes
                                        included
                                    </div>
                                    <!-- /plans__list-col -->

                                    <!-- plans__list-col -->
                                    <div class="plans__list-col">
                                        Monthly
                                        Plan
                                    </div>
                                    <!-- /plans__list-col -->

                                    <!-- plans__list-col -->
                                    <div class="plans__list-col">
                                        Extra minute
                                        charge
                                    </div>
                                    <!-- /plans__list-col -->

                                </div>
                                <!-- /plans__list-row -->



                                    <?php if( have_rows('per_minute_list') ):
                                        $rowCounter = 1;
                                        ?>
                                <!-- plans__list-radio -->
                                <div class="plans__list-radio">
                                               <?php  while ( have_rows('per_minute_list') ) : the_row();

                                                    if($rowCounter ==1){
                                                        $checked = 'checked';
                                                    }
                                                    else{
                                                        $checked='';
                                                    }

                                                    $column_1 = get_sub_field('minutes_included');
                                                    $column_2 = get_sub_field('monthly_plan');
                                                    $column_3 = get_sub_field('extra_minute_charge');
                                                    $value =  $column_1.' $'.$column_2.' $'.$column_3;
                                                    ?>

                                                    <!-- nice-radio -->
                                                    <div class="nice-radio">
                                                        <input type="radio" name="plans" data-rate="minute pricing" value="<?= $value ?>" id="plan<?= $rowCounter ?>" <?= $checked; ?>>
                                                        <label for="plan<?= $rowCounter ?>">

                                                        <span class="plans__list-row plans__list-row_3">
                                                            <span><?= $column_1 ?></span>
                                                            <span>$<?= $column_2 ?></span>
                                                            <span>$<?= $column_3 ?></span>
                                                        </span>

                                                        </label>
                                                    </div>
                                                    <!-- /nice-radio -->
                                                    
                                                    <?php
                                                    $rowCounter++;
                                                endwhile; ?>
                                        </div>
                                        <!-- /plans__list-radio -->

                                        <?php     endif; ?>


                            </div>
                            <!-- /plans__list -->

                        </div>
                        <!-- /plans__item -->

                        <!-- plans__item -->
                        <div class="plans__item">

                            <!-- plans__head -->
                            <div class="plans__head">

                                <?php the_field('preview_text') ?>
                            </div>
                            <!-- /plans__head -->

                            <!-- plans__list -->
                            <div class="plans__list">

                                <!-- plans__list-row -->
                                <div class="plans__list-row plans__list_caption plans__list-row_2">

                                    <!-- plans__list-col -->
                                    <div class="plans__list-col">
                                        Reserved
                                        Sessions
                                    </div>
                                    <!-- /plans__list-col -->

                                    <!-- plans__list-col -->
                                    <div class="plans__list-col">
                                        Monthly cost
                                        per session
                                    </div>
                                    <!-- /plans__list-col -->

                                </div>
                                <!-- /plans__list-row -->



                                    <?php if( have_rows('per_minute_list_copy') ): ?>
                                <!-- plans__list-radio -->
                                <div class="plans__list-radio">
                                       <?php  while ( have_rows('per_minute_list_copy') ) : the_row();



                                            $column_1 = get_sub_field('reserved_sessions');
                                            $column_2 = get_sub_field('monthly_cost_per_session');
                                            $value =  $column_1.' $'.$column_2;
                                            ?>

                                            <!-- nice-radio -->
                                           <div class="nice-radio">
                                               <input type="radio" name="plans" data-rate="session pricing" value="<?= $value ?>" id="plan<?= $rowCounter ?>">
                                               <label for="plan<?= $rowCounter ?>">

                                            <span class="plans__list-row plans__list-row_2">
                                                <span><?= $column_1 ?></span>
                                                <span>$<?= $column_2 ?></span>
                                            </span>

                                               </label>
                                           </div>
                                           <!-- /nice-radio -->


                                            <?php
                                            $rowCounter++;
                                        endwhile; ?>

                                </div>
                                        <!-- /plans__list-radio -->

                                  <?php   endif; ?>

                            </div>
                            <!-- /plans__list -->

                        </div>
                        <!-- /plans__item -->

                    </div>
                    <!-- /plans -->

                </div>
                <!-- /choose-data__center -->

            </div>
            <!-- /choose-data__items -->

            <!-- choose-data__items -->
            <div class="choose-data__items">

                <!-- location -->
                <div class="location">

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
