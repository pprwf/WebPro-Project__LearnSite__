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

    <!-- div under Hero (leftbar content rightbar)-->
    <div class="flex flex-row w-full m-auto">

        <!-- just leftbar -->
        <div class="leftbar w-full md:w-auto border-orange-600 border-2"></div>

        <!-- content -->
        <div class="content flex flex-col flex-auto md:w-full">
                <h1 class="text-4xl pl-4 md:pl-16 font-bold mb-5 mt-8">All Course</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4 md:px-0 mt-5 mb-5 ml-7 mr-7">
                @include('components.recCourseItem')
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
        @include('components.rightbar')
    </div>

    @include('components.footer')


</body>

</html>
