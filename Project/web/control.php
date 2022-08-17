<?php

include_once('model.php');  // step 1 load model

class control extends model  // step 2 extends model class
{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3 call model __construct
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			case '/cars':
			include_once('cars.php');
			break;
			
			case '/find':
			include_once('find.php');
			break;
			case '/view_car':
			include_once('view_car.php');
			break;
			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$pass=md5($password);
				$gender=$_REQUEST['gender'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);
				
				$file=$_FILES['file']['name'];  // get only input type="file"
				$path='upload/customer/'.$file;
				$dup_file=$_FILES['file']['tmp_name'];// duplicate file get	
				move_uploaded_file($dup_file,$path);
				
				
				$arr=array("name"=>$name,"email"=>$email,"password"=>$pass,"gender"=>$gender,"lag"=>$lag,"file"=>$file);
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					echo "<script> alert('Register Success') </script>";				
				}
				else
				{
					echo "Not success";
				}
				
				
			}
			include_once('signup.php');
			break;
			
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$message=$_REQUEST['message'];
				
				$arr=array("name"=>$name,"email"=>$email,"message"=>$message);
				
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "<script> alert('Inquiry Success') </script>";				
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('contact.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$pass=md5($password);
				
				$where=array("email"=>$email,"password"=>$pass);
				$run=$this->select_where('customer',$where);
				
				$res=$run->num_rows; // check cond by rows
				if($res==1) // 1 means true
				{
					
					$_SESSION['email']=$email;
					
					echo "<script> 
						alert('Login Success') 
						window.location='index';
						</script>";
					
				}
				else
				{
					echo "<script> 
						alert('Login Failed due wrong credebntial') 
						window.location='index';
						</script>";
				}
			}
			include_once('login.php');
			break;
			
			
			case '/myprofile':
			$where=array("email"=>$_SESSION['email']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('myprofile.php');
			break;
			
			case '/edit':
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$old_file=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$gender=$_REQUEST['gender'];
					$lag_arr=$_REQUEST['lag'];
					$lag=implode(",",$lag_arr);
					
					if($_FILES['file']['size']>0)
					{
						$file=$_FILES['file']['name'];  // get only input type="file"
						$path='upload/customer/'.$file;
						$dup_file=$_FILES['file']['tmp_name'];// duplicate file get	
						move_uploaded_file($dup_file,$path);
						
						$arr=array("name"=>$name,"email"=>$email,"gender"=>$gender,"lag"=>$lag,"file"=>$file);
						$res=$this->update('customer',$arr,$where);
						if($res)
						{
							unlink('upload/customer/'.$old_file);
							echo "<script> 
							alert('Update Success'); 
							window.location='myprofile';
							</script>";
						}
					}
					else
					{
						$arr=array("name"=>$name,"email"=>$email,"gender"=>$gender,"lag"=>$lag);
						$res=$this->update('customer',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='myprofile';
							</script>";
						}
					}
				}
				
			}
			include_once('editprofile.php');
			break;
			
			
			
			case '/logout':
			unset($_SESSION['email']);
			echo "<script> 
				alert('Logout Success'); 
				window.location='index';
				</script>";
			
			break;
			
			
			default:
			echo "Page Not Found";
			break;
			
			
		}
		
	}
}
$obj=new control;


?>