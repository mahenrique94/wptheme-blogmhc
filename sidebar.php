<aside class="o-sidebar">
	<label class="o-sidebar__title">Redes Sociais</label>
	<ul class="o-social-networks">
		<li><a class="o-icon--facebook" href="https://www.facebook.com/matheus.castiglioni.5" role="link" target="_blank"><i class="icon-facebook-squared"></i></a></li>
        <li><a class="o-icon--github" href="https://github.com/mahenrique94" role="link" target="_blank"><i class="icon-github-squared"></i></a></li>
        <li><a class="o-icon--googleplus" href="https://plus.google.com/116607343343494563581" role="link" target="_blank"><i class="icon-gplus-squared"></i></a></li>
        <li><a class="o-icon--instagram" href="https://www.instagram.com/mahenrique94/" role="link" target="_blank"><i class="icon-instagram"></i></a></li>
        <li><a class="o-icon--linkedin" href="https://www.linkedin.com/in/matheus-castiglioni-7aa105114" role="link" target="_blank"><i class="icon-linkedin-squared"></i></a></li>
        <li><a class="o-icon--twitter" href="https://twitter.com/mahenrique94" role="link" target="_blank"><i class="icon-twitter-squared"></i></a></li>
	</ul>
</aside>
<aside class="o-sidebar">
	<ul class="c-nav-blog">
		<li class="o-sidebar__title c-nav-blog__item">Post's Recentes</li>
        <?php
            $recentPosts = wp_get_recent_posts(array("numberposts" => 5));
            foreach($recentPosts as $post) :
        ?>
        <li class="c-nav-blog__item"><a href="<?=get_permalink($post["ID"]);?>" role="link"><?=$post["post_title"];?></a></li>
        <?php
            endforeach
        ?>
		
	</ul>
</aside>
<aside class="o-sidebar">
	<ul class="c-nav-blog">
		<li class="o-sidebar__title c-nav-blog__item">Categorias</li>
        <?php
            $categories = get_categories(array("hide_empty" => 0));
            foreach ($categories as $category) :
        ?>
        <li class="c-nav-blog__item"><a href="<?=get_category_link($category->term_id);?>" role="link"><?=$category->name;?></a></li>
        <?php
            endforeach
        ?>
	</ul>
</aside>
<aside class="o-sidebar">
	<label class="o-sidebar__title">Tags</label>
    <?php
        $tags = get_tags();
        foreach($tags as $tag) :
    ?>
    <a class="o-post__tag" href="<?=get_tag_link($tag->term_id);?>" role="link"><?=$tag->name;?></a>
    <?php
        endforeach
    ?>
</aside>
<aside class="o-sidebar">
	<ul class="c-nav-blog">
		<li class="c-nav-blog__item o-sidebar__title">Arquivos</li>
        <?php
            echo wp_get_archives(array(
                "format" => "html",
                "before" => "<li class=\"c-nav-blog__item js-arquive\">",
                "afer" => "</li>"
            ));
        ?>
	</ul>
</aside>