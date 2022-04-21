<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="sidebar">
    <header class="site-header">
        <p class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </p>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    </header><! – .site-header – >

    <div class="menues">
        <?php wp_nav_menu( array(
        'theme_location' => 'menu-1',
        ) );?>

        <?php wp_nav_menu( array(
            'theme_location' => 'menu-2',
        ) );?>
    </div>

</div>

<div class="site-content">
    <?php
    if ( have_posts() ) :

        while ( have_posts() ) :

            the_post();
            ?>

            <article <?php post_class(); ?>>

                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><! – .entry-header – >

                <div class="entry-content">
                    <?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
                </div><! – .entry-content – >

            </article><! – #post-## – >

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile;

    else :
        ?>
        <div class="no-article">

        </div>
    <?php
    endif;
    ?>
</div><! – .site-content – >


<?php wp_footer(); ?>
</body>
</html>