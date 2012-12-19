<!DOCTYPE html>		
<html>
	<head>
		<title>Get in contact</title>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link type="text/css" href="css/bootstrap.css" rel="stylesheet">
		<link type="text/css" href="css/bootstrap-responsive.css" rel="stylesheet">
		<link type="text/css" href="css/style.css" rel="stylesheet">
	</head>
	
	<body class="container">
		
		<header class="row-fluid">
			<div class="span12 page-header ">							
				<h1 class="centered-text">Fer Perales	
					<small>contact</small>					
				</h1>
			</div>	
		</header>
				
		<section class="row well">
			<div class="span12">				
				<p>
					First of all, I appreciate your taking the time to visit my webpage. 	
				</p>						
				<p>
					If you want me to colaborate in your project, you can send me and email, add me to gTalk or add me to Skype to make an agreement.
					I'd love to work with you ;)							
				</p>
				<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
				<p>
<a href="skype:ferperalesm?chat"><img src="http://download.skype.com/share/skypebuttons/buttons/chat_blue_transparent_97x23.png" style="border: none;" width="97" height="23" alt="Chat with me" /></a>
				</p>
				<p>
					The easiest way to get in contact is a commet via disqus in the form below
				</p>	
				<p><div id="disqus_thread"></div></p>			
				<p>
					<a href="index.php">Go back to main page</a>
				</p>					
			</div>								
		</section>		
<?php
	$filename = new SplFileInfo(__FILE__);
	require 'php/footer.php';
?>

        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'ferperalesnet'; // required: replace example with your forum shortname
            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>						
		</body>	
</html>