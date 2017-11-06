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
				<h3 style="color: #FFFFFF">Delete Recipe</h3>
				
			</div>
		</div>
        </div>
    <div class="panel panel-info">
           
                           <?php 
                                    if(isset($message))
                                    { 
                                        echo "<div class='col-sm-12 text-center'><label class='".$css_class."'>".$message."</label></div><br>";
                                    }
                            ?>

            <br>
            <br>
                  <?php echo form_open_multipart('Admin_home/Admin_delete', "method='post' class='form-horizontal'"); ?>
             
        <div class="row">
               
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                  <label id="Label2">Name</label>

            </div>
       
            </div>
          <div class="row">
               
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                  
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                  




                               <select name="Recipe_name" id="Recipe_name" class="form-control" required="required" autofocus >
                                                        <option value="" selected="selected">Select Product Category</option>
                                                        <?php foreach($Recipes as $R){ ?>
                                                            <option value="<?php echo $R['ItemId'] ?>"><?php echo $R['ItemName'] ?></option>
                                                        <?php } ?>
                                                                              
                                                    </select> 

            </div>
       
            </div>
        <br>
          <div class="row">
               
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                  <label id="Label1">Do you want Delete ?</label>

            </div>
       
            </div>
          <div class="row">
               
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                  
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                  <table id="ContentPlaceHolder1_RadioButtonList1" style="width:23%;">
	<tbody><tr>
		<td>
		<input id="yes" type="radio" name="yes" value="True"><label for="yes">Yes</label>
		</td>
		<td><input id="no" type="radio" name="no" value="False">
		<label for="no">No</label>
		</td>
	</tr>
</tbody></table>

            </div>
       
            </div>
        <br>
        <div class="row">
               
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                 

            </div>
       
            </div>
          <div class="row">
               
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                  
                </div>
                <div class="col-md-2" style="width:53.666667%;">
              <label>Show Deleted Items <input id="ContentPlaceHolder1_ChkDelete" type="checkbox" name="ctl00$ContentPlaceHolder1$ChkDelete" onclick="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ChkDelete\',\'\')', 0)"></label>

            </div>
       
            </div>
        <br>
            <br>
            
          <div class="row">
               
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-2" style="width:53.666667%;">
                 

            </div>
       
            </div>
          <div class="row">
               
                 <div class="col-md-1"></div>
                <div class="col-md-1">
                  
                    
                </div>
                <div class="col-md-2" style="width:53.666667%;">
          
     
               <div>

</div>
              
                
            </div>
       
            </div>
        <br>
        
        
            <div class="row">
               <div class="col-md-1"></div>
              <div class="col-md-1"></div> <div class="col-md-1"></div>
                <div class="col-md-2">
                    <input type="submit" name="Delete" value="Delete" id="Delete" class="btn btn-block btn-success">

                </div>
                <div class="col-md-2">
                    <input type="submit" name="Cancel" value="Reset" id="Cancel" class="btn btn-block btn-success">
                </div><br>
            </div>
          </div>
    <br>


    <?php echo form_close();  ?>
																
																	<?php include 'admin/footer.php';?>  