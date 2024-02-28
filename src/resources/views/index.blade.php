<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maitree:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: brown;
        }

        .hero {
            height: 85%;
        }

        .herocon {
            width: 100%;
            height: 100%;
            display: flex;
        }

        .mr-200 {
            margin-right: 50rem;
        }
    </style>
</head>
<body>

    @include('navbar')

    
    <div class="hero min-w-screen " style="background-image: url({{ asset('assets/Learnsitebg.png') }});">
        <div class="flex-col herocon pl-24 text-base-100">
            <div class="flex-auto grid items-center">
                <div class="mb-16">
                    <p class="text-2xl">Wellcome to</p>
                    <h1 class="website_name text-8xl font-bold mt-12 text-cyan-300">LearnSite</h1>
                    <hr class="mr-200">
                    <p class="text-xs mt-2.5">If you looking for the place to learning through website <strong>JOIN US!</strong>
                        <br>we have ton of course you must like
                    </p>
                </div>
            </div>

            <div class="flex-none mb-4">
                <p class="text-1xl">Scroll for more</p>
            </div>
        </div>
    </div>


</body>

</html>