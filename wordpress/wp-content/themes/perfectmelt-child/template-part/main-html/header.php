<?php
    get_template_part("template-part/main-html/main", "none");
?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark py-1 social-links-navigation">
    <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url(get_permalink(get_page_by_title('Home'))); ?>">Perfect Melt</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSocialHeaderContent" aria-controls="navbarSocialHeaderContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSocialHeaderContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Sign Up' ) ) ); ?>">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Login' ) ) ); ?>">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 py-0 rounded" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>

<?php
    global $wp;
    $current_url = home_url( add_query_arg( array(), $wp->request ) ) . "/";

    /*$signup_url = esc_url( get_permalink( get_page_by_title( 'Sign Up' ) ) );
    $login_url = esc_url( get_permalink( get_page_by_title( 'Login' ) ) );*/

    $signup_url = get_home_url(). "/sign-up/";
    $login_url = get_home_url(). "/login/";

    if($current_url != $signup_url && $current_url != $login_url) {
        ?>

        <div class="parallax header-section-2" id="headerSection2">
            <div class="logo mt-5">
                <p class="header-logo-text text-center h2 text-uppercase">
                    <?php /*bloginfo("title");*/ echo "Perfect Melt" ?>
                </p>
            </div>
            <div class="tag-line">
                <p class="text-center text-black-50 font-italic before-after-double-line">
                    <?php /*bloginfo("title");*/ echo "a food blog" ?>
                </p>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-header-footer border border-dark border-right-0 border-left-0 z-index-20 primary-header-navigation" id="primaryHeaderNavigation">
            <div class="container">
                <a class="navbar-brand"></a>
                <button class="navbar-toggler border border-dark" type="button" data-toggle="collapse" data-target="#navbarPrimaryHeaderContent" aria-controls="navbarPrimaryHeaderContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarPrimaryHeaderContent">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item home-menu-nav">
                            <a class="nav-link text-dark" href="<?php echo esc_url(get_permalink(get_page_by_title('Home'))); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo esc_url(get_permalink(get_page_by_title('Desserts'))); ?>">Desserts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo esc_url(get_permalink(get_page_by_title('Rice Meals'))); ?>">Rice Meals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo esc_url(get_permalink(get_page_by_title('Blog'))); ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo esc_url(get_permalink(get_page_by_title('About Us'))); ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo esc_url(get_permalink(get_page_by_title('Contact Us'))); ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
    }
?>

<div class="wrapper-container my-5 pb-5">