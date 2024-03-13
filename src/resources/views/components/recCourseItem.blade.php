<?php
    $courses = session() -> get("join");
    $recCourseList = [];
    foreach ($courses as $course) {
        $picture = ($course -> picture == null) ? asset('assets/profile.jpg') : asset("/assets/" . $course -> picture);
        $recCourseList[] = [
            "title" => $course -> courseName,
            "titleImg" => $course -> courseImage,
            "description" => $course -> detail,
            "instructor1" => $picture,
            "rating" => "0",
            "time" => "0",
            "link" => ""
        ];
    };
?>
@foreach ($recCourseList as $recCourse)
<?php $img = asset("/assets/" . $recCourse["titleImg"]); ?>
<div class="w-full flex-none flex justify-center carousel-item">
    <a href="{{ $recCourse['link'] }}" class="flex flex-row justify-center">
        <div class="sm:w-[25rem] md:w-[38rem]">
            <div class="flex-none w-full h-auto rounded-3xl overflow-hidden flex flex-col shadow-md ">
                <!-- Course img -->
                <div class="w-full sm:h-[10rem] md:h-[15rem] bg-center bg-cover" style="background-image: url('{{ $img }}')"></div>

                <!-- Course Descript -->
                <div class="flex flex-col flex-auto justify-between p-4 bg-white">
                    <h1 class="text-2xl font-bold flex-auto"> <?php echo $recCourse["title"] ?> </h1>
                    <!-- Course Detail -->
                    <div class="flex flex-row flex-initial flex-wrap md:flex-nowrap">
                        <div class="w-full md:w-7/12">
                            <h2>Description</h2>
                            <hr>
                            <p class="text-sm"> <?php echo $recCourse["description"] ?> </p>
                        </div>
                        <!-- small orange box -->
                        <div class="flex-1 flex items-center justify-center">
                            <div class="bg-orange-200 w-fit h-fit rounded-3xl p-2 text-sm">
                                <div class="flex flex-row items-center">
                                    <p class="">instructor</p>
                                    <img class="rounded-full size-10 ml-2 max-w-full h-auto" src="<?php echo $recCourse["instructor1"] ?>">
                                </div>

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
                                <p class="text-xs mt-1">approximate time <?php echo $recCourse["time"] ?> hr</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
@endforeach
