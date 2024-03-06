<html data-theme="emerald">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnSite</title>
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
        <div class="modal-box w-11/12 max-w-5xl m-5">
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
            <div class="w-full flex flex-col">
                <?php foreach ($recCourseList as $recCourse) : ?>
                    <?php $recCourseOrder += 1; ?>

                    <?php echo $__env->make('components.recCourseItem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <br>
                <?php endforeach; ?>
            </div>
        </div>
    </dialog>

    <dialog id="my_modal_5" class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <h3 class="font-bold text-lg">Are you sure to leave course</h3>
            <p class="py-4">if you leave course use must enroll again to enter the course</p>
            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-md btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
            </div>
        </div>
    </dialog>

    <dialog id="modal_add_label" class="modal">
        <div class="modal-box w-5/12">
            <h3 class="font-bold text-lg text-center ">Add label</h3>
            <!-- <p class="py-4">if you leave course use must enroll again to enter the course</p> -->
            <form action="" class="grid content-start">
                <div class="text-md text-neutral mt-5">Title</div>
                <input type="text" id="title" name="title" placeholder="Enter title" class="text-base input input-md input-bordered input-info w-full mt-1" required/>
                <input type="submit" onclick="" class="btn btn-sm w-10s text-xs mt-1.5 text-gray-100 bg-green-600 bottom-3 right-3 shadow-md justify-self-end" value="Submit" />
            </form>

            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-md btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
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
    <?php echo $__env->make('components.navbar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="flex flex-row w-full ">

        <!-- just leftbar -->
        <div class="leftbar w-[2%] flex-none border-orange-600 border-2"></div>

        <!-- content -->
        <div class="content flex flex-col flex-auto">

            <!-- course head -->
            <div class="flex flex-row grid-cols-2 w-full h-[60%]">
                <!-- img & review -->
                <div class="bg-cyan-100 w-1/2 h-full flex-none items-center flex flex-col">
                    <img class="w-8/12 h-60 rounded-xl mt-5" src="https://assets.xboxservices.com/assets/1d/5b/1d5bc84f-2135-4e2f-8ca6-bb000d97db7f.jpg?n=Elden-Ring_GLP-Poster-Image-1084_1920x1080.jpg" alt="">

                    <div class="w-8/12">
                        <p class="mt-5">INTRODUCTION TO NETWORK SYSTEMS / COMPUTER NETWORK (1/2023)</p>
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
                        <input type="submit" onclick="my_modal_4.showModal()" class=" btn btn-sm w-10s text-xs mt-1.5 text-gray-100 bg-blue-500 shadow-md" value="Rating" />
                    </div>
                </div>

                <!-- name & description -->
                <div class="bg-cyan-100 h-full flex-auto">

                    <div class="h-auto bg-cyan-400 text-3xl font-medium p-3">
                        <div class="ml-5 font-medium">INTRODUCTION TO NETWORK SYSTEMS / COMPUTER NETWORK (1/2023)</div>
                    </div>

                    <div class="relative m-5">
                        <p class="sm:text-sm lg:text-md xl:text-base">The amazingly flexible weapon progression and tuning system, rock-solid gunplay, and some really awesome and inventive new modes on huge maps chippi chippi chappa chappa dubi The amazingly flexible weapon progression The amazingly flexible weapon progression and tuning system, rock-solid gunplay, and some really awesome and inventive new modes on huge maps chippi chippi chappa chappa dubi The amazingly flexible weapo</p>

                        <input type="submit" onclick="my_modal_5.showModal()" value="leave course" class="absolute btn btn-sm w-10s text-xs mt-1.5 text-gray-100 bg-red-500 bottom-3 right-3 sm:bottom-5 sm:right-5 md:w-20 lg:w-24 xl:w-28 shadow-md" />
                        <hr class="mt-3 border-[1] border-slate-500">
                        <!-- instructor -->
                        <div class="grid mt-3">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="flex flex-row h-16 sm:h-16 md:h-16 lg:h-16 xl:h-16 m-2">
                                    <img class="rounded-full h-full" src="<?php echo e(asset('assets/nanachipfp.jpg')); ?>" alt="">
                                    <div class="ml-2">
                                        <p class="text-sm sm:text-sm md:text-sm lg:text-lg xl:text-lg">Ms. Nanachi made in abyss</p>
                                        <p class="text-xs sm:text-xs md:text-xs lg:text-sm xl:text-sm">20 lectures 5 quizs</p>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>


            <!-- content zone -->
            <div class="w-full flex flex-col">
                <div class="flex flex-row w-full ">
                <input type="submit" onclick="modal_add_label.showModal()" class=" btn btn-sm btn-outline border-dashed text-xs ml-12 mt-5 mb-3 text-gray-800 shadow-md rounded-full justify-self-end" value="+ Add label" />
                </div>
                <?php for ($a = 0; $a < 3; $a++) : ?>
                    <!-- week label -->
                    <div class="flex flex-row w-full min-h-96 px-12 mb-8">
                        <!-- content -->
                        <div class="grid bg-gray-200 flex-1 content-start p-2 pl-4">
                            <h1 class="text-lg mb-2">Week 01: Introducing Today Technology [Kitsuchart Pasupa]</h1>
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="flex flex-row p-1 ml-5 mb-2">
                                    <p class="flex flex-row w-full"><a href="" class="underline">Course Syllabus - Lecture</a></p>
                                    <input type="checkbox" checked="checked" class="checkbox self-end" />
                                </div>
                            <?php endfor; ?>
                        </div>
                        
                        <!-- setting inner -->
                        <div class="flex flex-col items-center bg-gray-300 p-2">
                            <label class="btn btn-md btn-circle bg-white swap swap-rotate shadow-md">
                                <!-- this hidden checkbox controls the state -->
                                <input type="checkbox" onclick="settingVisibleControll(this.parentNode.parentNode.children[1])"/>
                                <!-- hamburger icon -->
                                <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                    <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                                </svg>
                                <!-- close icon -->
                                <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                    <polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                                </svg>
                            </label>


                            <form action="" class="flex flex-col" style="display: none;">
                                <button class="btn btn-xs btn-square bg-white mt-2 shadow-md">-</button>
                                <button class="btn btn-xs btn-square bg-white mt-2 shadow-md">+</button>
                                <button class="btn btn-xs btn-square bg-white mt-2 shadow-md">up</button>
                                <button class="btn btn-xs btn-square bg-white mt-2 shadow-md">dn</button>
                            </form>
                        </div>

                        <!-- setting outter -->
                        <div class="flex flex-col items-center justify-center border-2 border-current hidden">
                            <button class="btn btn-xs btn-square"> up</button>
                            <button class="btn btn-xs btn-square">down</button>
                        </div>
                    </div>
                <?php endfor; ?>

                <script>
                    function settingVisibleControll(target){
                        if(target.style.display == "none"){
                            target.style.display = "flex";
                            target.style.flexDirection = "column";
                        }else{
                            target.style.display = "none";
                            // alert("none");
                        }
                    }
                    function getSettingForm(parent){
                        document.getElementById("")
                    }
                </script>
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

</html><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/courseinfo.blade.php ENDPATH**/ ?>