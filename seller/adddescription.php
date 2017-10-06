<?php
//session_start();
include "../connect.php";

		$product_id=$_POST['product_id'];
		$product_unique_id=$_POST['product_unique_id'];
		
		//$product_name=$_POST['product_name'];
		//$category=$_POST['category'];
	
		//$subcategory=$_POST['subcategory'];
		$description=$_POST['description'];

		/*$product_type=$_POST['product_type'];
	
		$feature=$_POST['feature'];
		
		$moq=$_POST['moq'];
	    $usage1=$_POST['usage'];
	
		$place_of_origine=$_POST['place_of_origine'];
		$sample_time=$_POST['sample_time'];
		
		$material=$_POST['material'];
		//$brand_name=$_POST['brand_name'];
		
		//$logo=$_POST['logo'];
		$color=$_POST['color'];
		
		$style=$_POST['style'];
		$size=$_POST['size'];
		$packaging_details=$_POST['packaging_details'];*/
		$delivery_details=$_POST['delivery_details'];
		$make=$_POST['make'];
		$range1=$_POST['range1'];
		$parameter1=$_POST['parameter1'];
		$accuracy=$_POST['accuracy'];
		$interface=$_POST['interface'];
		$software_required=$_POST['software_required'];
		$dimesions=$_POST['dimesions'];
		$power_option=$_POST['power_option'];
		$display=$_POST['display'];
		

		
		
		
			
/*$file = $_FILES['photo1']['tmp_name'];
$file = $_FILES['photo1']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


$file_size=$_FILES["photo1"]["size"];
$file_type=$_FILES["photo1"]["type"];
           	
	if($_FILES["photo1"]["tmp_name"])
	    {
		  $tt1= $_FILES["c"]["name"];
                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
                         move_uploaded_file($_FILES["photo1"]["tmp_name"],"product_photo/".$filename1);
                
         }
*/		
		
		//$un1=str_replace(' ', '_',$product_name);
	//	$un1=trim($news_heading);
		//$product_unique_id=$un1."_".rand();
		
		

/*$query=mysql_query("Insert Into product_description(id,product_unique_id,product_name,category,subcategory,product_type,feature,model_no,moq,usage1,place_of_origine,sample_time,material,brand_name,logo,color,style,packaging_details,delivery_details,is_del)
values('','$product_unique_id','$product_name','$category','$subcategory','$product_type','$feature','$model_no','$moq','$usage1','$place_of_origine','$sample_time','$material','$brand_name','$logo','$color','$style','$packaging_details','$delivery_details','no')") or die(mysql_error());

*/
$query=mysql_query("UPDATE  product_description SET  description='$description',make='$make',parameter1='$parameter1',range1='$range1',accuracy='$accuracy',interface='$interface',software_required='$software_required',dimesions='$dimesions',power_option='$power_option',display='$display',delivery_details='$delivery_details' WHERE product_unique_id='$product_unique_id'")or die(mysql_error());

$query=mysql_query("UPDATE  product_details SET description_status='added' WHERE product_unique_id='$product_unique_id' ")or die(mysql_error());
	
	
	   
		
		echo '<script type="text/javascript">'; 
		echo 'alert("Product Description added successfully..");'; 
		echo 'window.location.href = "add_product_description.php";';
		echo '</script>';

		
?>