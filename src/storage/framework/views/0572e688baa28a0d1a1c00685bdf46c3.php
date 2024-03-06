

<div class="rightbar w-50 flex-none shadow-lg">
    <div class="sticky top-0 overflow-hidden">
        <ul class="menu bg-gray-100 w-full ">

            <?php
                foreach ($rightbarList as $id => $text){
                    echo '<li><a class="underline" href="'.$id.'">'.$text.'</a></li>';
                }
            ?>
        </ul>
    </div>
</div><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/components/rightbar.blade.php ENDPATH**/ ?>