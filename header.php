<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Jony</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="images/x-icon"
        href="<?php echo get_template_directory_uri() .'/assets/images/favicon.png';?>" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/bootstrap.min.css';?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/owl.carousel.min.css';?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/magnific-popup.css';?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/font-awesome.min.css';?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/themify-icons.css';?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/nice-select.css';?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/flaticon.css';?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/gijgo.css';?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/animate.css';?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/slick.css';?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/slicknav.css';?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/style.css';?>" />
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/css/responsive.css';?>"> -->
</head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <?php
                                        if ( function_exists( 'the_custom_logo' ) ) {
                                            the_custom_logo();
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <?php
                                                wp_nav_menu( array(
                                                    'theme_location' => 'primary-menu',
                                                ) );
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <?php 
                                        // Get customizer values
                                        $button_text = get_theme_mod( 'download_button_text', __( 'Download', 'mytheme'
                                        ) );
                                        $attachment_id = get_theme_mod( 'download_button_attachment' );

                                        // Output download button
                                        echo '<a href="' . wp_get_attachment_url( $attachment_id ) . '" download>' .
                                            esc_html( $button_text ) . '</a>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->