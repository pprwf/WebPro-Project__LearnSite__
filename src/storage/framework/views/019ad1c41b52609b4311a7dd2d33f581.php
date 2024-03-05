

<div class="rightbar w-2/12 flex-none border-orange-600 border-2">
    <div class="sticky top-0 overflow-hidden">
        <ul class="menu bg-base-200 w-full ">

            <?php
                foreach ($rightbarList as $id => $text){
                    echo '<li><a href="'.$id.'">'.$text.'</a></li>';
                }
            ?>
        </ul>
    </div>
</div><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/rightbar.blade.php ENDPATH**/ ?>