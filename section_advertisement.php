<?php include './Admin/inc/dbconfig.php';
$sql = "SELECT * FROM class_list WHERE classExpose = 1";
$result = $conn->query($sql);
?>

<section id="advertisement" class="w-full my-9">
    <!-- Slider main container -->
    <div class="font-extrabold text-7xl mx-auto py-24 text-[#000848] text-center max-[700px]:text-5xl">모집중인 과정</div>
    <div class="w-full max-w-[1440px] m-auto relative pb-28 px-8 max-[500px]:px-8 flex-col justify-center items-center">
        <swiper-container id="test" class="mySwiper w-full h-full  " pagination="false" navigation="false" loop="true" autoplay-delay="2000" slides-per-view="1" space-between="30" breakpoints='{
        "500": {
          "slidesPerView": 2,
          "spaceBetween": 10
        },
        "700": {
          "slidesPerView": 3,
          "spaceBetween": 20
        },
        "1000": {
          "slidesPerView": 3,
          "spaceBetween": 30
        }
      }'>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <swiper-slide class="flex justify-center items-center">
                    <div class="flex-col gap-8 max-[1150px]:flex-col justify-center items-center">
                        <div class="w-full flex justify-center items-center rounded-md overflow-hidden">
                            <img class="object-cover h-full" src="./Admin/uploads/class/<?php echo $row['classThumbnail']; ?>" alt="">
                        </div>
                        <div class="flex-col">
                            <div class="font-bold py-2 text-2xl"><?php echo $row['className']; ?></div>
                            <div class="flex gap-2 max-[1300px]:flex-col max-[1300px]:gap-1">
                                <div>교육기간 :</div>
                                <div class="font-bold text-xl">
                                    <span class="text-blue-500"><?php echo $row['classStartDate']; ?></span> ~
                                    <span class="text-red-500"><?php echo $row['classEndDate']; ?></span>
                                </div>
                            </div>
                            <div class="">
                                <div>교육시간 요일 :</div>
                                <div class="font-bold text-lg"><?php echo $row['classSub']; ?></div>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            <?php endwhile; ?>

        </swiper-container>
    </div>


</section>