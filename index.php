<?php
/*$urls = array('home'  => array('Home',          'home'),
			  'feat'  => array('Features',      'list-alt'),
			  'down'  => array('Download',      'cloud-download'),
			  'docu'  => array('Documentation', 'book'),
			  'cont'  => array('Contact',       'comment'));

$url = array_keys($urls)[0];
foreach($urls as $key => $value)
	if(isset($_GET[$key]))
	{
		$url = $key;
		break;
	}*/
?>
<div class="row">
	<div class="row_wallpaper" id="row_wallpaper" style="height: 0px; width: 100%; position: relative; top: -72px;">
		<h1 class="text-center" id="titre1" style="display: none; font-size: 3.5em; padding-top: 0px; position: relative; margin: 0; color: rgb(255, 255, 255); text-shadow: black 0em 0em 0.2em;"><?php echo SITE_NOM; ?></span></h1>
		<h2 class="text-center" id="titre2" style="text-indent: 0; font-size: 2.1em; display: none; position: relative; margin: 0; padding-top: 20px;"><?php echo SITE_PRES; ?></h2>
	</div>
	<div class="row_content">
		<!--ul class="nav nav-tabs just" style="margin-bottom: 20px;">
			<?php
			/*foreach($urls as $key => $value)
			{
				echo '<li role="presentation"';
				
				if($url == $key)
					echo ' class="active"';
				
				echo '><a href="/?' . $key . '"><span class="glyphicon glyphicon-' . $value[1] . '"></span> <span class="hidden-xs">' . $value[0] . '</span></a></li>';
			}
			
			if($membre)
				echo '<li role="presentation" style="cursor: pointer;"><a style="cursor: pointer;" class="btn btn-danger" href="deconnexion.php"><span class="glyphicon glyphicon-off"></span></a></li>';*/
			?>
		</ul-->
		
		<?php
		if($url == 'home')
		{
		?>
			<input type="hidden" id="isHome" value="1" />
			<div class="alert alert-info text-center">Welcome to JQuake Website</div>
			
			<div class="row">
				<div class="col-sm-6 col-xs-12">
				
					
					<ul>
						<li>JQuake provides real-time earthquake sensor map of Japan as well as original earthquake shaking detection algorithms. It also forwards Earthquake Early Warning and Tsunami Warning bulletins to the user. It runs on Windows/macOS/Linux. Check the <a href="https://jquake.net/?feat" >features</a>!</li>
						<li>JQuake has been <a href="https://jquake.net/?down" target="_blank">updated</a>! See changelog <a href="https://jquake.net/?docu" target="_blank">here</a>. </li>
						
					
					</ul>
				</div>
				<div class="col-sm-6 col-xs-12">
				
					
				<div class="video-responsive">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/T-eu1jucILA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
						

				
				
				</div>
			</div>
		<?php
		}
		else if($url == 'feat' || $url == 'feat2' || $url == 'feat3')
		{
		?>
		
			<div class="contents-large">
				<h1>Features</h1>
				<div class="row"><p>JQuake provides unique algorithms, map features, and application preference to give you the information you need, and give it to you in a thought-out, straight-forward manner. Check out how JQuake uniquely handles events and Early Earthquake Bulletins:</p></div>
				<br><br>
			
				<div class="row">
					<div class="col-md-6">
						<h2>Seismic Shaking Detection</h2>
						<p class="feature-content">Be informed at the split second an earthquake begins! JQuake receives real-time intensity and PGA
							updates every second from NIED. This data is used in our earthquake shaking detector, capable of dissociating human-induced vibration from
							effective earthquakes. It saves precious seconds, allowing notification even before the Earthquake Early Warning issuance.<br>
							Moreover in areas such Okinawa, where unfavorable coverage is met, the algorithm exhibits good detection rates.
							The sensitivity of the app can be set to detect shaking below human perception and alert
							users to any size earthquake tremor. Lot of time has been spent on algorithms to
							ensure that false positives are minimal.</p>
					</div>
					<div class="col-md-6 text-center"><img src="sources/shaking.png" class="rounded mx-auto"
							alt="Seismic Shaking Detection"></div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 text-center"><img src="sources/interactive-map.png" class="rounded mx-auto"
							alt="Seismic Shaking Detection"></div>
					<div class="col-md-6">
						<h2>Interactive Map</h2>
						<p class="feature-content">A dynamic and interactive map is available, so the user can manually zoom and navigate. The map uses vector based graphics, so that no network resource are necessary to display it. Additionally the map is rendered with effeciency and is designed to minimize the processing power required by your system.</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<h2>City Names</h2>
						<p class="feature-content">City names are displayed on the map to facilitate the identification, estimation of real-world geographic location of a shaking event.</p>
					</div>
					<div class="col-md-6 text-center"><img src="sources/city-names.png" class="rounded mx-auto"
							alt="City Names"></div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 text-center"><img src="sources/dynamic-zooming.gif" class="rounded mx-auto"
							alt="Dynamic Zooming Simulation"></div>
					<div class="col-md-6">
						<h2>Dynamic Zooming</h2>
						<p class="feature-content">When shaking is detected, an automatic zoom is performed to be immediately aware of the situation. If any shaking occurs outside of the view, the application will zooms out to
							fit all events to the screen. This option can be enabled or disabled based on your viewing preferences.</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<h2>Layering</h2>
						<p class="feature-content">When a seismic station has a higher value than its neighbors, it is put to forefront for easy reading.</p>
					</div>
					<div class="col-md-6 text-center"><img src="sources/layering.png" class="rounded mx-auto"
							alt="Layering"></div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-8 text-center"><img src="sources/double.gif" class="rounded mx-auto"
							alt="Multiple Earthquake Early Warning Support"></div>
					<div class="col-md-4">
						<h2>Multiple Event Support</h2>
						<p class="feature-content">JQuake supports multiple event detection, including displaying multiple Early Earthquake Warning (EEW) bulletins. This helps to insure the display has relevant and consistent information about the events currently unfolding. If multiple bulletins are active, each one will be numbered to distinguish between them.</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<h2>Realtime Prefecture Intensity List</h2>
						<p class="feature-content">On the right of the map, a list displaying maximum intensity of each prefecture appears when shaking is detected.</p>
					</div>
					<div class="col-md-6 text-center"><img src="sources/real-time-prefecture.gif" class="rounded mx-auto"
							alt="Layering"></div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-8 text-center"><img src="sources/tsunami.png" class="rounded mx-auto"
							alt="Tsunami Warning display"></div>
					<div class="col-md-4">
						<h2>Tsunami Warning display</h2>
						<p class="feature-content">In the event of a Tsunami Warning in Japan area and upon user preferences, JQuake highlights the coastline according to level of warning : Tsunami Advisory, Tsunami Warning and Major Tsunami Warning. Details about expected arrival times and heights can be found in English when clicking on upper-left panel.</p>
					</div>
				</div>
				<hr>
			</div>
		<?php
		}
		else if($url == 'down' || $url == 'down2' || $url == 'down3')
		{
		?>
		<div class="contents">
			
		
				<h3 class="head3">Requirements</h3>
				
				<ul>
					<li><a href="https://www.java.com/en/download/manual.jsp" target="_blank">Java Runtime Environment 8.</a> <a href="https://www.java.com/ja/download/manual.jsp" target="_blank">(日本語)</a><font color="red"><b> MacOS users will have to install this version.</b></font></li>
					<li>At least a 4-Core CPU and 8GB of RAM are recommended</li>
					<li>Windows 7/8/8.1/10 (Tested on 10), Linux (Tested on Ubuntu 18.04, Mint 19.3), macOS (Tested on Catalina)</li>
					<li>Microsoft Fonts on Linux-based systems</li>
					<li>Permanent Internet Connection (Proxy Supported)</li>
				</ul>
	
			
				<br>
				<h3 class="head3">Caution</h3>
				<ul>
					<li>JQuake receives Earthquake Early Warning bulletins from the Japan Meteorological Agency, the user must have understood <a href="https://www.jma.go.jp/jma/en/Activities/eew.html" target="_blank">how it works and how to respond to it</a>.</li>
					<li>The software developer is not responsible for any injury caused by the use of the software.</li>
					<li>Decompiling or trying to reuse the resources contained in the .jar file is prohibited.</li>
					<li>Since the code is not signed for financial reasons, you might fail antivirus check.</li>
				</ul>
				<br>
				<h3 class="head3">Download JQuake v1.6.1 (<a href="https://jquake.net/?docu" target="_blank">Changelog</a>)</h3>
				<br>
				
				<div class="col">
					
					<div class="row">
					    <div class="col text-center">
				    		<a href="https://fleneindre.github.io/downloads/JQuake_1.6.1_win.zip" target="_blank"><button type="button" class="btn btn-primary">Download JQuake for Windows x64</button></a>
							<a href="https://fleneindre.github.io/downloads/JQuake.dmg" target="_blank"><button type="button" class="btn btn-primary">Download JQuake for macOS <br>(Oracle JRE required)</button></a>
							<a href="https://fleneindre.github.io/downloads/JQuake_1.6.1_linux.zip" target="_blank"><button type="button" class="btn btn-primary">Download JQuake for Linux</button></a>
				    	</div>
				  
					</div>
				</div>

			  <br>
			
			 
			  <br>
			 	<div class="row">
					<div class="col text-center">
			    		If you like this work, you can support it by making a donation :
						<a href="https://streamlabs.com/jquake/tip" target="_blank"><button type="button" class="btn btn-success">Donate (寄付ボタン)</button></a>
			    	</div>
			</div>
			</div>
		<?php
		}
		else if($url == 'docu')
		{
		?>
		
		<div class="contents">
			<div class="row">
				<h3 class="head3">JQuake v1.6.1 - Changelog</h3>
	    		<br>
	    		<h5 class="head5">2020/11/12 03:15 JST</h5>
		    	<br>
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
		    		<li>It is now impossible to start a replay from the list during an EEW</li>
				</ul>
				<br>
				<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
		    		<li>Corrected a Java issue, preventing real-time data retrieval on certain types of networks</li>
		    		<li>Corrected some Japanese sentences</li>
				</ul>
			 </div>
			 
			 
			 <hr>
			 	<div class="row">
	    		<h3 class="head3">JQuake v1.6.0 - Changelog</h3>
	    		<br>
	    		<h5 class="head5">2020/11/04 10:45 JST</h5>
		    	<br>
			    <h5 class="head5"><b>New functionalities</b></h5>
		    	<ul>
					<li>Added Tsunami Advisory/Tsunami Warning/Major Tsunami Warning display. Only impacted coastlines are highlighted in such an event. The user will have to choose a behaviour in Map Tab (Setting panel) if icons are used for intensity.</li>
					<li>Added new sounds according to each tsunami warning level</li>
					<li>Added a replay function in the felt earthquakes list. Only earthquakes which happened less than 3 hours ago can be replayed.</li>
					<li>Added a setting to choose minimum expected intensity threshold for nationwide EEW</li>
					<li>Added a button and a prompt on first launch to see Changelog</li>
				</ul>
				<br>
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
		    		<li>Enhanced detection algorithm</li>
		    		<li>The prefecture intensity list displays now at least 8 items</li>
		    		<li>Enhanced display of canceled EEW</li>
		    		<li>Enhanced synchronization process</li>
		    		<li>Limited the map zoom</li>
		    		<li>The expected intensity icon font is reverted to white</li>
		    		<li>The disconnected status will now be displayed as the clock becoming red, instead of the top-left panel becoming gray</li>
		    		<li>Updated station list with new station locations</li>
				</ul>
				<br>
				<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
		    		<li>Fixed an issue preventing the Intensity Flash Reports (when exceeding Intensity 3) to be displayed in the list</li>
		    		<li>Corrected a bug on PGA level 2 trigger</li>
		    		<li>Fixed a glitch when opening/closing the felt earthquake list while being in Fullscreen</li>
				</ul>
			 </div>
			 
			 
			 <hr>
			 
			
			<div class="row">
	    		<h3 class="head3">JQuake v1.5.0 - Changelog</h3>
	    		<br>
	    		<h5 class="head5">2020/08/12 09:05</h5>
		    	<br>
			    <h5 class="head5"><b>New functionalities</b></h5>
		    	<ul>
					<li>Added Full screen support for all OS (Press F11 to use it)</li>
					<li>Enhanced reliability (thread respawn in case of death, avoiding certain freeze issues)</li>
				</ul>
				<br>
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
		    		<li>The program will restart if it crashes (on Windows only)</li>
		    		<li>The PGA detection has a lower sensibility to reduce the rate of false detection</li>
		    		<li>Added "Settings" item in tray menu</li>
		    		<li>The tray icon options are now disabled if not supported by the system</li>
				</ul>
				<br>
				<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
		    		<li>Fixed the seismic stations list (causing false detections in the Southern part of Saitama Prefecture)</li>
		    		<li>Fixed English station names</li>
				</ul>
			 </div>
			 
			 
			 <hr>
			 
			<div class="row">
	    		<h3 class="head3">JQuake v1.4.0 - Changelog</h3>
	    		<br>
	    		<h5 class="head5">2020/08/06 09:40</h5>
		    	<br>
			    <h5 class="head5"><b>New functionalities</b></h5>
		    	<ul>
					<li>Added a setting to use intensity color for maximum expected intensity on EEW information box (EEW Tab)</li>
					<li>Settings will now be kept between updates without any manipulation</li>
				</ul>
				<br>
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
		    		<li>The directories for settings file are now %LocalAppData%\JQuake\ on Windows and $user.home$/Library/Application Support/JQuake/ on macOS and Linux</li>
		    		<li>Added a station in Ibaraki</li>
		    		<li>Enhanced detection algorithm</li>
		    		<li>The user expected intensity is now flagged as "Unknown" instead of "0" if no data concerning expected intensity map is received</li>
				</ul>
				<br>
				<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
		    		<li>Fixed inconsitent behavior on detection of small and shallow earthquakes</li>
		    		<li>Corrected some pixel readings in Saitama, Aichi, Kumamoto, Gunma and Tochigi to avoid false detection in case of degraded data stream</li>
		    		<li>Corrected a display bug when a EEW Warning is triggered while having EEW local settings enabled</li>
		    		<li>Corrected a bug allowing a single station to have a false detection for a long period of time</li>
				</ul>
			 </div>
			 
			 
			 <hr>
				<div class="row">
	    		<h3 class="head3">JQuake v1.3.1 - Changelog</h3>
	    		<br>
	    		<h5 class="head5">2020/07/07 08:10</h5>
				<br>
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
		    		<li>Added special thanks to <a href="https://www.hertzelle.com/" target="_blank">Todd Hertzelle</a></li>
				</ul>
				<br>
				
				<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
		    		<li><font color="red"><b>Important : </b></font>Fixed Shindo Warning level 1 and 2 not triggering if the level 0 threshold is below or equal to seismic intensity 0.5</li>
					<li>Fixed station warning not clearing if it is flagged as having trouble</li>
					<li>Fixed some translations</li>
					<li>Fixed option panel display on macOS</li>
				</ul>
				</div>
				<hr>
			
				<div class="row">
	    		<h3 class="head3">JQuake v1.3.0 - Changelog</h3>
	    		<br>
	    		<h5 class="head5">2020/07/06 07:35</h5>
		    	<br>
			    <h5 class="head5"><b>New functionalities</b></h5>
		    	<ul>
					<li>Added a setting to wake up screen on EEW and Shaking detection events</li>
					<li>Added the possibility to choose the thresholds for Shaking Detection levels</li>
					<li>Added a setting to include user point inside the zoom in case of event</li>
				</ul>
				<br>
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
		    		<li>The EEW Warning local setting do not include user point inside the zoom anymore</li>
		    		<li>Added some stations in Nagano, Saitama and Tokyo. Corrected some pixel readings.</li>
		    		<li>The minimum window size is smaller (344x376)</li>
		    		<li>If the user's closest station is hidden due to trouble, the closest station not in trouble is reassigned instead.</li>
				</ul>
				<br>
				<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
		    		<li><font color="red"><b>Important : </b></font>Fixed PGA map freeze issue</li>
		    		<li>Fixed shaking detection sometimes disappearing before an EEW</li>
		    		<li>Corrected glitches when detecting shaking on Sagami Bay stations</li>
		    		<li>Fixed depth not appearing in earthquake list in case of 2 earthquakes having the same date</li>
		    		<li>Fixed earthquake list freeze</li>
		    		<li>Fixed "Display city names" setting not saving properly</li>
		    		<li>Corrected earthquake list display glitch when enabling it after having opened the app while having the list closed</li>
					<li>Fixed app not restarting after modifying the language setting on macOS</li>
					<li>Corrected display glitch on the EEW panel in English (in case of long region name)</li>
					<li>Various traduction issues fixed</li>
				</ul>
			 </div>
			<hr>
			
			<div class="row">
	    		<h3 class="head3">JQuake v1.2.1 - Changelog</h3>
	    		<br>
	    		<h5 class="head5">2020/05/29 22:45</h5>
		    	<br>
	
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
		    		<li>Enhanced detection around Miyakojima (in case of EEW)
				</ul>
				<br>
				<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
		    		<li>Fixed overly long detection time</li>
					<li>Fixed Mini-Map behaviour when browsing the map in case of big earthquake</li>
					<li>Fixed the intensity list not clearing at the end of an EEW</li>
				</ul>
			 </div>
			<hr>
			
		    
		    
		    
			<div class="row">
	    		<h3 class="head3">JQuake v1.2.0 - Changelog</h3>
	    		<br>
	    		<h5 class="head5">2020/05/27 08:45</h5>
		    	<br>
			    <h5 class="head5"><b>New functionalities</b></h5>
		    	<ul>
					<li>Added a setting to show/hide city names on map</li>
					<li>Added visible stations on map (Nagano, Aichi)</li>
				</ul>
				<br>
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
		    		<li>New Application icons for better visuals (Thanks to <a href="https://twitter.com/kurisubrooks" target="_blank">Kurisu</a>)</li>
					<li>New user expected seismic intensity images (Thanks to <a href="https://www.twitch.tv/natfoxlive" target="_blank">Nat Fox</a>)</li>
					<li>Changed Tokyo city name to not always visible</li>
					<li>Replaced server choice with "refresh rate control" because realtime server data is not compliant with the station database (leading to frequent false detections)</li>
					<li>Changed expected intensity points font color from white to black to distinguish them from measured intensity</li>
					<li>Enhanced shaking detection, especially in Kushiro and Tanegashima</li>
					<li>Modified "Disconnected" display criteria to 10 seconds without intensity data</li>
					<li>Enhanced handling of window size information storage</li>
					<li>Enhanced rendering of P/S-wave circle display to a subpixel basis for smoother animation</li>
					<li>Changed Shindo 7 color to (150,0,150)</li>
					<li>Changed untriggered local EEW display color</li>
				</ul>
				<br>
				<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
		    		<li>Corrected Earthquake Information list glitches (random switches, endless "Epicenter under assessment", region name displayed twice, not resizing on certain conditions)</li>
					<li>Fixed Earthquake Information voice notification in case of hypocenter information without intensity information (Occurs when several earthquakes happen in a short time period)</li>
					<li>Fixed some Map behaviour</li>
					<li>Corrected date format when displaying Expected Seismic Intensity</li>
					<li>Fixed some region translation</li>
					<li>Fixed blinking squares behavior on the beginning of an EEW</li>
					<li>Fixed user expected intensity images glitch on fullscreen of small window size</li>
					<li>Fixed EEW display behavior with local settings</li>
				</ul>
			 </div>
			<hr>
			
		    
		    <div class="row">
		    
		    		<h3 class="head3">JQuake v1.1.1 - Changelog</h3>
		    		<br>
		    		<h5 class="head5">2020/04/24 07:10</h5>
			    	<br>
			    <h5 class="head5"><b>Fixes</b></h5>
		    	<ul>
					<li><font color="red"><b>Critical : </b></font>Fixed freeze issue</li>
					<li>Fixed sounds not playing on macOS</li>
					<li>Fixed Shaking detection box not resetting after a PGA detection</li>
					<li>Fixed Map View behaviour when "Local Shindo level 0" is activated</li>
					<li>Fixed Japanese sentences</li>
				</ul>
				<br>
			
				
				 <h5 class="head5"><b>Changes</b></h5>
		    	<ul>
					<li>Enhanced PGA detection</li>
				</ul>
				</div>
				
				<hr>
			<div class="row">
	    		<h3 class="head3">JQuake v1.1.0 - Changelog</h3>
	    		<br>
	    		<h5 class="head5">2020/04/20 02:30</h5>
		    	<br>
			    <h5 class="head5"><b>New functionalities</b></h5>
		    	<ul>
					<li>New sounds for Earthquake Information (added female actor voices)</li>
					<li>macOS users have now an installer with better integration</li>
					<li>Support for Dark theme bar in macOS</li>
					<li>Added a setting to display/hide Earthquake Information list scrollbar</li>
				</ul>
				<br>
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
		    		<li>Changed EEW (Warning) sound to avoid any copyright issues with NHK Chime</li>
					<li>Enhanced top-left panel display for readability</li>
					<li>Enhanced display for separate PLUM reports</li>
					<li>User expected intensity now takes into account separate PLUM reports (It will take the intensity from the report if inside a 30km radius around the user)</li>
					<li>Enhanced shaking detection, especially for strong distant earthquake and earthquakes near Tokyo</li>
					<li>Removed borders for Earthquake Information list</li>
					<li>The map will display the default Japan view if it is too zoomed out (especially in case of big earthquake)</li>
					<li>The criteria for Local EEW Warning level trigger has been changed from Seismic Intensity 4 to the user-defined value</li>
					<li>The sound volume can now go up to 12</li>
					<li>The user can now test Earthquake Information voices and EEW sounds</li>
					<li>The user marker on the map now blinks when an EEW is issued (instead of displaying "You")</li>
				</ul>
				<br>
				<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
		    		<li>Corrected intensity points around Okinawa/Amami</li>
					<li>Fixed Earthquake Information display when the depth equals 100km</li>
					<li>Fixed some Mini-map behaviour issues when the view is too zoomed-out</li>
					<li>Fixed the startup timout when the web server is unavailable for version checking</li>
					<li>Fixed some display issues on macOS and Linux</li>
				</ul>
			 </div>
			<hr>
			
			<div class="row">
		    
		    		<h3 class="head3">JQuake v1.0.8 - Changelog</h3>
		    		<br>
		    		<h5 class="head5">2020/03/17 23:50</h5>
			    	<br>
			    <h5 class="head5"><b>Fixes</b></h5>
		    	<ul>
					<li>Removed arrival time for S-Wave. It has mistakenly been re-introduced since v1.0.6</li>
				</ul>
			</div>
			<hr>
		 
			<div class="row">
		    
		    		<h3 class="head3">JQuake v1.0.7 - Changelog</h3>
		    		<br>
		    		<h5 class="head5">2020/03/17 19:00</h5>
			    	<br>
			    <h5 class="head5"><b>Fixes</b></h5>
		    	<ul>
					<li>Launching failure on 32 bits JVM</li>
					<li>Bug preventing the user from zooming on the map when there is an EEW or an earthquake detection</li>
				</ul>
			</div>
			<hr>
		 
			<div class="row">
		    
		    		<h3 class="head3">JQuake v1.0.6 - Changelog</h3>
		    		<br>
		    		<h5 class="head5">2020/03/16 10:45</h5>
			    	<br>
			    <h5 class="head5"><b>Fixes</b></h5>
		    	<ul>
					<li>Several EEW trigger on warning</li>
					<li>Incorrect expected intensity value for users in Kyushu</li>
					<li>Display glitch on expected intensity scale</li>
					<li>Mini-map behaviour</li>
					<li>Some font glitches on Mac</li>
					<li>Settings panel behaviour when opening it again while it is minimized</li>
					<li>Mismatch between input and actual Home View <font color="red">(the user will have to redefine it)</font></font></li>
				</ul>
				<br>
		    	<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
					<li>Optimized renderer thread to consume less CPU on warning</li>
					<li>Enhanced PGA Warning sensitivity</li>
					<li>Enhanced Earthquake detection algorithm (especially for Hachiojima)</li>
					<li>Added some stations on the map</li>
					<li>The blinking squares (triggered station without a P-Wave having reached it) are transferred to the stations when zooming</li>
					<li>"About" Tab modification</li>
				</ul>
				
		 </div>
		 <hr>
		<div class="row">
		    
		    		<h3 class="head3">JQuake v1.0.5 - Changelog</h3>
		    		<br>
		    		<h5 class="head5">2020/02/27 11:45</h5>
			    	<br>
			    <h5 class="head5"><b>Fixes</b></h5>
		    	<ul>
					<li>Expected intensity display</li>
					<li>Sagami stations not displaying correctly</li>
					<li>Max Intensity icon disappearing when Sagami station is triggered at Shindo Level 1 or more</li>
					<li>Window behaviour on opening software</li>
					<li>Settings panel display problems</li>
					<li>Settings panel not opening on Mac</li>
					<li>Some small P/S circle adjustements</li>
					<li>Information panel not displaying correctly Tsunami Warning Message in Japanese</li>
				</ul>
				<br>
		    	<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
					<li>Stations having trouble disappear from map instead of turning gray</li>
					<li>Optimized CPU load when moving map</li>
					<li>Ajdustements on certain stations sensitivity</li>
					<li>Put a background on date to make it readable when station names are behind</li>
					<li>Small changes on Japanese and English translations</li>
				</ul>
			
		 </div>
		 
		 
		<hr>
		
		<div class="row">
		    
		    		<h3 class="head3">JQuake v1.0.4 - Changelog</h3>
		    		<br>
		    		<h5 class="head5">2020/02/19 10:30</h5>
			    	<br>
			    <h5 class="head5"><b>Fixes</b></h5>
		    	<ul>
					<li>Corrected some Japanese sentences</li>
				</ul>
				<br>
		    	<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
					<li>Replaced Expected Arrival Time with distance to the epicenter for compliance with the Japanese Meteorological Service Act (Subject to change)</li>
					<li>Added Mac bar icon support</li>
					<li>A new developer joined me : we are 2 now!</li>
				</ul>
				<br>
				<font color="red"><b>Since any earlier version of JQuake do not comply with the Japanese Meteorological Service Act, you are required to delete it.</b></font>
				Please note that an auto-updater is planned to be deployed to make updates more easily.
		 </div>
		 
		 
		<hr>
		<div class="row">
		    
		    		<h3 class="head3">JQuake v1.0.3 - Changelog</h3>
		    		<br>
		    		<h5 class="head5">2020/02/18 04:10</h5>
			    	<br>
			    <h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
					<li>Corrected new Font resource linking on Windows</li>
					<li>Corrected some numbers not displaying correctly</li>
					<li>Corrected some japanese sentences</li>
				</ul>
				<br>
		    	<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
					<li>Added time for reset after a Shindo Level 0 trigger</li>
				</ul>
		 </div>
		 
		 
		<hr>
		
		<div class="row">
		    
		    		<h3 class="head3">JQuake v1.0.2 - Changelog</h3>
		    		<br>
		    		<h5 class="head5">2020/02/16 23:40</h5>
			    	<br>
			    	<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
					<li>Corrected new Font glitches</li>
					<li>Included the .exe this time!! (Sorry for the inconvenience) </li>
				</ul>
				<br>
		    	
		 </div>
		 
		 
		<hr>
			
			
		<div class="row">
		    
		    		<h3 class="head3">JQuake v1.0.1 - Changelog</h3>
		    		<br>
		    		<h5 class="head5">2020/02/16 12:00</h5>
			    	<br>
			    	<h5 class="head5"><b>Bug fixes</b></h5>
		    	<ul>
					<li>Corrected an automatic zooming when checking "Local Shindo level 1" box</li>
					<li>Corrected unwanted behaviour when "Local Shindo level 0" is activated</li>
					<li>Corrected layout problem when resizing window during an EEW</li>
					<li>Corrected panel setting layout</li>
				</ul>
				<br>
				<h5 class="head5"><b>Changes</b></h5>
		    	<ul>
					<li>Changed the fonts to M+ 1p and M+ 2p</li>
					<li>Removed the output peripheral choice since it is not displaying properly. It is an encoding error of MixerInfo class inside the Java JRE that I cannot correct. The setting can still manually be changed in Settings.properties</li>
					<li>Added sound trigger when changing volume </li>
				</ul>
		    		
		    	
		    	
		 </div>
		  </div>
		<?php
		
		}
		else if($url == 'cont' || $url == 'cont2')
		{
		?>
		<div class="contents">
				<div class="alert alert-info text-center">Contact</div>
			<div class="col text-center">
				<a href="mailto:<?php echo SITE_EMAIL; ?>"><span class="glyphicon glyphicon-hand-right"></span> Contact me <span class="glyphicon glyphicon-hand-left"></span></a> at jquake33@gmail.com
			</div>
			
			
			 
			<hr>
				
				
			<div class="row">
			    
			    		<h3 class="head3">Other Softwares</h3>
			    		<br>
			    		<p>
			    			Other softwares doing Seismic Data monitoring exist in Japanese. Here is a list of some of them:
			    		</p>
			    		<br>
			    		<h4 class="head4">	<a href="https://kiwimonitor.amebaownd.com" target="_blank">Kiwi Monitor</a></h4>
				   
			    		<p>
				    		The most famous Windows-only client made by compo031. The user should consider this choice if ressource consumption is an issue. Its ancestors (Kyoshin EEW Viewer + Quail Eggs) inspired the initial design of JQuake.
			    		</p>
			    		<br>
			    		<h4 class="head4">	<a href="http://www.melanion.info/eqwatch/index.html" target="_blank">EqWatch</a></h4>
				   
			    		<p>
				    		One of the first monitors ever to exist. The station database JQuake uses is derived from the one created by EqWatch owner. 
			    		</p>
			    		<br>
			    		<h4 class="head4">	<a href="https://ingen084.github.io/KyoshinEewViewer/" target="_blank">KyoshinEewViewer for ingen</a></h4>
				   
			    		<p>
				    		Open Source C# Monitor for Windows 10 64 bits currently under continuous development.
			    		</p>
					<br>
					
			    		
			    	
			    	
			 </div>
		 
		 </div>
		 
		<?php
		}
		?>
	</div>
</div>