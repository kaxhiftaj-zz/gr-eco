@extends('public.layouts.app')

@section("stylesheets")

@endsection

@section("content")
    {{-- Smart Bin's Map --}}
    @include('public.components.smartbin-map')

    {{-- Statistics --}}
    {{-- @include('public.components.stats') --}}

    {{-- advanced search --}}
    {{-- @include('public.components.advanced-search') --}}

    <section id="recent-news">
        <div class="section-detail">
            <h1>Latest News</h1>
        </div>
        <div class="container" id="blog">
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-list masonry-post">
                        <h2 class="title"><a href="blog-detail.html">Praesent moleti ipsum</a></h2>
                        <div class="image">
                            <img class="img-responsive" alt="Image Sample" src="http://placehold.it/1280x850/bbbbbb/ffffff">
                            <div class="social">
                                <span class="date">2<span>Apr</span></span>
                                <a href="#"><i class="fa fa-heart-o"></i><span>654</span></a>
                                <a href="#"><i class="fa fa-eye"></i><span>92435</span></a>
                                <a href="#"><i class="fa fa-comments"></i><span>69</span></a>
                            </div>
                        </div>
                        <div class="text">
                            <h3 class="subtitle">Internet tend to repeat prunks.</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie in ippulvinar libero enim, et finibus massa commodo vitae.
                        </div>
                        <a href="blog-detail.html" class="btn btn-default button-read">Read now</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-list masonry-post">
                        <h2 class="title"><a href="blog-detail.html">Dolor sit amet</a></h2>
                        <div class="image">
                            <img class="img-responsive" alt="Image Sample" src="http://placehold.it/1280x850/bbbbbb/ffffff">
                            <div class="social">
                                <span class="date">18<span>Mar</span></span>
                                <a href="#"><i class="fa fa-heart-o"></i><span>654</span></a>
                                <a href="#"><i class="fa fa-eye"></i><span>92435</span></a>
                                <a href="#"><i class="fa fa-comments"></i><span>69</span></a>
                            </div>
                        </div>
                        <div class="text">
                            <h3 class="subtitle">Internet tend to redefined chunks.</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie in ippulvinar libero enim, et finibus massa commodo vitae.
                        </div>
                        <a href="blog-detail-full.html" class="btn btn-default button-read">Read now</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-list masonry-post">
                        <h2 class="title"><a href="blog-detail.html">Pepeat predefined chunks</a></h2>
                        <div class="image">
                            <img class="img-responsive" alt="Image Sample" src="http://placehold.it/1280x850/bbbbbb/ffffff">
                            <div class="social">
                                <span class="date">15<span>Mar</span></span>
                                <a href="#"><i class="fa fa-heart-o"></i><span>654</span></a>
                                <a href="#"><i class="fa fa-eye"></i><span>92435</span></a>
                                <a href="#"><i class="fa fa-comments"></i><span>69</span></a>
                            </div>
                        </div>
                        <div class="text">
                            <h3 class="subtitle">Interno repeat predefined chunks.</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie in ippulvinar libero enim, et finibus massa commodo vitae.
                        </div>
                        <a href="blog-detail.html" class="btn btn-default button-read">Read now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="section-detail hidden-xs">
            <h1>Client Testimonials</h1>
        </div>
        <div class="container hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <div class="row feedback-margin">
                        <div class="feedback-container" data-navigation="#feedback-nav">
                            <div class="crsl-wrap">
                                <figure class="crsl-item">
                                    <div class="feeddback-user">
                                        <div class="info-user">
												<span class="avatar">
													<img src="http://placehold.it/512/bbbbbb/ffffff" alt="Image Sample" class="img-responsive" />
												</span>
                                            <b>Robert Phelps</b>
                                            <span>broadway (NY)</span>
                                            <span>Age 26 Year</span>
                                        </div>
                                        <div class="message">
                                            <div class="content">
                                                <h3 class="title">
                                                    <i class="icon-quote fa fa-quote-left"></i>
                                                    Iaculis pharetra velit torquent pellentesque euismod
                                                    <i class="icon-quote fa fa-quote-right"></i>
                                                </h3>
                                                <span class="rating">
														<span>Rating:</span>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
                                                <p class="text-container">
                                                    Aenean nisique purus vulputate suspendisse felis aliquet eu commodo aliquam ut ultricies facilisi eu metus cum<br /><br />Facilisi aenean in penatiblus convallis montes taciti cras sollicitudin semper iniam vestibulum orci convallis malesuada orci pellentesque nascetur massa amet parturient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <figure class="crsl-item">
                                    <div class="feeddback-user">
                                        <div class="info-user">
												<span class="avatar">
													<img src="http://placehold.it/512/bbbbbb/ffffff" alt="Image Sample" class="img-responsive" />
												</span>
                                            <b>Shawn Mcdonald</b>
                                            <span>Boston</span>
                                            <span>Age 32 Year</span>
                                        </div>
                                        <div class="message">
                                            <div class="content">
                                                <h3 class="title">
                                                    <i class="icon-quote fa fa-quote-left"></i>
                                                    Iaculis pharetra velit torquent pellentesque euismod
                                                    <i class="icon-quote fa fa-quote-right"></i>
                                                </h3>
                                                <span class="rating">
														<span>Rating:</span>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
                                                <p class="text-container">
                                                    Aenean nisique purus vulputate suspendisse felis aliquet eu commodo aliquam ut ultricies facilisi eu metus cum<br /><br />Facilisi aenean in penatiblus convallis montes taciti cras sollicitudin semper iniam vestibulum orci convallis malesuada orci pellentesque nascetur massa amet parturient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <figure class="crsl-item">
                                    <div class="feeddback-user">
                                        <div class="info-user">
												<span class="avatar">
													<img src="http://placehold.it/512/bbbbbb/ffffff" alt="Image Sample" class="img-responsive" />
												</span>
                                            <b>Andrew Waters</b>
                                            <span>Paris (FR)</span>
                                            <span>Age 26 Year</span>
                                        </div>
                                        <div class="message">
                                            <div class="content">
                                                <h3 class="title">
                                                    <i class="icon-quote fa fa-quote-left"></i>
                                                    Iaculis pharetra velit torquent pellentesque euismod
                                                    <i class="icon-quote fa fa-quote-right"></i>
                                                </h3>
                                                <span class="rating">
														<span>Rating:</span>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
                                                <p class="text-container">
                                                    Aenean nisique purus vulputate suspendisse felis aliquet eu commodo aliquam ut ultricies facilisi eu metus cum<br /><br />Facilisi aenean in penatiblus convallis montes taciti cras sollicitudin semper iniam vestibulum orci convallis malesuada orci pellentesque nascetur massa amet parturient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <figure class="crsl-item">
                                    <div class="feeddback-user">
                                        <div class="info-user">
												<span class="avatar">
													<img src="http://placehold.it/512/bbbbbb/ffffff" alt="Image Sample" class="img-responsive" />
												</span>
                                            <b>Diane Hayes</b>
                                            <span>Bloomfield (NY)</span>
                                            <span>Age 29 Year</span>
                                        </div>
                                        <div class="message">
                                            <div class="content">
                                                <h3 class="title">
                                                    <i class="icon-quote fa fa-quote-left"></i>
                                                    Iaculis pharetra velit torquent pellentesque euismod
                                                    <i class="icon-quote fa fa-quote-right"></i>
                                                </h3>
                                                <span class="rating">
														<span>Rating:</span>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
                                                <p class="text-container">
                                                    Aenean nisique purus vulputate suspendisse felis aliquet eu commodo aliquam ut ultricies facilisi eu metus cum<br /><br />Facilisi aenean in penatiblus convallis montes taciti cras sollicitudin semper iniam vestibulum orci convallis malesuada orci pellentesque nascetur massa amet parturient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div id="feedback-nav" class="nav-box">
                                <a href="#" class="previous"></a>
                                <a href="#" class="next"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("scripts")

@endsection

