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

        .ml {
            margin-left: 28rem;
        }
    </style>
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="content-center">
            <div class="text-8xl text-warning">
                <div class="text-center">Register to LearnSite</div>
            </div>
            <div class="border-4 border-base-100 m-10">
                <div class="m-10">
                    <div class="text-4xl mb-3 text-neutral">Username</div>
                    <input type="text" placeholder="Enter Username" class="text-xl input input-bordered input-info w-full mb-3" />
                    <div class="text-4xl mb-3 text-neutral">Email Address</div>
                    <input type="text" placeholder="Enter Email Address" class="text-xl input input-bordered input-info w-full mb-3" />
                    <div class="text-4xl mb-3 text-neutral">Password</div>
                    <input type="text" placeholder="Enter Password" class="text-xl input input-bordered input-info w-full mb-3" />
                    <div class="text-4xl mb-3 text-neutral">Confirm Password</div>
                    <input type="text" placeholder="Enter Confirm Password" class="text-xl input input-bordered input-info w-full mb-3" />
                    <div class="text-4xl mb-3 text-neutral">Select a Role</div>
                    <select class="select w-75 max-w-xs text-xl">
                        <option disabled selected>Select Role</option>
                        <option>Student</option>
                        <option>Teacher</option>
                    </select>
                    <button class="btn btn-secondary text-2xl ml">Register</button>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('login') }}" class="text-3xl link link-secondary">I have an account</a>
            </div>
        </div>
</body>

</html>