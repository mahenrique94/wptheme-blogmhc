<nav class="c-nav-cattegory" role="navigation">
	<span class="l-blog-brand">
		<span class="l-blog is-left is-uppercase">blog</span>
		<span class="l-blog is-top">do</span>        
		<a class="c-nav-cattegory__brand" href="<?=get_site_url();?>" role="link">Matheus Castiglioni</a>
	</span>
	<ul class="c-nav-cattegory__menu" role="menubar">
        <?php
            $categories = get_categories(array("hide_empty" => 0));
            foreach ($categories as $category) :
        ?>
		<li class="c-nav-cattegory__item--first" role="menuitem"><a class="o-category--<?=str_replace(" ", "", strtolower($category->name));?>" href="<?=get_category_link($category->term_id);?>" role="link"><?=$category->name;?></a>
        <?php
            endforeach
        ?>
	</ul>
</nav>