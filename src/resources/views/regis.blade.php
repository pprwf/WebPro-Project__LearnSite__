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
    <div class="grid place-items-center h-screen">
        <div class="w-full max-w-md p-6 space-y-6 bg-white shadow-md rounded-lg">
            <div class="text-4xl text-warning text-center">Register to LearnSite</div>
            <div class="border-4 border-base-100 p-4">
                <div class="space-y-4">
                    <div class="text-xl text-neutral">Username</div>
                    <input type="text" placeholder="Enter Username" class="text-lg input input-bordered input-info w-full" />
                    <div class="text-xl text-neutral">Email Address</div>
                    <input type="text" placeholder="Enter Email Address" class="text-lg input input-bordered input-info w-full" />
                    <div class="text-xl text-neutral">Password</div>
                    <input type="text" placeholder="Enter Password" class="text-lg input input-bordered input-info w-full" />
                    <div class="text-xl text-neutral">Confirm Password</div>
                    <input type="text" placeholder="Enter Confirm Password" class="text-lg input input-bordered input-info w-full" />
                    <div class="text-xl text-neutral">Select a Role</div>
                    <select class="select text-xl">
                        <option disabled selected>Select Role</option>
                        <option>Student</option>
                        <option>Teacher</option>
                    </select>
                    <button class="btn btn-secondary text-2xl w-full">Register</button>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('login') }}" class="text-3xl link link-secondary">I have an account</a>
            </div>
        </div>
    </div>
</body>

</html>
