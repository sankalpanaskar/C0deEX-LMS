@extends('layout_main.main_container')
@section('body')

    
    <section class="slider kindergarten-slider">
	    <div class="rev_slider_wrapper" style="margin-bottom:10px;">
        <div id="rev_slider_3" class="rev_slider">
          <!-- BEGIN SLIDES LIST -->
          <ul>
            <li data-transition="random" data-title="Slide Title" data-param1="Additional Text">
						<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
						<img src="{{asset('assets/images/slide06.jpg')}}" alt="Sky" class="rev-slidebg">
						<!-- BEGIN BASIC TEXT LAYER -->
						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
							data-x="left" data-hoffset="0"
							data-y="center" data-voffset="-280"
							data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							style="z-index: 6; font-size:45px; color:#fff; text-transform:capitalize; font-family: 'gothic' !important; white-space: nowrap;">Course Duration : 3 Months
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
							data-x="left" data-hoffset="0"
							data-y="center" data-voffset="-180"
							data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							style="z-index: 6; font-size:50px; color:#fff; text-transform:capitalize; font-family: 'gothic' !important;font-weight: bold;white-space: nowrap;">BPA Certification Course
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption font-lora sfb tp-resizeme letter-space-5"
							data-x="left" data-hoffset="0"
							data-y="center" data-voffset="-50"
							data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							style="z-index: 7; font-size:35px; color:#fff; font-family: 'gothic' !important; max-width: auto; max-height: auto; white-space: nowrap;">
						</div>

						<!-- LAYER NR. 4 -->
						<!-- <div class="tp-caption lfb tp-resizeme"
							data-x="left" data-hoffset="0"
							data-y="center" data-voffset="40"
							data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							style="z-index: 8;"> <a href="#." class="kids-btn">Join Today</a>
						</div> -->
					</li>
          <li data-transition="random" data-title="Slide Title" data-param1="Additional Text">
						<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
						<img src="{{asset('assets/images/slide01.jpg')}}" alt="Sky" class="rev-slidebg">
						<!-- BEGIN BASIC TEXT LAYER -->
						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
							data-x="left" data-hoffset="0"
							data-y="center" data-voffset="-280"
							data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family: 'gothic' !important; white-space: nowrap;">For Admission
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
							data-x="left" data-hoffset="0"
							data-y="center" data-voffset="-180"
							data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							style="z-index: 6; font-size:100px; color:#fff; text-transform:capitalize; font-family: 'gothic' !important;font-weight: bold;white-space: nowrap;">Apply Online
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption font-lora sfb tp-resizeme letter-space-5"
							data-x="left" data-hoffset="0"
							data-y="center" data-voffset="-50"
							data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							style="z-index: 7; font-size:35px; color:#000; font-family: 'gothic' !important; cursive; max-width: auto; max-height: auto; white-space: nowrap;">
						</div>

						<!-- LAYER NR. 4 -->
						<!-- <div class="tp-caption lfb tp-resizeme"
							data-x="left" data-hoffset="0"
							data-y="center" data-voffset="40"
							data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							style="z-index: 8;"> <a href="#." class="kids-btn">Join Today</a>
						</div> -->
					</li>
					<li data-transition="random" data-title="Slide Title" data-param1="Additional Text">
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="{{asset('assets/images/slide_seminar.jpg')}}" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-280"
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family: 'gothic' !important; white-space: nowrap;">Live Demo 10 <span style="text-transform: lowercase !important;">am</span>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-180"
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:100px; color:#fff; text-transform:capitalize; font-family: 'gothic' !important;font-weight: bold;white-space: nowrap;">On 27th May
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-50"
						data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 7; font-size:35px; color:#fff; font-family: 'gothic' !important; max-width: auto; max-height: auto; white-space: nowrap;">At Dakshin Barasat Mahamaya Cinema Hall
					</div>

					<!-- LAYER NR. 4 -->
					<!-- <div class="tp-caption lfb tp-resizeme"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="40"
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 8;"> <a href="#." class="kids-btn">Join Today</a>
					</div> -->
				</li>
        </ul><!-- END SLIDES LIST -->

      </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->

      <div class="slider-bottom-shape" style="width: 100%;">
      	<img src="{{asset('assets/images/kindergarten/slider-curve-bg2.png')}}" alt="">
      </div>

        <div class="slider-bottom-blocks">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-3">
        				<div class="sb-block sb-block1">
        					<img src="{{asset('assets/images/kindergarten/icon1.png')}}" alt="">
        					<h2>Courses</h2>
        					<!-- <p>Lorem ipsum dolor sity amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
        					<a href="#courses"><i class="fa fa-arrow-right"></i></a>
        				</div>
        			</div>
        			<div class="col-sm-3">
        				<div class="sb-block sb-block2">
        					<img src="{{asset('assets/images/kindergarten/icon2.png')}}" alt="">
        					<h2>Expert Teachers</h2>
        					<!-- <p>Lorem ipsum dolor sity amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
        					<a href="#teachers"><i class="fa fa-arrow-right"></i></a>
        				</div>
        			</div>
        			<div class="col-sm-3">
        				<div class="sb-block sb-block3">
        					<img src="{{asset('assets/images/kindergarten/icon3.png')}}" alt="" style="height:65px;">
        					<h2>Book Library</h2>
        					<!-- <p>Lorem ipsum dolor sity amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
        					<a href="javascript:void(0);"><i class="fa fa-arrow-right"></i></a>
        				</div>
        			</div>
        			<div class="col-sm-3">
        				<div class="sb-block sb-block4">
        					<img src="{{asset('assets/images/kindergarten/icon4.png')}}" alt="">
        					<h2>Certificates</h2>
        					<!-- <p>Lorem ipsum dolor sity amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
        					<a href="javascript:void(0);"><i class="fa fa-arrow-right"></i></a>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
	</section>

	<!--==================
		About
	===================-->
	<section class="about about05" style="padding: 260px 0 135px 0 !important;">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-7 about-text">
	                <h2>Welcome to <span>Bright Pixel Academy</span></h2>
	                <span class="heading-devider"></span>
	                <p>“We are all born with a divine fire in us. Our efforts should be to give wings to this fire and fill the world with the glow of its goodness.”<br>
                                          APJ Abdul Kalam</p>
	                <p>Bright Pixel Academy presents to you these wings to fly up to the highest level of your potentialities. We are providing our students a platform to discover their passion because Bright Pixel Academy believes that if you can organize your life around your passion, you can turn your passion into the most desired profession of your life. Our faculties are aimed to prepare our students not only with technical knowledge but also with such qualities that they can be the master of their own field. Bright Pixel Academy is committed to create such indomitable talents to bring revolutions in the animation industry.</p>
	                <!-- <a href="#">Read More</a> -->
	            </div>
	            <div class="col-sm-5">
                	<div class="about-image01">
                		<img src="{{asset('assets/images/kindergarten/a2.png')}}" alt="" class="img-responsive">
                	</div>
                	<div class="about-image02">
                		<img src="{{asset('assets/images/kindergarten/a1.png')}}" alt="" class="img-responsive">
                	</div>
	            </div>
	        </div>
	    </div>
	</section><!-- ends: .about -->

	<!--==================
		Call To Action
	===================-->
  <section class="counter-cta counter-cta08 cta12" style="background-repeat: no-repeat;background-size: cover;background-position: center;background-attachment: fixed;padding:50px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 counters">
					<div class="row">
						<div class="col-sm-6 counters-block">
							<span>10+</span>
							<span>Course</span>
						</div>
						<div class="col-sm-6 counters-block">
							<span>200+</span>
							<span>Seats</span>
						</div>
						<div class="col-sm-6 counters-block">
							<span>25+</span>
							<span>Faculty</span>
						</div>
						<!-- <div class="col-sm-6 counters-block">
							<span>940+</span>
							<span>Courses Published</span>
						</div> -->
					</div>
				</div><!-- Ends: .counters -->
				<div class="col-md-6 col-sm-6">
					<!-- <div class="cta-from">
						<form action="#">
							<h3>Register Now</h3>
							<div class="form-group">
								<input type="text" placeholder="Name">
								<input type="email" placeholder="Email">
								<textarea placeholder="Message"></textarea>
								<div>
									<button type="submit" class="el-btn-medium">Send Now</button>
								</div>
							</div>
						</form>
					</div>-->
          <img src="{{asset('assets/images/animation_1.png')}}" alt="" style="width:50%;">
				</div>
			</div>
		</div>
	</section>

	<!--==================
		Courses
	===================-->
	<section class="all-course-wrapper online-course-list">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 section-header section-header02">
					<h2>Our <span>Courses</span></h2>
					<span class="heading-devider"></span>
				</div>
				<div class="col-md-12">
					<div class="course-container">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="online-course-single">
									<figure>
										<img src="{{asset('assets/images/online-course/3d_animation.png')}}" alt="" class="img-responsive">
										<figcaption>
											<ul class="list-unstyled">
												<li><a href="#animation"><i class="fa fa-paper-plane-o"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="online-course-details">
										<p class="price-tag"><span>Animation</span></p>
										<div class="course-excerpt">
											<div class="row">
												<div class="col-sm-4">
													<span>Duration</span>
													<span>18 Months</span>
												</div>
												<div class="col-sm-4">
													<span>Seats</span>
													<span>20</span>
												</div>
												<div class="col-sm-4">
													<span>Class Time</span>
													<span>Inform Soon</span>
												</div>
											</div>
										</div><!-- Ends: .course-excerpt -->
										<div class="course-excerpt-bottom">
											<ul class="list-unstyled">
												<li><i class="fa fa-comment"></i> 09</li>
												<li><i class="fa fa-heart"></i> 80</li>
												<li>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</li>
											</ul>
										</div><!-- Ends: .course-excerpt-bottom -->
										<div class="course-details-btn">
											<a href="#animation">View Details</a>
										</div><!-- Ends: .course-details-btn -->

									</div><!-- Ends: .online-course-details -->
								</div><!-- Ends: .online-course-single -->
							</div><!-- Ends: .col-sm-4 -->

							<div class="col-md-4 col-sm-6">
								<div class="online-course-single">
									<figure>
										<img src="{{asset('assets/images/online-course/vfx_cource.png')}}" alt="" class="img-responsive">
										<figcaption>
											<ul class="list-unstyled">
												<li><a href="#vfx"><i class="fa fa-paper-plane-o"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="online-course-details">
										<p class="price-tag"><span>VFX</span></p>
										<div class="course-excerpt">
											<div class="row">
												<div class="col-sm-4">
													<span>Duration</span>
													<span>18 Months</span>
												</div>
												<div class="col-sm-4">
													<span>Seats</span>
													<span>20</span>
												</div>
												<div class="col-sm-4">
													<span>Class Time</span>
													<span>Inform Soon</span>
												</div>
											</div>
										</div><!-- Ends: .course-excerpt -->
										<div class="course-excerpt-bottom">
											<ul class="list-unstyled">
												<li><i class="fa fa-comment"></i> 09</li>
												<li><i class="fa fa-heart"></i> 80</li>
												<li>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</li>
											</ul>
										</div><!-- Ends: .course-excerpt-bottom -->
										<div class="course-details-btn">
											<a href="#vfx">View Details</a>
										</div><!-- Ends: .course-details-btn -->

									</div><!-- Ends: .online-course-details -->
								</div><!-- Ends: .online-course-single -->
							</div><!-- Ends: .col-sm-4 -->

							<div class="col-md-4 col-sm-6">
								<div class="online-course-single">
									<figure>
										<img src="{{asset('assets/images/online-course/web_design.png')}}" alt="" class="img-responsive">
										<figcaption>
											<ul class="list-unstyled">
												<li><a href="#graphics_web_design"><i class="fa fa-paper-plane-o"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="online-course-details">
										<p class="price-tag"><span>Design</span></p>
										<div class="course-excerpt">
											<div class="row">
												<div class="col-sm-4">
													<span>Duration</span>
													<span>12 Months</span>
												</div>
												<div class="col-sm-4">
													<span>Seats</span>
													<span>20</span>
												</div>
												<div class="col-sm-4">
													<span>Class Time</span>
													<span>Inform Soon</span>
												</div>
											</div>
										</div><!-- Ends: .course-excerpt -->
										<div class="course-excerpt-bottom">
											<ul class="list-unstyled">
												<li><i class="fa fa-comment"></i> 09</li>
												<li><i class="fa fa-heart"></i> 80</li>
												<li>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</li>
											</ul>
										</div><!-- Ends: .course-excerpt-bottom -->
										<div class="course-details-btn">
											<a href="#graphics_web_design">View Details</a>
										</div><!-- Ends: .course-details-btn -->

									</div><!-- Ends: .online-course-details -->
								</div><!-- Ends: .online-course-single -->
							</div><!-- Ends: .col-sm-4 -->

							<div class="col-md-4 col-sm-6">
								<div class="online-course-single">
									<figure>
										<img src="{{asset('assets/images/online-course/film_edit_1.png')}}" alt="" class="img-responsive">
										<figcaption>
											<ul class="list-unstyled">
												<li><a href="#film_color"><i class="fa fa-paper-plane-o"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="online-course-details">
										<p class="price-tag"><span>FILM COLOR(DI)</span></p>
										<div class="course-excerpt">
											<div class="row">
												<div class="col-sm-4">
													<span>Duration</span>
													<span>6 Months</span>
												</div>
												<div class="col-sm-4">
													<span>Seats</span>
													<span>20</span>
												</div>
												<div class="col-sm-4">
													<span>Class Time</span>
													<span>Inform Soon</span>
												</div>
											</div>
										</div><!-- Ends: .course-excerpt -->
										<div class="course-excerpt-bottom">
											<ul class="list-unstyled">
												<li><i class="fa fa-comment"></i> 09</li>
												<li><i class="fa fa-heart"></i> 80</li>
												<li>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</li>
											</ul>
										</div><!-- Ends: .course-excerpt-bottom -->
										<div class="course-details-btn">
											<a href="#film_color">View Details</a>
										</div><!-- Ends: .course-details-btn -->

									</div><!-- Ends: .online-course-details -->
								</div><!-- Ends: .online-course-single -->
							</div><!-- Ends: .col-sm-4 -->

							<div class="col-md-4 col-sm-6">
								<div class="online-course-single">
									<figure>
										<img src="{{asset('assets/images/online-course/film_color_1.png')}}" alt="" class="img-responsive">
										<figcaption>
											<ul class="list-unstyled">
												<li><a href="#edit"><i class="fa fa-paper-plane-o"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="online-course-details">
										<p class="price-tag"><span>EDIT</span></p>
										<div class="course-excerpt">
											<div class="row">
												<div class="col-sm-4">
													<span>Duration</span>
													<span>18 Months</span>
												</div>
												<div class="col-sm-4">
													<span>Seats</span>
													<span>20</span>
												</div>
												<div class="col-sm-4">
													<span>Class Time</span>
													<span>Inform Soon</span>
												</div>
											</div>
										</div><!-- Ends: .course-excerpt -->
										<div class="course-excerpt-bottom">
											<ul class="list-unstyled">
												<li><i class="fa fa-comment"></i> 09</li>
												<li><i class="fa fa-heart"></i> 80</li>
												<li>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</li>
											</ul>
										</div><!-- Ends: .course-excerpt-bottom -->
										<div class="course-details-btn">
											<a href="#edit">View Details</a>
										</div><!-- Ends: .course-details-btn -->

									</div><!-- Ends: .online-course-details -->
								</div><!-- Ends: .online-course-single -->
							</div><!-- Ends: .col-sm-4 -->

							<div class="col-md-4 col-sm-6">
								<div class="online-course-single">
									<figure>
										<img src="{{asset('assets/images/online-course/digital_photo.png')}}" alt="" class="img-responsive">
										<figcaption>
											<ul class="list-unstyled">
												<li><a href="#photography"><i class="fa fa-paper-plane-o"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="online-course-details">
										<p class="price-tag"><span>PHOTOGRAPHY</span></p>
										<div class="course-excerpt">
											<div class="row">
												<div class="col-sm-4">
													<span>Duration</span>
													<span>6 Months</span>
												</div>
												<div class="col-sm-4">
													<span>Seats</span>
													<span>20</span>
												</div>
												<div class="col-sm-4">
													<span>Class Time</span>
													<span>Inform Soon</span>
												</div>
											</div>
										</div><!-- Ends: .course-excerpt -->
										<div class="course-excerpt-bottom">
											<ul class="list-unstyled">
												<li><i class="fa fa-comment"></i> 09</li>
												<li><i class="fa fa-heart"></i> 80</li>
												<li>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</li>
											</ul>
										</div><!-- Ends: .course-excerpt-bottom -->
										<div class="course-details-btn">
											<a href="#photography">View Details</a>
										</div><!-- Ends: .course-details-btn -->

									</div><!-- Ends: .online-course-details -->
								</div><!-- Ends: .online-course-single -->
							</div><!-- Ends: .col-sm-4 -->

							<div class="col-md-4 col-sm-6">
								<div class="online-course-single">
									<figure>
										<img src="{{asset('assets/images/online-course/drone1.png')}}" alt="" class="img-responsive">
										<figcaption>
											<ul class="list-unstyled">
												<li><a href="#drone_camera"><i class="fa fa-paper-plane-o"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="online-course-details">
										<p class="price-tag"><span>DRONE CAMERA</span></p>
										<div class="course-excerpt">
											<div class="row">
												<div class="col-sm-4">
													<span>Duration</span>
													<span>6 Months</span>
												</div>
												<div class="col-sm-4">
													<span>Seats</span>
													<span>10</span>
												</div>
												<div class="col-sm-4">
													<span>Class Time</span>
													<span>Inform Soon</span>
												</div>
											</div>
										</div><!-- Ends: .course-excerpt -->
										<div class="course-excerpt-bottom">
											<ul class="list-unstyled">
												<li><i class="fa fa-comment"></i> 09</li>
												<li><i class="fa fa-heart"></i> 80</li>
												<li>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</li>
											</ul>
										</div><!-- Ends: .course-excerpt-bottom -->
										<div class="course-details-btn">
											<a href="#drone_camera">View Details</a>
										</div><!-- Ends: .course-details-btn -->

									</div><!-- Ends: .online-course-details -->
								</div><!-- Ends: .online-course-single -->
							</div><!-- Ends: .col-sm-4 -->

							<div class="col-md-4 col-sm-6">
								<div class="online-course-single">
									<figure>
										<img src="{{asset('assets/images/online-course/sound1.png')}}" alt="" class="img-responsive">
										<figcaption>
											<ul class="list-unstyled">
												<li><a href="#sound_edit"><i class="fa fa-paper-plane-o"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="online-course-details">
										<p class="price-tag"><span>Sound</span></p>
										<div class="course-excerpt">
											<div class="row">
												<div class="col-sm-4">
													<span>Duration</span>
													<span>6 Months</span>
												</div>
												<div class="col-sm-4">
													<span>Seats</span>
													<span>10</span>
												</div>
												<div class="col-sm-4">
													<span>Class Time</span>
													<span>Inform Soon</span>
												</div>
											</div>
										</div><!-- Ends: .course-excerpt -->
										<div class="course-excerpt-bottom">
											<ul class="list-unstyled">
												<li><i class="fa fa-comment"></i> 09</li>
												<li><i class="fa fa-heart"></i> 80</li>
												<li>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</li>
											</ul>
										</div><!-- Ends: .course-excerpt-bottom -->
										<div class="course-details-btn">
											<a href="#sound_edit">View Details</a>
										</div><!-- Ends: .course-details-btn -->

									</div><!-- Ends: .online-course-details -->
								</div><!-- Ends: .online-course-single -->
							</div><!-- Ends: .col-sm-4 -->

							<div class="col-md-4 col-sm-6">
								<div class="online-course-single">
									<figure>
										<img src="{{asset('assets/images/online-course/computer_basic1.png')}}" alt="" class="img-responsive">
										<figcaption>
											<ul class="list-unstyled">
												<li><a href="#computer_basic"><i class="fa fa-paper-plane-o"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="online-course-details">
										<p class="price-tag"><span>Computer Basic</span></p>
										<div class="course-excerpt">
											<div class="row">
												<div class="col-sm-4">
													<span>Duration</span>
													<span>3 Months</span>
												</div>
												<div class="col-sm-4">
													<span>Seats</span>
													<span>50</span>
												</div>
												<div class="col-sm-4">
													<span>Class Time</span>
													<span>Inform Soon</span>
												</div>
											</div>
										</div><!-- Ends: .course-excerpt -->
										<div class="course-excerpt-bottom">
											<ul class="list-unstyled">
												<li><i class="fa fa-comment"></i> 09</li>
												<li><i class="fa fa-heart"></i> 80</li>
												<li>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</li>
											</ul>
										</div><!-- Ends: .course-excerpt-bottom -->
										<div class="course-details-btn">
											<a href="#computer_basic">View Details</a>
										</div><!-- Ends: .course-details-btn -->

									</div><!-- Ends: .online-course-details -->
								</div><!-- Ends: .online-course-single -->
							</div><!-- Ends: .col-sm-4 -->

						</div>
					</div><!-- Ends: .course-container -->
				</div><!-- Ends: .col-md-12 -->

			</div>
		</div>
	</section>

	<!--==================
		Countdown & Register
	===================-->
  <section class="video video-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="vt-box">
						<div class="vt-text">
							<h2>Opening Soon</h2>
							<!-- <p>Lorem ipsums dolors sit amet, consectetur adipiselo elit. sed do eiusmod tempor the incididunt ut labore et.</p> -->
						</div>
						<div class="vt-btn">
							<a href="javascript:void(0);">Watch Introduction</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 video-play-btn">
					<a href="https://vimeo.com/266858857" class="video-iframe"><span><i class="fa fa-play"></i></span> <span>Watch Intro Video</span></a>
				</div>
			</div>
		</div>
	</section>

	<!--==================
		Teachers
	===================-->

	<!--==================
		Testimonial
	===================-->
	<section class="testimonial testimonial-style02 kids-testimonial">
		<div class="container">
			<div class="row">
				<div id="testimonial-carousel02" class="owl-carousel testimonial-carousel02 col-sm-12">
					<div class="testimonial-single row">
						<div class="col-sm-6">
							<div class="ts-left">
								<div class="client-image">
									<img src="{{asset('assets/images/testimonial.jpg')}}" alt="" class="img-responsive">
								</div>
								<div class="client-content">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia.</p>
									<ul class="list-unstyled client-rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h3 class="client-info">Oscar Charls, <span>Parents</span></h3>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="ts-right">
								<div class="client-content">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia.</p>
									<ul class="list-unstyled client-rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h3 class="client-info">Oscar Charls, <span>Parents</span></h3>
								</div>
								<div class="client-image">
									<img src="{{asset('assets/images/testimonial.jpg')}}" alt="" class="img-responsive">
								</div>
							</div>
						</div>
					</div><!-- ends: .testimonial-single -->
					<div class="testimonial-single row">
						<div class="col-sm-6">
							<div class="ts-left">
								<div class="client-image">
									<img src="{{asset('assets/images/testimonial.jpg')}}" alt="" class="img-responsive">
								</div>
								<div class="client-content">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia.</p>
									<ul class="list-unstyled client-rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h3 class="client-info">Oscar Charls, <span>Parents</span></h3>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="ts-right">
								<div class="client-content">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia.</p>
									<ul class="list-unstyled client-rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h3 class="client-info">Oscar Charls, <span>Parents</span></h3>
								</div>
								<div class="client-image">
									<img src="{{asset('assets/images/testimonial.jpg')}}" alt="" class="img-responsive">
								</div>
							</div>
						</div>
					</div><!-- ends: .testimonial-single -->
					<div class="testimonial-single row">
						<div class="col-sm-6">
							<div class="ts-left">
								<div class="client-image">
									<img src="{{asset('assets/images/testimonial.jpg')}}" alt="" class="img-responsive">
								</div>
								<div class="client-content">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia.</p>
									<ul class="list-unstyled client-rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h3 class="client-info">Oscar Charls, <span>Parents</span></h3>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="ts-right">
								<div class="client-content">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia.</p>
									<ul class="list-unstyled client-rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h3 class="client-info">Oscar Charls, <span>Parents</span></h3>
								</div>
								<div class="client-image">
									<img src="{{asset('assets/images/testimonial.jpg')}}" alt="" class="img-responsive">
								</div>
							</div>
						</div>
					</div><!-- ends: .testimonial-single -->
				</div>
			</div>
		</div>
	</section><!-- ends: .testimonial -->

@endsection


