<?php
/**
Template Name: Index page
 */

get_template_part("template-part/main-html/header", "none");

    /*if (have_posts()) {

    }*/
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="indexCarouselBanner" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#indexCarouselIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#indexCarouselIndicators" data-slide-to="1"></li>
                        <li data-target="#indexCarouselIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo theme_img_path;?>/banners/1.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Veggies es bonus vobis</h5>
                                <p>Proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo theme_img_path;?>/banners/2.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Gumbo beet greens corn soko endive gumbo gourd</h5>
                                <p>Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo theme_img_path;?>/banners/3.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Celery quandong swiss chard chicory earthnut pea potato</h5>
                                <p>Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#indexCarouselBanner" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#indexCarouselBanner" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5 align-items-center">
            <div class="col-md-12">
                <div class="tag-line-features">
                    <p class="text-uppercase text-center text-dark before-after-double-line">Features</p>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div id="displayFeatures-posts" class="row mt-5 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/features/5.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bacon ipsum</h5>
                        <p class="card-text">Bacon ipsum dolor amet frankfurter pork chop pork turducken biltong kielbasa. Spare ribs leberkas sausage, fatback ham hock rump ham landjaeger picanha pork belly tri-tip turkey shoulder kielbasa biltong</p>
                        <a href="" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/features/2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ham pig pancetta</h5>
                        <p class="card-text">Ham pig pancetta, tenderloin drumstick short loin leberkas beef ribs picanha capicola porchetta meatball hamburger pork. </p>
                        <a href="" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/features/6.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Drumstick picanha</h5>
                        <p class="card-text">Drumstick picanha tri-tip pastrami tail cupim. Leberkas ribeye hamburger cow turducken, alcatra drumstick spare ribs pork belly flank chicken beef.</p>
                        <a href="" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/features/1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Salami corned beef tenderloin</h5>
                        <p class="card-text">Salami corned beef tenderloin, kevin beef ribs picanha swine prosciutto sausage rump jowl shank leberkas hamburger. Burgdoggen corned beef frankfurter pig fatback buffalo. </p>
                        <a href="" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/features/3.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tongue ball tip rump</h5>
                        <p class="card-text">Tongue ball tip rump landjaeger jerky porchetta. Bresaola landjaeger chuck strip steak pork belly spare ribs. Capicola pastrami beef short ribs hamburger burgdoggen pork tail.</p>
                        <a href="" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/features/4.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Boudin prosciutto brisket</h5>
                        <p class="card-text">Boudin prosciutto brisket, tenderloin leberkas ham hock tri-tip frankfurter. Prosciutto flank pork loin, cupim bresaola fatback swine ball tip pork chop pork belly ground round filet mignon brisket capicola picanha.</p>
                        <a href="" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 item">
                <div class="card d-inline-block">
                    <img class="card-img-top img-fluid" src="<?php echo theme_img_path;?>/features/2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ham pig pancetta</h5>
                        <p class="card-text">Ham pig pancetta, tenderloin drumstick short loin leberkas beef ribs picanha capicola porchetta meatball hamburger pork. </p>
                        <a href="" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-5 border border-dark border-right-0 border-bottom-0 border-left-0">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-2 col-sm-12">
                        <p class="border border-right-0 border-top-0 border-left-0">Lorem Ipsum</p>
                        <p class="text-warning">Lorem ipsum dolor sit amet, massa justo nullam dignissim, vestibulum condimentum.</p>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <p class="border border-right-0 border-top-0 border-left-0">Lorem Ipsum</p>
                        <p class="text-warning">Lorem ipsum dolor sit amet, massa justo nullam dignissim, vestibulum condimentum.</p>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <p class="border border-right-0 border-top-0 border-left-0">Lorem Ipsum</p>
                        <p class="text-warning">Lorem ipsum dolor sit amet, massa justo nullam dignissim, vestibulum condimentum.</p>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <p class="border border-right-0 border-top-0 border-left-0">Lorem Ipsum</p>
                        <p class="text-warning">Lorem ipsum dolor sit amet, massa justo nullam dignissim, vestibulum condimentum.</p>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <p class="border border-right-0 border-top-0 border-left-0">Lorem Ipsum</p>
                        <p class="text-warning">Lorem ipsum dolor sit amet, massa justo nullam dignissim, vestibulum condimentum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part("template-part/main-html/footer", "none"); ?>