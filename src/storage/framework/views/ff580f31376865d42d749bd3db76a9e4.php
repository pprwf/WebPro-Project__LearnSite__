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
    <link href="https://fonts.googleapis.com/css2?family=Angkor&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">


    <style>
        .disable-click {
            pointer-events: none;
        }

        .yellow {
            background-color: #FFFA88;
        }

        .green {
            background-color: #88FFC6;
        }
        .fontfam-angkor{
            font-family: 'Angkor', sans-serif;
        }
        .fontfam-protest{
            font-family: 'Protest Strike', sans-serif;
        }
    </style>
</head>

<body>

    <div class="flex flex-col justify-between w-full h-full relative bg-slate-200">
    <div class="absolute bg-slate-200 w-full h-6"></div>
        <div class="w-full min-h-[20%] grid content-start justify-center bg-red-600 text-base-200 pt-12 pb-10">
            <p class="text-5xl fontfam-protest text-center ">Error 404</p>
            <p class="justify-self-center max-w-[70%] text-sm text-center mt-3">chippy chippy chappa chappachippy chippy chappa chappachippy chippy chappa chappachippy chippy chappa chappachippy chippy chappa chappa</p>
        </div>

        <div class="flex-none">
            <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>


</body>

</html><?php /**PATH C:\Users\NITRO\Desktop\WebFund\LS_docker\WebPro-Project__LearnSite__\WebPro-Project__LearnSite__\src\resources\views/error.blade.php ENDPATH**/ ?>