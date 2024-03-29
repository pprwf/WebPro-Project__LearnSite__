<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maitree:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            /* background-color: brown; */
            scroll-behavior: smooth;
        }

        .hero {
            height: 85%;
        }

        .herocon {
            width: 100%;
            height: 100%;
            display: flex;
        }

        .disable-click {
            pointer-events: none;
        }

        .mr-200 {
            margin-right: 50rem;
        }
    </style>

</head>

<body>

    <dialog id="my_modal_4" class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <h3 class="font-bold text-lg">Search: wdqwdqwfwqf</h3>
            <p class="py-4">here are result</p>
            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-md btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
            </div>
            <?php
            $recCourseList = array(
                array(
                    "title" => "Elden Ring",
                    "titleImg" => "https://assets.xboxservices.com/assets/1d/5b/1d5bc84f-2135-4e2f-8ca6-bb000d97db7f.jpg?n=Elden-Ring_GLP-Poster-Image-1084_1920x1080.jpg",
                    "description" => "The amazingly flexible weapon progression and tuning system, rock-solid gunplay, and some really awesome and inventive new modes on huge maps chippi chippi chappa chappa dubi The amazingly flexible weapon progression",
                    "instructor1" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
                    "instructor2" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
                    "instructor3" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
                    "rating" => "3.4",
                    "time" => "25",
                    "link" => ""
                ),
                array(
                    "title" => "Minecraft",
                    "titleImg" => "https://store-images.s-microsoft.com/image/apps.60323.13774133678237924.758ba261-9ad2-4b6c-aae4-54f1307835d0.5c6bbf61-af87-400b-ae20-330496c5a9ac?q=90&w=480&h=270",
                    "description" => "The amazingly flexible weapon progression and tuning system, rock-solid gunplay, and some really awesome and inventive new modes on huge maps chippi chippi chappa chappa dubi The amazingly flexible weapon progression",
                    "instructor1" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
                    "instructor2" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
                    "instructor3" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
                    "rating" => "3.4",
                    "time" => "25",
                    "link" => "https://www.minecraft.net/en-us"
                ),
                array(
                    "title" => "Dog",
                    "titleImg" => "https://cdn.cloudflare.steamstatic.com/steam/apps/391540/header.jpg?t=1579096091",
                    "description" => "The amazingly flexible weapon progression and tuning system, rock-solid gunplay, and some really awesome and inventive new modes on huge maps chippi chippi chappa chappa dubi The amazingly flexible weapon progression",
                    "instructor1" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
                    "instructor2" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
                    "instructor3" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
                    "rating" => "3.4",
                    "time" => "25",
                    "link" => ""
                )
            );
            $recCourseOrder = 10;
            ?>
            <div class="w-full flex flex-col ">
                <?php foreach ($recCourseList as $recCourse) : ?>
                    <?php $recCourseOrder += 1; ?>

                    <?php echo $__env->make('recCourseItem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <br>
                <?php endforeach; ?>
            </div>
        </div>
    </dialog>

    <?php
    $recCourse = array(
        "title" => "Minecraft",
        "titleImg" => "https://store-images.s-microsoft.com/image/apps.60323.13774133678237924.758ba261-9ad2-4b6c-aae4-54f1307835d0.5c6bbf61-af87-400b-ae20-330496c5a9ac?q=90&w=480&h=270",
        "description" => "The amazingly flexible weapon progression and tuning system, rock-solid gunplay, and some really awesome and inventive new modes on huge maps chippi chippi chappa chappa dubi The amazingly flexible weapon progression",
        "instructor1" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
        "instructor2" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
        "instructor3" => "https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg",
        "rating" => "3.4",
        "time" => "25",
        "link" => "https://www.minecraft.net/en-us"
    );
    ?>

    <!-- navbar (name => link)-->
    <?php
    $navList = array(
        "Course" => "course",
        "Register" => "register",
        "Login" => "login",
    );
    ?>
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="flex flex-row w-full ">

        <!-- just leftbar -->
        <div class="leftbar w-[2%] flex-none border-orange-600 border-2"></div>

        <!-- content -->
        <div class="content flex flex-col flex-auto">

            <!-- course head -->
            <div class="flex flex-row grid-cols-2 w-full h-[60%]">
                <!-- img & review -->
                <div class="bg-green-200 w-1/2 h-full flex-none items-center flex flex-col">
                    <img class="w-8/12 h-60 rounded-xl" src="https://assets.xboxservices.com/assets/1d/5b/1d5bc84f-2135-4e2f-8ca6-bb000d97db7f.jpg?n=Elden-Ring_GLP-Poster-Image-1084_1920x1080.jpg" alt="">

                    <div class="w-8/12">
                        <p>INTRODUCTION TO NETWORK SYSTEMS / COMPUTER NETWORK (1/2023)</p>
                        <p>approximate time 2532 hr</p>
                        <!-- rating -->
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
                        <br>
                        <input type="submit" onclick="my_modal_4.showModal()" class=" btn btn-sm w-10s text-xs mt-1.5 text-amber-700" />
                    </div>
                </div>

                <!-- name & description -->
                <div class="bg-orange-200 h-full flex-auto">
                    <div class="h-32 bg-orange-400 text-3xl font-medium">INTRODUCTION TO NETWORK SYSTEMS / COMPUTER NETWORK (1/2023)</div>
                    <div>
                        <p>The amazingly flexible weapon progression and tuning system, rock-solid gunplay, and some really awesome and inventive new modes on huge maps chippi chippi chappa chappa dubi The amazingly flexible weapon progression The amazingly flexible weapon progression and tuning system, rock-solid gunplay, and some really awesome and inventive new modes on huge maps chippi chippi chappa chappa dubi The amazingly flexible weapo</p>
                        <hr>

                        <!-- instructor -->
                        <div class="grid"> 
                            <?php for($i=0;$i<3;$i++):?>
                                <div class="flex flex-row h-16">
                                    <img class="rounded-full" src="<?php echo e(asset('assets/nanachipfp.jpg')); ?>" alt="">
                                    <div>
                                        <p>Ms. Nanachi made in abyss</p>
                                        <p>20 lectures 5 quizs</p>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>

            </div>

            <!-- content zone -->
            <div class="w-full min-h-96 flex flex-col">

                <!-- week label -->
                <div class="grid m-5 bg-gray-200">
                    <h1>Week 01: Introducing Today Technology [Kitsuchart Pasupa]</h1>
                    <p>Course Syllabus - Lecture <input type="checkbox" checked="checked" class="checkbox" /></p>
                    <p>Course Syllabus - Lab</p>
                    <p>Course Syllabus - Lecture</p>
                    <p>Course Syllabus - Lab</p>
                </div>
            </div>
            
        </div>

        <!-- rightbar (id to find => text) -->
        <?php
        $rightbarList = array(
            "#navbar" => "Welcome",
            "#whatwill" => "What will you get",
            "#recommended" => "Recommended Course",
        );
        ?>
        <?php echo $__env->make('components.rightbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/courseInfo.blade.php ENDPATH**/ ?>