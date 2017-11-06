<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'admin/header.php';?>  
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>Network of over 5000 Restaurants</h1>
						<div class="line">
							<h2>To Recipes Online</h2>
						</div>
					</div>
					
					<div class="col-lg-12">

                            <div class="col-lg-3">
                                <select name="ddlState" onchange="javascript:setTimeout('__doPostBack(\'ddlState\',\'\')', 0)" id="ddlState" class="form-control">
	<option selected="selected" value="0">----- All -----</option>
	<option value="1">Maharashtra</option>
	<option value="2">AndhraPradesh</option>
	<option value="3">Delhi</option>
	<option value="4">Karnatka</option>
	<option value="5">ArunachalPradesh</option>
	<option value="6">Assam</option>
	<option value="7">Bihar</option>
	<option value="8">Chhattisgarth</option>
	<option value="9">Goa</option>
	<option value="10">Gujrat</option>
	<option value="11">Haryana</option>
	<option value="12">Himachal Pradesh</option>
	<option value="14">Jharkhand</option>
	<option value="15">Kerla</option>
	<option value="16">Madhya Pradesh</option>
	<option value="17">Manipur</option>
	<option value="18">Meghalay</option>
	<option value="19">Mizoram</option>
	<option value="20">Nagaland</option>
	<option value="21">Orissa</option>
	<option value="22">Punjab</option>
	<option value="23">Rajastan</option>
	<option value="24">Sikkim</option>
	<option value="25">Tripura</option>
	<option value="26">Telangana</option>
	<option value="27">Uttar Pradesh</option>
	<option value="28">Uttarakhand</option>
	<option value="29">West Bengal</option>
	<option value="30">Tamil Nadu</option>
	<option value="31">Chandigarh</option>
	<option value="33">Kashmir</option>
	<option value="34">Pondicherry</option>

</select>
                            </div>

                            <div class="col-lg-3">
                                <select name="DdlCategory" onchange="javascript:setTimeout('__doPostBack(\'DdlCategory\',\'\')', 0)" id="DdlCategory" class="form-control">
	<option selected="selected" value="0">----- All-----</option>
	<option value="1">Veg</option>
	<option value="2">NonVeg</option>
	<option value="4">Desert</option>

</select>
                            </div>

                            <div class="col-lg-3">
                                <input name="t_search" type="text" id="t_search" class="form-control" placeholder="Search here">
                            </div>

                            <div class="col-lg-3">
                                <input type="submit" name="b_search" value="Search" id="b_search" class="col-lg-12 btn btn-md btn-primary">
                            </div>

                        </div>
					
					
					
				
					<!-- start search-->
		 <div class="main-search">
	        <form action="search.html">
	           <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
	            <input type="submit" value=""/>
	        </form>
	        <div class="close"><img src="images/cross.png" /></div>
	    </div>
	   
		<script type="text/javascript">
	         $('.main-search').hide();
	        $('button').click(function (){
	            $('.main-search').show();
	            $('.main-search text').focus();
	        }
	        );
	        $('.close').click(function(){
	            $('.main-search').hide();
	        });
	    </script>
					
				</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
		<div class="ordering-section" id="Order">
			
		
			</div>
		</div>
		<div class="special-offers-section">
			<div class="container"><!-- For Google add-1-->
	
			</div>
		
			<div class="container">
				<div class="popular-restaurents" id="Popular-Restaurants">
					<div class="container">
						<div class="col-md-12 top-cuisines">
							<div class="top-cuisine-head">
								<h3>Top Cuisines</h3>
							</div>
							<div class="top-cuisine-grids">
								<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
									<a href=""><img src="<?php echo base_url();?>images/cuisine1.jpg" alt="" class="img-responsive" /> </a>
									<label>Cuisine Name</label>
					    		</div>
								<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						      		<a href=""><img src="<?php echo base_url();?>images/cuisine2.jpg" alt="" class="img-responsive" />
									<label>Cuisine Name</label>
					    		</div>
								<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						       		<a href=""><img src="<?php echo base_url();?>images/cuisine3.jpg" alt="" class="img-responsive" />
									<label>Cuisine Name</label>
					    		</div>
								<div class="top-cuisine-grid nth-grid wow bounceIn" data-wow-delay="0.4s">
						       		<a href=""><img src="<?php echo base_url();?>images/cuisine4.jpg" alt="" class="img-responsive" />
									<label>Cuisine Name</label>
					    		</div>
								<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    		<a href=""><img src="<?php echo base_url();?>images/cuisine1.jpg" alt="" class="img-responsive" /> </a>
									<label>Cuisine Name</label>
					    		</div>
								
								<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
									<a href=""><img src="<?php echo base_url();?>images/cuisine5.jpg" alt="" class="img-responsive" />
									<label>Cuisine Name</label>
					    		</div>
								<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						       		<a href=""><img src="<?php echo base_url();?>images/cuisine6.jpg" alt="" class="img-responsive" />
									<label>Cuisine Name</label>
							    </div>
								<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						       		<a href=""><img src="<?php echo base_url();?>images/cuisine7.jpg" alt="" class="img-responsive" />
									<label>Cuisine Name</label>
					    		</div>
								<div class="top-cuisine-grid nth-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
									<a href=""><img src="<?php echo base_url();?>images/cuisine8.jpg" alt="" class="img-responsive" />
									<label>Cuisine Name</label>
					    		</div>
								<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
									<a href=""><img src="<?php echo base_url();?>images/cuisine5.jpg" alt="" class="img-responsive" />
									<label>Cuisine Name</label>
					    		</div>
								
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="service-section">
			<div class="service-section-top-row">
				<div class="container">
					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
					<div class="col-md-3 service-section-top-row-grid1">
						<h3>Enjoy Exclusive Food Order any of these</h3>
					</div>
					<div class="col-md-2 service-section-top-row-grid2">
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists">Party Orders</li>
						</ul>
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists">Home Made Food</li>
						</ul>
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists"> Diet Food </li>
						</ul>
					</div>
					<div class="col-md-5 service-section-top-row-grid3">
						<img src=" <?php echo base_url();?>images/lunch.png " class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 service-section-top-row-grid4 wow swing animated" data-wow-delay= "0.4s">
						<a href="order.html"><input type="submit" value="Order Now"></a>
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="service-section-bottom-row">
				<div class="container">
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src=" <?php echo base_url();?>images/icon1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>100% Service Guarantee</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="<?php echo base_url();?>images/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Fully Secure Payment</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="<?php echo base_url();?>images/icon3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Track Your Order</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		

			<?php include 'admin/footer.php';?>  