<?php
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}else{
			$id = '';
		}
		$sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id'"); 
		
		
		
	?>
<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Single Product 1</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<?php
	while($row_chitiet = mysqli_fetch_array($sql_chitiet)){ 
	?>
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/<?php echo $row_chitiet['sanpham_image'] ?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row_chitiet['sanpham_image'] ?>" data-imagezoom="true" class="img-fluid" alt="hinh anh "> </div>
								</li>
							
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row_chitiet['sanpham_name'] ?></h3>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format($row_chitiet['sanpham_giakhuyenmai']).'vnđ' ?></span>
						<del class="mx-2 font-weight-light"><?php echo number_format($row_chitiet['sanpham_gia']).'vnđ' ?></del>
						<label>Miễn phí vận chuyển </label>
						<label>
										</label>
						
					</p>
					
					<div class="product-single-w3l">
						<p><?php echo $row_chitiet['sanpham_chitiet'] ?></p><br><br>
						<p><?php echo $row_chitiet['sanpham_mota'] ?></p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="?quanly=giohang" method="post">
								<fieldset>
									<input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['sanpham_name'] ?>" />
									<input type="hidden" name="sanpham_id" value="<?php echo $row_chitiet['sanpham_id'] ?>" />
									<input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['sanpham_gia'] ?>" />
									<input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['sanpham_image'] ?>" />
									<input type="hidden" name="soluong" value="1" />			
									<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">	
									
										
								</fieldset>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- //Single Page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>Relate product</li>
				</ul>
			</div>
		</div>
	</div>
	
<!-- top Products -->
<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
							<?php
									$sql_product_sidebar = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_hot='0' ORDER BY RAND() limit 3"); 
									while($row_sanpham_sidebar = mysqli_fetch_array($sql_product_sidebar)){
									?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sanpham_sidebar['sanpham_image'] ?>" alt="hình ảnh ">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												<a href="<?php echo $row_sanpham_sidebar['sanpham_id'] ?>/<?php echo convert_name($row_sanpham_sidebar['sanpham_name'] )?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="<?php echo $row_sanpham_sidebar['sanpham_id'] ?>/<?php echo convert_name($row_sanpham_sidebar['sanpham_name'] )?>"><?php echo $row_sanpham_sidebar['sanpham_name'] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($row_sanpham_sidebar['sanpham_giakhuyenmai']).'vnđ' ?></span>
												<del><?php echo number_format($row_sanpham_sidebar['sanpham_gia']).'vnđ' ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanly=giohang" method="post">
												<fieldset>
													<input type="hidden" name="tensanpham" value="<?php echo $row_sanpham_sidebar['sanpham_name'] ?>" />
													<input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham_sidebar['sanpham_id'] ?>" />
													<input type="hidden" name="giasanpham" value="<?php echo $row_sanpham_sidebar['sanpham_gia'] ?>" />
													<input type="hidden" name="hinhanh" value="<?php echo $row_sanpham_sidebar['sanpham_image'] ?>" />
													<input type="hidden" name="soluong" value="1" />			
													<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
												</fieldset>
											</form>
											</div>
										</div>
									</div>
								</div>
								<?php
								} 
								?>
							</div>
						</div>
						<!-- //first section -->
					</div>
				</div>
	
	<!-- //top products -->
	<?php
	} 
	?>

