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
    
    @include('components.navbar')

    <!-- modal when search -->
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
            $recCourseOrder = 1000;
            ?>
            <div class="w-full flex flex-col ">
                <?php foreach ($recCourseList as $recCourse) : ?>
                    <?php $recCourseOrder += 1; ?>
                    
                    @include('components.recCourseItem')
                    <br>
                <?php endforeach; ?>
            </div>
        </div>
    </dialog>

    <div class="w-full h-[35%] grid bg-sky-800 text-base-200 pt-10 pb-10 pl-24">
        <p class="text-2xl">สวัสดี {{ $query -> username }}</p>
        <p class="text-xs mt-2.5">ยินดีต้อนรับกลับ, คุณได้เรียนอะไรไปบ้างหรือยังในวันนี้</p>
        <div class="mt-5">
            <p class="text-xs mt-2.5">ค้นหาคอร์ส</p>
            <input type="text" placeholder="ค้นหาคอร์ส" class="input input-bordered input-sm w-1/5 max-w-xs text-xs mt-1.5 text-info-content" />
            <button type="submit" class=" btn  btn-sm w-10s text-xs mt-1.5 text-base-200" onclick="my_modal_4.showModal()">ยืนยัน</button>
        </div>
    </div>

    <!-- div under Hero (leftbar content rightbar)-->
    <div class="flex flex-row w-full ">

        <!-- just leftbar -->
        <div class="leftbar w-[2%] flex-none border-orange-600 border-2"></div>

        <!-- content -->
        <div class="content flex flex-col flex-auto">
            <h1 class="text-4xl pl-16 font-bold mt-12">คอร์สของคุณ</h1>

            <div class="grid grid-cols-4 justify-items-center pl-[15%] pr-[15%] pt-10">

                @include('components.smallcourseitem')
                @include('components.smallcourseitem')
                @include('components.smallcourseitem')

                <a href="">
                    <div class="card card-compact w-60 bg-base-100 shadow-xl m-2">
                        <figure><img src="https://assets.xboxservices.com/assets/1d/5b/1d5bc84f-2135-4e2f-8ca6-bb000d97db7f.jpg?n=Elden-Ring_GLP-Poster-Image-1084_1920x1080.jpg" alt="Shoes" /></figure>
                        <div class="card-body overflow-hidden green rounded-b-2xl">
                            <h2 class="card-title text-lg">Elden Ring</h2>
                            <!-- <p>If a dog chews shoes whose shoes does he choose?</p> -->
                            <div class="flex flex-row items-center">
                                <progress class="progress w-40" value="69" max="100"></progress>
                                <p class="ml-4">69%</p>
                            </div>
                            <div class="card-actions justify-start mt-3">
                                <div class="avatar-group -space-x-6 rtl:space-x-reverse">
                                    <div class="avatar">
                                        <div class="w-8">
                                            <img src="https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg" />
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <div class="w-8">
                                            <img src="https://tr.rbxcdn.com/a71f2918a69a2c57946264dbcaf875ab/420/420/Image/Png" />
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <div class="w-8">
                                            <img src="{{ asset('assets/nanachipfp.jpg') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>


            </div>


            <br>
            <br>



            <!-- Recommended Course -->
            @include('components.recCourse')

        </div>

        <!-- rightbar (id to find => text) -->
        <?php
        $rightbarList = array(
            "#navbar" => "ยินดีต้อนรับ",
            "#whatwill" => "คอร์สของคุณ",
            "#recommended" => "คอร์สแนะนำ",
        );
        ?>
        @include('components.rightbar')
    </div>

    @include('components.footer')


</body>

</html>
