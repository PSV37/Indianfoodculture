<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'admin/Admin_header.php';?>  
<!-- header-section-ends -->
<!-- content-section-starts -->

<div class="header">
	<div class="container">

	</div>

	
     
 
	<div class="contact-section-page">
		<div class="menu-bar" style="background-color: #5BBD50">
		    <div class="container">
				<h3 style="color: #FFFFFF">Change Password</h3>
				
			</div>
		</div>
        </div>
   
    <br>



<div class="container">
  <center><h2>Chang Password</h2> </center><br>

  <?php echo form_error('oldpass'); ?>
<?php echo form_open('Login/Chang_pass'); ?>
    <div class="form-group col-xs-8">
      <label class="control-label col-sm-2" for="email">Enter Old Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control"  name="oldpass"  id="email" placeholder="Enter Current Password">
      </div>
      
    </div>

    <div class="form-group  
col-xs-8">
      <label class="control-label col-sm-2" for="pwd"> Enter Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control"  name="pass1" id="pwd" placeholder="Enter New password">
      </div>
          	<?php echo form_error('pass1'); ?>
    </div>
       <div class="form-group  
col-xs-8">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control"  name="pass2" id="pwd" placeholder="Confirm  password">
      </div>
      <?php echo form_error('pass2'); ?>
    </div>
   
    <div class="form-group " >
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Change</button>
      </div>
    </div>
<?php echo form_close(); ?>





</div>
<br>
<br>
<br>
<br>



















       
	<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
						<h4>Follow Us On...</h4>
						<ul>
							<li><i class="fb"></i></li>
							<li class="data"> <a href="#">  Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="#">Twitter</a></li>
						</ul>
						<ul>
							<li><i class="in"></i></li>
							<li class="data"><a href="#"> Linkedin</a></li>
						</ul>
						<ul>
							<li><i class="gp"></i></li>
							<li class="data"><a href="#">Google Plus</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
						<h4>Subscribe Newsletter</h4>
						<p>To get latest updates and food deals every week</p>
						<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<input type="submit" value="submit">
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
    </div>																	<?php include 'admin/footer.php';?>  