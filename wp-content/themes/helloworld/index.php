<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script>
    function expand_sidebar() {
        var sidebar_elem = document.getElementById("sidebar");
        sidebar_elem.classList.remove("sidebar-hidden")
    }
    function collapse_sidebar() {
        var sidebar_elem = document.getElementById("sidebar");
        sidebar_elem.classList.add("sidebar-hidden")
    }
</script>
<button class="hidden-sidebar-button" onclick="expand_sidebar()">extend</button>

<div class="sidebar" id="sidebar">
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


    <script>
        var r = document.querySelector(':root');
        const max_themes = 2;
        const themes = {
            "--bg-color": ["#121212", "#fff"],
            "--bg-1dp": ["#1e1e1e", "#f2f2f2"],
            "--bg-2dp": ["#232323", "#ededed"],
            "--bg-3dp": ["rgba(255, 255, 255, 0.08)", "rgba(0, 0, 0, 0.08)"],
            "--bg-4dp": ["rgba(255, 255, 255, 0.09)", "rgba(0, 0, 0, 0.09)"],

            "--main-text-color": ["#fff", "#000"],
            "--secondary-text-color": ["#aaa", "#333"],

            "--accent-color": ["#5b8c80", "#5b8c80"],
            "--shadow-1dp": ["0 0 10px black", "0 0 0 2px var(--accent-color)"],
            "--shadow-2dp": ["0 0 20px black", "0 0 0 2px var(--accent-color)"]
        }

        set_theme();

        function set_theme()
        {
            for (let [key, value] of Object.entries(themes)) {
                r.style.setProperty(key, value[current_theme]);
            }
            saveTheme();
        }

        function toggle_theme()
        {
            current_theme += 1;
            current_theme = current_theme % max_themes;

            set_theme();
        }
    </script>

	<div class="button-container">
		<button onclick="toggle_theme();"><div class="button-icon"></div></button>

        <button onclick="collapse_sidebar();"><div class="button-icon"></div></button>
	</div>
</div>

<div class="site-content">
    <?php
    if ( have_posts() ) :
        ?>
        <script>
            if (!window.matchMedia("(max-width: 600px)").matches) {
                expand_sidebar();
            } else {
                collapse_sidebar();
            }
        </script>

        <div class="site-posts">

        <?php
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
        ?>
        </div>
    <?php
    else :
        ?>
        <script>expand_sidebar();</script>
        <div class="no-article">

        </div>
    <?php
    endif;
    ?>
</div><! – .site-content – >


<?php wp_footer(); ?>

</body>
</html>