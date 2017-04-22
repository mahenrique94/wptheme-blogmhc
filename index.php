<?php get_header();?>
<section class="l-container">
	<div class="l-grid-content">
		<?php 
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
        ?>
			<article class="o-post">
				<header class="o-post__header">
                    <label class="o-post__title"><a href="<?=the_permalink();?>" role="link"><?=the_title();?></a></label>
					<label class="o-post__author">por <strong><a href="<?=get_author_posts_url(get_the_author_meta("ID"), get_the_author_meta("user_nicename"));?>" role="link"><?=get_the_author();?></a></strong> em <span class="is-bold"><a class="o-category--<?php $categories = get_the_category();$category = $categories[0]->cat_name;echo str_replace(" ", "", strtolower($category));?>" href="<?php $categories = get_the_category();$category = $categories[0]->term_id;echo get_category_link($category);?>" role="link" style="padding: 0 .2rem;"><?php $categories = get_the_category();$category = $categories[0]->cat_name;echo $category;?></a></span></label>
					<label class="o-post__date"><?=the_date("\\P\\o\\s\\t\\a\\d\\o \\e\\m d \\d\\e F \\d\\e Y \\á\\s H:i");?></label>
				</header>
                <div class="o-post__image" style="background: url(<?=the_post_thumbnail_url();?>) no-repeat center;"></div>
				<div class="is-clean o-post__content">
					<?=the_content();?>
				</div>
				<a class="o-post__btn--keep-reading" href="<?=the_permalink();?>" role="link">Continuar lendo</a>
				<footer class="o-post__footer">
                    <?php
                        $tags = wp_get_post_tags(get_the_ID());
                        foreach($tags as $tag) :
                    ?>
                    <a class="o-post__tag" href="<?=get_tag_link($tag->term_id);?>" role="link"><?=$tag->name;?></a>
                    <?php
                        endforeach
                    ?>
				</footer>
			</article>
		<?php
                }
            }
        ?>
		<!--<div class="o-pagination">
			<ul class="o-pagination__pages">
				<li class="o-pagination__page"><a href="#" role="link">1</a>
				<li class="o-pagination__page"><a href="#" role="link">2</a>
				<li class="o-pagination__page"><a href="#" role="link">3</a>
				<li class="o-pagination__page"><a href="#" role="link">4</a>
				<li class="o-pagination__page"><a href="#" role="link">5</a>
			</ul>
		</div>-->
	</div>
	<div class="l-grid-aux">
		<?php include("sidebar.php");?>
	</div>
</section>
<?php get_footer();?>