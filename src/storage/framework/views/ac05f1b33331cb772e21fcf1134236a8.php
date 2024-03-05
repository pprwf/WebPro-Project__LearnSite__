<!DOCTYPE html>
<html data-theme="emerald">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnSite</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maitree:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav>
        <?php echo $__env->make('components.navbar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </nav>

    <div class="flex flex-col md:flex-row w-full">
        <aside class="leftbar md:w-1/12 flex-none border-orange-600 border-2">

        </aside>

        <main class="flex flex-col md:flex-row w-full md:w-3/4 p-4">
            <img src="<?php echo e(asset('assets/nanachipfp.jpg')); ?>" class="size-48  rounded-full border-orange-600 border-4" alt="">
            <div class="card w-full bg-base-100 shadow-xl mt-8 md:ml-12 md:mt-0 rounded-lg border-orange-600 border-2">
                <div class="bg-primary">
                    <h1 class="text-3xl mt-5 ml-5">Nanachi Madeinabyss</h1>
                    <p class="text-base ml-5 mb-5">@nanachiteacher</p>
                    <h1 class="text-3xl mt-5 ml-5 mb-5 text-secondary">Instructor</h1>
                </div>
                <div class="m-5">
                    <div class="mb-3 text-xl">First Name</div>
                    <input type="text" class="text-base input input-bordered w-96" value="nanachi" disabled />
                    <div class="mb-3 mt-3 text-xl">Last Name</div>
                    <input type="text" class="text-base input input-bordered w-96" value="nanachi" disabled />
                    <div class="mb-3 mt-3 text-xl">E-mail</div>
                    <input type="email" class="text-base input input-bordered w-96" value="nanachi@gmail.com" disabled/>
                    <div class="mb-3 mt-3 text-xl">Username</div>
                    <input type="text" class="text-base input input-bordered w-96" value="nanachiteacher" disabled />
                    <div class="mb-3 mt-3 text-xl">Phone</div>
                    <input type="text" class="text-base input input-bordered w-96" value="069-6969696" disabled />
                </div>
            </div>
        </main>

        <aside class="w-full md:w-1/4 bg-gray-200 p-4 md:border-l md:border-gray-300">
            <!-- Right Sidebar Content -->
            <?php
            $rightbarList = array(
                "#name" => "<h1 class='text-lg'>Phakin Janjumlong</h1>",
                "#username" => "<p>@Pakinza007</p>",
                "#editprofile" => "Edit Profile",
                "#logout" => "Logout",
            );
            ?>
            <?php echo $__env->make('components.rightbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </aside>

    </div>

    <footer>
        <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>


</body>

</html><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/profile.blade.php ENDPATH**/ ?>