<?php
include_once 'common.php';
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta name="lablee" http-equiv="X-UA-Compatible" content="IE=edge"  />
	<title><?php echo $lang['PAGE_TITLE']; ?></title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css"  />
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script> <!--Menus-->
	<script type="text/javascript" src="js/jquery.cycle.js"></script> <!-- Slideshow-->
	

	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--biblioteca de ícones*/-->
	
	
	
	</head>
   
             
		
    <body>
    <!--COMEÇA O SITE-->
	
	
    <div id="geral" >
        
		<div align="right" style="margin-bottom:0.5px" id="languages">
	<a href="index.php?lang=br"> <img width="50px"  src="images/brasil.png" alt="Brasil"/></a>
	<a href="index.php?lang=es" style="margin-left:5px; margin-right:5px"><img height="33px" width="50px"  src="images/spain.png" alt="Espanol"/></a> 	<a href="index.php?lang=en" ><img height="33px" width="50px"  src="images/united-kingdom.png" alt="United Kingdom"/></a>
		
		</div>
	   	   
       <!--TOPO-->
        <div id="topo">
		    <a href="#"><?php echo $lang['BANNER']; ?></a>
	    </div>
		
		
		
					   
		
		 <!--NAVEGAÇÃO-->
        <div id="nav"  >
            <ul id="menu">
                <li ><a href="<?php echo $lang['INICIAL']; ?>"> <i class="fa fa-fw fa-home fa-2x"></i> <?php echo $lang['MENU_HOME']; ?>  </a></li>
				<li ><a href="<?php echo $lang['APRESE']; ?>"><i class="fa fa-fw fa-television fa-2x"></i><?php echo $lang['APRES']; ?></a></li>
				<li ><a href="<?php echo $lang['PESQUI']; ?>"> <i class="fa fa-fw fa-users fa-2x"></i> <?php echo $lang['PESQ']; ?></a></li>
				<li ><a href="<?php echo $lang['PROJET']; ?>"> <i class="fa fa-fw fa-file-text-o fa-2x"></i> <?php echo $lang['PROJ']; ?></a></li>
				
              	<li id="cont"  ><a href="<?php echo $lang['CONTATO']; ?>"> <i class="fa fa-fw fa-envelope-o fa-2x"></i> <?php echo $lang['CONT']; ?></a></li>
 
 				
				
				
						
				</li>
				
				
		</ul>
		<!--ADICIONAR UMA FIGURA LINK ABAIXO DO MENU-->
		 <a style="position:relative"  href="http://www.filezao.com.br/" target="_blank" >
		 <!-- <img width="180px" height="90px"  src="http://www2.td.utfpr.edu.br/seemi/images/filezao.jpg" alt="filezao" /> -->
		  </a>
			    
		 		 
	</div>
	
		
        <!--SLIDESHOW-->
      <div id="slideshow">
			<div id="slide1">
			    <img src="images/1.png" width="196" height="184" alt="Slide1"/>
			    <img src="images/2.png" width="196" height="184" alt="Slide2"/> 
				<img src="images/3.png" width="196" height="184" alt="Slide3"/> 
				<img src="images/4.png" width="196" height="184" alt="Slide4"/>		
			</div>	
			<div id="slide2">
				<img src="images/5.png" width="196" height="184" alt="Slide5"/> 
				<img src="images/6.png" width="196" height="184" alt="Slide6"/> 
				<img src="images/7.png" width="196" height="184" alt="Slide7"/> 
				<img src="images/8.png" width="196" height="184" alt="Slide8"/>		</div>		
			<div id="slide3">
				<img src="images/9.png" width="196" height="184" alt="Slide9"/> 
				<img src="images/10.png" width="196" height="184" alt="Slide10"/> 
				<img src="images/11.png" width="196" height="184" alt="Slide11"/> 
				<img src="images/12.png" width="196" height="184" alt="Slide12"/>			</div>
				
				
	  </div>
	   
	  
        <div id="conteudo" > 
		
		<!--CONTEUDO-->
		
				
		<?php 
		
	
    if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
        include_once('arquivos/inicialenglish.php');
    }
    else if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'es') {
        include_once('arquivos/inicialespanol.php');
    }
    else {
        $_SESSION['lang'] = 'br';
        include_once('arquivos/inicial.php');
    };
		
		 ?>
		
		 
		
		
				
		<img src="images/2-0.gif" id="carregando" alt="Imagem-Carregando" /> <!--ADIÇÃO GIF ANIMADO-->
      </div>
        
		<!--RODAPE-->
		
        <div id="rodape">
             <address>
			    <?php echo $lang['RODAPE']; ?>
			 </address>
			 
      </div>
    </div>

    </body>
    </html>
