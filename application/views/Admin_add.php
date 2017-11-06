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
							
                            		<h3 style="color: #FFFFFF">Add Recipe</h3>

								
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
                  <?php echo form_open_multipart('Admin_home/Admin_add', "method='post' class='form-horizontal'"); ?>
        
            <div class="row">
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="Name">Name</span>
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                    <input name="Name_product" type="text" id="Name_product" class="form-control" required=""></div>
                    <?php echo form_error('Name_product'); ?> 

            </div> 

             <br>
            <br>

               <div class="row">
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="Product_Recipe">Recipe</span>
                </div>

                <div class="col-md-2" style="width:53.666667%;">
                    <textarea name="Product_Recipe" rows="2" cols="20" id="Product_Recipe" class="form-control" required=""></textarea></div>
                       <?php echo form_error('Product_Recipe'); ?> 
            </div>

              <br>
            <br>


           
          <div class="row">
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="Product_Ingredients">Ingredients</span>
                </div>

                <div class="col-md-2" style="width:53.666667%;">
                    <textarea name="Product_Ingredients" rows="2" cols="20" id="Product_Ingredients" class="form-control" required=""></textarea></div>
                       <?php echo form_error('Product_Ingredients'); ?> 
            </div>           
                
                   <br>
                    <br>  
            
            <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="Product_Categorey">Categorey</span>
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                   
                        <select name="Product_Categorey" id="Product_Categorey" class="form-control" required="required" autofocus >
                                                        <option value="" selected="selected">Select Product Category</option>
                                                        <?php foreach($Categorey as $c){ ?>
                                                            <option value="<?php echo $c['CatId'] ?>"><?php echo $c['Category'] ?></option>
                                                        <?php } ?>
                                                 
                                                    </select> 
                </div>
                 <?php echo form_error('Product_Categorey'); ?> 
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-1">
                    <span id="c">States</span>
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                       

                        <select name="Product_States" id="Product_States" class="form-control" required="required" autofocus >
                                                        <option value="" selected="selected">Select Product Category</option>
                                                        <?php foreach($States as $p){ ?>
                                                            <option value="<?php echo $p['StateId'] ?>"><?php echo $p['StateName'] ?></option>
                                                        <?php } ?>
                                                 
                                                    </select> 
                </div>


                <?php echo form_error('Product_States'); ?> 
            </div>
             <br>
           
            <br>
            <!--  <div class="row">
              <div class="col-md-1"></div>
                
                <div class="col-md-1">
                     <span id="product_image">Select Image </span>
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                  
                     <input type="file" name="product_image" id="product_image" required="">
                      <?php echo form_error('product_image'); ?> 
                   
                </div>
            </div>-->




                                                            <div class="form-group"> 
                                                            <label for="product_image" class="col-sm-2 control-label">Product Image</label> 
                                                            <div class="col-sm-9"> 
                                                                <input type="file" name="product_image" id="product_image" class="form-control">
                                                            </div> 
                                                            </div> 
            <br>
            
            <br>
          
       
            <div class="row">
               <div class="col-md-1"></div>
                 
              <div class="col-md-1"></div> <div class="col-md-1"></div>
                <div class="col-md-2">
                    <input type="submit" name="submit" value="Save" id="submit" class="btn btn-block btn-success"/>

                </div>
                <div class="col-md-2">
                    <input type="submit" name="Reset" value="Reset" id="Reset" class="btn btn-block btn-success"/>
                </div>
            </div>
            
          
        <br>
            </div>


    <?php echo form_close();  ?>
																														</div>
																													</div>


</div>																													<?php include 'admin/footer.php';?>  