<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<title>Yasuní</title>

<meta name="keywords" content="O Eco, Yasuni, jornalismo ambiental, amazônia, Equador, Brasil, petróleo, Yasuni ITT, Biodiversidade, áreas protegidas, parque nacional">
<meta name="description" content="((o))eco - www.oeco.org.br, site especializado em jornalismo ambiental lança o especial Yasuní, a região amazônica, no Equador, que encosta nos andes e é uma das áreas mais biodiversas do mundo.">
<meta name="author" content="((o))eco">

<meta property="og:title" content="Especial Yasuní" />
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

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25105158-1']);
  _gaq.push(['_setDomainName', 'oeco.org.br']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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
	$site_url = "yasuni.oeco.org.br/";
	$twitter_url = "http://twitter.com/share?url=" . $site_url . "&text=Leia o Especial Yasuní em " . $site_url;
	$facebook_url = "http://www.facebook.com/sharer.php?u=" . $site_url;
	?>
	<p class="legend" style="color:#FFF;margin-right: 10px;text-shadow: 0px 0px 4px rgba(0,0,0,0.4);">Compartilhe:</p>
	<a href="javascript:popUp('<?php print urlencode($facebook_url); ?>')"><img class="fb" src="img/bt-facebook.jpg" alt="facebook"/></a>
	<a href="javascript:popUp('<?php print urlencode($twitter_url); ?>')"><img class="tw" src="img/bt-twitter.gif" alt="twitter"/></a>
</div>

<div id="container">

<div class="slide" id="slide0" data-slide="0" data-stellar-background-ratio="0.2" style="background-position: 0px 0px;">

	<div class="wrapper">
		
		<h1 class="title">Yasuní</h1>

	    <article class="textbox">
		<p>O Equador guarda Yasuní, talvez a região mais biodiversa do planeta, rica também em petróleo e culturas ancestrais, na conjunção da bacia amazônica e a cordilheira dos Andes. Para preservá-la, o país e a comunidade internacional chegaram a um plano ousado, de substituir a exploração do óleo por compensação ambiental paga por um fundo multinacional. A proposta fracassou e, agora, buscam-se novas razões que convençam todos a preservar a região.</p>
		</article>

	    <p class="legend" style="text-align:right;"><i>Foto: Carlos Pozo</i></p>

	    <div class="scroll">Deslize para ler mais</div>

	    <img src="img/slide1bg.jpg" style="width:1px;height:1px;" />

	</div>

</div><!--End Slide 0-->

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#pt-slide1'),
    opts = {
        offset: '100%'
    };
 
    $('#pt-slide1').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-pt1.php', function(data) {
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

<div id="pt-slide1"></div>

</div>

</body>
</html>
