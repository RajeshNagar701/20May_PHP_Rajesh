


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href={{url('admin_public/assets/css/bootstrap.css')}} rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href={{url('admin_public/assets/css/font-awesome.css')}} rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href={{url('admin_public/assets/js/morris/morris-0.4.3.min.css')}} rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href={{url('admin_public/assets/css/custom.css')}} rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

	@include('sweetalert::alert')

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard">BMC Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Hi...  &nbsp; <a href="admin_logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{url('admin_public/assets/img/find_user.png')}}" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                            
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Employee<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_employee">Add Employee</a>
                            </li>
                            <li>
                                <a href="manage_employee">Manage Employee</a>
                            </li>
                            
                        </ul>
                      </li>  
					
					
					 <li>
                        <a class="active-menu"  href="manage_customer"><i class="fa fa-user"></i> Customer</a>
                    </li>
					
                </ul>
               
            </div>
            
        </nav>

