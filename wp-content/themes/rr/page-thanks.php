<?php
/**
 * Template Name: Thanks Page
 */
get_header(); ?>

<?php
$name = $_GET['guest'];
$order = $_GET['order'];
$name = explode(' ',$name);
?>

<!-- site__content -->
<div class="site__content site__content_full">

    <!-- confirmation -->
    <div class="confirmation">
        <div>

            <!-- confirmation__inner -->
            <div class="confirmation__inner">

                <h1 class="site__title site__title_3">THANK YOU, <?= $name[0] ?></h1>

                <!-- confirmation__data -->
                <div class="confirmation__data">
                    <p><strong><?php the_field('order_text') ?></strong></p>
                    <p class="confirmation__data-paste"></p>
                    <p class="confirmation__contact-you"><?php the_field('contact_text') ?></p>
                </div>
                <!-- /confirmation__data -->

                <!-- follow-social -->
                <div class="follow-social">
                    <span>Follow us:</span>
                    <?php if($fa = get_field('facebook')): ?>
                        <a href="<?= $fa ?>"class="follow-social__item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                            <g>
                                <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" fill="#FFFFFF"/>
                            </g>
                        </svg>
                        </a>
                    <?php endif;
                    if($in = get_field('instagram')):
                    ?>
                        <a href="<?= $in ?>" class="follow-social__item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve" width="512px" height="512px">
                            <g>
                                <g>
                                    <path d="M20.379,10.252c0,5.315-3.924,9.62-10.381,9.62C3.924,19.872,0,15.568,0,10.252    c0-5.443,4.051-9.621,10.252-9.621C16.455,0.631,20.254,4.809,20.379,10.252z M0.506,89.368V27.468h19.242v61.901H0.506z" fill="#FFFFFF"/>
                                    <path d="M31.262,47.215c0-7.721-0.252-14.176-0.504-19.747h16.707l0.889,8.608h0.379    c2.531-4.053,8.734-10.002,19.115-10.002C80.506,26.074,90,34.556,90,52.784v36.585H70.758V55.063    c0-7.976-2.785-13.417-9.748-13.417c-5.316,0-8.479,3.67-9.871,7.215c-0.508,1.265-0.635,3.038-0.635,4.811v35.697H31.262V47.215z    " fill="#FFFFFF"/>
                                </g>
                            </g>
                        </svg>
                        </a>
                    <?php endif;
                    if($tw = get_field('twitter')):
                    ?>
                        <a href="<?= $tw ?>" class="follow-social__item follow-social__item_twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 15.124 15.124" style="enable-background:new 0 0 15.124 15.124;" xml:space="preserve" width="512px" height="512px">
                            <g>
                                <path d="M12.1,3.974c-0.009-0.004-0.019-0.015-0.028-0.024c-0.566-0.504-1.23-0.745-1.994-0.716   l-0.023-0.051c0.004-0.005,0.009-0.005,0.014-0.005c0.693-0.152,0.928-0.131,1.05-0.3c0.042-0.137-0.01-0.212-0.16-0.231   c-0.35,0.043-0.67,0.113-0.958,0.222c0.364-0.222,0.505-0.377,0.425-0.458c-0.319-0.195-0.767,0.15-0.805,0.127   c-0.193,0.127-0.363,0.264-0.509,0.41C8.805,3.273,8.736,3.4,8.548,3.673L8.539,3.696c-0.486,0.75-1.002,1.503-1.205,2.273   L7.259,6.026L7.245,6.04c-0.292-0.349-1.11-1.449-1.779-1.732c-0.733-0.36-2.5-0.684-3.249-0.914   C2.213,4.191,2.622,4.827,3.439,5.289v0.014c-0.898-0.137-0.78-0.048-0.835,0.118c0.052,0.74,0.604,1.25,1.65,1.532L4.249,6.967   c-0.41-0.023-1.142-0.083-1.014,0.397c0.344,0.641,0.952,0.947,1.834,0.924C4.894,8.374,4.758,8.466,4.668,8.571   c-0.16,0.16-0.212,0.35-0.16,0.565c0.188,0.325,0.528,0.476,1.028,0.453l0,0l0.028,0.032C5.56,9.626,5.555,9.631,5.55,9.636   c-0.863,0.849-1.905,1.23-3.127,1.15l-0.019,0.01C1.659,10.791,0.862,10.451,0,9.773c0.867,1.188,2.018,2.046,3.442,2.584   c1.631,0.514,3.263,0.552,4.889,0.112h0.028c1.58-0.434,2.919-1.325,4.021-2.672c0.51-0.708,0.83-1.382,0.958-2.028   c0.824,0.028,1.419-0.198,1.786-0.679l-0.009-0.015c-0.273,0.094-0.812,0.066-1.608-0.089V6.901c0-0.004,0-0.004,0.005,0   c0.872-0.094,1.387-0.362,1.552-0.806c-0.608,0.227-1.208,0.231-1.802,0.02C13.155,5.331,12.77,4.619,12.1,3.974z" fill="#FFFFFF"/>
                            </g>
                        </svg>
                        </a>
                    <?php endif; ?>

                </div>
                <!-- /follow-social -->

                <a href="<?= get_permalink(5) ?>" class="btn btn_arrow btn_4">R&R TELECOM HOME PAGE</a>

            </div>
            <!-- /confirmation__inner -->

            <!-- guy -->
            <div class="guy guy_2">
                <img src="<?=  DIRECT ?>img/guy-body.png" width="180" height="401" alt="Image">

                <div class="guy__hand" data-rotate-start="50" data-rotate-finish="0">
                    <img src="<?=  DIRECT ?>img/guy-hand.png" width="172" height="95" alt="Image">
                </div>

            </div>
            <!-- /guy -->

        </div>

        <!-- clouds -->
        <div class="clouds clouds_1">
            <img src="<?=  DIRECT ?>img/cloud1.png" width="148" height="205" alt="Image">
        </div>
        <!-- /clouds -->

        <!-- clouds -->
        <div class="clouds clouds_2">
            <img src="<?=  DIRECT ?>img/cloud2.png" width="134" height="196" alt="Image">
        </div>
        <!-- /clouds -->

    </div>
    <!-- /confirmation -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
