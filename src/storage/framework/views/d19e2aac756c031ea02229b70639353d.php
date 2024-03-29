<!DOCTYPE html>
<html data-theme="emerald">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnSite</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body::before {
            content: "";
            position: fixed;
            width: 100%;
            height: 100%;
            background-image: url('<?php echo e(asset("assets/Register/code.jpg")); ?>');
            opacity: 0.25;
            z-index: -1;
        }
    </style>
</head>

<body>
    <div class="grid place-items-center h-screen p-8">
        <div class="w-full max-w-md p-6 space-y-6 bg-white shadow-md rounded-lg">
            <div class="text-3xl text-warning text-center">เข้าสู่ระบบ</div>
            <div class="border-4 border-base-100 p-4">
                <div class="space-y-4">
                    <form action="" method="get">
                        <div class="text-md text-neutral">Username หรือ อีเมล</div>
                        <input type="text" placeholder="Enter Username" class="text-base input input-bordered input-info w-full" />

                        <div class="text-md text-neutral mt-3">รหัสผ่าน</div>
                        <input type="password" placeholder="Enter Password" class="text-base input input-bordered input-info w-full" />
                        <div class="flex justify-center mt-6">
                            <button class="btn btn-secondary text-xl w-64">เข้าสู่ระบบ</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center">
                <a href="<?php echo e(route('regis')); ?>" class="text-lg link link-secondary">ยังไม่มีบัญชี?</a>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/login.blade.php ENDPATH**/ ?>