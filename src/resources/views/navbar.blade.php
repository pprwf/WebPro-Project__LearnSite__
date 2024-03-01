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
        <img src="{{ asset('assets/LearnSiteLogo.jpg') }}" alt="" class="size-11 rounded-full  ml-2">
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