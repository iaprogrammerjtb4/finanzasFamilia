<?php
include("config.php");
include("logica.php");
//http://preproduccionsitios2.info/mesaredonda/
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Validador de servicios</title>
        <script type="text/javascript" src="libs/jquery.min.js"></script>
        <style>
            .bloqueServ{
                padding:5px;
                width:100%;
                border:1px solid #000;
                margin-top:10px;
            }
			#menu{
				background:#CCC;
				padding:5px;
			}
			#menu a{
				font-size:15px;
				font-family:Verdana, Geneva, sans-serif;
				font-weight:bold;
				padding:3px;
				text-decoration:none;
				color:#000;
			}
			.selected{
				color:#333 !important;
				text-decoration:underline !important;
			}
        </style>
        <script>
            var BASE_URL = '<?php echo $urlBase; ?>';
            var TOKEN = 'xxx-1-xxx';
            var serviceList = <?php echo json_encode($services); ?>;
        </script>
        <script type="text/javascript" src="libs/validador_services.js"></script>
    </head>

    <body>
	<div id="menu">
    	<?php 
		if(is_array($servicesLibs))
		foreach($servicesLibs as $cl => $vl){ $sel = ''; if($vl==$_GET['service']){$sel = 'selected';} echo '<a href="index.php?service='.$vl.'" class="'.$sel.'" >'.strtoupper($vl).'</a> ';}?>
        <?php echo count($services) ?>
    </div>
        <div id="Panel">
            <script>
            generarpanel();
            </script>
        </div>

    </body>
</html>