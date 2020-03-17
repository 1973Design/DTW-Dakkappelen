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
                        <div class="col-xs-12 col-sm-6">
                            <h2>Dakkapel renovatie</h2>
                            <div class="contentpage">
                               <p>
                                <strong>Denk je dat je dakkapel toe is aan renovatie, dan is het verstandig om eerst een aantal zaken door te nemen. Om zo de juiste beslissing te nemen.</strong><br/>
                                 Het vervangen van je huidige dakkapel is wellicht iets dat je alleen overweegt wanneer de kosten van renovatie hoger uitpakken. In de meeste gevallen zullen de renovatiekosten lager zijn.
                                <h4>Nieuw Dakkapel</h4>
                                 Er kunnen verschillende reden zijn waardoor je toch kiest voor een nieuw dakkapel i.p.v. een renovatie. Dit kan zijn;
                                 <ul class="list">
                                    <li>Een nieuw dakkapel is een mooie upgrade van je huis, zoals verbreding of vergroting;</li>
                                    <li>Het dakkapel is door de jaren heen aanzienlijk verouderd;</li>
                                    <li>Externe factoren zoals weer en wind hebben het uiterlijk van het dakkapel veranderd;</li>
                                    <li>Door achterstallig onderhoud is de contructie dusdanig verzwakt;</li>
                                 </ul>
                                 Mochten deze overwegingen er niet zijn, dan loont het wellicht om het dakraam te laten renoveren
                               </p>
                                     
                            </div>
                        

                        </div>
                        <div class="col-xs-12 col-sm-6">
                         <h2>Renoveren?</h2>
                            <div class="contentpage">
                                <p>
                                    Wij kunnen samen met u vaststellen wat de beste en voordeligste keuze is. Mocht dit renovatie zijn, dan is de volgende vraag; voor welke materiaalsoort kies je?
                                    <h4>Materiaalkeuze</h4>
                                    Een <strong>kunststof</strong> dakkapel is het meest onderhoudsvriendelijk. Wanneer je kiest voor kunstof is er geen schilderwerk vereist. Met dit materiaal kan je 
                                    dus onderhoudsarm genieten van extra ruimte en licht in je woning/kamer.<br/>
                                    Een andere optie is <strong>hout</strong>. Een (op maat gemaakte) houten dakkapel vergt wat meer onderhoud maar tergelijkertijd geeft een houten exemplaar je woning
                                    absolute karakteristieke uitstraling. Onze frefab dakkapelen zijn kant en klaar en sluiten daarom perfect aan op uw woning. We maken deze vooor u indien nodig speciaal op maat.
                                    Er zijn dus verschillende mogelijkheden om uw dakkapel op de juiste manier te renoveren<br/>
                                
                                    Voor meer informatie kunt u <a href="contact.php" title="contact opnemen">contact</a> met ons opnemen
                                </p>
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