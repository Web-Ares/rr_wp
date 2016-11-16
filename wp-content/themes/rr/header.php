<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
  

</head>
<?php

if(get_the_ID()===86 || get_the_ID()===49){
    $path = 'data-src='.get_the_permalink(59);
} else{
    $path = '';
}?>
<body <?= $path ?>>

<?php if (is_page() || is_single() || is_singular() || is_404()) {
    the_post();
} ?>

<!-- site -->
<div class="site">

    <!-- site__header -->
    <header class="site__header">

        <?php if(is_front_page()){ ?>
            <!-- logo -->
            <h1 class="logo">
                <img src="<?= DIRECT ?>img/logo.png" width="175" height="57" alt="RR">
            </h1>
            <!-- /logo -->
        <?php } else {?>
            <!-- logo -->
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?= DIRECT ?>img/logo.png" width="175" height="57" alt="RR">
            </a>
            <!-- /logo -->
        <?php } ?>


        <!-- site__header__btn -->
        <button type="button" class="site__header__btn">
            <span></span>
        </button>
        <!-- /site__header__btn -->

        <!-- menu -->
        <div class="menu">
            <div>
                <div>
                    <nav>
                        <?php $locations = get_nav_menu_locations();
                        $menu_items = wp_get_nav_menu_items($locations['menu']);

                        foreach ((array)$menu_items as $key => $menu_item) {

                            if($post->ID==$menu_item->object_id){

                                $active = ' active';

                            } else {

                                $active = '';

                            }
                            $menu_title =  $menu_item->title;

                            ?>

                            <a class="<?= $active ?>" href="<?= $menu_item->url; ?>"><?= $menu_title;  ?></a>
                            <?php

                        }?>
                    </nav>

                </div>
            </div>
        </div>
        <!-- /menu -->
        
    </header>
    <!-- /site__header -->

