<?php
/**
Template Name: Blog page
 */

get_template_part("template-part/main-html/header", "none");

/*if (have_posts()) {

}*/
?>

    <div class="container">
        <!--<div class="row mt-5 justify-content-center">
            <div class="col-md-12">
                <div class="tag-line-features">
                    <p class="text-uppercase text-center text-dark before-after-double-line"><?php /*the_title() */?></p>
                </div>
            </div>
        </div>-->

        <div class="clearfix"></div>

        <div class="row mt-5 justify-content-center">
            <div class="col-md-12 article">
                <div class="article-banner">
                    <img src="<?php echo theme_img_path;?>/blog/article-1.png" class="w-100 img-fluid" alt="Article">
                </div>
                <div class="article-content mt-3 px-5">
                    <div class="article-owner">
                        <p class="article-posted float-left">
                            <span class="font-weight-bold">Posted By:</span>
                            <span class="article-author">Unknown</span>
                        </p>
                        <p class="article-date float-right">
                            <span><?php the_modified_date() ?></span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="article-header">
                        <p class="article-name h4 font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="article-body">
                        <p class="article-textarea">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="article-textarea">No libris option qui. Vix dictas accusam abhorreant eu, ad his dicunt probatus. An modo elit nec. In fugit adipisci mel, doming virtute luptatum his ex. Tacimates disputando at vim, no qui mentitum vivendum. Nihil audire aliquip ei nam, aeque splendide intellegam ea mea, vero elit incorrupte usu at.</p>
                        <p class="article-textarea">Ei vel tacimates periculis, qui feugiat volumus id, nonumy iudicabit in qui. Eam verear legendos id, id his feugait vituperatoribus. Adhuc vivendum tincidunt in duo. Malorum probatus consectetuer at sea, eum ei rebum melius docendi, vim et alia sanctus. Cum duis munere incorrupte et.</p>
                        <p class="article-textarea">Enim mnesarchum eloquentiam eam cu, corpora atomorum expetenda est cu, sumo maluisset ne vim. Habeo atomorum voluptaria ius eu. Eos ne mandamus deseruisse adipiscing. Ea qui aeque putent. Essent dicunt no mea. Per tation accusata ne.</p>
                        <p class="article-textarea">Et aeterno admodum forensibus nec. Sea eu errem exerci labores, alii zril facete sea ei. Eligendi atomorum concludaturque cum ut, pri viris feugiat splendide te. Id alii nulla sea, nemore tritani maiorum sea eu. Nisl altera duo ad. Quem electram duo ne, sanctus eloquentiam id vel.</p>
                        <p class="article-textarea">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="article-textarea">No libris option qui. Vix dictas accusam abhorreant eu, ad his dicunt probatus. An modo elit nec. In fugit adipisci mel, doming virtute luptatum his ex. Tacimates disputando at vim, no qui mentitum vivendum. Nihil audire aliquip ei nam, aeque splendide intellegam ea mea, vero elit incorrupte usu at.</p>
                        <p class="article-textarea">Ei vel tacimates periculis, qui feugiat volumus id, nonumy iudicabit in qui. Eam verear legendos id, id his feugait vituperatoribus. Adhuc vivendum tincidunt in duo. Malorum probatus consectetuer at sea, eum ei rebum melius docendi, vim et alia sanctus. Cum duis munere incorrupte et.</p>
                        <p class="article-textarea">Enim mnesarchum eloquentiam eam cu, corpora atomorum expetenda est cu, sumo maluisset ne vim. Habeo atomorum voluptaria ius eu. Eos ne mandamus deseruisse adipiscing. Ea qui aeque putent. Essent dicunt no mea. Per tation accusata ne.</p>
                        <p class="article-textarea">Et aeterno admodum forensibus nec. Sea eu errem exerci labores, alii zril facete sea ei. Eligendi atomorum concludaturque cum ut, pri viris feugiat splendide te. Id alii nulla sea, nemore tritani maiorum sea eu. Nisl altera duo ad. Quem electram duo ne, sanctus eloquentiam id vel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part("template-part/main-html/footer", "none"); ?>