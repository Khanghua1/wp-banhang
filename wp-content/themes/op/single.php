<?php get_header() ?>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="ouSKCm6C"></script>
		<!-- Get post mặt định -->
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		</div>
		<!-- end lh-header -->
		<div class="module-news-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url'); ?>">Trang chủ</a>
					<span class="dot">/</span>
					<a href="<?php bloginfo('url'); ?>/tin-tuc">Tin tức</a>
					<span class="dot">/<?php the_title() ?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="border">
							<p class="lh2-title1"><?php the_title() ?></p>
							<div class="lh2-date"><i class="fas fa-calendar-alt"></i> Ngày đăng: <?php get_the_date('d/m/Y'); ?></div>
							<?php the_content() ?>
								<?php if ( comments_open() || get_comments_number() ) {comments_template();
							}?>
							<div class="mau2-share-7ncn">
								<span>Chia sẻ: </span>
								<a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
								<a href="" target="_blank"><i class="fab fa-skype"></i></a>
								<?php the_tags(', '); ?>
							</div>
							
						</div>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
					<?php get_sidebar() ?>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; else : ?>
						<p>Không có</p>
						<?php endif; ?>
		<?php get_footer() ?> 