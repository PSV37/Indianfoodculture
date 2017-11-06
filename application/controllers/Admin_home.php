<?php
defined('BASEPATH') OR exit('No direct script access allowed');



include_once (dirname(__FILE__) . "/File_uploader.php");

class Admin_home extends File_uploader
{
  public function __construct() {

        parent::__construct();


        $this->load->model('Brandmodel');
         $this->load->model('Product_data_model');


       $this->load->helper('security');

    }

	public function index()
	{

     $this->load->view('Admin_home');

	}
    function Admin_allrecipes()
	{

     $this->load->view('Admin_recipes');
    }
   

    public function Admin_add()
      {
    
                      $States=$this->Product_data_model->fetch_state__list();
                      $Categorey=$this->Product_data_model->fetch_categorey__list();
  
                     if($this->input->post())
                         {
      
                            if(!$this->validate_product_form())
                               {
                                 $this->load->view('Admin_add',array('States'=>$States,'Categorey'=>$Categorey));


                               }
                            else
                                {
                                      if($this->Product_data_model->add_product($this->upload_product_image()) !== 0)
                                        {
                                              $css_class = "text-success";
                                              $message = "Product is added successfully";
                                         }
                                     else
                                         {
                                               $css_class = "text-danger";
                                               $message = "Prodcut is not added successfully";
                                          }
                                               $this->load->view('Admin_add', array('css_class' => $css_class, 'States' => $States, 'message' => $message , 'Categorey'=>$Categorey));

                                            
                      

                                }
                            }
                       else
                           {


                            $this->load->view('Admin_add', array('States' => $States, 'Categorey'=>$Categorey));
                          
                            }
   }

 function validate_product_form()
  {
                $this->load->library('form_validation');
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
                $this->form_validation->set_rules('Name_product', 'ProductName', 'trim|required');
                $this->form_validation->set_rules('Product_Ingredients ', 'Product_Ingredients', '');
                $this->form_validation->set_rules('Product_Recipe', 'Product_Recipe', 'required');
                $this->form_validation->set_rules('Product_Categorey', 'Product_Categorey', 'required'); 
                $this->form_validation->set_rules('Product_States', 'Product_States', 'required');
                   //$this->form_validation->set_rules('Product_image', 'Product_image ', 'required');  
                  return $this->form_validation->run();
 }



function upload_product_image()
  {
    $file = "product_image";
    if(empty($_FILES[$file]['name']))
    {
      return NULL;
    }
    else
    {
      return $this->upload_file("pro",$file);
    }
  }



       function  Admin_update()
	{




             
                           $States=$this->Product_data_model->fetch_state__list();
                           $Categorey=$this->Product_data_model->fetch_categorey__list();
                           $Recipes=$this->Product_data_model->fetch_recipe__list();
  

                       if($this->input->post())
                         {
      
                            if(!$this->validate_update_form())
                               {
                                 $this->load->view('Admin_update',array('States'=>$States,'Categorey'=>$Categorey,'Recipes'=>$Recipes));


                               }
                            else
                                {
                                      if($this->Product_data_model->update_product($this->upload_product_image()) !== 0)
                                        {
                                              $css_class = "text-success";
                                              $message = "Product Updated successfully";
                                         }
                                     else
                                         {
                                               $css_class = "text-danger";
                                               $message = "Prodcut is not Updated successfully";
                                          }
                                               $this->load->view('Admin_update', array('css_class' => $css_class, 'States' => $States, 'message' => $message , 'Categorey'=>$Categorey, 'Recipes'=>$Recipes));

                                            
                      

                                }
                            }
                       else
                           {


                              $this->load->view('Admin_update',array('States'=>$States,'Categorey'=>$Categorey,'Recipes'=>$Recipes));
                          
                            }


       




}  


 function validate_update_form()
  {
                $this->load->library('form_validation');
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
                $this->form_validation->set_rules('Recipe_name', 'Recipe_name', 'trim|required');
                $this->form_validation->set_rules('Product_Ingredients ', 'Product_Ingredients', '');
                   //$this->form_validation->set_rules('Product_image', 'Product_image ', 'required');  
                  return $this->form_validation->run();
 }







    function  Admin_delete()
  {


             
                       
                           $Recipes=$this->Product_data_model->fetch_recipe__list(); 

                       if($this->input->post())
                         {
      
                            if(!$this->validate_delete_form())
                               {
                                 $this->load->view('Admin_delete',array('Recipes'=>$Recipes));
             

                               }
                            else
                                {    

                                       

                                       $id = $this->input->post('Recipe_name');




                                  }



                                      if($this->Product_data_model->update($id) !== 0)
                                        {
                                              $css_class = "text-success";
                                              $message = "Product Deleted successfully";
                                         }
                                     else
                                         {
                                               $css_class = "text-danger";
                                               $message = "Prodcut is not Deleted ";
                                          }
                                               $this->load->view('Admin_delete', array('css_class' => $css_class, 'message' => $message ,  'Recipes'=>$Recipes));

                                            
                      

                                }
                            
                       else
                           {


                              $this->load->view('Admin_delete',array('Recipes'=>$Recipes));
                          
                            }

}  


 function validate_delete_form()
  {
                $this->load->library('form_validation');
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
                $this->form_validation->set_rules('Recipe_name', 'Recipe_name', 'trim|required');
    
                   //$this->form_validation->set_rules('Product_image', 'Product_image ', 'required');  
                  return $this->form_validation->run();
 }























}

