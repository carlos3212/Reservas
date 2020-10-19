
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/blog.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!--/banner-section-->
  
  <div class="w3layouts-top-strip">
  
			
				<div class="agileits-contact-info text-right">
					<ul>
						<li><i class="fa fa-bank" aria-hidden="true"></i> UPS</li>
						<li><i class="fa fa-file-code-o" aria-hidden="true"></i>Programacion Hipermedial
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<div id="demo-1" data-zs-src='["images/4.jpg", "images/2.jpg", "images/1.jpg","images/3.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<?php  include_once 'logo/pagination/index.php';  ?>
										<h3>
										<a  href="index.php"> Renta</p></a>
										 
										</h3>
										
									</div>
									<!-- navbar-header -->
									
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
				 <ul class="nav navbar-nav">
				 
											<li class="active"><a href="index.php">Home</a></li>
											<li><a href="empresa.php">Quienes Somos</a></li>
												<li><a href="about.php">Anuncios</a></li>
												<li><a href="promociones.php">Promociones</a></li>
												<li><a href="contact.php">Contact</a></li>
												<li><a href="blog.php">Blog</a></li>
												
												
												
											
										</ul>


									</div>
									
								<div id="ctn-icon-search">
                              <i class="fas fa-search" id="icon-search"></i>
                                </div>

									</div>
									<div class="clearfix"> </div>
									
                                    

								</nav>
                               
								<div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>
	<div class="top-srip-agileinfo">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="login/index.php"><i class="fa fa-user-secret"></i></a>
					<a class="twitter" href="login/admin/insertblog.php"><i class="fa fa-tasks"></i></a>
					
					
				</div>
    <ul id="box-search">
        <li><a href="about.php"><i class="fas fa-search"></i>anuncios</a></li>
        <li><a href="empresa.php"><i class="fas fa-search"></i>quienes somos</a></li>
        <li><a href="promociones.php"><i class="fas fa-search"></i>promociones</a></li>
        <li><a href="blog.php"><i class="fas fa-search"></i>blog</a></li>
        <li><a href="about.php"><i class="fas fa-search"></i>casa</a></li>
        <li><a href="contact.php"><i class="fas fa-search"></i>contactanos</a></li>
        <li><a href="contact.php"><i class="fas fa-search"></i>llamar</a></li>
        <li><a href="promociones.php"><i class="fas fa-search"></i>promo</a></li>
		<li><a href="empresa.php"><i class="fas fa-search"></i>informacion</a></li>
    </ul>

    <div id="cover-ctn-search"></div>   
        
       
				
   			<script>document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);

//Declarando variables
bars_search =       document.getElementById("ctn-bars-search");
cover_ctn_search =  document.getElementById("cover-ctn-search");
inputSearch =       document.getElementById("inputSearch");
box_search =        document.getElementById("box-search");


//Funcion para mostrar el buscador
function mostrar_buscador(){

    bars_search.style.top = "80px";
    cover_ctn_search.style.display = "block";
    inputSearch.focus();

    if (inputSearch.value === ""){
        box_search.style.display = "none";
    }

}

//Funcion para ocultar el buscador
function ocultar_buscador(){

    bars_search.style.top = "-10px";
    cover_ctn_search.style.display = "none";
    inputSearch.value = "";
    box_search.style.display = "none";

}


//Creando filtrado de busqueda

document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);

function buscador_interno(){


    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");

    //Recorriendo elementos a filtrar mediante los "li"
    for (i = 0; i < li.length; i++){

        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if(textValue.toUpperCase().indexOf(filter) > -1){

            li[i].style.display = "";
            box_search.style.display = "block";

            if (inputSearch.value === ""){
                box_search.style.display = "none";
            }

        }else{
            li[i].style.display = "none";
        }

    }



}</script>	
		