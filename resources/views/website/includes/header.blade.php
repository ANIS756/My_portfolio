
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->

<nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5" data-wow-delay="0.1s">
    <a href="{{route('landing')}}" class="navbar-brand d-block d-lg-none">
        <h1 class="text-primary fw-bold m-0">ProMan</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{route('landing')}}" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-primary fw-bold m-0">ProMan</h1>
            </a>
            <a href="#home" class="nav-item nav-link active">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#skill" class="nav-item nav-link">Skills</a>
            <a href="#service" class="nav-item nav-link">Services</a>
            <a href="#project" class="nav-item nav-link">Projects</a>
            <a href="#blog" class="nav-item nav-link">Blog</a>
            <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
            <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
            <a href="{{route('register')}}" class="nav-item nav-link">Register</a>
        </div>
    </div>
</nav>


<!-- Navbar End -->

<!-- Header Start -->


<div class="container-fluid bg-light my-6 mt-6" id="home">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7 py-6 pb-0 pt-lg-0">
                <h3 class="text-primary mb-3">I'm</h3>
                <h1 class="display-3 mb-3">Md Anis Mojumder</h1>
                <h2 class="typed-text-output d-inline"></h2>
                <div class="typed-text d-none">Full Stack Web Developer, Software Engineer, Graphic Designer </div>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-primary me-2" target="_blank" href="https://twitter.com/mojumder_anis"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary me-2" target="_blank" href="https://www.facebook.com/anismaju/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary me-2" target="_blank" href="https://www.youtube.com/channel/UC8Ajd6iUYtLxGMFC2hnrulA"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-primary me-2" target="_blank" href="https://www.linkedin.com/in/anis-mojumder/"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="d-flex align-items-center pt-5">
                    <a href="" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid" src="{{asset('/')}}website/img/profile1.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

