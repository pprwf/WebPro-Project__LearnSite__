<style>
    .website_name {
        font-family: 'Maitree', sans-serif;
        font-weight: bold;
    }
</style>

<?php


?>
<nav id="navbar" class="navbar bg-secondary-content flex justify-between">
    <div class="">
        <img src="<?php echo e(asset('assets/LearnSiteLogo.jpg')); ?>" alt="" class="size-11 rounded-full  ml-2">
        <h1 id="" class="website_name text-3xl  ml-2">LearnSite</h1>
    </div>
    <div class="">
        <?php
            foreach($navList as $name => $link){
                echo '<a class="btn btn-ghost text-xl" href="'.$link.'">'.$name.'</a>';
            }
        ?>
        <!-- <a class="btn btn-ghost text-xl" href="">Course</a>
        <a class="btn btn-ghost text-xl" href="">Register</a>
        <a class="btn btn-ghost text-xl" href="">Login</a> -->
    </div>
</nav>

<?php
                                // $checked = false;
                                // for($i=0;$i<=5;$i++){
                                //     echo '<input type="radio" name="rating-5" class="star disable-click mask mask-star-2 bg-red-600"';
                                    
                                //     if($recCourse["rating"]*10 < $i*10+5 && $checked == false){
                                //         echo '<p>';
                                //         echo $recCourse["rating"]*10;
                                //         echo ' '.$i*10+5;
                                //         echo '</p>';
                                //         // echo 'checked';
                                //         $checked = true;
                                //     }
                                //     echo '/>';
                                // }
                            ?><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/navbar.blade.php ENDPATH**/ ?>