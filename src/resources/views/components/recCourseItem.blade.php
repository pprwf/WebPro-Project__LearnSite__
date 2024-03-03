<div id="box<?php echo $recCourseOrder;?>" class="w-full flex-none border-red-600 border-2 flex justify-center carousel-item">
    <a href="<?php echo $recCourse["link"] ?>">
        <div class="flex-none w-full md:w-[35rem] h-auto md:h-96 border-green-600 border-2 rounded-3xl overflow-hidden flex flex-col">
            <!-- Course img -->
            <div class="border-orange-600 border-2 w-full h-40 md:h-[20rem] bg-center bg-cover" style="background-image: url(<?php echo $recCourse["titleImg"] ?>);"></div>

            <!-- Course Descript -->
            <div class="flex flex-col flex-auto justify-between p-4">
                <h1 class="text-2xl font-bold flex-auto"> <?php echo $recCourse["title"] ?> </h1>
                <!-- Course Detail -->
                <div class="flex flex-row flex-initial flex-wrap md:flex-nowrap">
                    <div class="w-full md:w-7/12">
                        <h2>Description</h2>
                        <hr>
                        <p class="text-sm"> <?php echo $recCourse["description"] ?> </p>
                    </div>
                    <!-- small orange box -->
                    <div class="bg-orange-200 w-full md:w-5/12 rounded-3xl p-2 text-sm mt-4 md:mt-0 md:ml-4">
                        <div class="flex flex-row items-center">
                            <p class="">instructor</p>
                            <img class="rounded-full size-10 ml-2" src="<?php echo $recCourse["instructor1"] ?>" alt="">
                            <img class="rounded-full size-10 ml-2" src="<?php echo $recCourse["instructor2"] ?>" alt="">
                            <img class="rounded-full size-10 ml-2" src="<?php echo $recCourse["instructor3"] ?>" alt="">
                        </div>

                        <div class="flex flex-row items-center mt-1">
                            <p class="">rating</p>
                            <div class="rating rating-sm ml-2">
                                <?php
                                $checked = false;
                                for ($i = 1; $i <= 5; $i++) {
                                    echo '<input type="radio" name="rating-6" class="mask disable-click mask-star-2 bg-red-600"';
                                    if ($recCourse["rating"] * 10 < $i * 10 + 5 && $checked == false) {
                                        echo 'checked';
                                        $checked = true;
                                    }
                                    echo '/>';
                                }
                                ?>
                            </div>

                        </div>
                        <p class="text-xs mt-1">approximate time <?php echo $recCourse["time"] ?> hr</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
