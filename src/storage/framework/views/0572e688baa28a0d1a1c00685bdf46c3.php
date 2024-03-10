

<div class="rightbar w-44 flex-none shadow-lg border-l-4 border-sky-800 bg-stone-100 sm:hidden lg:block ">
    <div class="top-0 overflow-hidden">
        <div class="grid justify-center mt-4">
            <img src="<?php echo e(asset('assets/LearnsiteLogo.jpg')); ?>" alt="" class="max-w-20 rounded-full">
        </div>  
        <ul class="menu menu-sm bg-gray-100 w-full mt-2">
            <hr class="mb-2 w-6/12 self-center">  
            <?php
                foreach ($rightbarList as $id => $text){
                    echo '<li><a class="" href="'.$id.'">'.$text.'</a></li>';
                }
            ?>
        </ul>
    </div>
</div><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/components/rightbar.blade.php ENDPATH**/ ?>