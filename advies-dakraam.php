<html>
<head>
    <title>DTWdakramen - Velux - Fakro - Baskapel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DTW Timmerwerken uw specialist in het plaatsen van dakramen maar ook verbouw en nieuwbouw porjecten. Vakmanschap - Scherpe prijs">
    <meta name="author" content="">
    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slitslider/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slitslider/custom.css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text:400,500,600,700,800&display=swap" rel="stylesheet">
    <script defer src="assets/fontawesome/js/all.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.79639.js"></script>
	<noscript>
		<link rel="stylesheet" type="text/css" href="assets/css/slitslider/styleNoJS.css" />
	</noscript>
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
                        <?php include '_nav.php';?>
                            <!-- END navigation -->
                    </div>
                </div>
            </header>
            <section id="featured">
                <!-- foto banner -->
               <?php include '_header-buttons.php';?>
               <!-- end foto banner -->
              
                <!-- info items -->
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <h2>Vrijblijvend advies</h2>
                            <img src="images/items/advies-dakraam1.png" alt="advies dakramen"/>
                            <img src="images/items/advies-dakraam2.png" alt="advies dakramen op maat"/>
                            <div class="contentpage">
                              <p>
                                Wij geven u graag vrijblijvend advies over het plaatsen van uw dakraam.<br/> Voor het een advies op maat komen wij graag bij u langs.
                                Vul onderstaande formulier in en wij nemen zo snel mogelijk contact met u op.
                              </p>
                              <form method="post" action="form-to-email.php" name="myemailform">
                                    <div class="form-group">
                                        <label for="visitor_email">Email address</label>
                                        <input type="email" name="visitor_email" class="form-control" id="exampleFormControlInput1" placeholder="naam@voorbeeld.com | type hier uw e-mail adres">
                                    </div>
                                    <div class="form-group">
                                        <label for="question">Vraag over:</label>
                                        <select class="form-control" name="question" id="exampleFormControlSelect1">
                                            <option>Dakramen advies</option>
                                            <option>Dakramen algemeen</option>
                                            <option>VELUX dakraam</option>
                                            <option>Fakro dakraam</option>
                                            <option>Baskapel dakraam</option>
                                            <option>Offerte aanvraag</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Opmerking:</label>
                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Verstuur formulier</button>
                                </form
                        

                        </div>
                    </div>

                <!-- end info items -->
                
                
            </section>
            <!-- footer start -->
            <?php include '_footer.php';?>
            <!-- footer end -->
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