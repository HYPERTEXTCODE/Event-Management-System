<body>
  <?php
  include "header.php";
 
  ?>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/back.gif');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore <br></strong> your faviourate event</h1>
            <div>
            <h1 class="mb-4"  data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong id="demo"><br></strong></h1>
            
            </div>
            
            <div class="browse d-md-flex col-md-12" >
                <div class="row">
                  <?php
                  $type_query = "SELECT * FROM event_type";
                  $run_query = mysqli_query($con,$type_query);
                  
                  if(mysqli_num_rows($run_query) > 0){
                    $i=0;   
                    while($row = mysqli_fetch_array($run_query)){
                           
                      $type_id = $row["type_id"];
                      $type_title = $row["type_title"];
                      $tag_id=$i++;
                      echo "
                      <span class='d-flex justify-content-center align-items-md-center'><a href='#$tag_id' style='border-radius:20px;margin-bottom:20px;'><i class=''></i>$type_title</a></span>
                                   
                      ";
                    }
                    
                  }
                  ?>
            	
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class=""></span></div></div>
              <div class="media-body p-2 mt-2">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScpGB0GG6OIjdkmJ_c0Lm_11gzfkzqpG8nYTvNukdrURV8eHQ/viewform"><h3 class="heading mb-3">Paper Presentation</h3></a>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class=""></span></div></div>
              <div class="media-body p-2 mt-2" style="" >
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScPMSQEs8AiEIaxuvnWlr4zB6IeYsei6giNjLtqLSJKcRH7aw/viewform"><h3 class="heading mb-3">Project Presentation</h3></a>
                <p></p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class=""></span></div></div>
              <div class="media-body p-2 mt-2">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSduPOa-RHIvPZgQS8Ubs8Vu_1F3Tioh9LetVYMg5rzHMzspyQ/viewform"> <h3 class="heading mb-3">Web Design</h3></a>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class=""></span></div></div>
              <div class="media-body p-2 mt-2">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfa-CgFNJGGTqQl_bJv8mqKYW_PlyrwhZempJdKNwTR1B0uLA/viewform"> <h3 class="heading mb-3">Code Racer</h3></a>
                <p></p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <section class=" ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Banners</span>
            <h2 class="mb-4"><strong>Events</strong> Posters</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="single-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs01.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs02.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/back.gif);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    
    <section class=" bg-light" id="events">
    	<div class="container" id="0">
    		<div class="row justify-content-start mb-5 pb-3">
             <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">events</span>
            <h2 class="mb-4"><strong>Register Your</strong>  Faviourate Event</h2>
          </div>
        </div>  
    		</div>
    	</div>
    </section>
    
    

    

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Achievements</h2>
            <span class="subheading">More than 10 Events Hosted</span>
          </div>
        </div>
    		<div class="justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Happy Participants</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Innovations</span>
		              </div>
		            </div>
		          </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="12">0</strong>
		                <span>Departments</span>
		              </div>
		            </div>
		          </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Coordinators</span>
		              </div>
		            </div>
		          </div>

		          
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


   

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
          	<span class="subheading">Best Directory Website</span>
            <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
            
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4 pb-3"><strong>Our</strong> Faculty</h2>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(https://www.rrce.org/rrce/wp-content/uploads/2013/07/Dr.Balakrishna-R.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
                        
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

    

    
		
		

    
  
                                    