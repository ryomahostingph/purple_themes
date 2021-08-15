<?php if (!defined('FLUX_ROOT')) exit; ?>

<!-- home -->
<section id="home" data-parallax="scroll" data-image-src="<?php echo $this->themePath('images/hero-bg.png') ?>" data-natural-width=1920 data-natural-height=1080>

	<div class="overlay"></div>
	<div class="home-content">        

		<div class="row contents">                     
			<div class="home-content-left">

				<h3 data-aos="fade-up" class=" text-center">
					<?php echo $config['server_sub_intro']; ?> |
					<span>Online Player: <?php echo number_format($config['online'][0]);?></span>
				</h3>
				<h1 data-aos="fade-up">
					<?php echo $config['server_introduction']; ?>
				</h1>
				<div class="buttons" data-aos="fade-up">
					<a href="<?php echo $this->url('account','create'); ?>" class="button stroke">
						<span class="icon-users" aria-hidden="true"></span>
						Register Account
					</a>
					<a href="https://www.youtube.com/watch?v=<?php echo $config['social_api']['youtube']; ?>" data-lity class="button stroke">
						<span class="icon-play" aria-hidden="true"></span>
						Youtube Video
					</a>
				</div>                                         

			</div>

			<div class="home-image-right">
				<img src="<?php echo $this->themePath('images/iphone-app-470.png'); ?>" 
					srcset="<?php echo $this->themePath('images/iphone-app-470.png'); ?> 1x, <?php echo $this->themePath('images/iphone-app-940.png'); ?> 2x"  
					data-aos="fade-up">
			</div>
		</div>

	</div> <!-- end home-content -->

	<ul class="home-social-list">
		<li>
			<a href="#"><i class="fa fa-facebook-square"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-youtube-play"></i></a>
		</li>
	</ul>
	<!-- end home-social-list -->

	<div class="home-scrolldown">
		<a href="#information" class="scroll-icon smoothscroll">
			<span>View More</span>
			<i class="icon-arrow-right" aria-hidden="true"></i>
		</a>
	</div>

</section> 
<!-- end home -->  



