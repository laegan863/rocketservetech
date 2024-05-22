
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>
        .nav-item a{
            font-size: 15px !important;
            font-weight: 600;
        }
        .text-end a{
            text-decoration: none;
        }
        .dropdown-menu .dropdown-item{
            margin: 10px !important;
        }
        .dropdown-menu .dropdown-item:hover{
            background-color: black;
            color: white;
        }
        .text-primary{
            color: #002FC3 !important;
        }
    </style>

</head>
<body>

    @include('files/navbar')

    <!-- Hero -->
    <section class="px-xxl-4 px-xl-4 px-lg-4 px-0 mb-xxl-5 mb-xl-5 mb-lg-5 my-4">
        <div class="container-fluid px-xxl-5 px-xl-5 px-lg-5 px-2">
            <div class="row px-xxl-5 px-xl-5 px-lg-5 px-2">
    
    
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-12 mb-3 page-title">
                    <p class="text-uppercase text-primary fw-semibold fs-5">
                        About Us
                    </p>
    
                    <p class="text-uppercase text-primary fw-bold h1">
                        Empowering Your Business Objectives Through Digital Excellence
                    </p>
                </div>
    
                <div class="col-12 mb-3 ratio ratio-21x9" style="height: 340px;">
                    <img src="{{asset('img\about us\1.png')}}" class="object-fit-cover" alt="">
                </div>

                <div class="col-12">
                    <p class="text-center fw-semibold">
                        At our company, our aim is to be the reliable ally guiding you through the intricacies of the digital world. We focus on equipping businesses of all sizes with customized strategies to boost their online presence, interact with audiences effectively, and achieve tangible outcomes. Your prosperity is at the forefront of our efforts, and we promise to provide solutions that distinguish you in the digital sphere.
                    </p>
                </div>
    
    
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="px-xxl-4 px-xl-4 px-lg-4 px-0 mb-xxl-5 mb-xl-5 mb-lg-5 mb-4">
        <div class="container-fluid px-xxl-5 px-xl-5 px-lg-5 px-2">
            <div class="row px-xxl-5 px-xl-5 px-lg-5 px-2">
                <div class="col-12">
                    <p class="h2 fw-bold text-center text-primary">
                        Our Team
                    </p>

                    <p class="h4 text-capitalize fw-bold text-center mb-4">
                        We are a dynamic team of creative thinkers dedicated to your success.
                    </p>

                    <div class="row justify-content-center align-items-center mb-xxl-5 mb-xl-5 mb-lg-5 mb-4 pb-4">

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-4">
                            <div class="ratio ratio-1x1 mb-3">
                                <img src="{{asset('img\about us\2.png')}}" class="object-fit-cover" alt="">
                            </div>
                            
                            <p class="text-uppercase text-center h5 fw-bold">
                                Very experienced
                            </p>
                        </div>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-4">
                            <div class="ratio ratio-1x1 mb-3">
                                <img src="{{asset('img\about us\3.png')}}" class="object-fit-cover" alt="">
                            </div>
                            
                            <p class="text-uppercase text-center h5 fw-bold">
                                Dedicated and skilled
                            </p>
                        </div>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-4">
                            <div class="ratio ratio-1x1 mb-3">
                                <img src="{{asset('img\about us\4.png')}}" class="object-fit-cover" alt="">
                            </div>
                            
                            <p class="text-uppercase text-center h5 fw-bold">
                                Innovative thinkers
                            </p>
                        </div>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-4">
                            <div class="ratio ratio-1x1 mb-3">
                                <img src="{{asset('img\about us\5.png')}}" class="object-fit-cover" alt="">
                            </div>
                            
                            <p class="text-uppercase text-center h5 fw-bold">
                                Highly qualified
                            </p>
                        </div>

                    </div>

                    <div class="row g-3 justify-content-center align-items-center mb-3">

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <div class="bg-info-subtle py-4">
                                <p class="text-primary h1 text-center fw-bold">
                                    5+
                                </p>

                                <p class="text-uppercase text-center h5">
                                    YEARS OF EXPERIENCE
                                </p>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <div class="bg-info-subtle py-4">
                                <p class="text-primary h1 text-center fw-bold">
                                    1000+
                                </p>

                                <p class="text-uppercase text-center h5">
                                    STARTUPS EMPOWERED
                                </p>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <div class="bg-info-subtle py-4">
                                <p class="text-primary h1 text-center fw-bold">
                                    1000+
                                </p>

                                <p class="text-uppercase text-center h5">
                                    PROJECTS DELIVERED
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Establishing -->
    <section class="px-xxl-4 px-xl-4 px-lg-4 px-0 mb-xxl-5 mb-xl-5 mb-lg-5 mb-4 bg-black">

        <div class="container-fluid px-xxl-5 px-xl-5 px-lg-5 px-2 py-5">
            <div class="row justify-content-center align-items-center px-xxl-5 px-xl-5 px-lg-5 px-2">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 mb-3">
                    <p class="text-white text-capitalize h3 text-center fw-bold">
                        Building a strong online presence with our unmatched solutions
                    </p>
                </div>

                <div class="col-12 mb-3">
                    <p class="text-white-50 text-center">
                        Access cutting-edge solutions tailored to your needs, delivering impeccable results aligned with industry standards!
                    </p>
                </div>

                <div class="col-12">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-12 text-xxl-start text-xl-start text-lg-start text-center">
                            <p class="text-white h3 fw-bold mb-3">
                                Expertise Without Limits
                            </p>

                            <p class="text-white">
                                Our team of experienced professionals at our Company offers a wealth of knowledge to every project. Collaborating seamlessly, our specialists in web development, digital marketing, SEO, and PPC deliver comprehensive solutions that meet the latest industry standards.
                            </p>
                        </div>

                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-12 text-xxl-start text-xl-start text-lg-start text-center">
                            <p class="text-white h3 fw-bold mb-3">
                                Pioneering Solutions
                            </p>

                            <p class="text-white">
                                At our company, innovation is our driving force. We don't just keep up with trends; we set them. Our unwavering dedication to staying ahead of technological advancements ensures that your business benefits from pioneering solutions that stand out in the constantly shifting digital terrain.
                            </p>
                        </div>

                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-12 text-xxl-start text-xl-start text-lg-start text-center">
                            <p class="text-white h3 fw-bold mb-3">
                                Customized Excellence
                            </p>

                            <p class="text-white">
                                Understanding the unique nature of every business, our approach is tailored to perfection. We design bespoke solutions that cater to your specific objectives, hurdles, and industry nuances. We recognize that one size does not fit all, and our services reflect this ethos.
                            </p>
                        </div>

                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-12 text-xxl-start text-xl-start text-lg-start text-center">
                            <p class="text-white h3 fw-bold mb-3">
                                Uninterrupted Progress
                            </p>

                            <p class="text-white">
                                In a digital realm that's always in flux, we remain steadfast in our pursuit of growth. Our commitment is to ongoing enhancement, ensuring that our strategies evolve to meet the evolving demands of the digital landscape.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Hire Professionals -->
    <section class="px-xxl-4 px-xl-4 px-lg-4 px-0 mb-xxl-5 mb-xl-5 mb-lg-5 mb-4">

        <div class="container-fluid px-xxl-5 px-xl-5 px-lg-5 px-2">
            <div class="row px-xxl-5 px-xl-5 px-lg-5 px-2">
                <div class="col-12 mb-3">
                    <p class="text-primary text-capitalize h3 text-center fw-bold">
                        Engage Skilled Professionals for Your Unique Requirements
                    </p>

                    <p class="text-secondary text-center">
                        Connect with seasoned experts boasting years of experience to assist you with specialized tasks, tailored to meet your specific demands.
                    </p>
                </div>

                <div class="col-12 mb-xxl-5 mb-xl-5 mb-lg-5 mb-4">
                    <div class="row justify-content-center align-items-stretch">

                        <div class="col-xxl col-xl col-lg col-12 bg-info-subtle m-2">
                            <div class=" p-3">
                                <p class="fw-bold h5 mb-2">
                                    UI/UX Designer
                                </p>

                                <p class="text-secondary mb-4">
                                    Acquire flawless designs for your website, application, and digital tools to elevate their aesthetics and usability, enhancing customer engagement.
                                </p>

                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-primary py-2 px-3 rounded-0 shadow-lg">Hire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl col-xl col-lg col-12 bg-info-subtle m-2">
                            <div class=" p-3">
                                <p class="fw-bold h5 mb-2">
                                    Web Developer
                                </p>

                                <p class="text-secondary mb-4">
                                    Receive assistance in crafting top-tier websites and digital platforms, turning your creative vision into reality!
                                </p>

                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-primary py-2 px-3 rounded-0 shadow-lg">Hire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl col-xl col-lg col-12 bg-info-subtle m-2">
                            <div class=" p-3">
                                <p class="fw-bold h5 mb-2">
                                    Marketing Expert
                                </p>

                                <p class="text-secondary mb-4">
                                    Dominate the market by leveraging the expertise of a dedicated marketing professional tailored to your specific needs and requirements.
                                </p>

                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-primary py-2 px-3 rounded-0 shadow-lg">Hire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 bg-primary p-5 rounded-4">
                    <p class="text-white h2 text-center mb-4">
                        Ready to start this exciting digital journey together?
                    </p>

                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-light px-3 py-2 text-primary rounded-0 fw-semibold shadow-lg">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Footer -->

