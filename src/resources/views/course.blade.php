<!DOCTYPE html>
<html data-theme="emerald">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnSite</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>

    @include('components.navbar2')

    <!-- div under Hero (leftbar content rightbar)-->
    <div class="flex flex-row w-full ">

        <!-- just leftbar -->
        <div class="leftbar w-[2%] flex-none border-orange-600 border-2"></div>

        <!-- content -->
        <div class="content flex flex-col flex-auto">
            

        </div>

        @include('components.recCourse')

        <!--FOR COMPONENTS RIGHTBAR-->
        <?php
        $rightbarList = array(
            "#navbar" => "Title",
            "#whatwill" => "Week 01: Intorduction Today Te..",
            "#recommended" => "Continue on Course",
        );
        ?>
        @include('components.rightbar')

        

        
    </div>

    @include('components.footer')

    <script src="../js/app.js"></script>
</body>

</html>