<!-- about -->
<section id="information">

	<div class="row about-intro">
		<div class="col-four">
			<h1 class="intro-header" data-aos="fade-up"><img src="<?php echo $this->themePath('images/girl-bg.png'); ?>" /></h1>
		</div>
		<div class="col-eight">
			<h1>Are you looking for a well balanced mid-rate server?</h1>
			<p class="lead" data-aos="fade-up">
				Hello, I am Epic. I came from the original classic Ragnarok. I've been to many servers from low to super high rates. They have different gameplays and modes. All I can say is most of the low to mid rates are so hard to farm and so difficult to cope up with other pioneer players and mostly they stick to classic mode. On the other hand, most of the high rate servers are so imbalanced and PVP based. It came to me the idea of having a mid-rate server with a lot of customizations and new gameplays, where you can enjoy playing RO with a new different story.
			</p>
			</div>  
	</div>

	<div class="row about-features">
		<div class="features-list block-1-3 block-m-1-2 block-mob-full group">
			<div class="bgrid feature" data-aos="fade-up">	
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/rok.png'); ?>" /> </span></center>            
				<div class="service-content">
					<center><h2>= SERVER INFORMATION =</h2></center>
					<h4>&#8226; <font color="D4AD2F">SERVER DATABASE:</font> 
					<h4>&#x21e8; Singapore
					<h4>&#8226; <font color="D4AD2F">SERVER EPISODE:</font>
					<h4>&#x21e8; Episode 12 (Customized)
					<h4>&#8226; <font color="D4AD2F">MAX BASE LEVEL:</font>
					<h4>&#x21e8; 175
					<h4>&#8226; <font color="D4AD2F">MAX JOB LEVEL:</font>
					<h4>&#x21e8; 60
					<h4>&#8226; <font color="D4AD2F">MAX STATUS LEVEL:</font>
					<h4>&#x21e8; 120
					<h4>&#8226; <font color="D4AD2F">MAX ATTACK SPEED:</font> 
					<h4>&#x21e8; 193
					<h4>&#8226; <font color="D4AD2F">NO CAST DELAY:</font> 
					<h4>&#x21e8; 150 Dex Instant Cast
					<h4>&#x21e8; Kiel Based Server
					<h4>&#8226; <font color="D4AD2F">FROZEN OR UNFROZEN:</font>
					<h4>&#x21e8; Frozen
					<h4>&#8226; <font color="D4AD2F">ANDROID PLATFORM:</font>
					<h4>&#x21e8; Coming Soon

					</h4>					
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">	
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/icons/nid.png'); ?>" /> </span></center>                        
				<div class="service-content">	
					<center><h2>= EPIC RATES =</h2></center>  
					<h4>&#8226; <font color="D4AD2F">SERVER TYPE:</font>
					<h4>&#x21e8; Renewal Features
					<h4><em>&#8594; Maps</em>
					<h4><em>&#8594; 3rd Jobs and Expanded Jobs</em>
					<h4>&#x21e8; Pre - Renewal Features
					<h4><em>&#8594; Items</em>
					<h4><em>&#8594; Monsters</em>
					<h4><em>&#8594; Quests and Instances</em>
					<h4><em>&#8594; Status Calculations</em>
					<h4>&#8226; <font color="D4AD2F">SERVER RATES:</font>
					<h4>&#x21e8; 100x/100x/10x
					<h4>&#8226; <font color="D4AD2F">NORMAL/MVP DROP EQUIPS:</font>
					<h4>&#x21e8; 10x = 0.10% (Boost)
					<h4>&#8226; <font color="D4AD2F">NORMAL DROP CARDS:</font>
					<h4>&#x21e8; 500x = 5% (Fixed)
					<h4>&#8226; <font color="D4AD2F">MINI-BOSS DROP CARDS:</font>
					<h4>&#x21e8; 100x = 1% (Fixed)
					<h4>&#8226; <font color="D4AD2F">MVP DROP CARDS:</font>
					<h4>&#x21e8; 50x = 0.5% (Fixed)
					</div>	 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/fad.png'); ?>" /> </span></center>		            
				<div class="service-content">
					<center><h2>= EPIC FEATURES =</h2></center>
					<h4>&#8226; <font color="D4AD2F">CUSTOM EPIC EPISODES</font>
					<h4>&#8226; <font color="D4AD2F">CUSTOM EPIC LORES</font>
					<h4>&#8226; <font color="D4AD2F">CUSTOM EPIC QUESTS</font>
					<h4>&#8226; <font color="D4AD2F">CUSTOM EPIC ITEMS</font>
					<h4>&#8226; <font color="D4AD2F">INSTANCES:</font>
					<h4>&#x21e8; Official Instances
					<h4><em>&#8594; Endless Tower</em>
					<h4><em>&#8594; Nidhoggur's Nest</em>
					<h4><em>&#8594; Orc Memory Dungeon</em>
					<h4><em>&#8594; Sealed Shrine</em>
					<h4>&#x21e8; Custom Instances
					<h4><em>&#8594; Mini - Endless Tower</em>
					<h4><em>&#8594; The King Poring Expedition</em>
					<h4><em>&#8594; Forbidden Citadel</em>
					<h4><em>&#8594; Frozen Realm</em>
					<h4><em>&#8594; Cursed Tomb</em>
					<h4>&#8226; <font color="D4AD2F">CUSTOM MVP CONTENTS:</font>
					<h4>&#x21e8; Dark Chasm
					<h4>&#x21e8; Death Chasm
				</h4>							
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/emp.png'); ?>" /> </span></center>	
				<div class="service-content">
					<center><h2>= SERVER EVENTS =</h2></center>
					<h4>&#8226; <font color="D4AD2F">WEEKLY EVENTS</font>
					<h4>&#8226; <font color="D4AD2F">MONTHLY EVENTS</font>
					<h4>&#8226; <font color="D4AD2F">SPECIAL EVENTS</font>
					<h4>&#8226; <font color="D4AD2F">GVG AND PVP EVENTS:</font>
					<h4>&#x21e8; War of Emperium
					<h4><em>&#8594; Not Yet Available</em>
					<h4>&#x21e8; King of Emperium
					<h4><em>&#8594; Not Yet Available</em>
					<h4>&#x21e8; Battlegrounds
					<h4><em>&#8594; Not Yet Available</em>
					</h5>
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/shu.png'); ?>" /> </span></center>		            
				<div class="service-content">	
					<center><h2>= EXTRA INFORMATIONS =</h2></center>
					<h4>&#8226; <font color="D4AD2F">PLAYER BENEFITS:</font>
					<h4><em>&#8594; Newbie Freebies</em>
					<h4><em>&#8594; VIP Perks</em>
					<h4><em>&#8594; Streamer Package</em>
					<h4><em>&#8594; Solo Package</em>
					<h4><em>&#8594; Guild Package (Minimum of 8 members)</em>
					<h4>&#8226; <font color="D4AD2F">SERVER SYSTEMS:</font>
					<h4><em>&#8594; VIP System</em>
					<h4><em>&#8594; Party System</em>
					<h4><em>&#8594; Questing / Grinding System</em>
					</h5>
				</div>
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/icons/vot.png'); ?>" /> </span></center>	   	           
				<div class="service-content">
					<center><h2>= SERVER PROTECTIONS =</h2></center>
					<h4>&#8226; <font color="D4AD2F">GEPARD SHIELD 3.0</font>
					<h4>&#8226; <font color="D4AD2F">DDOS PROTECTED</font>
					<h4>&#8226; <font color="D4AD2F">ANTI - BOT CHECKER</font>
					</h4>				
				</div>
			</div> <!-- /bgrid -->
			
		</div> <!-- end features-list -->
	</div> <!-- end about-features -->	
