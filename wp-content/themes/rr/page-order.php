<?php
/**
 * Template Name: Place Order Page
 */
get_header(); ?>

<!-- site__content -->
<div class="site__content site__content_full">

    <!-- order -->
    <div class="order">
        <div>

            <!-- order__inner -->
            <div class="order__inner">

                <!-- order__chosen-data -->
                <div class="order__chosen-data">
                    <span>You chose minute pricing (1,5M minutes ($0,0003/minute), Frankfurt, Germany + 2 services).</span> <a href="<?= get_the_permalink(59) ?>">Edit</a>.
                </div>
                <!-- /order__chosen-data -->

                <h1 class="site__title site__title_3"><?= get_field('title') ?></h1>

                <!-- order__place -->
                <div class="order__place">

                    <?= do_shortcode('[gravityform id=1  title=false]'); ?>

                    <p><?= get_field('contact_text_in_footer') ?></p>

                </div>
                <!-- /order__place -->

            </div>
            <!-- /order__inner -->

            <!-- guy -->
            <div class="guy guy_2">
                <img src="<?= DIRECT ?>img/guy-body.png" width="180" height="401" alt="Image">

                <div class="guy__hand" data-rotate-start="50" data-rotate-finish="0">
                    <img src="<?= DIRECT ?>img/guy-hand.png" width="172" height="95" alt="Image">
                </div>

            </div>
            <!-- /guy -->

        </div>

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
    <!-- /order -->

</div>
<!-- /site__content -->

<?php get_footer(); ?>
