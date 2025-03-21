 <section id="content">

 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="about-logo">
 					<p>We are here to assist you every step of the way. If you have any questions, need support, or simply want to get in touch, please don't hesitate to reach out to us. Our dedicated team at JobRISE is ready to provide the assistance you need. Our customer support representatives are available 24*7 to address your inquiries and provide guidance. Additionally, we offer technical support to ensure a smooth experience on our platform. If you encounter any technical issues, refer to our comprehensive self-help resources or contact our technical support team for further assistance. We highly value your feedback and suggestions, as they help us improve our job portal. Connect with us on social media platforms like LinkedIn, Twitter, and Facebook to stay updated on the latest job openings, industry trends, and community events. Your privacy and data security are of utmost importance to us, and we adhere to strict measures to protect your information. Thank you for considering JobRISE. We look forward to assisting you and helping you achieve your professional goals.</p>
 				</div>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-md-6">
 				<p>Feel free to fill the tabs</p>

 				<!-- Form itself -->
 				<form name="sentMessage" id="contactForm" novalidate>
 					<h3>Contact us</h3>
 					<div class="control-group">
 						<div class="controls">
 							<input type="text" class="form-control" placeholder="Full Name" id="name" required data-validation-required-message="Please enter your name" />
 							<p class="help-block"></p>
 						</div>
 					</div>
 					<div class="control-group">
 						<div class="controls">
 							<input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
 						</div>
 					</div>

 					<div class="control-group">
 						<div class="controls">
 							<textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
 						</div>
 					</div>
 					<div id="success"> </div> <!-- For success/fail messages -->
 					<button type="submit" class="btn btn-primary pull-right">Send</button><br />
 				</form>
 			</div>
 			<div class="col-md-6">
 				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
 				<div style="overflow:hidden;height:500px;width:600px;">
 					<div id="gmap_canvas" style="height:500px;width:600px;"></div>
 					<style>
 						#gmap_canvas img {
 							max-width: none !important;
 							background: none !important
 						}
 					</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
 				</div>
 				<script type="text/javascript">
 					function init_map() {
 						var myOptions = {
 							zoom: 14,
 							center: new google.maps.LatLng(40.805478, -73.96522499999998),
 							mapTypeId: google.maps.MapTypeId.ROADMAP
 						};
 						map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
 						marker = new google.maps.Marker({
 							map: map,
 							position: new google.maps.LatLng(40.805478, -73.96522499999998)
 						});
 						infowindow = new google.maps.InfoWindow({
 							content: "<b>The Breslin</b><br/>2880 Broadway<br/> New York"
 						});
 						google.maps.event.addListener(marker, "click", function() {
 							infowindow.open(map, marker);
 						});
 						infowindow.open(map, marker);
 					}
 					google.maps.event.addDomListener(window, 'load', init_map);
 				</script>
 			</div>
 		</div>
 	</div>

 </section>