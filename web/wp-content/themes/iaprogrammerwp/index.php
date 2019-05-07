<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iaprogrammerwp
 */
get_header();
?>
<div id="home">
	<div style="background: red;" class="div1 row  border-0">
		<img src="<?php echo bloginfo('template_url').'/img/logoLoream.png';?>" class="rounded" alt="logo Finanzas Familia">
	</div>
	<div class="div1 row mt-5 mb-5 border-dark">
		<div class="col-12 col-sm-12 col-md-4 col-lg-4">
			<ul class="list-group">
				<li class="list-group-item">Loream Ipsu</li>
				<li class="list-group-item active">Loream Ipsu</li>
				<li class="list-group-item">Loream Ipsu</li>
				<li class="list-group-item">Loream Ipsu</li>
				<li class="list-group-item">Loream Ipsu</li>
			</ul>	
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4">
			<img src="<?php echo bloginfo('template_url').'/img/Loream-ipsum-2.jpg'?>" class="mx-auto d-block">
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4">
			<ul class="list-group">
				<li class="list-group-item">Loream Ipsu</li>
				<li class="list-group-item active">Loream Ipsu</li>
				<li class="list-group-item">Loream Ipsu</li>
				<li class="list-group-item">Loream Ipsu</li>
				<li class="list-group-item">Loream Ipsu</li>
			</ul>	
		</div>
	</div>
	<div id="demo" class="div1 row carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>

	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo bloginfo('template_url').'/img/Loream-ipsum-2.jpg'?>" class="mx-auto d-block">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo bloginfo('template_url').'/img/lorem-ipsum-3.png'?>" class="mx-auto d-block">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo bloginfo('template_url').'/img/Loream-ipsum-4.jpg'?>" class="mx-auto d-block">
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>
</div>

<?php get_footer();?>
