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
        .disable-click {
            pointer-events: none;
        }

        .yellow {
            background-color: #FFFA88;
        }

        .green {
            background-color: #88FFC6;
        }
    </style>
</head>

<body>

    <?php echo $__env->make('components.navbar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- div under Hero (leftbar content rightbar)-->
    <div class="flex flex-row w-full m-auto">

        <!-- just leftbar -->
        <div class="leftbar w-full md:w-auto border-orange-600 border-2"></div>

        <!-- content -->
        <div class="content flex flex-col flex-auto md:w-full">
                <h1 class="text-4xl pl-4 md:pl-16 font-bold mb-5 mt-8">All Course</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4 md:px-0 mt-5 mb-5 ml-7 mr-7">

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
                    $recCourseOrder = 0;
                    ?>

                    <?php foreach ($recCourseList as $recCourse) : ?>
                        <?php $recCourseOrder += 1; ?>
                        <?php echo $__env->make('components.recCourseItem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; ?>
            </div>

        </div>

        <!-- rightbar (id to find => text) -->
        <?php
        $rightbarList = array(
            "#navbar" => "ยินดีต้อนรับ",
            "#whatwill" => "สิ่งที่คุณจะได้รับ",
            "#recommended" => "คอร์สแนะนำ",
        );
        ?>
        <?php echo $__env->make('components.rightbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/allcourse.blade.php ENDPATH**/ ?>