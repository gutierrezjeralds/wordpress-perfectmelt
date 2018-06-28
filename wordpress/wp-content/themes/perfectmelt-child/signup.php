<?php
/**
Template Name: Sign Up page
 */

get_template_part("template-part/main-html/header", "none");

if (have_posts()) {
    while(have_posts()) : the_post(); ?>
        <div class="container">
            <div class="row mt-5 pt-5 justify-content-center">
                <div class="col-md-5 col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header text-center"><?php the_title() ?></div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>

                            <button type="button" id="submit" name="submit" class="btn btn-primary pull-right"><?php the_title() ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
}
?>

<?php get_template_part("template-part/main-html/footer", "none"); ?>