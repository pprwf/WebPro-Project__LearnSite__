<style>
    .website_name {
        font-family: 'Maitree', sans-serif;
        font-weight: bold;
    }
</style>

<?php


?>
<nav id="navbar" class="navbar bg-secondary flex justify-between bg-sky-800 shadow-md ">
    <a href="/">
        <img src="<?php echo e(asset('assets/LearnsiteLogo.jpg')); ?>" alt="" class="size-11 rounded-full  ml-2">
        <h1 id="" class="website_name text-3xl ml-2 text-slate-100">LearnSite</h1>
    </a>
    <div class="mr-3">
        <?php
        // foreach ($navList as $name => $link) {
        //     echo '<a class="btn btn-ghost text-xl" href="' . $link . '">' . $name . '</a>';
        // }
        ?>

        <a class="btn btn-ghost text-xl text-slate-200" href="allcourse">All course</a>
        <a class="btn btn-ghost text-xl text-slate-200" href="userhome">My course</a>

        <div class="dropdown dropdown-end ml-3 mr-3">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-25 rounded-full">
                    <img src="<?php echo e(asset('assets/nanachipfp.jpg')); ?>" class="size-48  rounded-full border-orange-600 border-4" alt="">
                </div>
            </div>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li><a href="<?php echo e(route('profile')); ?>" class="justify-between">Profile<span class="badge">New</span></a></li>
                <li><a href="<?php echo e(route('home')); ?>">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
?><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/components/navbar2.blade.php ENDPATH**/ ?>