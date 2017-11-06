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

	



				<div class="content">
					<div class="main">

						<div class="contact-section-page">
							<div class="menu-bar" style="background-color: #5BBD50">
								<div class="container">
									<h3 style="color: #FFFFFF">Update Recipe</h3>

								</div>
							</div>
						</div>
						<div class="container">

     <div class="panel panel-info">

      <?php 
                                    if(isset($message))
                                    { 
                                        echo "<div class='col-sm-12 text-center'><label class='".$css_class."'>".$message."</label></div><br>";
                                    }
                            ?>
            <br>
            <br>

              <?php echo form_open_multipart('Admin_home/Admin_update', "method='post' class='form-horizontal'"); ?>
         
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                   <label id="Label3">Name</label>
                </div>
                <div class="col-md-2" style="width: 53.666667%;">

                               


                               <select name="Recipe_name" id="Recipe_name" class="form-control" required="required" autofocus >
                                                        <option value="" selected="selected">Select Product Category</option>
                                                        <?php foreach($Recipes as $R){ ?>
                                                            <option value="<?php echo $R['ItemId'] ?>"><?php echo $R['ItemName'] ?></option>
                                                        <?php } ?>
                                                                              
                                                    </select> 
                </div>
            </div>





















            <br>
            <br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <label id="lblrecipe">Recipe</label>
                    
                </div>

                <div class="col-md-2" style="width: 53.666667%;">
                    <textarea name="Recipe_name" rows="2" cols="20" id="Recipe_name" class="form-control" required=""></textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <label id="lblIngredients">Ingredients</label>
                </div>

                <div class="col-md-2" style="width: 53.666667%;">
                    <textarea name="Product_Ingredients" rows="2" cols="20" id="Product_Ingredients" class="form-control" required=""></textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <label id="Label1">Categorey</label>
                </div>
                <div class="col-md-2" style="width: 53.666667%;">
        
                        <select name="Product_Categorey" id="Product_Categorey" class="form-control" required="required" autofocus >
                                                        <option value="" selected="selected">Select Product Category</option>
                                                        <?php foreach($Categorey as $c){ ?>
                                                            <option value="<?php echo $c['CatId'] ?>"><?php echo $c['Category'] ?></option>
                                                        <?php } ?>
                                                 
                                                    </select> 
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                   <label id="Label2">State</label> 
                </div>
                <div class="col-md-2" style="width: 53.666667%;">
                            
                        <select name="Product_States" id="Product_States" class="form-control" required="required" autofocus >
                                                        <option value="" selected="selected">Select Product Category</option>
                                                        <?php foreach($States as $p){ ?>
                                                            <option value="<?php echo $p['StateId'] ?>"><?php echo $p['StateName'] ?></option>
                                                        <?php } ?>
                                                 
                                                    </select> 
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                 <div class="col-md-2" style="width:53.666667%;">
                     <input type="image" name="ctl00$ContentPlaceHolder1$Imgshow" id="ContentPlaceHolder1_Imgshow" style="width:100%;"><br><br>
                     <input type="file" name="ctl00$ContentPlaceHolder1$FileUploadImg" id="ContentPlaceHolder1_FileUploadImg"><br>
                     <input type="submit" name="ctl00$ContentPlaceHolder1$BttnPreview" value="Upload" id="ContentPlaceHolder1_BttnPreview">
                </div>
                <br>
            </div>
            <br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <input type="submit" name="submit" value="Update" id="submit" class="btn btn-block btn-success">

                </div>
                <div class="col-md-2">
                    <input type="submit" name="Reset" value="Reset" id="Reset" class="btn btn-block btn-success">
                </div>
            </div>
        </div>

																														</div>
																													</div>


</div>																													<?php include 'admin/footer.php';?>  