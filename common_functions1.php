<?php
include 'connect.php';
function css_links()
{
?>

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="description description description description description description description description description">
    <meta name="keywords" content="keyword1, keyword2, keyword3, keyword4, keyword5, keyword6, keyword7">
    <title>Mehar Farm</title>

    <!-- Style - Libs -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/font.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/revolution-slider.css">
    <link rel="stylesheet" href="stylesheets/jquery.fancybox.css" type="text/css">
    <link href="stylesheets/menu-vertical.css" rel="stylesheet" type="text/css" />
    <script src="js/menu-vertical.js" type="text/javascript"></script>

    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/global.css">
	
<?php } ?>

<?php function header1() { ?>

 <div class="header-top hidden-xs">
            <div class="container">
                <div class="pull-left hidden-xs hidden-sm">
                    <ul class="header-information">
                        <li><i class="fa fa-krw color"></i> &nbsp;Welcome to ARP Technologies.</li>
                        <li><i class="fa fa-phone color"></i> &nbsp;Call us: +919260291780</li>
                        <li><i class="fa fa-envelope color"></i> &nbsp;Email us: <a href="#">sales@arptechnologies.in</a></li>
                    </ul>
                </div>
                <div class="pull-right">
                    <ul class="header-sns-button">
                        <li><a href="#"><i class="fa fa-facebook"></i> <span>Fecabook</span></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> <span>Twitter</span></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i> <span>Linkedin</span></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i> <span>Google Plus</span></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i> <span>RSS</span></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- E: header-top -->

        <header id="header" class="header header-sticky">
            <div class="header-wrap">
                <div class="header-nav">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-lg-3">
                                <div class="header-brand">
                                    <a href="index.php">
                                        <img src="images/ARP Technologies Final Logo lower version.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-9">
                                <div class="btn-menu"></div>
                                <nav id="mainnav" class="mainnav pull-right">
                                    <ul class="menu">
                                       <!-- <li><a href="index.php">Home</a></li>

                                        <li><a href="aboutus.php">About</a></li>
                                      
                                        <li><a href="shop-1.php">Product Categories</a>
                                        </li>-->
<!--                                        <li><a href="clients.php">Clients</a></li>
-->                                        
                                       
                                        <li><a href="admin/home.php">Back</a> </li>
                                        
                                       
                                   
                                   </ul><!-- /.menu -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
 <?php } ?>
 
 <?php function footer(){?>
  <footer id="footer" class="bgi-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- footer-page -->
                        <div class="footer-page">
                            <div class="row">
                                <div class="col-sm-10 copyright">
									Copyrights <?php echo date("Y")?>&nbsp; &nbsp;<a href="http://www.highclonoidsoftec.com">@ Highclonoid Softec</a>
                                </div>
                                <div class="col-sm-2 back-top">
                                    <a href="javascript:void(0)" class="toTop ui-link-color75"><i class="fa fa-arrow-up color"></i> &nbsp;Back to Top</a>
                                </div>
                            </div>
                        </div>
                        <!-- /footer-page -->
                    </div>
                </div>
            </div>
        </footer>
<?php } ?>


<?php function js_links() { ?>
 	<script type="text/javascript" src="js/plugins.js"></script>

    <!-- js for menu -->
    <script type="text/javascript" src="js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/velocity.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <!-- slider main menu -->
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>

<?php } ?> 

<!--------------------------------------------------------------------------------------------------------------------------------------->

<?php function left_sidebar() { ?>


<div class="col-md-3 left-sidebar">
                            <aside>
                               

                                <!-- widget -->
                                <div class="widget">
                                    <h3 class="wg-title text-uppercase">Categories</h3>
                                    <ul class="list-style group-list">
                            <?php 
								 $show=mysql_query("select  DISTINCT(`category`) from categories where is_del='no'");
									
									while($rw=mysql_fetch_array($show))
									{ 
									$category1=$rw['category'];
									$category=str_replace('_', ' ',$category1);

/*								echo"<li class=second-text-color><a href=shop-1.php>";echo "<i class=fa fa-caret-right></i>   $category"; echo"</li></a>";   */?>
<li><a href="category.php?category=<?php echo $category1 ?>" class="second-text-color"><i class="fa fa-caret-right"></i> <?php echo $category ?></a> </li>
                            
            </b></li>
                            
                            <?php 
		$show1=mysql_query("select  DISTINCT(`sub_category`) from product_category where category='".$rw['category']."' and is_del='no'");
									echo "<ul>";
									while($rw=mysql_fetch_array($show1))
									{ 
									$sub_category1=$rw['sub_category'];
									echo "<li>";
									echo "<a href=subcatego.php?sub_category=".$rw['sub_category']." class=second-text-color>"."-"." ";
									echo $sub_category=str_replace('_', ' ',$sub_category1);
									echo "</a>";
									echo "</li>";
									}
									echo "<ul>";
									?>
                            
                            
                            
                            
                            
                                 <?php } ?>      
                                    </ul>
                                </div>
                                <!-- /widget -->

                               
                            </aside>
                        </div>
<?php } ?>

<!---------------------------------------------------------------------------------------------------------------------------------------------->


<?php function right_sidebar() { ?>

<div class="col-md-3 left-sidebar">
                            <aside>
                                <!-- widget -->
                                
                                <!-- /widget -->

                                <!-- widget -->
                                <div class="widget">
                                    <h3 class="wg-title text-uppercase">Categories</h3>
                                    <ul class="list-style group-list">
    <?php 
								 $show=mysql_query("select  DISTINCT(`category`) from categories where is_del='no'");
									
									while($rw=mysql_fetch_array($show))
									{ 
									$category1=$rw['category'];
									$category=str_replace('_', ' ',$category1);

/*								echo"<li class=second-text-color><a href=shop-1.php>";echo "<i class=fa fa-caret-right></i>   $category"; echo"</li></a>";   */?>
<li><a href="category.php?category=<?php echo $category1 ?>" class="second-text-color"><i class="fa fa-caret-right"></i> <?php echo $category ?></a> </li>
                            
                            <?php 
		$show1=mysql_query("select  DISTINCT(`sub_category`) from product_category where category='".$rw['category']."' and is_del='no'");
									echo "<ul>";
									while($rw=mysql_fetch_array($show1))
									{ 
									$sub_category1=$rw['sub_category'];
									echo "<li>";

									echo "<a href=subcatego.php?sub_category=".$rw['sub_category']." class=second-text-color>"."-"." ";
									echo $sub_category=str_replace('_', ' ',$sub_category1);
									echo "</a>";
									echo "</li>";
									}
									echo "<ul>";
									?>
                            
                            
                            
                            
                            
                                 <?php } ?>      
                                                                
                                    </ul>
                                </div>
                                <!-- /widget -->

                                <!-- widget -->
                                
                                <!-- /widget -->

                                <!-- widget -->
                                
                                <!-- /widget -->
                            </aside>
                        </div>
                        
                        <?php } ?>