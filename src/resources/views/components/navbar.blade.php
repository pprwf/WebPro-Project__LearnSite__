<style>
    .website_name {
        font-family: 'Maitree', sans-serif;
        font-weight: bold;
    }
</style>

<?php


?>
<nav id="navbar" class="navbar bg-secondary flex justify-between bg-slate-50 shadow-md">
    <a  href="/">
        <img src="{{ asset('assets/LearnsiteLogo.jpg') }}" alt="" class="size-11 rounded-full  ml-2">
        <h1 id="" class="website_name text-3xl  ml-2">LearnSite</h1>
    </a>
    <div class="mr-3">
        <?php
        foreach ($navList as $name => $link) {
            echo '<a class="btn btn-ghost text-xl" href="' . $link . '">' . $name . '</a>';
        }
        ?>
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-25 rounded-full">
            <img src="{{ asset('assets/nanachipfp.jpg') }}" class="size-48  rounded-full border-orange-600 border-4" alt="">
            </div>
        </div>
    </div>
</nav>

<?php
?>