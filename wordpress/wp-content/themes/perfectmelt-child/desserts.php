<?php
/**
Template Name: Desserts page
 */

get_template_part("template-part/main-html/header", "none");

/*if (have_posts()) {

}*/
?>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-12">
                <div class="tag-line-features">
                    <p class="text-uppercase text-center text-dark before-after-double-line"><?php the_title() ?></p>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div id="displayDesserts-posts" class="row mt-5 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/4.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bacon ipsum</h5>
                        <p class="card-text">Bacon ipsum dolor amet frankfurter pork chop pork turducken biltong kielbasa. Spare ribs leberkas sausage, fatback ham hock rump ham landjaeger picanha pork belly tri-tip turkey shoulder kielbasa biltong</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/6.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ham pig pancetta</h5>
                        <p class="card-text">Ham pig pancetta, tenderloin drumstick short loin leberkas beef ribs picanha capicola porchetta meatball hamburger pork. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/5.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Drumstick picanha</h5>
                        <p class="card-text">Drumstick picanha tri-tip pastrami tail cupim. Leberkas ribeye hamburger cow turducken, alcatra drumstick spare ribs pork belly flank chicken beef.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Salami corned beef tenderloin</h5>
                        <p class="card-text">Salami corned beef tenderloin, kevin beef ribs picanha swine prosciutto sausage rump jowl shank leberkas hamburger. Burgdoggen corned beef frankfurter pig fatback buffalo. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tongue ball tip rump</h5>
                        <p class="card-text">Tongue ball tip rump landjaeger jerky porchetta. Bresaola landjaeger chuck strip steak pork belly spare ribs. Capicola pastrami beef short ribs hamburger burgdoggen pork tail.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/3.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Boudin prosciutto brisket</h5>
                        <p class="card-text">Boudin prosciutto brisket, tenderloin leberkas ham hock tri-tip frankfurter. Prosciutto flank pork loin, cupim bresaola fatback swine ball tip pork chop pork belly ground round filet mignon brisket capicola picanha.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/4.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bacon ipsum</h5>
                        <p class="card-text">Bacon ipsum dolor amet frankfurter pork chop pork turducken biltong kielbasa. Spare ribs leberkas sausage, fatback ham hock rump ham landjaeger picanha pork belly tri-tip turkey shoulder kielbasa biltong</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/6.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ham pig pancetta</h5>
                        <p class="card-text">Ham pig pancetta, tenderloin drumstick short loin leberkas beef ribs picanha capicola porchetta meatball hamburger pork. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/5.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Drumstick picanha</h5>
                        <p class="card-text">Drumstick picanha tri-tip pastrami tail cupim. Leberkas ribeye hamburger cow turducken, alcatra drumstick spare ribs pork belly flank chicken beef.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6  col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Salami corned beef tenderloin</h5>
                        <p class="card-text">Salami corned beef tenderloin, kevin beef ribs picanha swine prosciutto sausage rump jowl shank leberkas hamburger. Burgdoggen corned beef frankfurter pig fatback buffalo. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6  col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tongue ball tip rump</h5>
                        <p class="card-text">Tongue ball tip rump landjaeger jerky porchetta. Bresaola landjaeger chuck strip steak pork belly spare ribs. Capicola pastrami beef short ribs hamburger burgdoggen pork tail.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6  col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/desserts/3.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Boudin prosciutto brisket</h5>
                        <p class="card-text">Boudin prosciutto brisket, tenderloin leberkas ham hock tri-tip frankfurter. Prosciutto flank pork loin, cupim bresaola fatback swine ball tip pork chop pork belly ground round filet mignon brisket capicola picanha.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part("template-part/main-html/footer", "none"); ?>