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
            background-image: url('{{ asset("assets/Register/code.jpg") }}');
            opacity: 0.25;
            z-index: -1;
        }
    </style>
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="content-center">
            <div class="text-center">
                <div class="text-8xl text-warning">Login to LearnSite</div>
            </div>
            <div class="border-4 border-base-100 m-10">
                <div class="m-10">
                    <div class="text-4xl mb-3 text-neutral">Username or Email Address</div>
                    <input type="text" placeholder="Enter Username or Email Address" class="text-xl input input-bordered input-info w-full mb-3" />
                    <div class="text-4xl mb-3 text-neutral">Password</div>
                    <input type="text" placeholder="Enter Password" class="text-xl input input-bordered input-info w-full mb-3" />
                    <div class="flex justify-center">
                        <button class="btn btn-secondary text-2xl mt-7 w-64">Sign in</button>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('regis') }}" class="text-3xl link link-secondary">Don’t have an account?</a>
            </div>
        </div>
</body>

</html>