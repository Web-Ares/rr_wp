<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta charset="UTF-8">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo TEMPLATEURI; ?>/dist/img/favicon.ico' />
    <title><?php document_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body data-action="<?php echo admin_url( 'admin-ajax.php' );?>">


<?php if (is_page() || is_single() || is_singular() || is_404()) {
    the_post();
}


?>


    <!-- menu-btn -->
    <span class="menu-btn"></span>
    <!-- /menu-btn -->

    <!-- site__header -->
    <header class="site__header">
        <?php if(is_front_page()){ ?>
            <!-- logo -->
            <h1 class="logo">
                <img src="<?php echo TEMPLATEURI; ?>/dist/img/logo.png" alt="בנדל ניהול פרויקטים בבניה">
            </h1>
            <!-- /logo -->
        <?php } else {?>e
        <!-- logo -->
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo TEMPLATEURI; ?>/dist/img/logo.png" alt="בנדל ניהול פרויקטים בבניה">
        </a>
        <!-- /logo -->
        <?php } ?>
        <!-- menu -->
        <nav class="menu">

            <!-- menu__close -->
            <span class="menu__close"></span>
            <!-- /menu__close -->

                <?php
                $locations = get_nav_menu_locations();
                $menu_items = wp_get_nav_menu_items($locations['menu']);

                foreach ((array)$menu_items as $key => $menu_item) {

                    if($menu_item->post_title=='Language switcher'){
                        $lang_l='';
                        $lang_url = $menu_item->url;
                        $lang_l = $menu_item->lang;
                        continue;
                    }

                    if($post->ID==$menu_item->object_id){
                        $active = 'active';
                    } else {
                        $active = '';
                        if($menu_item->object_id==15){
                              if( get_post_type($post->ID)=='project' ){
                                  $active = 'active';
                              }
                        }
                    }
                    ?>

                    <a href="<?php echo $menu_item->url; ?>" class="menu__item <?php echo $active; ?>"><?php echo $menu_item->title; ?></a>

                <?php }; ?>


        </nav>
        <!-- /menu -->


    </header>
    <!-- /site__header -->


