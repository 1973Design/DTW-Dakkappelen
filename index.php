<html>
<head>
    <title>DTW Timmerwerken</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DTW Timmerwerken uw specialist in het plaatsen van dakramen maar ook verbouw en nieuwbouw porjecten. Vakmanschap - Scherpe prijs">
    <meta name="author" content="">
    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text:400,500,600,700,800&display=swap" rel="stylesheet">
    <script defer src="assets/fontawesome/js/all.js"></script>
</head>
<body>
     <main>
         <div id="wrapper">
             <header>
                 <div class="top-header">
                     <div class="row d-flex justify-content-around">
                        <div class="p-2 top-button">
                        <i class="fas fa-file-invoice"></i> Offerte aanvragen
                        </div>
                        <div class="p-2 top-button">
                        <i class="fas fa-phone"></i> 06-23582650
                        </div>
                        <div class="p-2 top-button">
                        <i class="fas fa-envelope"></i> Info@dtwdakramen.nl
                        </div>
                     </div>
                 </div>
                 <div class="navigation-wrapper">
                    <div class="container">
                        <!-- start navigation -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="index.php" title="homepage dtw dakkapel"><img src="images/algemeen/logo.png" alt="logo dtwdakkapel"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Over DTWdakramen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">VELUX</a>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#p">FAKRO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Baskapel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Portfolio</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Advies
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Onderhoud</a>
                                            <a class="dropdown-item" href="#">Renovatie</a>
                                            <a class="dropdown-item" href="#">vergunning</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Prijzen</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                        
                            </div>
                        </nav>
                        <!-- END navigation -->
                    </div>
                 </div>
             </header>
             <section id="featured" class="slitslider">
               
                </section>
            </div>
        </main>   
       
        <!-- Bootstrap core JavaScript -->   
        <script src="assets/js/jquery/jquery-3.3.1.slim.min.js "></script>
        <script type="text/javascript" src="assets/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
    
        <script src="bootstrap-4/js/bootstrap.min.js "></script>
        <script src="assets/js/dtw-script.js "></script>
    </body>
</html>