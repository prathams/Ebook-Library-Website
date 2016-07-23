<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
<link rel="stylesheet" type="text/css" href="css/sliderman.css" />

<div id="SliderName_2" class="SliderName_2">
				<img src="img/1.jpg" width="700" height="450" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<map name="img1map">
						<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
						<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
					</map>
					<div class="SliderName_2Description"><strong>Open a free account</strong></div>
					<img src="img/2.jpg" width="700" height="450" alt="Demo2 second" title="Demo2 second" />
					<div class="SliderName_2Description"><strong>Large collection of best books</strong></div>
					<img src="img/3.jpg" width="700" height="450" alt="Demo2 third" title="Demo2 third" />
					<div class="SliderName_2Description"><strong>No renewals, no extra charge</strong></div>
					<img src="img/4.jpg" width="700" height="450" alt="Demo2 fourth" title="Demo2 fourth" />
					<div class="SliderName_2Description"><strong>Check out our library</strong></div>
				</div>
				<div id="SliderNameNavigation_2"></div>
				
				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 700, height: 450, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
						}
					});
				</script>
</div>