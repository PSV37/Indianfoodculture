<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
 <?php include 'admin/header.php';?>    







	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Login
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			  
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>


	<?php if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>







			<?php echo form_open('Login/user_login_process'); ?>

				  <div>



     <?php
if (isset($error_message)) {
echo $error_message;
} ?>

																		<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>





					<span>User Name<label>*</label></span>
					<input type="text" name="username" id="username"> 
					  <?php echo form_error('username'); ?>
				  </div>


				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="password" id="password"> 

					  <?php echo form_error('password'); ?>
				  </div>

				

				
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" value="Login">
			  	<?php echo form_close(); ?>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>

<div class="clearfix"></div>
		
		 <?php include 'admin/footer.php';?>  