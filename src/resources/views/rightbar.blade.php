<div class="rightbar w-2/12 flex-none border-orange-600 border-2">
    <div class="sticky top-0">
        <ul class="menu bg-base-200 w-full">

            <?php
                foreach ($rightbarList as $id => $text){
                    echo '<li><a href="'.$id.'">'.$text.'</a></li>';
                }
            ?>
        </ul>
    </div>
</div>