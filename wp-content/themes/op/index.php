<?php get_header() ?>
	<?php get_template_part('slider') ?>

		</div>
		<?php get_template_part('intro') ?>
		<div class="block-contact">
			<div class="container">
				<p class="lh2-title1">Mua combo siêu ngon</p>
				<p class="caption">Cung cấp combo One piece 4 tỉ</p>
				<p class="bottom">Thủ tục nhanh gọn</p>
				<button class="lh3-button" type=""><span>Xem ngay</span></button>
			</div>
		</div>
		<?php get_search_form(); ?>
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Truyện</span></p>
				<div class="row">
				<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=product&collection=truyen-op'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
							<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="bg">
							<div class="img-height">
								<a class="img" href="<?php the_permalink(); ?>">
									<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="">
								</a>
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b><?php the_field('gia_san_pham') ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Tác giả: </b><?php the_field('tac_gia'); ?></p>
								<p><b><i class="fa fa-bolt" aria-hidden="true"></i>Phiên bản:</b> <?php the_field('phien-ban'); ?></p>
							</div>
						</div>
					</div>
                        <?php endwhile; wp_reset_postdata(); ?>
					
				</div>
			</div>
		</div>
		<!-- end block-product -->
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Tượng</span></p>
				<div class="row">
				<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=product&collection=tuong-op'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
							<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="bg">
							<div class="img-height">
								<a class="img" href="<?php the_permalink(); ?>">
									<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="">
								</a>
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b><?php the_field('gia_san_pham') ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Tác giả: </b><?php the_field('tac_gia'); ?></p>
								<p><b><i class="fa fa-bolt" aria-hidden="true"></i>Phiên bản:</b> <?php the_field('phien-ban'); ?></p>
							</div>
						</div>
					</div>
                        <?php endwhile; wp_reset_postdata(); ?>
					<!-- end item -->

				</div>
			</div>
		</div>
		<!-- end block-product -->
		<div class="block-product">
			<div class="container">
				<p class="lh2-title">
					<span>Áo thun</span>
				</p>
				<div class="row">
				<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=product&collection=ao-thun'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
							<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="bg">
							<div class="img-height">
								<a class="img" href="<?php the_permalink(); ?>">
									<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="">
								</a>
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b><?php the_field('gia_san_pham') ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Tác giả: </b><?php the_field('tac_gia'); ?></p>
								<p><b><i class="fa fa-bolt" aria-hidden="true"></i>Phiên bản:</b> <?php the_field('phien-ban'); ?></p>
							</div>
						</div>
					</div>
                        <?php endwhile; wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	<?php get_footer() ?> 