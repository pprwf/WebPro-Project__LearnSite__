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

        .mr-200 {
            margin-right: 50rem;
        }
    </style>
</head>

<body>

    @include('navbar')


    <div class="hero min-w-screen w-full" style="background-image: url({{ asset('assets/Learnsitebg.png') }});">
        <div class="flex-col herocon pl-24 text-base-100">
            <div class="flex-auto grid items-center">
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


    <div class="flex flex-row w-full">
        <div class="leftbar w-48 border-orange-600 border-2"></div>

        <div class="content flex flex-col">
            <div class="flex flex-row mt-20 grow">
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

            <div>
                <h1 class="text-xl pl-16 font-bold">We also have skilled instructor</h1>
                <p class="pl-24">They make our community stay flow and go forward with their reliable and knowledge </p>

                <div class="flex flex-row mt-16 ml-28 w-full">
                    <div class="flex flex-col items-center relative ml-20">
                        <img src="{{ asset('assets/nanachipfp.jpg') }}" class="size-48  rounded-full" alt="">
                        <div class="size-48 rounded-2xl absolute border-orange-600 border-2 top-32 flex flex-col items-center text-ellipsis">
                            <div class="bg-sky-400 w-fit rounded-2xl p-1 mt-12 min-w-24 text-center ">Nanachi</div>
                            <p class="text-center text-ellipsis overflow-hidden mt-2">We are committed to providing you with a comprehensive learning experience that goes beyond traditional education. When you enroll in our courses, you can personalized learning paths, allowing you to progress at your own pace. Tailor your study schedule to fit your busy lifestyle while achieving your educational </p>
                        </div>
                        <div class="size-52 bg-sky-200 rounded-2xl relative" style="top: -4rem; z-index: -1;"></div>
                    </div>

                    <div class="flex flex-col items-center relative ml-20">
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
            <div class="flex flex-col w-full">
                <div>Recommended Course</div>

                <div class="w-full flex flex-row justify-center relative p-5">

                    <!-- Button -->
                    <div class="absolute flex justify-between top-2/4  w-[44rem]">
                        <a class="btn btn-circle scale-110">❮</a>
                        <a class="btn btn-circle scale-110">❯</a>
                    </div>


                    <div class="w-[35rem] h-96 border-green-600 border-2 rounded-3xl overflow-hidden flex flex-col">
                        <!-- Course img -->
                        <div class="border-orange-600 border-2 w-full h-40 bg-center" style="background-image: url(https://cdn.cloudflare.steamstatic.com/steam/apps/391540/header.jpg?t=1579096091);"></div>

                        <!-- Course Descript -->
                        <div class="flex flex-col flex-auto justify-between p-4">

                            <h1 class="text-2xl font-bold flex-auto">Coding (Call of Duty: Modern Warfare 3)</h1>

                            <!-- Course Detail -->
                            <div class="flex flex-row flex-intitial">
                                <div class="w-7/12">
                                    <h2>Description</h2>
                                    <hr>
                                    <p class="text-sm">The amazingly flexible weapon progression and tuning system, rock-solid gunplay, and some really awesome and inventive new modes on huge maps chippi chippi chappa chappa dubi The amazingly flexible weapon progression</p>
                                </div>

                                <!-- small orange box -->
                                <div class="bg-orange-200 w-5/12 rounded-3xl p-2">
                                    <div class="flex flex-row items-center text-sm">
                                        <p class="">instructor</p>
                                        <img class="rounded-full size-10 ml-2" src="https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg" alt="">
                                        <img class="rounded-full size-10 ml-2" src="https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg" alt="">
                                        <img class="rounded-full size-10 ml-2" src="https://i.kym-cdn.com/photos/images/original/002/195/257/c89.jpg" alt="">
                                    </div>
                                    <div class="rating rating-hidden">
                                        <input type="radio" name="rating-1" class="mask mask-star" />
                                        <input type="radio" name="rating-1" class="mask mask-star" checked />
                                        <input type="radio" name="rating-1" class="mask mask-star" />
                                        <input type="radio" name="rating-1" class="mask mask-star" />
                                        <input type="radio" name="rating-1" class="mask mask-star" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="rightbar w-2/12 flex-none border-orange-600 border-2"></div>
    </div>


</body>

</html>