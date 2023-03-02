<?php get_header() ?>
</div>
<!-- end lh-header -->
<div class="module-product">
	<div class="container">
		<div class="bread-crumb">
			<a href="<?php bloginfo('url'); ?>">Trang chủ</a>
			<span class="dot">/</span>
			<span class="name">Sản phẩm</span>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
			<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="bg">
					<div class="img-height">
						<a class="img" href="<?php the_permalink(); ?>">
							<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="">
						</a>
					</div>
					<div class="info-product">
						<a class="name" href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
						<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b>
							<?php the_field('gia_san_pham') ?>
						</p>
						<p><b><i class="fab fa-accessible-icon"></i>Tác giả: </b>
							<?php the_field('tac_gia'); ?>
						</p>
						<p><b><i class="fa fa-bolt" aria-hidden="true"></i>Phiên bản:</b>
							<?php the_field('phien-ban'); ?>
						</p>
					</div>
				</div>
			</div>
			<?php endwhile; else : ?>
			<p>Không có</p>
			<?php endif; ?>
			<!-- end item -->
		</div>
	</div>
	<div class="lh2-pagging col-12">
		<ul class="pagination">
			<li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-backward"></i></a></li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-forward"></i></a></li>
		</ul>
	</div>
</div>


<?php get_footer() ?>