        </section>
    </main>
    <footer class="o-footer" role="contentinfo">
		<ul class="c-nav-blog">
			<li class="c-nav-blog__item">Categorias</li>
            <?php
                $categories = get_categories(array("hide_empty" => 0));
                foreach ($categories as $category) :
            ?>
			<li class="c-nav-blog__item"><a href="<?=get_category_link($category->term_id);?>" role="link"><?=$category->name;?></a></li>
            <?php
                endforeach
            ?>
		</ul>
		<ul class="c-nav-blog">
			<li class="c-nav-blog__item">Post's Recentes</li>
            <?php
                $recentPosts = wp_get_recent_posts(array("numberposts" => 5));
                foreach($recentPosts as $post) :
            ?>
			<li class="c-nav-blog__item"><a href="<?=get_permalink($post["ID"]);?>" role="link"><?=$post["post_title"];?></a></li>
            <?php
                endforeach
            ?>
		</ul>
		<ul class="c-nav-blog">
			<li class="c-nav-blog__item">Redes Sociais</li>
            <li class="c-nav-blog__item"><a href="https://www.facebook.com/matheus.castiglioni.5" role="link" target="_blank">Facebook</a></li>
            <li class="c-nav-blog__item"><a href="https://github.com/mahenrique94" role="link" target="_blank">Github</a></li>
            <li class="c-nav-blog__item"><a href="https://plus.google.com/116607343343494563581" role="link" target="_blank">Google Plus</a></li>
            <li class="c-nav-blog__item"><a href="https://www.instagram.com/mahenrique94/" role="link" target="_blank">Instagram</a></li>
            <li class="c-nav-blog__item"><a href="https://www.linkedin.com/in/matheus-castiglioni-7aa105114" role="link" target="_blank">Linkedin</a></li>
            <li class="c-nav-blog__item"><a href="https://twitter.com/mahenrique94" role="link" target="_blank">Twitter</a></li>
		</ul>
		<ul class="c-nav-blog">
			<li class="c-nav-blog__item">Páginas</li>
			<li class="c-nav-blog__item"><a href="http://matheuscastiglioni.com.br" role="link" target="_blank">Matheus Castiglioni</a></li>
			<li class="c-nav-blog__item"><a href="http://stilize.matheuscastiglioni.com.br" role="link" target="_blank">Stilize</a></li>
			<li class="c-nav-blog__item"><a href="http://jlib.matheuscastiglioni.com.br" role="link" target="_blank">Jlib</a></li>
			<li class="c-nav-blog__item"><a href="http://mhcws.matheuscastiglioni.com.br" role="link" target="_blank">MHCWS</a></li>
			<li class="c-nav-blog__item"><a href="http://mhc.matheuscastiglioni.com.br" role="link" target="_blank">MHC</a></li>
		</ul>
	</footer>
    <?php wp_footer();?>
</body>
</html>