</section> 
<!-- end about -->  

<!-- epic -->
<section id="team">

	<div class="row epic-team">
		<div class="features-list block-1-3 block-m-1-2 block-mob-full group">
			<div class="bgrid feature" data-aos="fade-up">	
				<center><span class="icon"><img src="<?php echo $this->themePath('images/gm/epic2.png'); ?>" /> </span></center>            
				<div class="service-content">
					<center><h2>= Nostalgia =</h2></center>
					<h4><font color="D4AD2F">&#8226; ROLES:</font> 
					<h4><em><font color="D4AD2F">&#8594; Game Development</font></em>
					<h4><em><font color="D4AD2F">&#8594; Story Writer</font></em>
					<h4><em><font color="D4AD2F">&#8594; Content Creation</font></em>
					<h4><em><font color="D4AD2F">&#8594; Graphic Designer</font></em>
					<h4><em><font color="D4AD2F">&#8594; Server Artist</font></em>					
					</h4>					
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">	
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/gm/epic1.png'); ?>" /> </span></center>                        
				<div class="service-content">	
					<center><h2>= Epic =</h2></center>  
					<h4><font color="D4AD2F">&#8226; ROLES:</font> 
					<h4><em><font color="D4AD2F">&#8594; Server Administration</font></em>
					<h4><em><font color="D4AD2F">&#8594; Game Development</font></em>
					<h4><em><font color="D4AD2F">&#8594; Game Features</font></em>
					<h4><em><font color="D4AD2F">&#8594; Server Gameplay</font></em>
					<h4><em><font color="D4AD2F">&#8594; Content Creation</font></em>
					</h4>	
					</div>	 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/gm/epic3.png'); ?>" /> </span></center>		            
				<div class="service-content">
					<center><h2>= Kael =</h2></center>
					<h4><font color="D4AD2F">&#8226; ROLES:</font> 
					<h4><em><font color="D4AD2F">&#8594; Game Development</font></em>
					<h4><em><font color="D4AD2F">&#8594; Technical Support</font></em>
					<h4><em><font color="D4AD2F">&#8594; Web Development</font></em>
					<h4><em><font color="D4AD2F">&#8594; Scripter / Programmer</font></em>
					</h4>	
					</div>	 
			</div> <!-- /bgrid -->

		<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/gm/epic4.png'); ?>" /> </span></center>	
				<div class="service-content">
					<center><h2>= Elena =</h2></center>
					<h4><font color="D4AD2F">&#8226; ROLES:</font> 
					<h4><em><font color="D4AD2F">&#8594; Server Events</font></em>
					<h4><em><font color="D4AD2F">&#8594; Discord / Facebook Moderator</font></em>
					<h4><em><font color="D4AD2F">&#8594; Server Advertisements</font></em>
					<h4><em><font color="D4AD2F">&#8594; Server Support</font></em>
					</h4>	
					</div>	 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/gm/epic5.png'); ?>" /> </span></center>	   	           
				<div class="service-content">
					<center><h2>= Celestial =</h2></center>
					<h4><font color="D4AD2F">&#8226; ROLES:</font> 
					<h4><em><font color="D4AD2F">&#8594; Server Events</font></em>
					<h4><em><font color="D4AD2F">&#8594; Discord / Facebook Moderator</font></em>
					<h4><em><font color="D4AD2F">&#8594; Server Advertisements</font></em>
					<h4><em><font color="D4AD2F">&#8594; Server Support</font></em>
					</h4>	
					</div>	 
			</div> <!-- /bgrid -->


			
		</div> <!-- end team-list -->
	</div> <!-- end epic-team -->	
</section> 
<!-- end about -->  


<!-- download -->
<section id="download">
	<div class="row">
		<div class="col-full">
			<h1 class="intro-header"  data-aos="fade-up">DOWNLOAD GAME CLIENT</h1>
			
			<h5 class="lead" data-aos="fade-up">
			   THESE ARE THE AVAILABLE LINKS OF OUR SERVER.
			</h5>
			
			<p>
			</p>

			<ul class="download-badges" data-os="fade-up">
				<div class="plan-bottom-part">
					<a href="<?php echo $config['downloads']['lite_client'];?>" target="_BLANK">
						<img src="<?php echo $this->themePath('images/button1s.png'); ?>" alt="Lite Client" />
					</a>
					<a href="<?php echo $config['downloads']['full_client'];?>" target="_BLANK">
						<img src="<?php echo $this->themePath('images/button2s.png'); ?>" alt="Full Client" />
					</a>
				</div>
				 <h5 class="lead" data-aos="fade-up">
			  IF YOU WILL FIND SOME BUGS AND ERRORS OR YOU HAVE A CONCERN, PLEASE MESSAGE OUR STAFF IMMEDIATELY IN OUR DISCORD SERVER.
			</h5>
			</ul>

		</div>
	</div>
</section> <!-- end download -->    
