<?php get_header();?>
<?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
?>
<div class="o-header--post">
    <div class="o-header__image" style="background-image: url(<?=the_post_thumbnail_url();?>);">
        <div class="o-header__info">
            <label class="o-header__title"><a href="<?=the_permalink();?>" role="link"><?=the_title();?></a></label>
            <label class="o-header__author">por <strong><a href="<?=get_author_posts_url(get_the_author_meta("ID"), get_the_author_meta("user_nicename"));?>" role="link"><?=get_the_author();?></a></strong> em <span class="is-bold"><a class="o-category--<?php $categories = get_the_category();$category = $categories[0]->cat_name;echo str_replace(" ", "", strtolower($category));?>" href="<?php $categories = get_the_category();$category = $categories[0]->term_id;echo get_category_link($category);?>" role="link" style="padding: 0 .2rem;"><?php $categories = get_the_category();$category = $categories[0]->cat_name;echo $category;?></a></span></label>
            <label class="o-header__date"><?=the_date("\\P\\o\\s\\t\\a\\d\\o \\e\\m d \\d\\e F \\d\\e Y \\á\\s H:i");?></label>
        </div>
    </div>				
</div>
<section class="l-container l-container--visualize">
    <article class="o-post o-post--visualize">
        <div class="o-post__content">
            <?=the_content();?>
        </div>
    </article>
    <div class="o-box o-box--comment">
        <fieldset class="o-actor">
            <img alt="Matheus Castiglioni" class="o-actor__picture" src="http://res.cloudinary.com/mahenrique94/image/upload/v1492868221/14570282_654888318012866_6119769737655107307_n_ismbnt.jpg">
            <div class="o-actor__profile">
                <h3 class="o-actor__name">Matheus Castiglioni</h3>
                <p>Desenvolvedor Web, apaixonado por um bom design e códigos bem escritos, atua na área de informática desde os 14 anos porém virou desenvolvedor aos 21(antes tarde do nunca kkk) onde seu primeiro contato com a programação foi durante um curso técnico de informática e digamos que foi amor a primeira vista(até então não acreditava kkk), atualmente cursa Análise e Desenvolvimento de Sistema na UNOPAR. Um amante de leitura e estudos, pois acredita que o único bem que não pode ser roubado de nós é o conhecimento.</p>
            </div>
            <ul class="o-actor__network-social o-social-networks u-clear-left">
                <li><a class="o-icon--facebook" href="https://www.facebook.com/matheus.castiglioni.5" role="link" target="_blank"><i class="icon-facebook-squared"></i></a></li>
                <li><a class="o-icon--github" href="https://github.com/mahenrique94" role="link" target="_blank"><i class="icon-github-squared"></i></a></li>
                <li><a class="o-icon--googleplus" href="https://plus.google.com/116607343343494563581" role="link" target="_blank"><i class="icon-gplus-squared"></i></a></li>
                <li><a class="o-icon--instagram" href="https://www.instagram.com/mahenrique94/" role="link" target="_blank"><i class="icon-instagram"></i></a></li>
                <li><a class="o-icon--linkedin" href="https://www.linkedin.com/in/matheus-castiglioni-7aa105114" role="link" target="_blank"><i class="icon-linkedin-squared"></i></a></li>
                <li><a class="o-icon--twitter" href="https://twitter.com/mahenrique94" role="link" target="_blank"><i class="icon-twitter-squared"></i></a></li>
            </ul>
        </fieldset>
    </div>
</section>
<?php
        }
    }
?>
<?php get_footer();?>