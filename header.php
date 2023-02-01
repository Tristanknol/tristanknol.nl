<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
?>
<!DOCTYPE html>
<html>
<head>
    <title><?PHP bloginfo( 'name' ); ?> | <?Php echo basename(get_permalink());?></title>
    <meta name="copyright" content="<?php date( 'Y' ); ?> - <?PHP bloginfo( 'name' ); ?>">
    <meta name="author" content="<?PHP bloginfo( 'name' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/script.js"></script>
    <?php wp_head(); ?>
    <style>
        <?php include 'css/global.min.css'; ?>
    </style>
</head>
<body <?php body_class(); ?>>

<div class="d-none d-md-block position-absolute w-100">
    <nav class="navbar navbar-expand-md navbar-light p-2" id="desktop_menu" role="navigation"
         style="padding-top: 0 !important;">
        <div class="container-fluid">

            <div class="row justify-content-between w-100">

                <div class="col-md-2">
                    <div class="row h-100 align-items-center d-flex justify-content-center">
                        <a href="<?php echo get_site_url(); ?>">
                            <img src="<?php echo $image[0]; ?>" alt="Websitenaam" width="300px" height="100%"
                                 class="fit-contain">
                        </a>
                    </div>
                </div>

                <div class="col-md-5 pt-2 d-flex">
                    <div class="d-flex justify-content-start menu-items-header">
                    </div>
                </div>
            </div>
        </div>

    </nav>
</div>

<!--Mobile menu-->
<div class="pl-2 pt-2 d-block d-md-none py-3 position-absolute">
    <a href="<?php echo get_site_url(); ?>">
        <img src="<?php echo $image[0]; ?>" alt="Websitenaam" width="150px" height="10%"
             class="fit-contain">
    </a>
</div>
<div class="sidebar d-block d-md-none">
    <div class="container-fluid w-100" id="open_mobile">
        <div class="row justify-content-end">
            <div class="button-menu closemenu"><i class="far fa-times-circle" style="color: white !important;"></i></div>
        </div>
    </div>
    <nav class="navbar navbar-expand p-0" role="navigation" id="mobile_menu">
        <div class="container">

        </div>
    </nav>
</div>
<div class="container-fluid  position-absolute w-100 d-block d-md-none" id="open_mobile">
    <div class="row justify-content-end height0">
        <div class="button-menu openmenu "><i class="fas fa-bars text-color"></i></div>
    </div>
</div>
<div class="closeoutclick">
