<?php 
if (!defined('BASEPATH'))exit('No direct script allowed');

class  data_model extends CI_Model{
	function __construct(){
		
	}


 function insert($tbl_name,$data)
         {
		      return $this->db->insert($tbl_name,$data);		
	       }

function Show_states()
		     { 

                 $this->db->select("*"); 
                 $this->db->from('tblstate');
                     
                  $query = $this->db->get();
                  $query_result = $query->result();
                  return $query_result;
         }


function Show_category()
         { 

                 $this->db->select("*"); 
                 $this->db->from('tblcategory');
                  
                  $query = $this->db->get();
                  $query_result = $query->result();
                  return $query_result;
         }


function form_insert($data1)
          {

                 




                  return $this->db->insert('product', $data1);





          }


function image_insert($array)
         {

                 $this->db->insert('product', $array);
          }


function get_product()
          { 
                 $this->db->select("*"); 
                 $this->db->from('product');
                          $query = $this->db->get();
                  return $query->result();
          }

function getRecordWhere($select,$from,$col_name,$where,$col_name1,$where1)
          {
    
               $this->db->select($select);
               $this->db->from($from);
               $this->db->where($col_name,$where);
               $this->db->where($col_name1,$where1);
               $result = $this->db->get();
               return $result;
          }

}