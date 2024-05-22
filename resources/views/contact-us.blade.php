
<!DOCTYPE html>
<html lang="en">
@include('files/head')
<body>

    @include('files/navbar')

    <!-- Contact Us -->
    <section class="px-xxl-4 px-xl-4 px-lg-4 px-0 mb-xxl-5 mb-xl-5 mb-lg-5 mb-4 mt-5">
        <div class="container-fluid px-xxl-5 px-xl-5 px-lg-5 px-2">
            <div class="row justify-content-between px-xxl-5 px-xl-5 px-lg-5 px-2">
    
    
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-12 mb-3 page-title">
                    <p class="text-capitalize text-dark fw-bold h1 text-xxl-start text-xl-start text-lg-start text-center">
                        Contact Us
                    </p>

                    <p class="text-secondary text-xxl-start text-xl-start text-lg-start text-center">
                        Please provide us with some information, and we'll get back to you shortly.
                    </p>

                    <div class="ratio ratio-1x1">
                        <img src="https://rocketservtech.com/wp-content/uploads/2024/02/why-1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 mb-5 p-4 bg-black">
                    <form>
                        
                        <div class="mb-3">
                            <label for="contact_name" class="form-label text-white">
                                Full Name
                            </label>

                            <input type="text" class="form-control rounded-1 border-dark" id="contact_name" aria-describedby="nameHelp">
                        </div>

                        <div class="mb-3">
                            <label for="contact_email" class="form-label text-white">
                                Email address
                            </label>

                            <input type="email" class="form-control rounded-1 border-dark" id="contact_email" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="contact_mobile_number" class="form-label text-white">
                                Mobile Number
                            </label>

                            <input type="number" class="form-control rounded-1 border-dark" id="contact_mobile_number" aria-describedby="mobilenumberHelp">
                        </div>

                        <div class="mb-3">
                            <label for="contact_services" class="form-label text-white">
                                Choose Services
                            </label>

                            <select type="text" class="form-select rounded-1 border-dark" id="contact_services" aria-describedby="mobilenumberHelp">
                                <option value="" selected></option>
                                <option value="Digital Marketing Services">Digital Marketing Services</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="contact_message" class="form-label text-white">
                                Message
                            </label>

                            <textarea id="contact_message" class="form-control rounded-1 border-dark" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary py-3 col-12 rounded-1 fw-semibold">Submit</button>
                    </form>
                </div>

                <div class="col-12 mb-xxl-5 mb-xl-5 mb-lg-5 mb-4">
                    <div class="row justify-content-center align-items-stretch">

                        <div class="col-xxl col-xl col-lg col-12 bg-info-subtle m-2 p-3">
                            <div class="p-3">
                                <p class="text-primary h1 text-center fw-bold">
                                    <i class="fas fa-map-marker-alt"></i>
                                </p>

                                <p class="text-uppercase text-center h5">
                                    Address
                                </p>

                                <p class="text-center fw-semibold m-0">
                                    Assiato Services UK
                                    <br>
                                    17A Manor Park
                                    <br>
                                    London SE13 5QZ
                                </p>
                            </div>
                        </div>

                        <div class="col-xxl col-xl col-lg col-12 bg-info-subtle m-2 p-3">
                            <div class="p-3">
                                <p class="text-primary h1 text-center fw-bold">
                                    <i class="fas fa-envelope"></i>
                                </p>

                                <p class="text-uppercase text-center h5">
                                    Email
                                </p>

                                <p class="text-center fw-semibold">
                                    <a href="mailto:support@assiato-service.co.uk" class="text-decoration-none text-dark">
                                        support@assiato-service.co.uk
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="col-xxl col-xl col-lg col-12 bg-info-subtle m-2 p-3">
                            <div class="p-3">
                                <p class="text-primary h1 text-center fw-bold">
                                    <i class="fas fa-clock"></i>
                                </p>

                                <p class="text-uppercase text-center h5">
                                    Sales & Customer Support
                                </p>

                                <p class="text-center fw-semibold">
                                    Monday – Friday
                                    <br>
                                    9 am to 5:30 pm GMT
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
    
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="mb-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center px-0">
                    <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.0491451673447!2d-0.004075424346505944!3d51.457254114366656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760275dfd386c1%3A0x55628bf3981448f5!2s17%20Manor%20Park%2C%20London%20SE13%205QZ%2C%20UK!5e0!3m2!1sen!2sph!4v1716307855572!5m2!1sen!2sph" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
@include ('files/footer')
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>