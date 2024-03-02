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

    <!-- navbar (name => link)-->
    <?php
    $navList = array(
        "Course" => "course",
        "Register" => "register",
        "Login" => "login",
    );
    ?>
    @include('navbar')


    <div class="hero min-w-screen w-full overflow-hidden" style="background-image: url({{ asset('assets/Learnsitebg.png') }});">
        <div class="flex-col herocon pl-24 text-base-100">
            <div class="flex-auto grid items-center overflow-hidden">
                <div class="mb-16">
                    <p class="text-2xl">Wellcome to</p>
                    <h1 class="website_name text-8xl font-bold mt-12 text-cyan-300">LearnSite</h1>
                    <hr class="mr-200">
                    <p class="text-xs mt-2.5">If you looking for the place to learning through website <strong>JOIN US!</strong>
                        <br>we have ton of course you must like
                    </p>
                </div>
            </div>

            <div class="flex-none mb-4">
                <p class="text-1xl">Scroll for more</p>
            </div>
        </div>
    </div>

    <div id="whatwill"></div>

    <!-- div under Hero (leftbar content rightbar)-->
    <div class="flex flex-row w-full ">

        <!-- just leftbar -->
        <div class="leftbar w-[2%] flex-none border-orange-600 border-2"></div>

        <!-- content -->
        <div class="content flex flex-col flex-auto">

            <!-- whatwill -->
            <div class="flex flex-row mt-20">
                <div class="pr-16 w-3/4">
                    <h1 class="text-4xl pl-16 font-bold">WHAT WILL YOU GET</h1>
                    <br class="mt-20">
                    <br class="mt-20">
                    <p class="pl-16 indent-8">We are committed to providing you with a comprehensive learning experience that goes beyond traditional education. When you enroll in our courses, you can personalized learning paths, allowing you to progress at your own pace. Tailor your study schedule to fit your busy lifestyle while achieving your educational aspirations.</p>
                    <br>
                    <p class="pl-16 indent-8">Explore our courses today and take the first step toward a brighter future. Join a community of passionate learners, connect with industry experts, and gain the skills that will set you apart. Whether you're looking to advance your career or explore a new field, LearnSite is here to support your educational aspirations. Start your learning journey today and discover the endless possibilities that education with us can offer. Your success story begins here.</p>
                </div>
                <div class="w-3/4 flex items-center">
                    <img src="{{ asset('assets/computer.jpg') }}" class="w-3/4 shadow-2xl my-20" style="border-radius: 5rem;" alt="">
                </div>
            </div>

            <br>
            <br>

            <!-- skilled instructor -->
            <div class="overflow-hidden">
                <h1 class="text-xl pl-16 font-bold">We also have skilled instructor</h1>
                <p class="pl-24">They make our community stay flow and go forward with their reliable and knowledge </p>

                <div class="flex flex-row mt-16 ml-28 overflow-hidden">

                    <!-- <div class="border-orange-600 border-2 w-1/5 flex flex-col h-96 relative ml-20" >
                        <img src="{{ asset('assets/nanachipfp.jpg') }}" class="w-full rounded-full z-10" alt="">
                        <div class="absolute bg-sky-200 rounded-2xl w-[110%] pt-[100%] top-[40%] left-1/2 -translate-x-1/2"></div>
                        <div class="absolute bg-sky-400 rounded-2xl text-center w-fit min-w-24 rounded-2xl p-1 top-[60%] left-1/2 -translate-x-1/2 z-20">Nanachi</div>
                    </div> -->


                    <div class="flex flex-col items-center relative ml-20 overflow-hidden">
                        <img src="{{ asset('assets/nanachipfp.jpg') }}" class="size-48  rounded-full" alt="">
                        <div class="size-48 rounded-2xl absolute border-orange-600 border-2 top-32 flex flex-col items-center text-ellipsis">
                            <div class="bg-sky-400 w-fit rounded-2xl p-1 mt-12 min-w-24 text-center ">Nanachi</div>
                            <p class="text-center text-ellipsis overflow-hidden mt-2">We are committed to providing you with a comprehensive learning experience that goes beyond traditional education. When you enroll in our courses, you can personalized learning paths, allowing you to progress at your own pace. Tailor your study schedule to fit your busy lifestyle while achieving your educational </p>
                        </div>
                        <div class="size-52 bg-sky-200 rounded-2xl relative" style="top: -4rem; z-index: -1;"></div>
                    </div>

                    <div class="flex flex-col items-center relative ml-20 overflow-hidden">
                        <img src="{{ asset('assets/nanachipfp.jpg') }}" class="size-48  rounded-full" alt="">
                        <div class="size-48 rounded-2xl absolute border-orange-600 border-2 top-32 flex flex-col items-center text-ellipsis">
                            <div class="bg-sky-400 w-fit rounded-2xl p-1 mt-12 min-w-24 text-center ">Nanachi</div>
                            <p class="text-center text-ellipsis overflow-hidden mt-2">We are committed to providing you with a comprehensive learning experience that goes beyond traditional education. When you enroll in our courses, you can personalized learning paths, allowing you to progress at your own pace. Tailor your study schedule to fit your busy lifestyle while achieving your educational </p>
                        </div>
                        <div class="size-52 bg-sky-200 rounded-2xl relative" style="top: -4rem; z-index: -1;"></div>
                    </div>
                </div>
            </div>


            <!-- Recommended Course -->
            @include('recCourse')

        </div>

        <!-- rightbar (id to find => text) -->
        <?php
        $rightbarList = array(
            "#navbar" => "Welcome",
            "#whatwill" => "What will you get",
            "#recommended" => "Recommended Course",
        );
        ?>
        @include('rightbar')
    </div>

    @include('footer')


</body>

</html>