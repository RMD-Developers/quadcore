<?php  
/*
 *  The comment param/formats
 *
	@access 		ex. public/private/protected
	@method 		ex. get/post/put/delete/
	@package		ex. CodeIgniter
	@subpackage		ex. Libraries
	@author			ex. EllisLab Dev Team
	@copyright		ex. Copyright (c) 2008 - 2014, EllisLab, Inc.
	@copyright		ex. Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
	@license		ex. http://codeigniter.com/user_guide/license.html(user guide link)
	@link			ex. http://codeigniter.com(link source)
	@since			ex. Version 1.0(Version no.)
	@param 			ex. int(data type)
	@return 		ex. string(data type)
	@var 			ex. array/string
 *
 *	The variable/method declaration or instantiation
 	public 		<-- normal format
 				--> ex. $public_var;   		public_method();
 	protected 	<-- started with _(underscore) 
 			  	--> ex. $_protected_var; 	_protected_method();
 	private 	<-- end with _(underscore)
 				-- >ex. $private_var_;		private_method_();
 *
 *	The class
 	abstract	<-- started with _(underscore)
 				--> ex. abstract _Abstract_Class{}
 	public 		<-- normal instantiation
 				--> ex class Public_Class{}
 */
?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<?php ob_start('removeWhitespace'); ?>
  <?php require 'app/common/header.php'; ?>
  <body class="skin-green sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
        <?php require 'app/common/page-header.php'; ?>
      
      <!-- Left side column. contains the logo and sidebar -->
        <?php require 'app/common/page-left-side-bar.php'; ?>

      <!-- Content Wrapper. Contains page content -->
        <?php require 'app/contents/dashboard.php'; ?>
      
      <!-- Main Footer -->
        <?php require 'app/common/page-footer.php'; ?>
      
      <!-- Control Sidebar --> 
        <?php require 'app/common/page-controller-right-side-bar.php'; ?> 
      
    </div><!-- ./wrapper -->
    
      <!-- JS, end page tags -->
        <?php require 'app/common/footer.php'; ?>
<?php ob_get_flush(); ?>