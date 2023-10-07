@extends('layouts.master')

@section('content')
    <!--Page Info-->
		{{-- <section class="page-info">
			<div class="auto-container">
				<div class="links">
					<a href="{{route('index')}}">Home</a> &ensp;<i class="fa fa-caret-right"></i>&ensp; <a
						href="destinations.html">Destination</a> &ensp;<i class="fa fa-caret-right"></i> &ensp;<a
						href="destinations.html">Rajasthan</a> &ensp;<i class="fa fa-caret-right"></i>&ensp; <span
						class="current">Discover Rajasthan</span>
				</div>
			</div>
		</section> --}}

		<!-- Banner Section -->
		<section class="packages-banner style-two" style="background-image: url({{ asset('storage') }}/{{$tour->image}});">
		</section>
		<!--End Banner Section -->

		<!-- Package Detail Section -->
		<section class="package-detail-section">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Content Column -->
					<div class="content-column col-xl-8 col-lg-7 col-md-12 col-sm-12">

						<!-- Upper Box -->
						<div class="upper-box">
							<div class="clearfix">
								<div class="pull-left">
									<h4>{{$tour->title}}</h4>
								</div>
								<div class="pull-right">
									<div class="price">${{$tour->price}}<span>/Person</span></div>
								</div>
							</div>
						</div>

						<!-- Package Info Box -->
						<div class="package-info-box style-two">
							<div class="inner-container d-flex justify-content-between align-items-center">

								<!-- Package Info Block -->
								<div class="package-info-block">
									<div class="inner-box">
										<div class="icon"><img src="{{ asset('assets/website') }}/images/icons/duration.svg" alt="" /></div>
										<strong>Duration</strong>
										{{$tour->duration}}
									</div>
								</div>

								<!-- Package Info Block -->
								<div class="package-info-block">
									<div class="inner-box">
										<div class="icon"><img src="{{ asset('assets/website') }}/images/icons/category-icon.svg" alt="" /></div>
										<strong>Category</strong>
										{{isset($tour->category) ? $tour->category->name : ''}}
									</div>
								</div>

								<!-- Package Info Block -->
								<div class="package-info-block">
									<div class="inner-box">
										<div class="icon"><img src="{{ asset('assets/website') }}/images/icons/team-group.svg" alt="" /></div>
										<strong>Group Size/Limit</strong>
										{{$tour->group_limit}} Person
									</div>
								</div>

							</div>
						</div>
						<!-- End Package Info Box -->

						<!-- Rating Box -->
						{{-- <div class="rating-box">
							<div class="clearfix">
								<div class="pull-left">
									<div class="rating">
										(5 review) &nbsp;
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<div class="pull-right">
									<ul class="post-info">
										<li><span class="icon"><img src="{{ asset('assets/website') }}/images/icons/share-icon.svg"
													alt="" /></span>Share</li>
										<li><span class="icon "><img src="{{ asset('assets/website') }}/images/icons/review-icon.svg"
													alt="" /></span>Review</li>
										<li><span class="icon "><img src="{{ asset('assets/website') }}/images/icons/heart-icon-1.svg"
													alt="" /></span>Wishlist</li>
									</ul>
								</div>
							</div>
						</div> --}}
						<!-- Rating Box -->

						<h5>{{$tour->title}}</h5>
						{!! $tour->description !!}
						<div class="feature-box">
							<h5>Features</h5>
                            @php
                                $options = explode(",", $tour->features)
                            @endphp
							<ul class="feature-list">
                                @foreach ($options as $option)
								<li>{{$option}}</li>
                                @endforeach
							</ul>

						</div>
                        <div class="feature-box">
							<h5>Facilities</h5>
                            @php
                                $options = explode(",", $tour->facilities)
                            @endphp
							<ul class="feature-list">
                                @foreach ($options as $option)
								<li>{{$option}}</li>
                                @endforeach
							</ul>
						</div>
                        <div class="feature-box">
							<h5>Includes</h5>
                            @php
                                $options = explode(",", $tour->includes)
                            @endphp
							<ul class="feature-list">
                                @foreach ($options as $option)
								<li>{{$option}}</li>
                                @endforeach
							</ul>
						</div>
                        <div class="feature-box">
							<h5>Excludes</h5>
                            @php
                                $options = explode(",", $tour->excludes)
                            @endphp
							<ul class="feature-list">
                                @foreach ($options as $option)
								<li>{{$option}}</li>
                                @endforeach
							</ul>
						</div>
						{{-- <div class="facility-box">
							<h5>Facilities</h5>
							<div class="row clearfix">
								<div class="column col-lg-3 col-md-4 col-sm-12">
									<!-- Facility Box Two -->
									<div class="facility-box-two">
										<span class="icon">
											<img src="{{ asset('assets/website') }}/images/icons/tour-guide.svg" alt="" />
										</span>
										Tour Operator
									</div>
								</div>
								<div class="column col-lg-3 col-md-4 col-sm-12">
									<!-- Facility Box Two -->
									<div class="facility-box-two">
										<span class="icon">
											<img src="{{ asset('assets/website') }}/images/icons/bill.svg" alt="" />
										</span>
										Online Ticketing
									</div>
								</div>
								<div class="column col-lg-3 col-md-4 col-sm-12">
									<!-- Facility Box Two -->
									<div class="facility-box-two">
										<span class="icon">
											<img src="{{ asset('assets/website') }}/images/icons/passport.svg" alt="" />
										</span>
										Passport & Visa
									</div>
								</div>
								<div class="column col-lg-3 col-md-4 col-sm-12">
									<!-- Facility Box Two -->
									<div class="facility-box-two">
										<span class="icon">
											<img src="{{ asset('assets/website') }}/images/icons/travel-insurance.svg" alt="" />
										</span>
										Travel Insurance
									</div>
								</div>
								<div class="column col-lg-3 col-md-4 col-sm-12">
									<!-- Facility Box Two -->
									<div class="facility-box-two">
										<span class="icon">
											<img src="{{ asset('assets/website') }}/images/icons/ship.svg" alt="" />
										</span>
										Cruise Services
									</div>
								</div>
								<div class="column col-lg-3 col-md-4 col-sm-12">
									<!-- Facility Box Two -->
									<div class="facility-box-two">
										<span class="icon">
											<img src="{{ asset('assets/website') }}/images/icons/calendar.svg" alt="" />
										</span>
										Hotel Booking
									</div>
								</div>
								<div class="column col-lg-3 col-md-4 col-sm-12">
									<!-- Facility Box Two -->
									<div class="facility-box-two">
										<span class="icon">
											<img src="{{ asset('assets/website') }}/images/icons/key.svg" alt="" />
										</span>
										Car Rental
									</div>
								</div>
								<div class="column col-lg-3 col-md-4 col-sm-12">
									<!-- Facility Box Two -->
									<div class="facility-box-two">
										<span class="icon">
											<img src="{{ asset('assets/website') }}/images/icons/events.svg" alt="" />
										</span>
										Event Organizers
									</div>
								</div>
							</div>
						</div> --}}

						<!-- Itinerary Box -->
						{{-- <div class="itinerary-box">
							<h5>Itinerary</h5>
							<div class="faq-one style-two">
								<div class="accordion-box clearfix">
									<!--Block-->
									<div class="accordion block active-block">
										<div class="acc-btn active">Day 1 <i class="fa-regular fa-angle-down"></i></div>
										<div class="acc-content">
											<div class="content">
												<div class="bold-text">Ranthambore National Park</div>
												<div class="text">Leaving them to be a high-valued target for robbery,
													assault, and more. There could be threats made against executives
													and even bribery and blackmail from a member of the public or
													disgruntled employees.</div>
												<!-- Faq Gallery -->
												<div class="faq-gallery">
													<div class="row clearfix">
														<!-- Image Column -->
														<div class="image-column col-lg-4 col-md-4 col-sm-12">
															<div class="image">
																<img src="{{ asset('assets/website') }}/images/resource/faq-1.jpg" alt="" />
															</div>
														</div>
														<!-- Image Column -->
														<div class="image-column col-lg-4 col-md-4 col-sm-12">
															<div class="image">
																<img src="{{ asset('assets/website') }}/images/resource/faq-1.jpg" alt="" />
															</div>
														</div>
														<!-- Map Column -->
														<div class="map-column col-lg-4 col-md-4 col-sm-12">
															<div class="map-boxed">
																<span class="icon fas fa-location-dot fa-fw"></span>
																<h6>Google map</h6>
															</div>
														</div>
													</div>
												</div>
												<!-- End Faq Gallery -->

												<!-- Faq Info Tabs -->
												<div class="faq-info-tabs">
													<!-- Faq Tabs -->
													<div class="faq-tabs tabs-box">

														<!-- Tab Btns -->
														<ul class="tab-btns tab-buttons clearfix">
															<li data-tab="#prod-1" class="tab-btn active-btn">
																Accomodation</li>
															<li data-tab="#prod-2" class="tab-btn">Meals</li>
															<li data-tab="#prod-3" class="tab-btn">Special Info</li>
														</ul>

														<!-- Tabs Container -->
														<div class="tabs-content">

															<!-- Tab / Active Tab -->
															<div class="tab active-tab" id="prod-1">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																			<li>
																				<span>Double Room</span>
																				$50 Extar
																			</li>
																			<li>
																				<span>Single Room</span>
																				$50 Extar
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

															<!-- Tab -->
															<div class="tab" id="prod-2">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																			<li>
																				<span>Double Room</span>
																				$50 Extar
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

															<!-- Tab -->
															<div class="tab" id="prod-3">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
									<!--Block-->
									<div class="accordion block">
										<div class="acc-btn">Day 2 <i class="fa-regular fa-angle-down"></i></div>
										<div class="acc-content">
											<div class="content">
												<div class="bold-text">Ranthambore National Park</div>
												<div class="text">Leaving them to be a high-valued target for robbery,
													assault, and more. There could be threats made against executives
													and even bribery and blackmail from a member of the public or
													disgruntled employees.</div>
												<!-- Faq Gallery -->
												<div class="faq-gallery">
													<div class="row clearfix">
														<!-- Image Column -->
														<div class="image-column col-lg-4 col-md-4 col-sm-12">
															<div class="image">
																<img src="{{ asset('assets/website') }}/images/resource/faq-1.jpg" alt="" />
															</div>
														</div>
														<!-- Image Column -->
														<div class="image-column col-lg-4 col-md-4 col-sm-12">
															<div class="image">
																<img src="{{ asset('assets/website') }}/images/resource/faq-1.jpg" alt="" />
															</div>
														</div>
														<!-- Map Column -->
														<div class="map-column col-lg-4 col-md-4 col-sm-12">
															<div class="map-boxed">
																<span class="icon fas fa-location-dot fa-fw"></span>
																<h6>Google map</h6>
															</div>
														</div>
													</div>
												</div>
												<!-- End Faq Gallery -->

												<!-- Faq Info Tabs -->
												<div class="faq-info-tabs">
													<!-- Faq Tabs -->
													<div class="faq-tabs tabs-box">

														<!-- Tab Btns -->
														<ul class="tab-btns tab-buttons clearfix">
															<li data-tab="#prod-4" class="tab-btn active-btn">
																Accomodation</li>
															<li data-tab="#prod-5" class="tab-btn">Meals</li>
															<li data-tab="#prod-6" class="tab-btn">Special Info</li>
														</ul>

														<!-- Tabs Container -->
														<div class="tabs-content">

															<!-- Tab / Active Tab -->
															<div class="tab active-tab" id="prod-4">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																			<li>
																				<span>Double Room</span>
																				$50 Extar
																			</li>
																			<li>
																				<span>Single Room</span>
																				$50 Extar
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

															<!-- Tab -->
															<div class="tab" id="prod-5">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																			<li>
																				<span>Double Room</span>
																				$50 Extar
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

															<!-- Tab -->
															<div class="tab" id="prod-6">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
									<!--Block-->
									<div class="accordion block">
										<div class="acc-btn">Day 3 <i class="fa-regular fa-angle-down"></i></div>
										<div class="acc-content">
											<div class="content">
												<div class="bold-text">Ranthambore National Park</div>
												<div class="text">Leaving them to be a high-valued target for robbery,
													assault, and more. There could be threats made against executives
													and even bribery and blackmail from a member of the public or
													disgruntled employees.</div>
												<!-- Faq Gallery -->
												<div class="faq-gallery">
													<div class="row clearfix">
														<!-- Image Column -->
														<div class="image-column col-lg-4 col-md-4 col-sm-12">
															<div class="image">
																<img src="{{ asset('assets/website') }}/images/resource/faq-1.jpg" alt="" />
															</div>
														</div>
														<!-- Image Column -->
														<div class="image-column col-lg-4 col-md-4 col-sm-12">
															<div class="image">
																<img src="{{ asset('assets/website') }}/images/resource/faq-1.jpg" alt="" />
															</div>
														</div>
														<!-- Map Column -->
														<div class="map-column col-lg-4 col-md-4 col-sm-12">
															<div class="map-boxed">
																<span class="icon fas fa-location-dot fa-fw"></span>
																<h6>Google map</h6>
															</div>
														</div>
													</div>
												</div>
												<!-- End Faq Gallery -->

												<!-- Faq Info Tabs -->
												<div class="faq-info-tabs">
													<!-- Faq Tabs -->
													<div class="faq-tabs tabs-box">

														<!-- Tab Btns -->
														<ul class="tab-btns tab-buttons clearfix">
															<li data-tab="#prod-7" class="tab-btn active-btn">
																Accomodation</li>
															<li data-tab="#prod-8" class="tab-btn">Meals</li>
															<li data-tab="#prod-9" class="tab-btn">Special Info</li>
														</ul>

														<!-- Tabs Container -->
														<div class="tabs-content">

															<!-- Tab / Active Tab -->
															<div class="tab active-tab" id="prod-7">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																			<li>
																				<span>Double Room</span>
																				$50 Extar
																			</li>
																			<li>
																				<span>Single Room</span>
																				$50 Extar
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

															<!-- Tab -->
															<div class="tab" id="prod-8">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																			<li>
																				<span>Double Room</span>
																				$50 Extar
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

															<!-- Tab -->
															<div class="tab" id="prod-9">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
									<!--Block-->
									<div class="accordion block">
										<div class="acc-btn">Day 4 <i class="fa-regular fa-angle-down"></i></div>
										<div class="acc-content">
											<div class="content">
												<div class="bold-text">Ranthambore National Park</div>
												<div class="text">Leaving them to be a high-valued target for robbery,
													assault, and more. There could be threats made against executives
													and even bribery and blackmail from a member of the public or
													disgruntled employees.</div>
												<!-- Faq Gallery -->
												<div class="faq-gallery">
													<div class="row clearfix">
														<!-- Image Column -->
														<div class="image-column col-lg-4 col-md-4 col-sm-12">
															<div class="image">
																<img src="{{ asset('assets/website') }}/images/resource/faq-1.jpg" alt="" />
															</div>
														</div>
														<!-- Image Column -->
														<div class="image-column col-lg-4 col-md-4 col-sm-12">
															<div class="image">
																<img src="{{ asset('assets/website') }}/images/resource/faq-1.jpg" alt="" />
															</div>
														</div>
														<!-- Map Column -->
														<div class="map-column col-lg-4 col-md-4 col-sm-12">
															<div class="map-boxed">
																<span class="icon fas fa-location-dot fa-fw"></span>
																<h6>Google map</h6>
															</div>
														</div>
													</div>
												</div>
												<!-- End Faq Gallery -->

												<!-- Faq Info Tabs -->
												<div class="faq-info-tabs">
													<!-- Faq Tabs -->
													<div class="faq-tabs tabs-box">

														<!-- Tab Btns -->
														<ul class="tab-btns tab-buttons clearfix">
															<li data-tab="#prod-10" class="tab-btn active-btn">
																Accomodation</li>
															<li data-tab="#prod-11" class="tab-btn">Meals</li>
															<li data-tab="#prod-12" class="tab-btn">Special Info</li>
														</ul>

														<!-- Tabs Container -->
														<div class="tabs-content">

															<!-- Tab / Active Tab -->
															<div class="tab active-tab" id="prod-10">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																			<li>
																				<span>Double Room</span>
																				$50 Extar
																			</li>
																			<li>
																				<span>Single Room</span>
																				$50 Extar
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

															<!-- Tab -->
															<div class="tab" id="prod-11">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																			<li>
																				<span>Double Room</span>
																				$50 Extar
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

															<!-- Tab -->
															<div class="tab" id="prod-12">
																<div class="inner-content">
																	<p>There could be threats made against executives
																		and even bribery and blackmail from a member of
																		the public or disgruntled employees.</p>
																	<div class="hotel-info">
																		<div class="hotel-image">
																			<img src="{{ asset('assets/website') }}/images/resource/hotel.jpg"
																				alt="" />
																		</div>
																		<div class="hotel-name">HOTEL RAJASTHAN PALACE
																			JAIPUR</div>
																		<ul class="list">
																			<li>
																				<span>Shared Room</span>
																				Free
																			</li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div>
									</div>

								</div>
							</div>
						</div> --}}
						<!-- End Itinerary Box -->

						<!-- Gallery Box -->
						<div class="gallery-box">
							<h5>Gallery</h5>
							<div class="single-item-carousel owl-carousel owl-theme">
								<div class="slide">
									<div class="image">
										<img src="{{ asset('assets/website') }}/images/resource/gallery.jpg" alt="" />
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="{{ asset('assets/website') }}/images/resource/gallery.jpg" alt="" />
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="{{ asset('assets/website') }}/images/resource/gallery.jpg" alt="" />
									</div>
								</div>
							</div>
						</div>

						<!-- Map Box -->
						<div class="map-box">
							<h5>Location</h5>
							<!--Map Outer-->
                            {{isset($tour->destination) ? $tour->destination->name : ''}}
							{{-- <div class="map-outer">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s"
									allowfullscreen=""></iframe>
							</div> --}}
						</div>

					</div>
					<!-- Sidebar Column -->
					<div class="sidebar-column col-xl-4 col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">

							<!-- Booking Widget -->
							<div class="sidebar-widget booking-widget"
								style="background-image: url({{ asset('assets/website') }}/images/background/booking-bg.jpg);">
								<h5>Book this Tour</h5>

								<!-- Booking Form -->
								<div class="booking-form">

									<!-- Contact Form -->
									<form method="post" action="{{route('tours.booking')}}" id="contact-form">
                                        @csrf
                                        <input type="hidden" name="tour_id" value="{{$tour->id}}">
                                        <input type="hidden" name="tour_title" value="{{$tour->title}}">
										<div class="form-group">
											<input type="text" name="name" placeholder="Full Name" required>
											<span class="icon fal fa-user fa-fw"></span>
										</div>

										<div class="form-group">
											<input type="email" name="email" placeholder="Email" required>
											<span class="icon fal fa-envelope fa-fw"></span>
										</div>

										<div class="form-group">
											<input type="text" name="phone" placeholder="Phone *" required>
											<span class="icon fal fa-phone fa-fw"></span>
										</div>

										<div class="form-group">
											<input type="text" class="datepicker" name="date"
												placeholder="DD - MM - YYYY" required>
											<span class="icon fal fa-calendar fa-fw"></span>
										</div>

										<div class="form-group">
											<input type="text" name="time" placeholder="Guest" value="Guest" required>
											<div class="item-quantity">
												<div class="quantity-spinner">
													<button type="button" class="minus"><span
															class="fa fa-minus"></span></button>
													<input type="text" name="no_of_guests" value="1" class="prod_qty"
														readonly />
													<button type="button" class="plus"><span
															class="fa fa-plus"></span></button>
												</div>
											</div>
										</div>

										<div class="form-group">
											<button class="theme-btn send-btn"><span class="txt">Next<i
														class="fa fa-angle-right"></i></span></button>
										</div>

									</form>

								</div>
								<!-- End Booking Form -->

							</div>

							<!-- Follow Widget -->
							{{-- <div class="sidebar-widget follow-widget">
								<div class="sidebar-title">
									<h5>Follow us</h5>
								</div>
								<ul class="social-list">
									<li class="facebook"><span class="icon fab fa-facebook-f fa-fw"></span>
										<strong>1250M +</strong> Followers</li>
									<li class="twitter"><span class="icon fab fa-twitter fa-fw"></span> <strong>1250M
											+</strong> Followers</li>
									<li class="youtube"><span class="icon fab fa-youtube fa-fw"></span> <strong>1250M
											+</strong> Followers</li>
									<li class="linkedin"><span class="icon fab fa-linkedin-in fa-fw"></span>
										<strong>1250M +</strong> Followers</li>
								</ul>
							</div> --}}

							<!-- Category Widget -->
							{{-- <div class="sidebar-widget category-widget">
								<div class="sidebar-title">
									<h5>Category</h5>
								</div>
								<ul class="sidebar-category-list">
									<li style="background-image: url({{ asset('assets/website') }}/images/background/category-1.jpg)">
										<span class="txt">Therapy</span> <span class="number">05</span>
									</li>
									<li style="background-image: url({{ asset('assets/website') }}/images/background/category-2.jpg)">
										<span class="txt">Beauty Items</span> <span class="number">09</span>
									</li>
									<li style="background-image: url({{ asset('assets/website') }}/images/background/category-3.jpg)">
										<span class="txt">Body Sliming</span> <span class="number">07</span>
									</li>
									<li style="background-image: url({{ asset('assets/website') }}/images/background/category-4.jpg)">
										<span class="txt">Fashion Fitness</span> <span class="number">10</span>
									</li>
								</ul>
							</div> --}}

							<!-- Buy Treker Widget -->
							{{-- <div class="sidebar-widget buy-treker-widget">
								<div class="widget-content" style="background-image: url({{ asset('assets/website') }}/images/background/buy.jpg)">
									<div class="logo">
										<a href="{{route('index')}}"><img src="{{ asset('assets/website') }}/images/icons/buy-treker.svg" alt="" /></a>
									</div>
									<div class="text">Awesome Trekking Travel <br> Theme !</div>
									<a href="#" class="theme-btn buy-now">Buy Now</a>
								</div>
							</div> --}}

						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- End Package Detail Section -->

		<!-- News Section Two -->
		<section class="news-section-two tours-page">
			<div class="floated-icon left"><img src="{{ asset('assets/website') }}/images/resource/stones-left.svg" alt="" title=""></div>
			<div class="floated-icon right"><img src="{{ asset('assets/website') }}/images/resource/stones-right.svg" alt="" title=""></div>
			<div class="bg-layer" style="background-image: url({{ asset('assets/website') }}/images/background/image-1.jpg);"></div>
			<div class="auto-container">
				<div class="title-box centered">
					<h2><span>Discover More Tours</span></h2>
				</div>
				<div class="content-box">

					<div class="popular-carousel owl-theme owl-carousel">

                        @forelse ($popularTours as $tour)

						<!--Block-->
						<div class="activity-block-two">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="#"><img src="{{ asset('storage') }}/{{$tour->thumbnail}}" alt=""
												title=""></a></div>
								</div>
								<div class="lower-content">
									<div class="price"><span>${{$tour->price}}</span></div>
									<h4><a href="{{route('tours.show', $tour)}}">{{$tour->title}}</a></h4>
									<div class="ratings clearfix">
										{{-- <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
												class="fa fa-star"></i><i class="fa fa-star"></i><i
												class="fa fa-star empty"></i></div>
										<div class="rev"><a href="#">05 Review</a></div> --}}
									</div>
									<div class="text">{{$tour->summary}}</div>
									<ul class="bottom-box">
										<li><span class="icon far fa-clock fa-fw"></span>{{$tour->duration}}</li>
										<li>{{isset($tour->destination) ? $tour->destination->name : ''}}</li>
									</ul>
								</div>

							</div>
						</div>
                        @empty
                        <p style="text-align:center;">No Tours to Show.</p>
                        @endforelse


					</div>

				</div>
			</div>
		</section>
		<!-- End News Section Two -->
@endsection


@section('custom-script')

<script>
    var perPersonBookingLimit = @json($tour->per_person_booking_limit);
    console.log(perPersonBookingLimit);
    //Jquery Spinner / Quantity Spinner
	if($('.quantity-spinner').length){
		 $('.quantity-spinner .plus').on('click', function() {
			var val = $(this).prev('.prod_qty').val();
            if (val < perPersonBookingLimit ){
			$(this).prev('.prod_qty').val((val*1)+1);
            }
		});
		$('.quantity-spinner .minus').on('click', function(){
			var val = $(this).next('.prod_qty').val();
			if (val != 1 ){
			$(this).next('.prod_qty').val((val*1)-1);
			}
		});
	}
</script>
@endsection
