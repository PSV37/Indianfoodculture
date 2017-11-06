<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'admin/header.php';?>  
<!-- header-section-ends -->
<!-- content-section-starts -->

<div class="header">
	<div class="container">

	</div>

	<div class="banner wow fadeInUp animated" data-wow-delay="0.4s" id="Home" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
		<div>

			<div class="row">
				<div class="box">
					<div class="col-lg-12 text-center">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators hidden-xs">
								<li data-target="#carousel-example-generic" data-slide-to="0" class=""/>
								<li data-target="#carousel-example-generic" data-slide-to="1" class="active"/>
								<li data-target="#carousel-example-generic" data-slide-to="2" class=""/>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item">
									<img class="img-responsive img-full" src="img/pandipuri.jpg">
									</div>
									<div class="item active">
										<img class="img-responsive img-full" src="img/southindianfood.jpg" alt="">
										</div>

										<div class="item">
											<img class="img-responsive img-full" src="img/slid1.jpg" alt="">
											</div>
											<div class="item">
												<img class="img-responsive img-full" src="img/pizza.jpg" alt="">
												</div>
											</div>

											<!-- Controls -->
											<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
												<span class="icon-prev"/>
											</a>
											<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
												<span class="icon-next"/>
											</a>
										</div>

									</div>
								</div>
							</div>

							<script type="text/javascript">
		    $('.main-search').hide();
		    $('button').click(function () {
		        $('.main-search').show();
		        $('.main-search text').focus();
		    }
	        );
		    $('.close').click(function () {
		        $('.main-search').hide();
		    });
							</script>

						</div>
					</div>
				</div>





				<div class="content">
					<div class="main">

						<div class="contact-section-page">
							<div class="menu-bar" style="background-color: #5BBD50">
								<div class="container">
									<h3 style="color: #FFFFFF">Add Recipe</h3>

								</div>
							</div>
						</div>
						<div class="container">

						   <div class="panel panel-info">
            <br>
            <br>

        
            <div class="row">
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="ContentPlaceHolder1_lblName">Name</span>
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                    <input name="ctl00$ContentPlaceHolder1$txtName" type="text" id="ContentPlaceHolder1_txtName" class="form-control" required=""></div>

            </div>  <br>
            <br>
            <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="ContentPlaceHolder1_lblIngredients">Ingredients </span>
                </div>

                <div class="col-md-2" style="width:53.666667%;">
                    <textarea name="ctl00$ContentPlaceHolder1$txtIngredients" rows="2" cols="20" id="ContentPlaceHolder1_txtIngredients" class="form-control" required=""></textarea></div>
            </div>
            <br>
            <br>
            <div class="row">
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="ContentPlaceHolder1_lblrecipe">Recipe</span>
                </div>

                <div class="col-md-2" style="width:53.666667%;">
                    <textarea name="ctl00$ContentPlaceHolder1$txtdescription" rows="2" cols="20" id="ContentPlaceHolder1_txtdescription" class="form-control" required=""></textarea></div>
            </div>
            <br>
            <br>
            
            <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="ContentPlaceHolder1_lbltype">Categorey</span>
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                    <select name="ctl00$ContentPlaceHolder1$DDLCat" id="ContentPlaceHolder1_DDLCat" class="form-control">
	<option value="0">--Select--</option>
	<option value="1">Veg</option>
	<option value="2">NonVeg</option>
	<option value="3">Dirts</option>

</select>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="ContentPlaceHolder1_lblstate">States</span>
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                    <select name="ctl00$ContentPlaceHolder1$DDLState" id="ContentPlaceHolder1_DDLState" class="form-control">
	<option value="0">--Select--</option>
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
	<option value="13">Jharkhand</option>
	<option value="14">Kerla</option>
	<option value="15">Madhya Pradesh</option>
	<option value="16">Manipur</option>
	<option value="17">Meghalay</option>
	<option value="18">Mizoram</option>
	<option value="19">Nagaland</option>
	<option value="20">Orissa</option>
	<option value="21">Punjab</option>
	<option value="22">Rajastan</option>
	<option value="23">Sikkim</option>
	<option value="24">Tripura</option>
	<option value="25">Telangana</option>
	<option value="26">Uttar Pradesh</option>
	<option value="27">Uttarakhand</option>
	<option value="28">West Bengal</option>
	<option value="29">Tamil Nadu</option>
	<option value="30">Chandigarh</option>
	<option value="31">Kashmir</option>
	<option value="32">Pondicherry</option>

</select>
                </div>
            </div>
             <br>
           
            <br>
              <div class="row">
              <div class="col-md-1"></div>
                
                <div class="col-md-1">
                     <span id="ContentPlaceHolder1_Label">Select Image </span>
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                   <input type="image" name="ctl00$ContentPlaceHolder1$Imgshow" id="ContentPlaceHolder1_Imgshow" style="width:100%;"><br><br>
                     <input type="file" name="ctl00$ContentPlaceHolder1$FileUploadImg" id="ContentPlaceHolder1_FileUploadImg"><br>
                     <input type="submit" name="ctl00$ContentPlaceHolder1$BttnPreview" value="Upload" id="ContentPlaceHolder1_BttnPreview">
                   
                </div>
            </div>
            <br>
            
            <br>
          
       
            <div class="row">
               <div class="col-md-1"></div>
                 
              <div class="col-md-1"></div> <div class="col-md-1"></div>
                <div class="col-md-2">
                    <input type="submit" name="ctl00$ContentPlaceHolder1$BtnSave" value="Save" id="ContentPlaceHolder1_BtnSave" class="btn btn-block btn-success">

                </div>
                <div class="col-md-2">
                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnCancel" value="Reset" id="ContentPlaceHolder1_btnCancel" class="btn btn-block btn-success">
                </div>
            </div>
            
          
        <br>
            </div>



																														</div>
																													</div>


</div>																													<?php include 'admin/footer.php';?>  