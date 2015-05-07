<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Make Ready</title>

    <!-- CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
		 <!-- Google map -->
		 <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var makepos = new google.maps.LatLng(55.487784, 8.446826);
				var mapOptions = {
          center: makepos,
          zoom: 16,
					disableDefaultUI: true,
					styles:
					
[{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}]
					
					,scrollwheel: false,
    			navigationControl: false,
    			mapTypeControl: false,
    			scaleControl: false,
					draggable: false,
					mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
				
				var iconBase = 'images/';
				var marker = new google.maps.Marker({
						position: makepos,
						map: map,
						title: 'Her bor vi !',
						icon: iconBase + 'mapmarker.png'
				});
			}
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
		
  </head>
  <body>
    
    <nav>
	    <div class="nav-logo">
		    <img src="images/M-logo.svg">
	    </div>
	    <div class="nav-topics">
		    <ul>
			    <li><a href="#">Forside</a></li>
			    <li><a href="#">Cases</a></li>
			    <li><a href="#">Blog</a></li>
			    <li><a href="#">Om Os</a></li>
			    <li><a href="#">Kontakt</a></li>
		    </ul>
	    </div>
    </nav>
    
    <header id="map">
			
    </header>


    
    <!--- Ikon Section -->
		<!--- Ribbon --->    
    <div class="container-fluid">
			<div class="ribbon">
				<div class="topshade"></div>
	       	<div class="ribcontent">
							<div class="row rowribbon konrib">
								<ul>
									<li class="kon_ikon">
										<img class="ikon" src="images/kontaktikon.svg">
										<div class="yd_kon"></div>
									</li>
									<li class="yd_kon_txt">
										<hr/>
										<h2>Skal vi arbejde sammen ?</h2>
										<hr/>
										<p>
											<b>Har du noget vi kan hjælpe med? Så giv os et ring eller skriv en mail!</b>
											<br/><br/>
											Vi kommer gerne forbi din butik / virksomhed og kigger nærmere på 
											hvordan vi bedst kan 
										</p>
									</li>
								</ul>
							</div>
						</div>
				<div class="bottomshade"></div>
	    </div>  
    </div>
		<!--- End Ribbon --->
    <!--- Ikon Section End -->
		<div class="container-fluid">
			<div class="confill">
				<div class="kontaktform">
						
						<div class="buttfill">
							<h2>Ring til os på: <a href="tel:13371337" class="btn btn-phone" title="Ring til os !">
									+45 13 37 13 37
							</a>
							</h2>
						</div>
					
					
					
<a href="kontakt.html#kontaktankor" type="button" class="btn btn-default"><h1>Kontakt os!</h1></a>
					
					
					
						<!-- kontakt form -->
						<h2>... Eller skriv os en mail !</h2>
						<form action="mail.php#Anchor" method="POST">
							<input class="input" type="text" name="name" placeholder="*NAVN">
							<div class="derp"></div>
							<input class="input righties" type="text" name="firm" placeholder="FIRMANAVN">
							<br/>
							<input class="input" type="text" name="email" placeholder="*EMAIL">
							<div class="derp"></div>
							<input class="input righties" type="phone" name="phone" placeholder="TELEFON">
							<br/>
							<input class="fullinput" type="text" name="website" placeholder="DIN HJEMMESIDE">
							<br/>
							<textarea name="message" class="fullinput" placeholder="*BESKED // Hvad går dit projekt ud på?" rows="6" cols="25"></textarea><br />
							<p>Felter med "*" skal udfyldes</p>
							<div class="buttfill">
								<input  class="btn btn-default" type="submit" value="Kontakt os !" name="submit">
							</div>
							<p>Hvis du ikker ønsker at udfylde en form kan du bare send en mail til:</p>
							<a href="mailto:mail@makeready.dk">mail@makeready.dk</a>
						</form>
					
					</div>
				</div>
			</div>
		
		<div class="container-fluid">
			<div class="row">
				<footer>
					<h2>
						Tak for besøget !
					</h2>
					<p>Make Ready | 2015 </p>
				</footer>
			</div>
		</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascripts/bootstrap.min.js"></script>
  </body>
</html>