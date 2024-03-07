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
    <?php
        //* access which table
        use App\Models\User;

        var_dump(User::get());
        // User::create([
        //     "username" => $_GET["username"],
        //     "password" => $_GET["password"],
        //     "email" => $_GET["email"],
        //     "fname" => $_GET["fname"],
        //     "lname" => $_GET["lname"],
        //     "phone" => $_GET["phone"],
        //     "role" => ($_GET["role"] == "Teacher") ? 1 : 0
        // ]);
    ?>
    <div class="grid place-items-center min-h-screen p-8 ">
        <div class="w-full max-w-md p-6 space-y-3 bg-white shadow-md rounded-lg">
            <div class="text-3xl text-warning text-center">Register to LearnSite</div>
            <div class="flex justify-center"><progress class="progress w-56 progress-warning"></progress></div>
            <div class="border-4 border-base-100 p-4">
                <div class="space-y-4">

                    <!-- page2 -->
                    <?php if(isset($_GET['next'])): ?>
                    <form action="{{ route('userhome') }}" method="get">
                        
                        <div class="text-md text-neutral">Firstname</div>
                        <input type="text" name="fname" placeholder="Enter Firstname" class="text-base input input-bordered input-info w-full mt-1" required/>
                        <div class="text-md text-neutral mt-5">Lastname</div>
                        <input type="text" name="lname" placeholder="Enter Lastname" class="text-base input input-bordered input-info w-full mt-1" required/>
                        <div class="text-md text-neutral mt-5">Phone number</div>
                        <input type="text" name="phone" placeholder="Enter Phone number" class="text-base input input-bordered input-info w-full mt-1" required/>
                        <div class="text-md text-neutral mt-5">Select a Role</div>
                        <select name="role" class="select text-base bg-sky-100 mt-1">
                            <option disabled selected>Select Role</option>
                            <option value=1>Student</option>
                            <option value=2>Teacher</option>
                        </select>
                        <button class="btn btn-secondary text-xl w-full mt-8">Register</button>
                    </form>

                    <!-- page1 -->

                    <?php else: ?>
                    <form action="{{ route('regis') }}" method="get">
                        <div class="text-md text-neutral">Username</div>
                        <input type="text" name="username" placeholder="Enter Username" class="text-base input input-bordered input-info w-full mt-1" required/>
                        <div class="text-md text-neutral mt-5">Email Address</div>
                        <input type="email" name="email" placeholder="Enter Email Address" class="text-base input input-bordered input-info w-full mt-1" required/>
                        <div class="text-md text-neutral mt-5">Password</div>
                        <input type="password" name="password" placeholder="Enter Password" class="text-base input input-bordered input-info w-full mt-1" required/>
                        <div class="text-md text-neutral mt-5">Confirm Password</div>
                        <input type="password" placeholder="Enter Confirm Password" class="text-base input input-bordered input-info w-full mt-1" required/>
                        <button class="btn btn-secondary text-xl w-full mt-8" name="next">Next</button>
                    </form>

                    <?php endif; ?>

                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('login') }}" class="text-lg link link-secondary">I have an account</a>
            </div>
        </div>
    </div>
</body>

</html>
