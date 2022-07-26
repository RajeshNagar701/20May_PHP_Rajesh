<?php
include_once('../web/model.php');

class control extends model
{
	function __construct()
	{
		
		session_start();
		model::__construct();
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				$pass=md5($password);
				
				$where=array("username"=>$username,"password"=>$pass);
				$run=$this->select_where('admin',$where);
				
				$res=$run->num_rows; // check cond by rows
				if($res==1) // 1 means true
				{
					$_SESSION['admin']=$username;
					
					echo "<script> 
						alert('Login Success') 
						window.location='dashboard';
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
			
			include_once('index.php');
			break;
			
			case '/admin_logout':
			unset($_SESSION['admin']);
			echo "<script> 
				alert('Logout Success'); 
				window.location='index';
				</script>";
			
			break;
			
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			case '/add_emp':
			include_once('add_emp.php');
			break;
			case '/404':
			include_once('404.php');
			break;
			case '/profile':
			include_once('profile.php');
			break;
			
			case '/manage_user':
			$customer_arr=$this->selectall('customer');
			include_once('manage_user.php');
			break;
			
			case '/manage_feedback':
			$feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			case '/manage_emp':
			$employee_arr=$this->selectall('employee');
			include_once('manage_emp.php');
			break;
			
			case '/manage_contact':
			$contact_arr=$this->selectall('contact');
			include_once('manage_contact.php');
			break;
			
			
			case '/delete':
			if(isset($_REQUEST['del_contact_id']))
			{
				$contact_id=$_REQUEST['del_contact_id'];
				$where=array("contact_id"=>$contact_id);
				$res=$this->delete_where('contact',$where);
				if($res) // 1 means true
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_contact';
						</script>";
				}
			}
			
			if(isset($_REQUEST['del_cust_id']))
			{
				$cust_id=$_REQUEST['del_cust_id'];
				$where=array("cust_id"=>$cust_id);
				
				// img delete
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$file=$fetch->file;
				
				$res=$this->delete_where('customer',$where);
				if($res) // 1 means true
				{
					unlink('../web/upload/customer/'.$file);
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_user';
						</script>";
				}
			}
			
			break;
			
			
			case '/status':
			
			if(isset($_REQUEST['status_cust_id']))
			{
				$cust_id=$_REQUEST['status_cust_id'];
				$where=array("cust_id"=>$cust_id);
				
				// status get
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('customer',$arr,$where);
					if($res) // 1 means true
					{
						echo "<script> 
							alert('Unblock Success') 
							window.location='manage_user';
							</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update('customer',$arr,$where);
					if($res) // 1 means true
					{
						unset($_SESSION['email']);
						echo "<script> 
							alert('Block Success') 
							window.location='manage_user';
							</script>";
					}
				}
			}
			
			break;
			
			default:
			include_once('404.php');
			break;
			
			
		}
		
	}
}
$obj=new control;


?>