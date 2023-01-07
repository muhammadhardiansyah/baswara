<?php 
include ("header.php");
?>

<div class="container">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
  Launch demo modal
</button>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registration">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h2 class="registration_header">Login</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h5 class="registration_header">Baswara Learning Academy</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <lottie-player
                            src="lottie/login.json"
                            background="transparent"
                            speed="1"
                            style="width: 100%; height: 100%"
                            loop
                            autoplay
                        ></lottie-player>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center">
                        <div class="col">
                            <div class="row">
                                <form class="registration_form" action="#" method="post" data-type="registration">
                                    <!-- <input class="field required" type="text" data-type="email" placeholder="Email" /> -->
                                    <input class="field required" type="text" placeholder="Username/Email" />
                                    <input class="field required" type="password" placeholder="Password" />
                                </form>
                            </div>
                            <div class="row mt-3 hero_content-action flex-wrap justify-content-center">
                                <!-- <div class="col-sm-6 d-flex justify-content-end"> -->
                                    <button class="btn btn--gradient" type="submit">
                                        <span class="text">Masuk</span>
                                    </button>
                                <!-- </div> -->
                                <!-- <div class="col-sm-6 d-flex justify-content-start"> -->
                                <a class="btn btn--highlight" href="#" data-bs-toggle="modal" data-bs-target="#registration" data-bs-dismiss="modal">
                                    <span class="text">Daftar</span>
                                </a>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="registration" tabindex="-1" aria-labelledby="registrationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrationLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h2 class="registration_header">Registration</h2>
                    </div>
                </div>
                <div class="row">
                    <p class="registration_text d-flex justify-content-center text-center">
                        The intensive course is now open, which starts on January 8. 
                        You will receive detailed information on admission by mail immediately after registration
                    </p>
                </div>
                <div class="row">
                    <p class="registration_price h5 d-flex justify-content-center">Price: $320 all course/ $ 30 per month</p>
                </div>
                <div class="row">
                    <p class="registration_text d-flex justify-content-center">our consultant will contact you to clarify further details</p>
                </div>
                <div class="row">
                    <form class="registration_form d-flex flex-column align-items-center" action="#" method="post" data-type="registration">
                        <input class="field required" type="text" data-type="email" placeholder="Email" />
                        <input class="field required" type="text" placeholder="Name" />
                        <input class="field required" type="password" placeholder="Password" />
                        <div class="wrapper">
                            <div class="checkbox">
                                <input type="checkbox" name="dataProcessing" id="dataProcessing" checked>
                                <label for="dataProcessing">I agree to the terms of data processing. </label>
                            </div>
                        </div>
                        <button class="btn btn--gradient" type="submit">
                            <span class="text">Registration</span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>







                <h2 class="title">Registration</h2>
                <p class="text">
                    The intensive course is now open, which starts on January 8. 
                    You will receive detailed information on admission by mail immediately after registration
                </p>
                <h5 class="subtitle">31 day Free Trial for Lessons and Library</h5>
                <p class="text">our consultant will contact you to clarify further details</p>
                <form class="registration_form d-flex flex-column align-items-center" action="#" method="post"
                  data-type="registration">
                    <input class="field required" type="text" data-type="email" placeholder="Email">
                    <input class="field required" type="text" placeholder="Name">
                    <div class="wrapper">
                        <div class="checkbox">
                            <input type="checkbox" name="dataProcessing" id="dataProcessing" checked>
                            <label for="dataProcessing">I agree to the terms of data processing. </label>
                        </div>
                        <a class="link" href="#">Terms and Conditions</a>
                    </div>
                    <button class="btn btn--gradient" type="submit">
                        <span class="text">Registration</span>
                    </button>
                </form>
            
            <section class="registration" id="price">
                <div class="underlay"></div>
                <div class="registration_content container d-flex flex-column align-items-center">
                    <h2 class="registration_header">Registration</h2>
                    <p class="registration_text">
                        The intensive course is now open, which starts on January 8. You will receive detailed information on admission by
                        mail immediately after registration
                    </p>
                    <p class="registration_price h5">Price: $320 all course/ $ 30 per month</p>
                    <p class="registration_text">our consultant will contact you to clarify further details</p>
                    <form class="registration_form d-flex flex-column align-items-center" action="#" method="post" data-type="registration">
                        <input class="field required" type="text" data-type="email" placeholder="Email" />
                        <input class="field required" type="text" placeholder="Name" />
                        <input class="field required" type="password" placeholder="Password" />
                        <button class="btn btn--gradient" type="submit">
                            <span class="text">Registration</span>
                        </button>
                    </form>
                </div>
            </section>



</div>






<?php
include ("footer.php");
?>