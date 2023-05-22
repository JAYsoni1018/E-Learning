<footer class="container-fluid bg-dark text-center p-2 footer">

    <small class="text-white pb-2">Copyright &copy; 2023 || Created By Jay Soni </small>
</footer>


<!-- Registration modal -->


<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Student Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- start stu register -->
                <form id="RegForm">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"><b><i class="fa-solid fa-user"></i>
                                Name</b></label><small id="msg1"></small>
                        <input type="text" class="form-control" id="Sname" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label"><b><i class="fa-solid fa-envelope"></i>
                                Email</b></label><small id="msg2"></small>
                        <input type="email" class="form-control" id="Smail" name="mail" placeholder="Enter your e-mail">
                        <pre> <small style="color: red;">* We will never share your details</small></pre>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label"><b><i class="fa-solid fa-lock"></i>
                                Password</b></label><small id="msg3"></small>
                        <input type="password" class="form-control" id="Spassword" name="password" placeholder="Enter your passowrd">
                    </div>
                </form>
                <!-- end stu register -->

            </div>
            <div class="modal-footer">
                <span id="successMsg"></span>
                <button type="button" class="btn btn-primary" onclick="addStd()" id="SignUp" name="Signup">Register</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!-- Registration modal end -->
<!-- login modal -->
<div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel2">Student Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="logForm">

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label"><b><i class="fa-solid fa-envelope"></i>
                                Email</b></label>
                        <input type="email" class="form-control" id="lemail" placeholder="Enter your e-mail">

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label"><b><i class="fa-solid fa-lock"></i>
                                Password</b></label>
                        <input type="password" class="form-control" id="lpass" placeholder="Enter your passowrd">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span id="successMsgLogin"></span>

                <button type="button" class="btn btn-primary" id="Login" onclick="stulogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- loogin modal end -->
<!-- admin modal -->
<div class="modal fade " id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel3"><i class="fa-solid fa-user-tie"></i>
                    Admin Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="adminForm">

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label"><b><i class="fa-solid fa-envelope"></i>
                                Admin Email</b></label>
                        <input type="email" class="form-control" id="adminmail" placeholder="Enter your e-mail">

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label"><b><i class="fa-solid fa-lock"></i>
                                Admin Password</b></label>
                        <input type="password" class="form-control" id="adminpass" placeholder="Enter your passowrd">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span id="success"></span>
                <button type="button" class="btn btn-primary" onclick="adminLog()" id="adminLOGIN">Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- admin modal end -->

<!-- end footer -->
<script src=" js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
<script type="text/javascript" src="js/adminajax.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    // var swiper = new Swiper(".mySwiper", {
    //     slidesPerView: 3,
    //     spaceBetween: 30,
    //     slidesPerGroup: 3,
    //     loop: true,
    //     loopFillGroupWithBlank: true,
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    // });



    var swiper = new Swiper(".home-slider", {
        loop: true,
        grabCursor: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var swiper = new Swiper(".reviews-slider", {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });

    var swiper = new Swiper(".blogs-slider", {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });

    var swiper = new Swiper(".logo-slider", {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        breakpoints: {
            450: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            1000: {
                slidesPerView: 5,
            },
        },
    });
</script>