@include ('files/footer')

    <section class="px-xxl-4 px-xl-4 px-lg-4 px-0 bg-black">
        <div class="container-fluid px-xxl-5 px-xl-5 px-lg-5 px-2 py-5">
            <div class="row justify-content-between px-xxl-5 px-xl-5 px-lg-5 px-2 pb-5">

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-12 justify-self-center">
                    <div class="ratio mb-3" style="--bs-aspect-ratio: 20%;">
                        <img src="{{asset('img/logo.png')}}" class="" alt="">
                    </div>

                    <p class="text-white-50 text-xxl-start text-xl-start text-lg-start text-center">
                        Boosting business sales and revenue using digital tools and services!
                    </p>
                </div>

                <div class="col-xxl-2 col-xl-2 col-lg-2 col-12 justify-self-center text-xxl-start text-xl-start text-lg-start text-center">

                    <div class="row justify-content-between">
                        
                        <div class="col">
                            <p class="text-white-50 h5 fw-semibold mb-3">
                                Company
                            </p>

                            <ul class="list-group">
                                <li class="list-group-item bg-transparent border-0 p-0 mb-1">
                                    <a href="#" class="text-decoration-none text-white fw-semibold">
                                        Home
                                    </a>
                                </li>

                                <li class="list-group-item bg-transparent border-0 p-0 mb-1">
                                    <a href="#" class="text-decoration-none text-white fw-semibold">
                                        About Us
                                    </a>
                                </li>

                                <li class="list-group-item bg-transparent border-0 p-0 mb-1">
                                    <a href="#" class="text-decoration-none text-white fw-semibold">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-12 justify-self-center text-xxl-start text-xl-start text-lg-start text-center">

                    <div class="row justify-content-between">

                        <div class="col">

                            <p class="text-white-50 h5 fw-semibold mb-3">
                                Contact
                            </p>

                            <ul class="list-group">
                                <li class="list-group-item bg-transparent border-0 p-0 mb-1">
                                    <a href="#" class="text-decoration-none text-white">
                                        <span class="fw-semibold">
                                            Email :
                                        </span> 
                                        support@rocketservtech.com
                                    </a>
                                </li>

                                <li class="list-group-item bg-transparent border-0 p-0 mb-1">
                                    <a href="#" class="text-decoration-none text-white">
                                        <span class="fw-semibold">
                                            Phone Number :
                                        </span> 
                                        (877) 814-1913
                                    </a>
                                </li>

                                <li class="list-group-item bg-transparent border-0 p-0 mb-1">
                                    <a href="#" class="text-decoration-none text-white">
                                        <span class="fw-semibold">
                                            Address : 
                                        </span> 
                                            19901 Southwest Freeway
                                            Suite 191 Sugar Land, TX 77479
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-xxl-2 col-xl-2 col-lg-2 col-12 justify-self-center text-xxl-start text-xl-start text-lg-start text-center">

                    <p class="text-white-50 h5 fw-semibold mb-3">
                        Social Links
                    </p>

                    <a href="#" class="text-decoration-none me-3 text-white">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="#" class="text-decoration-none me-3 text-white">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="#" class="text-decoration-none me-3 text-white">
                        <i class="fab fa-linkedin-in fa-lg"></i>
                    </a>

                </div>
                
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="text-white-50 text-center mt-3 mb-0">
                        © 2024 Company Name
                    </p>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>