<section class="reviews">
<div class="container-fluid mt-5" style="background-color: #4B7289;height:600px; padding:0 55px;" id="Feedback">
        <h1 class="text-center testyheading p-4 text-white"> Student's Feedback </h1>
    <!-- <h1 class="heading"> clients reviews </h1> -->

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

        <?php
                    include('./dbconnect.php');

            $sql="select name,img ,content from student join feedback on id=sid";
            $res=$conn->query($sql);
            if($res->num_rows>0)
            {
            while($row=$res->fetch_assoc())
            {
                $dummy=$row['img'];
                $img=str_replace('..','.',$dummy);

            
        ?>
            <div class="swiper-slide slide">
                <p><?php echo $row['content'];  ?></p>
                <div class="user">
                    <img src="<?php echo $img;     ?>" alt="">
                    <div class="info">
                        <h3><?php echo $row['name'];  ?></h3>

                    </div>
                </div>
            </div>
<?php
            }
        }
        
?>
           



           

        </div>

    </div>
    </div>

</section>
<script>
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