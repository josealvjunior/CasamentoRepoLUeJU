<!-- footer start -->
        <footer>
        	<div class="color-overlay">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-sm-12 text-center">
	        				<span class="footer-logo">
	        					Luana  & Juninho
	        				</span>
	        			</div>

	        		</div>
	        		<div class="row">
	        			<div class="col-sm-12 text-center">
	        				<ul class="nav nav-pills">
							  <li role="presentation"><a href="#banner">HOME</a></li>
							  <li role="presentation"><a href="#gallery">FOTOS</a></li>
							  <li role="presentation"><a href="#contact">RSVP</a></li>
							</ul>
							<!-- footer nav end -->
	        			</div>
	        		</div>
	        	</div>
	        	<div id="go-to-top">
					<a href="#banner"><i class="fa fa-angle-up"></i></a>
				</div>
        	</div>	<!-- /.color-overlay end -->
		</footer>
	<!-- footer end -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/jquery.localScroll.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/TimeCircles.js"></script>
    <script src="assets/js/imagesloaded.pkgd.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/jquery.selectbox-0.2.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/jquery.placeholder.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
      function initialize() {
      	 // Create an array of styles.
		  var styles = [
			{
			  stylers: [
				{ hue: "#D44645" },
				{ saturation: 0 }
			  ]
			},
			{
			  featureType: 'water',
			  stylers: [
			   { visibility: "on" },
			   { color: "#9a9efd" },
			   { weight: 2.2 },
			   { gamma: 2.54 }
			  ] 
			},
			{
			  featureType: "road",
			  elementType: "geometry",
			  stylers: [
				{ lightness: 100 },
				{ visibility: "simplified" }
			  ]
			},{
			  featureType: "road",
			  elementType: "labels",
			  stylers: [
				{ hue: "#00ffee" },
				{ lightness: 10 },
				{ visibility: "simplified" }
			  ]
			}
		  ];

		  // Create a new StyledMapType object, passing it the array of styles,
		  // as well as the name to be displayed on the map type control.
		  var styledMap = new google.maps.StyledMapType(styles,
			{name: "Styled Map"});

			var mapCanvas = document.getElementById('map');
			var nevada = new google.maps.LatLng(39.2621799, -121.0168816);
			var mapOptions = {
			   zoom: 15,
			   center: nevada,
			   mapTypeControlOptions: {
			   mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			  },
			  scrollwheel: false,
			  disableDefaultUI: true
			};
			var map = new google.maps.Map(mapCanvas, mapOptions)

			//Associate the styled map with the MapTypeId and set it to display.
			  map.mapTypes.set('map_style', styledMap);
			  map.setMapTypeId('map_style');

			// To add the marker to the map, use the 'map' property
			  var image = 'images/pink/pink_map_icon.png';
			  var marker = new google.maps.Marker({
				  position: nevada,
				  map: map,
				  icon: image
			  });
	  </script>