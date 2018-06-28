<?php
/**
Template Name: Contact Us page
 */

get_template_part("template-part/main-html/header", "none");

if (have_posts()) {
    while(have_posts()) : the_post(); ?>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4 col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header text-center"><?php the_title() ?></div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            </div>

                            <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <i class="fa fa-map-marker fa-2x text-info" aria-hidden="true"></i>
                            <p class="text-dark h5">Alitagtag, Batangas, 4205</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fa fa-phone fa-2x text-info" aria-hidden="true"></i>
                            <p class="text-dark h5">(+63) 908-893-6797</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fa fa-envelope-o fa-2x text-info" aria-hidden="true"></i>
                            <p class="text-dark h5 word-break-all"> gutierrezjeralds@yahoo.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="push-100"></div>
    <?php endwhile;
}
?>

<?php get_template_part("template-part/main-html/footer", "none"); ?>