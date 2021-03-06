<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<title>El Yasuní</title>

<meta name="keywords" content="O Eco, Yasuní, periodismo ambiental, Amazonia, Ecuador, Brasil, petróleo, Yasuní ITT, biodiversidad, áreas protegidas, parque nacional">
<meta name="description" content="((o))eco - www.oeco.org.br, web especializada en periodismo ambiental lanza el especial Yasuní, la región amazónica, en Ecuador, en las laderas de los Andes y una de las áreas más biodiversas del mundo.">
<meta name="author" content="((o))Eco">

<meta property="og:title" content="El Yasuní" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://yasuni.oeco.org.br/" />
<meta property="og:image" content="http://yasuni.oeco.org.br/img/slide1bg.jpg" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Share:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- Add mousewheel plugin -->
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

<link rel="stylesheet" type="text/css" href="style.css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25105158-2', 'oeco.org.br');
  ga('send', 'pageview');

</script>

</head>

<body>

<div id="oeco" class="oeco"><a href="http://oeco.org.br" target="_blank"><img class="logo" src="img/oeco.png"></a></div>

<div id="social">
	<script type="text/javascript">
	 function popUp(URL) {
	day = new Date();
	id = day.getTime();
	eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=500,left = 710,top = 290');");
	}
	</script>
	 
	<?php
	$site_url = "yasuni.oeco.org.br";
	$twitter_url = "http://twitter.com/share?url=" . $site_url . "&text=Read the Yasuní Special at " . $site_url;
	$facebook_url = "http://www.facebook.com/sharer.php?u=" . $site_url;
	?>
	<p class="legend" style="color:#FFF;margin-right: 10px;text-shadow: 0px 0px 4px rgba(0,0,0,0.4);">Share this:</p>
	<a href="javascript:popUp('<?php print urlencode($facebook_url); ?>')"><img class="fb" src="img/bt-facebook.jpg" alt="facebook"/></a>
	<a href="javascript:popUp('<?php print urlencode($twitter_url); ?>')"><img class="tw" src="img/bt-twitter.gif" alt="twitter"/></a>
</div>

<div id="container">

<div class="slide" id="slide0" data-slide="0" data-stellar-background-ratio="0.2" style="background-position: 0px 0px;">

	<div class="wrapper">
		
		<h1 class="title">Yasuní</h1>

	    <article class="textbox">
		<p>En Ecuador está Yasuní, tal vez la región más biodiversa del planeta, rica también en petróleo y culturas ancestrales, donde se encuentran la cuenca amazónica y la cordillera de los Andes. Para preservarlo el país y la comunidad internacional llegaron a un plan audaz que buscó reemplazar la explotación del petróleo por compensación ambiental pagada por fondos de la comunidad internacional. La propuesta fracasó, y ahora se buscan nuevas razones que convenzan a todos de preservar esta región.</p>
		</article>

	    <p class="legend" style="text-align:right;"><i>Foto: Carlos Pozo</i></p>

	    <div class="scroll">Mueva hacia abajo para leer más</div>

	    <img src="img/slide1bg.jpg" style="width:1px;height:1px;" />

	</div>

</div><!--End Slide 0-->

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#es-slide1'),
    opts = {
        offset: '100%'
    };
 
    $('#es-slide1').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-es1.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);

	$(".fancybox").fancybox({
	    helpers:  {
	        title : {
	            type : 'inside'
	        },
	        overlay : {
	            showEarly : false
	        }
	    }
	});
});
</script>

<div id="es-slide1"></div>

</div>

</body>
</html>
