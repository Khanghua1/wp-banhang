<?php get_header() ?>
		</div>
		<!-- end lh-header -->
		<div class="module-product-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url'); ?>">Trang chủ</a>
					<span class="dot">/</span>
					<a href="<?php bloginfo('url'); ?>/product">Sản phẩm</a>
					<span class="dot">/</span>
					<span class="name"><?php the_title(); ?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-lg-9">
						<div class="block-product-slider">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6  left">
									<?php $gallery = get_field('hinh_anh')  ?>
								 	<ul id="imageGallery">
						               <?php foreach($gallery as $key => $value){ ?>

									   <li data-thumb="<?php echo $value['sizes']['thumbnail']; ?>" data-src="<?php echo $value['url']; ?>">
						                	<div class="img-height">
							                	<img  class="img-fluid lh2-img" src="<?php echo $value['url']; ?>"/>
							                	<div class="overlay">
							                		<a href="" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
							                	</div>
											</div>
						                 </li>
										 <?php }?>
					                </ul>
								</div>
								<div class="col-md-6  col-sm-6 col-xs-6 right">
									<div class="border">
										<b class="name"><?php the_title(); ?></b>
										<p><b>Giá:</b><?php if(get_field('gia_san_pham')){ ?></p>
										<?php the_field('gia_san_pham') ?>
										<?php } else { ?>
											Liên hệ
											<?php } ?>
										<p><b>Tác giả: </b><?php the_field('tac_gia'); ?></p>
										<p><b>Phiên bản:</b> <?php the_field('phien-ban'); ?></p>
									 	<button class="lh2-button lh-show-bk">Mua ngay</a>
									</div>
								</div>
							</div>
						</div>
						<!-- end block-slider -->
						<div class="block-info-product-detail">
							<p class="title-other"><span>Thông tin chi tiết</span></p>
							<div class="box-content">
								<?php the_content(); ?>
							</div>
						</div>
						<!-- block-inffo -->
						<?php echo comments_template(); ?>
						<!-- end block-product-other -->
					</div>
					<div class="col-lg-3 d-none d-lg-block">
					<?php get_sidebar() ?>
					</div>
				</div>

			</div>
		</div>
		<div class="popup-overlay">

</div>
<div class="my-popup">
	<div class="popup-content">
		<button class="lh-close-2 exit"></button>
		<p class="title">Đặt hàng</p>
		<form action="">
			<div class="info-car">
				<p class="box-title">Thông tin</p>
				<div class="row">
					<div class="col-4">
						<img class="img-fluid" src="<?php echo $value['url']; ?>" alt="">
					</div>
					<div class="col-8">
						<p> <b class="name"><?php the_title(); ?></b></p>
						<p class="price"> <b>Giá:</b><?php if(get_field('gia_san_pham')){ ?></p>
										<?php the_field('gia_san_pham') ?>
										<?php } else { ?>
											Liên hệ
											<?php } ?></p>
											<p><b>Tác giả: </b><?php the_field('tac_gia'); ?></p>
											<p><b>Phiên bản:</b> <?php the_field('phien-ban'); ?></p>
					</div>
				</div>
			</div>
			<p class="box-title">Thông tin khách hàng</p>
			<input type="" name="" placeholder="Họ và tên *">
			<div class="row">
				<div class="col-6">
					<input type="" name="" placeholder="Email *">
				</div>
				<div class="col-6">
					<input type="" name="" placeholder="Điện thoại *">
				</div>
			</div>
			<div class="text-right">
				<button class="lh2-button" type="">Đặt ngay</button>
			</div>
		</form>
	</div>
</div>
<?php endwhile; else : ?>
		<p>Không có</p>
<?php endif; ?>
<?php get_footer() ?> 