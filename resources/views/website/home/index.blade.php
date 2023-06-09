@extends('website.master')

@section('title','Md Anis Mojumder')

@section('body')
    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">About Anis</h1>
                </div>

            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0">3</h1>
                            <h5 class="mb-0">Years</h5>
                        </div>
                        <h3 class="lh-base mb-0">of working experience as a web designer & developer</h3>
                    </div>
                    <p class="mb-4">As a passionate CSE graduate, I'm seeking an entry-level software developer role that challenges me to grow and innovate. Utilizing full stack skills (front/back-end, DB design, testing) to contribute to company success and advancing my career. </p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Diverse Skill Set</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Problem-Solving Abilities</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Attention to Detail</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>On Time Project Delivery</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More..</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="{{asset('/')}}website/img/about-1.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="{{asset('/')}}website/img/about-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">100</h2>
                    </div>
                    <p class="mb-4">A happy client is the ultimate reward for any web developer, as it reflects their ability to deliver a successful project that meets the client's needs and exceeds their expectations.</p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">100</h2>
                    </div>
                    <p class="mb-0">Through effective communication, meticulous planning, and a strong work ethic, I consistently deliver high-quality web development projects that meet my clients' needs and exceed their expectations, on time and within budget.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <p class="mb-4">Hi there! I'm a full-stack web developer with expertise in HTML, CSS, Bootstrap, JavaScript, PHP, and Laravel. With my diverse skill set, I can design and develop web applications from the front-end to the back-end. I love creating dynamic and responsive web experiences that engage users and help businesses succeed online.</p>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Skills</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>UI Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Product Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Apps Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0 ">
                            <div class="row gy-5 gx-4">

                                <div class="col-md-6">
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-weight-bold">HTML</h6>
                                            <h6 class="font-weight-bold">95%</h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-weight-bold">CSS</h6>
                                            <h6 class="font-weight-bold">85%</h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-weight-bold">PHP</h6>
                                            <h6 class="font-weight-bold">90%</h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-weight-bold">Javascript</h6>
                                            <h6 class="font-weight-bold">90%</h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-weight-bold">Bootstrap</h6>
                                            <h6 class="font-weight-bold">95%</h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-weight-bold">Laravel</h6>
                                            <h6 class="font-weight-bold">85%</h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-3">Education</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-4">Certification</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-3" class="tab-pane active fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>Computer Science and Engineering</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2023</p>
                                    <h6 class="mb-0">Green University of Bangladesh</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Higher Secondary School Certificate</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2015 - 2017</p>
                                    <h6 class="mb-0">Govt. Science College,Dhaka  </h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Secondary School Certificate</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013 - 2015</p>
                                    <h6 class="mb-0">Barnamala Adarsha High School and College   </h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Junior School Certificate</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013</p>
                                    <h6 class="mb-0">Hajee Shariat Ullah Adarshsa High School </h6>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>Computer Science and Engineering</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2023</p>
                                    <h6 class="mb-0">Green University of Bangladesh</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Higher Secondary School Certificate</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2015 - 2017</p>
                                    <h6 class="mb-0">Govt. Science College,Dhaka  </h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Secondary School Certificate</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013 - 2015</p>
                                    <h6 class="mb-0">Barnamala Adarsha High School and College   </h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Junior School Certificate</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013</p>
                                    <h6 class="mb-0">Hajee Shariat Ullah Adarshsa High School </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Services</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Hire Me</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-crop-alt fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Full-stack web development</h4>
                            <span>Offer end-to-end web development services, from designing and developing the front-end of websites to building and maintaining the back-end systems.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code-branch fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Website design</h4>
                            <span>Offer custom website design services that include creating visually appealing and user-friendly layouts, selecting typography and color palettes, and designing custom graphics.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Custom website development</h4>
                            <span>Develop custom websites that meet clients' specific needs and requirements. This can include creating unique designs, implementing complex functionalities, and integrating third-party APIs.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-laptop-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">API development and integration:</h4>
                            <span> Develop custom APIs and integrate third-party APIs to enable seamless data exchange between different systems.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Projects Start -->
    <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">All Projects</li>
                        <li class="mx-3" data-filter=".first">UI/UX Design</li>
                        <li class="mx-3" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}website/img/project-1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}website/img/project-2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}website/img/project-3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}website/img/project-4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}website/img/project-5.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}website/img/project-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Blog -->
    <div class="container-xxl py-6 pb-5" id="blog">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Blog</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Contact Us</a>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="{{asset('/')}}website/img/blog-1.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Designe for Everyone</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="{{asset('/')}}website/img/blog-2.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Web Layouts</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="{{asset('/')}}website/img/blog-3.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Bootstrap Framework</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-5 my-5" id="testimonial">
        <div class="container-fluid py-5">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="{{asset('/')}}website/img/testimonial-1.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="{{asset('/')}}website/img/testimonial-2.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="{{asset('/')}}website/img/testimonial-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{asset('/')}}website/img/testimonial-1.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{asset('/')}}website/img/testimonial-2.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{asset('/')}}website/img/testimonial-3.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="{{asset('/')}}website/img/testimonial-1.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="{{asset('/')}}website/img/testimonial-2.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="{{asset('/')}}website/img/testimonial-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold">2 F block, Banasree , Dhaka</h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+01521580462</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">anismojumder4@gmail.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" target="_blank" href="https://twitter.com/mojumder_anis"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" target="_blank" href="https://www.facebook.com/anismaju/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" target="_blank" href="https://www.youtube.com/channel/UC8Ajd6iUYtLxGMFC2hnrulA"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" target="_blank" href="https://www.linkedin.com/in/anis-mojumder/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                        @honeypot
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe
                    src="https://www.google.com/maps/place/dhaka/data=!4m2!3m1!1s0x3755b8b087026b81:0x8fa563bbdd5904c2?sa=X&ved=2ahUKEwjD55rXmdT-AhULTGwGHY3mCcwQ8gF6BAgMEAI"
                    frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <!-- Map End -->

@endsection
