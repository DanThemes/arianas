<footer>
    <section class="py-4 py-md-5 bg-primary">
	<div class="container">
	    <div class="row justify-content-center">
		<div class="col-md-12 col-lg-4">
		    <div class="footer-menu">
			<!--<img src="storage/logo/arianas.svg" alt="" class="img-fluid mb-2 brand-logo">-->

			<p class="">
			    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			    Nulla eleifend massa aliquam dolor mattis volutpat. Sed mattis sit amet urna sed commodo.
			</p>

			<img src="storage/visa-mastercard.png" alt="" class="img-fluid online-pay">
		    </div>
		</div>
		
		<div class="col-md-6 col-lg-4 text-lg-center my-3 my-md-0 pt-md-4 pt-lg-0">
		    <div class="footer-menu d-inline-block text-left">
			<div class="menu__title mb-2">
			    Legal
			</div>
			<div class="menu__content">
			    <ul class="list-unstyled mb-0">
				<li>
				    <a href="#" class="see-more"> <i class="fas fa-angle-right"></i> Termeni și condiții</a>
				</li>
				
				<li>
				    <a href="#" class="see-more"> <i class="fas fa-angle-right"></i> Confidentialitatea
					datelor personale</a>
				</li>
				<li>
				    <a href="https://anpc.ro" target="_blank" class="see-more"><i class="fas fa-angle-right"></i> ANPC</a>
				</li>
			    </ul>
			</div>
		    </div>
		</div>
		<div class="col-md-6 col-lg-4 text-lg-center pt-md-4 pt-lg-0">
		    <div class="footer-menu d-inline-block text-left">
			<div class="menu__title mb-2">
			    Contact
			</div>
			<div class="menu__content">
			    <ul class="list-unstyled mb-0">
				<li>
				    <a href="tel:">
					<span class="icon icon-phone-call"></span>
					07458 56 56 56
				    </a>
				</li>
				<li>
				    <a href="mailto:">
					<span class="icon icon-mail"></span>
					office@arianasfashion.ro
				    </a>
				</li>
				<li>
				    <span class="icon icon-map-pin"></span>
				    Str Voluntarilor nr 37 Arad
				</li>
			    </ul>
			</div>
		    </div>
		</div>
	    </div>
	</div>
    </section>
    
    <section class="py-3 text-white copyright">
        <div class="container">
            <div class="row">
                <div class="col-7 col-md-8">
                    <p class="mb-0">
                        © <?= date('Y')?> Ariana's Fashion.
                        <span class="d-block d-md-inline-block">Toate drepturile rezervate.</span>
                    </p>
                    <a class="text-white d-inline-block" title="Web Design Arad, Publicitate Arad" target="_blank" href="https://www.icetech.ro/">Webdesign by Icetech </a>
                </div>
                <div class="col-5 col-md-4 text-right align-self-center">
                    <a title="Web Design Arad, Publicitate Arad" target="_blank" href="https://www.icetech.ro/">
                        <img src="storage/logo/icetechost.png" class="img-fluid icetech-logo" alt="Web Design Arad, Publicitate Arad">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <div class="sticky-footer" id="cookie-notice">
	<span class="float-right padding-right-20 pr-2">
	    <a href="#" onclick="setCookie('cookie_notice', 1, 999999999); $('#cookie-notice').slideUp(); return false;" class="btn btn-outline-light">Am înțeles</a>
	</span>
        Prin continuarea navigării pe Website-ul nostru confirmați acceptarea 
	utlizarii fișierelor de tip cookie și politica de procesare a datelor
	personale (GDPR). Click <a href="#" target="_blank" class="border-bottom ">aici</a> pentru mai multe informații.
    </div>
    
</footer>


<div class="modal" id="login-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 pb-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body border-bottom-0">
                <h5 class="modal-title font-weight-bold text-primary text-center mb-4">Autentificare</h5>
                <form class="modal-form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="name" required="">
                    </div>

                    <div class="form-group">
                        <label>Parolă</label>
                        <input type="password" class="form-control" name="password" required="">
                    </div>

                    <div class="form-row align-items-center mb-4">
                        <div class="col-md-6 text-left">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="remember-me">
                                <label class="custom-control-label" for="remember-me">Ține-mă minte</label>
                            </div>
                        </div>

                        <div class="col-md-6 text-right">
                            <a href="#" class="font-underline text-primary">Am uitat parola</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary text-white px-3">Autentificare</button>
                </form>
            </div>

            <div class="sign-me-up bg-light d-flex justify-content-center align-items-center">
                <a class="w-100 h-100 text-primary text-center py-4" href="#"
                   data-toggle="modal" data-target="#sing-up" data-dismiss="modal">
                    Nu am cont, inregistreaza-mă
                </a>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="sing-up" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 pb-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body border-bottom-0">
                <h5 class="modal-title font-weight-bold text-primary text-center mb-4">Înregistrare</h5>
                <form class="modal-form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="name" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Telefon</label>
                        <input type="text" class="form-control" name="phone" required="">
                    </div>

                    <div class="form-group">
                        <label>Parolă</label>
                        <input type="password" class="form-control" name="password" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Repetă parolă</label>
                        <input type="password" class="form-control" name="password" required="">
                    </div>
                    
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="modal-accept_terms" name="_accept_terms" required="">
                            <label class="form-check-label" for="modal-accept_terms">
                                Am citit si sunt de acord cu <a href="#" target="_blank" class="btn-link">Termenii si conditiile</a>.
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="modal-accept_gdpr" name="_accept_gdpr" value="1" required="">
                            <label class="form-check-label" for="modal-accept_gdpr">
                                Am citit si sunt de acord cu <a href="#" class="btn-link" target="_blank">
                                    Politica de confidentialitate a datelor personale (GDPR)</a>.
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary text-white px-3">Înregistrare</button>
                </form>
            </div>
        </div>
    </div>
