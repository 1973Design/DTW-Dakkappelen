<html>
<head>
    <title>DTW Timmerwerken</title>
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
                        <div class="col-xs-12">
                            <div class="contentpage">
                                
                                <h3>Bedankt voor het invullen van het formulier. We nemen zo snel mogelijk contact met uw op!
                                </h3>
                            </div>
                        

                        </div>  
        
                    </div>
                    <!-- info 2-->

                    <!-- end info 2 -->
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="content-l">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                        <img src="images/logos/velux.png" alt="velux dakramen">
                                        </div>
                                        <div class="col-xs-12 col-md-6 subcontent">
                                            <p class="bold">DTW dakramen is een erkend montagepartner</p>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="col-xs-12 col-md-6">
                            <div class="content-r">
                                <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <img src="images/logos/fakro.png"  alt="fakro dakramen">
                                        </div>
                                        <div class="col-xs-12 col-md-6 subcontent">
                                           <p class="bold">DTW dakramen is een erkend montagepartner</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
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