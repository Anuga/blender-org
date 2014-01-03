<?php
/*
 * Template for News Category
 */
?>

<?php get_header(); ?>

<div class="hero-unit header_static">
	    <div id="header_static">
	        <div class="backdrop">
	          <div class="container">
	              <div class="panel"><h1><?php single_cat_title(); ?></h1>
	              </div>
	          </div>
	      </div>
	    </div><!-- //carousel -->
</div><!-- //hero-unit -->
<div class="subnav">
	<div class="container level-2">
	<?php second_level_nav();?>
	</div>
	<div class="level-3">
		<div class="container">
			<?php third_level_nav();?>
		</div>
	</div>
</div>


<div id="content" role="main" class="container">
	<div class="row-fluid">
		<div class="span4 box">
			<h2>Blender.org</h2>
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) : the_post();?>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			<small class="clearfix"><?php the_time('F jS, Y'); ?></small></h3>

			<?php endwhile;
			else: ?>
			<p>No articles under this category.</p>

			<?php endif; ?>
			<hr/>
			<span class="right" style="margin-right: 10px">
				<a href="http://archive.blender.org/news-archive/index.html" title="Read past news on archive.blender.org">
					<small><i class="icon-archive"></i> News Archive</small>
				</a>
			</span>
		</div>
		<div class="span8">
			<div class="row-fluid">
				<div class="span6 box">
					<h2>Blender Network<small class="clearfix">Professionals Network</small></h2>
					<?php echo do_shortcode('[wp_rss_aggregator source="377" limit="5"]'); ?>
				</div>
				<div class="span6 box">
					<h2>Developers Blog<small class="clearfix">code.blender.org</small></h2>
					<?php echo do_shortcode('[wp_rss_aggregator source="1828" limit="5"]'); ?>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6 box">
					<h2>BlenderNation<small class="clearfix">Community News</small></h2>
					<?php echo do_shortcode('[wp_rss_aggregator source="1589" limit="5"]'); ?>
				<hr/>
				</div>
				<div class="span6 box">
					<h2>Other Community News<small class="clearfix">Stay up to date with everything Blender</small></h2>
					<ul class="rss-aggregator">
						<li class="feed-item">
							<a target="_blank" href="https://plus.google.com/+AdventuresInBlender/">
								Adventures in Blender</a>
							<div class="source-date">
								<span class="feed-source">News & Reviews</span>
							</div>
						</li>
						<li class="feed-item">
							<a target="_blank" href="http://blender.stackexchange.com/">
								Blender Stack Exchange</a>
							<div class="source-date">
								<span class="feed-source">Community powered Blender Q&A</span>
							</div>
						</li>
						<li class="feed-item">
							<a target="_blank" href="http://www.blenderartists.org/">
								BlenderArtists</a>
							<div class="source-date">
								<span class="feed-source">Where most Blender artists and coders gather</span>
							</div>
						</li>
						<li class="feed-item">
							<a target="_blank" href="http://www.blendswap.com/">
								BlendSwap</a>
							<div class="source-date">
								<span class="feed-source">Blend Files Online Repository</span>
							</div>
						</li>
						<li class="feed-item">
							<a target="_blank" href="http://www.graphicall.org/">
								GraphicAll.org</a>
							<div class="source-date">
								<span class="feed-source">Unofficial Blender builds made by the community</span>
							</div>
						</li>
					</ul>
				<hr/>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>
