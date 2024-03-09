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
            background-image: url('assets/Learnsitebg.png');
        }

        .disable-click {
            pointer-events: none;
        }
    </style>

</head>

<body>

    <!-- navbar (name => link)-->
    <?php
    $navList = array(
        "คอร์สทั้งหมด" => "courseinfo",
        "สมัครสมาชิก" => "register",
        "เข้าสู่ระบบ" => "login",
    );
    ?>
    @include('components.navbar')


    <div class="hero min-w-screen w-full overflow-hidden">
        <div class="herocon flex flex-col w-full h-full text-base-100 pl-24">
            <div class="flex-auto grid items-center overflow-hidden">
                <div class="mb-12">
                    <p class="text-2xl">ยินดีต้อนรับเข้าสู่</p>
                    <h1 class="website_name font-bold text-8xl text-cyan-300 mt-12 ">LearnSite</h1>
                    <hr class="w-5/12">
                    <p class="text-sm mt-4">ถ้าคุณกำลังมองหาเว็บไซต์สำหรับเรียนออนไลน์อยู่ล่ะก็ <strong>มาเข้าร่วมกับเราสิ!</strong>
                        <br>พวกเรามีคอร์สเรียนมากมายที่คุณจะต้องชอบอย่างแน่นอน
                    </p>
                </div>
            </div>

            <div class="flex-none mb-4">
                <p>เลื่อนลงเพื่อดูเพิ่มเติม</p>
            </div>
        </div>
    </div>

    <div id="cp-whatwill"></div>

    <!-- div under Hero (leftbar content rightbar)-->
    <div class="flex flex-row w-full ">
        <!-- just leftbar -->
        <div class="leftbar flex-none w-[2%] border-r-2 border-sky-600"></div>
        <!-- content -->
        <div class="relative content flex-auto flex flex-col overflow-hidden">
            <div class="absolute w-full h-[50rem] bottom-0 bg-gradient-to-t from-slate-100 from-30% to-90%"></div>
            <!-- whatwill -->
            <div class="flex flex-row mt-20">
                <div class="w-3/4 pr-16">
                    <h1 class="font-bold text-4xl pl-16">เกี่ยวกับ Learnsite</h1>
                    <br class="mt-20">
                    <br class="mt-20">
                    <p class="indent-8 pl-16">Learnsite เป็นเป็นสำหรับเรียนออนไลน์ที่เปิดให้คุณมีอิสระในการเลือกคอร์สเรียนด้วยตัวเอง โดยเรามีคอร์สเรียนให้เลือกมากมายตั้งแต่คอร์สเรียนระดับพื้นฐานไปจนถึงคอร์สเรียนแบบเฉพาะด้านที่ถูกกำกับดูแลโดยผู้เชี่ยวชาญในด้านนั้นๆ ทั้งยังมีเนื้อหาที่ครอบคลุมในด้านการเรียนการสอนความรู้รอบตัวจากประสบการณ์ในการทำงานของผู้สอนอีกด้วย</p>
                    <br>
                    <p class="indent-8 pl-16">มาเริ่มสำรวจคอร์สเรียนกันเลยในวันนี้เพื่อที่จะได้ก้าวเข้าสู่คลังความรู้ที่พวกเราได้จัดเตรียมไว้ให้ เพิ่มทักษะด้วยการลองทำแบบทดสอบต่างๆ มองหาเนื้อหาที่สดใหม่ ทุกอย่างพวกเราจัดเตรียมไว้ให้คุณแล้ว ความสำเร็จอันก้าวหน้าหรือความใฝ่ฝันที่ต้องการให้เป็นจริงอาจเริ่มต้นขึ้นที่ตรงนี้ก็ได้</p>
                </div>
                <div class="flex items-center w-3/4">
                    <img src="{{ asset('assets/computer.jpg') }}" class="w-3/4 rounded-[5rem] shadow-2xl my-16" alt="">
                </div>
            </div>

            <br>
            <br>

            <!-- skilled instructor -->
            <div class="overflow-hidden">
                <h1 class="font-bold text-xl pl-16">เรามีผู้สอนที่เชี่ยวชาญเฉพาะด้านด้วยนะ</h1>
                <p class="pl-24 mt-1">ความรู้และประสบการณ์ที่มีของพวกเขาถูกถ่ายทอดออกมาเป็นเนื้อหาที่ผู้คนสนใจสุดๆเลย ถ้าเห็นพวกเขาในคอร์สไหนล่ะก็คุณอาจจะต้องลองเปิดดูคอร์สนั้นดูสักหน่อยแล้ว</p>


                <div class="flex flex-row mt-16 ml-28 overflow-hidden">
                    <div class="relative flex flex-col items-center ml-20 overflow-hidden">
                        <img src="https://ih1.redbubble.net/image.5059831822.1588/st,extra_large,507x507-pad,600x600,f8f8f8.jpg"  class="size-48 rounded-full shadow-md" alt="">
                        <div class="absolute flex flex-col items-center size-48 top-32 rounded-2xl text-ellipsis">
                            <div class="bg-sky-400 w-fit rounded-2xl p-1 mt-12 min-w-24 text-center ">สมเกียร์ติ</div>
                            <p class="text-center mt-3 overflow-hidden">เชี่ยวชาญในการทำ Database นอกจากนั้นก็ทำอะไรไม่ได้เลย แต่อย่างน้อยเขาก็ทำ Database เก่งที่สุด</p>
                        </div>
                        <div class="relative -z-[1] size-52 -top-[4rem] bg-sky-200 rounded-2xl shadow-md"></div>
                    </div>
                </div>

            </div>

            <?php $currentPath = ""; ?>
            <!-- Recommended Course -->
            @include('components.recCourse')

        </div>

        <!-- rightbar (id to find => text) -->
        <?php
        $rightbarList = array(
            "#navbar" => "ยินดีต้อนรับ",
            "#cp-whatwill" => "เกี่ยวกับ Learnsite",
            "#recommended" => "คอร์สแนะนำ",
        );
        ?>
        @include('components.rightbar')
    </div>

    @include('components.footer')

</body>

</html>
