<html>
<head>
    <title>DTWdakramen privacy en AVG statement</title>
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
                <?php include '_top-header.php';?>
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
                <div class="row d-flex  banner-page">
                    <div>
                        <h1 class="heading">Privacybeleid</h1>
                    </div>
                   
                </div>
               <!-- end foto banner -->
              
                <!-- info items -->
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- start form -->
                        <div class="col-md-6 col-xsm-12">
                            <div>
                                <h2>DTWdakramen Privacybeleid/AVG</h2>
                                <p>
                                    Het bewaken van uw privacy en het zorgdragen voor naleving van de bepalingen die zijn opgenomen in de Algemene Verordening 
                                    Gegevensbescherming (AVG) vinden wij erg belangrijk . Hieronder valt het zorgvuldig omgaan met uw (persoons)gegevens.</p>
                                <p>Dit zijn de gegevens die wij van u ontvangen:</p>
                                <p>Naam en adresgegevens<br/>
                                    Contactgegevens<br/>
                                    Bankrekeningnummer</p>
                                <p>Deze gegevens hebben wij nodig voor het opmaken van een offerte, om contact met u op te nemen en te controleren of uw betalingen bij ons zijn binnengekomen. 
                                    Wij hebben uw gegevens in ons bezit tot het moment waarop beide partijen aan alle verplichtingen hebben voldaan. Mocht het niet tot een overeenkomst leiden, 
                                    dan houden wij uw gegevens in ons bezit tot de datum waartegen ons aanbod aan u is komen te vervallen.</p>
                                <p>Na uitvoering van de opdracht houden wij uw gegevens slechts met uw instemming in ons bezit als daarvoor een aan te wijzen doel is. 
                                    Hier stemt u in ieder geval mee in op het moment dat wij een overeenkomst aangaan voor meerdere jaren.</p>
                                <p>Wij zullen uw gegevens slechts delen met derden indien u daarvoor uitdrukkelijke schriftelijke toestemming hebt gegeven.</p>
                                <p>Onze website maakt geen gebruik van functionele cookies. Voor meer info over cookies op de website. <a href="https://www.consumentenbond.nl/internet-privacy/wat-zijn-cookies" target="_blank" >Klik hier</a>.</p>
                               <p>U heeft de mogelijkheid om uw gegevens bij ons op te vragen, te wijzigen en u kunt ons verzoeken uw gegevens te verwijderen uit ons bestand. Uw verzoek zal zo spoedig mogelijk verwerkt worden. U kunt hiervoor contact opnemen met:
                                   <strong>
                                   DTW Timmerwerken<br/>
                                    Dave van der Meulen<br/>
                                    Tinnegieterstraat 14, 1825 DT Alkmaar<br/>
                                    info@dakramen.nl <br/>
                                   </strong>
                               </p>
                               <p>Wij dragen zorg voor een goede beveiliging van de locatie waar wij uw gegevens opslaan. Wij behouden ons het recht voor om de inhoud van dit privacybeleid te allen tijde te wijzigen.</p>
                                <p>U kunt voor vragen of opmerkingen gerust contact met ons opnemen door een mail te sturen naar info@dtwdakramen.nl</p>
                            </div>
                            </div>
                        </div>
                        <!-- end form -->
                        
                     
                    </div>
                   
                   

                </div>
                <!-- end info items -->
                
                
            </section>
            <!-- footer start -->
            <?php include '_footer -contact.php';?>
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