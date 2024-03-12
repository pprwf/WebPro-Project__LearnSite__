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
    <nav>
        @include('components.navbar')
    </nav>
    <!-- div under Hero (leftbar content rightbar)-->
    <div class="flex flex-col md:flex-row">
        <!-- just leftbar -->
        <div class="leftbar w-full md:w-auto border-orange-600 border-2"></div>
        <!-- content -->
        <div class="content flex flex-col flex-auto md:w-2/3 md:pl-4 md:pr-16">
            <div class="pl-4 mt-4">
                <label for="" class="text-lg mt-2.5">ค้นหาคอร์ส</label><br>
                <input type="text" placeholder="insert name" class="input input-bordered input-sm w-60 max-w-xs text-base mt-1.5 text-info-content" />
            </div>
            <br>
            <div class="pl-4 mt-4">
                <label class="text-lg mt-2.5">เพิ่มคอร์ส</label><br>
                <form action="/addCourse" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="Course's Name" class="input input-bordered input-sm w-full max-w-xs text-base mt-2 text-info-content" /><br>
                    @error("name")
                        <div class="flex justify-center mt-5"><span class="text-error">{{ $message }}</span></div>
                    @enderror
                    <textarea placeholder="Description" name="detail" class="textarea textarea-bordered textarea-sm w-full max-w-xs text-base mt-2 text-info-content"></textarea><br>
                    @error("detail")
                        <div class="flex justify-center mt-5"><span class="text-error">{{ $message }}</span></div>
                    @enderror
                    <input type="file" name="cover" class="file-input file-input-bordered w-full max-w-xs input-sm mt-2" accept="image/*" /><br>
                    @error("cover")
                        <div class="flex justify-center mt-5"><span class="text-error">{{ $message }}</span></div>
                    @enderror
                    <div name="type">
                        <div class="flex mt-2">
                            <input type="checkbox" name="lecture" checked="checked" class="checkbox" value="Lec" />
                            <label class="text-lx ml-1.5">ทฤษฎี</label>
                        </div>
                        <div class="flex mt-1.5">
                            <input type="checkbox" name="lab" checked="checked" class="checkbox" value="Lab" />
                            <label class="text-lx ml-1.5">ปฏิบัติ</label>
                        </div>
                    </div>
                    @error("type")
                        <div class="flex justify-center mt-5"><span class="text-error">{{ $message }}</span></div>
                    @enderror
                    <button class="btn btn-secondary text-xl w-full mt-8">เพิ่มคอร์สเรียน</button>
                </form>
            </div>
            <h1 class="text-4xl pl-4 md:pl-16 font-bold mb-5 mt-8">ทุกคอร์ส</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4 md:px-0 mt-5 mb-5">
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
