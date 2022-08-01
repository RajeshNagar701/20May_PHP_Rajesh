<?php
include_once('../web/model.php');

class control extends model
{
	function __construct()
	{
		model::__construct();
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
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
			
			default:
			include_once('404.php');
			break;
			
			
		}
		
	}
}
$obj=new control;


?>