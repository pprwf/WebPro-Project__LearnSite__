<div id="recommended" class="grid w-full overflow-hidden relative mb-16">
                <div class="text-4xl pl-16 font-bold mb-5">Recommended Course</div>

                <div class="w-full carousel flex flex-row ">

                    <!-- Button -->
                    <div class="absolute flex justify-between top-1/2 left-1/2 -translate-x-1/2 w-[40rem] z-10">
                        <a id="btn-rc-l" class="btn btn-circle scale-110" href="#box0" onclick="changeOrderToLeft()">❮</a>
                        <a id="btn-rc-r" class="btn btn-circle scale-110" href="#box2" onclick="changeOrderToRight()">❯</a>
                    </div>
                    <script>
                        function changeOrderToLeft() {
                            let ref = document.getElementById("btn-rc-l").getAttribute("href");
                            let beforeClickOrder = parseInt(ref.replace(/\D/g, "")) + 1;
                            if (beforeClickOrder > 1) {
                                window.location.hash = document.getElementById('btn-rc-l').href;
                                setTimeout(function() { //onclick do before go to href if don't use this IDK!
                                    document.getElementById("btn-rc-l").setAttribute("href", "#box" + (beforeClickOrder - 2));
                                    document.getElementById("btn-rc-r").setAttribute("href", "#box" + (beforeClickOrder));
                                }, 0)
                            }
                        }

                        function changeOrderToRight() {
                            let ref = document.getElementById("btn-rc-l").getAttribute("href");
                            let beforeClickOrder = parseInt(ref.replace(/\D/g, "")) + 1;
                            let maxRecCourse = 3; //will change when php count recommendcourse (But it was not, so assign as you like)
                            if (beforeClickOrder < maxRecCourse) {
                                window.location.hash = document.getElementById('btn-rc-r').href;
                                setTimeout(function() {
                                    document.getElementById("btn-rc-l").setAttribute("href", "#box" + (beforeClickOrder));
                                    document.getElementById("btn-rc-r").setAttribute("href", "#box" + (beforeClickOrder+2));
                                }, 0)
                            }
                        }
                    </script>


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
            </div><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/components/recCourse.blade.php ENDPATH**/ ?>