</div>





<script>
    function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
	   
	    zoom: 15,
	    center: {lat: 46.190416, lng: 21.321080},  
	    styles: [
		{
		    "elementType": "geometry",
		    "stylers": [
			{
			    "color": "#f5f5f5"
			}
		    ]
		},
		{
		    "elementType": "labels.icon",
		    "stylers": [
			{
			    "visibility": "off"
			}
		    ]
		},
		{
		    "elementType": "labels.text.fill",
		    "stylers": [
			{
			    "color": "#616161"
			}
		    ]
		},
		{
		    "elementType": "labels.text.stroke",
		    "stylers": [
			{
			    "color": "#f5f5f5"
			}
		    ]
		},
		{
		    "featureType": "administrative.land_parcel",
		    "elementType": "labels.text.fill",
		    "stylers": [
			{
			    "color": "#bdbdbd"
			}
		    ]
		},
		{
		    "featureType": "poi",
		    "elementType": "geometry",
		    "stylers": [
			{
			    "color": "#eeeeee"
			}
		    ]
		},
		{
		    "featureType": "poi",
		    "elementType": "labels.text.fill",
		    "stylers": [
			{
			    "color": "#757575"
			}
		    ]
		},
		{
		    "featureType": "poi.park",
		    "elementType": "geometry",
		    "stylers": [
			{
			    "color": "#e5e5e5"
			}
		    ]
		},
		{
		    "featureType": "poi.park",
		    "elementType": "labels.text.fill",
		    "stylers": [
			{
			    "color": "#9e9e9e"
			}
		    ]
		},
		{
		    "featureType": "road",
		    "elementType": "geometry",
		    "stylers": [
			{
			    "color": "#ffffff"
			}
		    ]
		},
		{
		    "featureType": "road.arterial",
		    "stylers": [
			{
			    "color": "#c9d7d5"
			}
		    ]
		},
		{
		    "featureType": "road.arterial",
		    "elementType": "labels.text.fill",
		    "stylers": [
			{
			    "color": "#757575"
			}
		    ]
		},
		{
		    "featureType": "road.highway",
		    "elementType": "geometry",
		    "stylers": [
			{
			    "color": "#dadada"
			}
		    ]
		},
		{
		    "featureType": "road.highway",
		    "elementType": "labels.text.fill",
		    "stylers": [
			{
			    "color": "#616161"
			}
		    ]
		},
		{
		    "featureType": "road.local",
		    "elementType": "labels.text.fill",
		    "stylers": [
			{
			    "color": "#9e9e9e"
			}
		    ]
		},
		{
		    "featureType": "transit.line",
		    "elementType": "geometry",
		    "stylers": [
			{
			    "color": "#e5e5e5"
			}
		    ]
		},
		{
		    "featureType": "transit.station",
		    "elementType": "geometry",
		    "stylers": [
			{
			    "color": "#eeeeee"
			}
		    ]
		},
		{
		    "featureType": "water",
		    "elementType": "geometry",
		    "stylers": [
			{
			    "color": "#c9c9c9"
			}
		    ]
		},
		{
		    "featureType": "water",
		    "elementType": "geometry.fill",
		    "stylers": [
			{
			    "color": "#c9d7d5"
			}
		    ]
		},
		{
		    "featureType": "water",
		    "elementType": "labels.text.fill",
		    "stylers": [
			{
			    "color": "#9e9e9e"
			}
		    ]
		}
	    ]
	});

	var contentString = '<div id="content">' +
		'<h4 id="firstHeading" class="firstHeading">Ariana\'s Fashion</h4>' +
		'<div id="bodyContent">' +
		'<p> Atrium Mall (Etajul 2)</p>' +
		'</div>' +
		'</div>';

	var infowindow = new google.maps.InfoWindow({
	    content: contentString
	});


	var image = 'storage/map-pin.png';
	var marker = new google.maps.Marker({
	    position: {lat: 46.190416, lng: 21.321080},
	    map: map,
	    icon: image
	});

	marker.addListener('mouseover', function () {
	    infowindow.open(map, marker);
	});

	marker.addListener('mouseout', function () {
	    infowindow.close(map, marker);
	});
    }
</script>

<script async defer
	src="//maps.googleapis.com/maps/api/js?key=AIzaSyDlZueSHt18aljreUI6oQzvOFyz808YBx8&callback=initMap">
</script>

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.swipebox.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>