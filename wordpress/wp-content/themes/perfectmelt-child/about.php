<?php
/**
Template Name: About Us page
 */

get_template_part("template-part/main-html/header", "none");

    if (have_posts()) {
        while(have_posts()) : the_post(); ?>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-12">
                        <div class="tag-line-features">
                            <p class="text-uppercase text-center text-dark before-after-double-line"><?php the_title() ?></p>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row mt-5 justify-content-center">
                    <div class="col-md-12">
                        <div class="row-content">
                            <!--<p class="text-dark"><?php /*the_content() */?></p>-->

                            <img class="alignright float-right img-fluid size-medium wp-image-35" src="<?php echo upload_path;?>/2018/06/logo-300x219.jpg" alt="" width="300" height="219" />

                            <p><strong class="h5 font-weight-bold">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ei ludus ornatus ius. Eam eu aliquid delenit facilis, te nam etiam detraxit expetendis. Eos case expetenda in, eos eu saepe iisque sanctus. Et cum atqui tation, viris legendos ne est. Eam mutat senserit molestiae id, labore meliore ocurreret vim at, nam eripuit ancillae ex. No nostro vocibus eos.</p>

                            <img class="alignleft float-left img-fluid size-medium wp-image-39" src="<?php echo upload_path;?>/2018/06/loremipsum-300x209.jpg" alt="" width="300" height="209" />

                            <p>Vel vide veri ridens te. Suas placerat temporibus ius at. Everti constituam eu vim, an regione vocibus nam. Mei an everti efficiantur, brute praesent usu ei, vis eu veritus fuisset molestie. Usu rebum bonorum corpora in. Autem accumsan et nam, utinam similique assueverit per ex, viris alienum vim ex.</p>

                            <p>Ea antiopam molestiae expetendis vis, an eos brute urbanitas, eu officiis efficiantur ius. Eos ei sanctus constituam, cu eum agam oratio impetus. Et homero graece temporibus sea. His euismod habemus sadipscing et, vide ferri id eam. Ea ius mutat fabulas nominavi. No conceptam definiebas vis, ei nusquam inciderint delicatissimi eum, eu velit veniam omittam mea. Ea qui deleniti nominati.</p>

                            <p>Ea est paulo legimus argumentum, oportere interpretaris vis eu, ne mentitum tincidunt delicatissimi cum. Consul mollis ei pri. Placerat fabellas sit ne, an munere fabulas invidunt has. Pro ne errem dictas, paulo dolorem id vis. Ius ea mollis recteque, cum copiosae pertinax torquatos in. Ea est paulo legimus argumentum, oportere interpretaris vis eu, ne mentitum tincidunt delicatissimi cum. Consul mollis ei pri. Placerat fabellas sit ne, an munere fabulas invidunt has. Pro ne errem dictas, paulo dolorem id vis. Ius ea mollis recteque, cum copiosae pertinax torquatos in.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
    } else {

        echo "do";
    }
?>

<?php get_template_part("template-part/main-html/footer", "none"); ?>