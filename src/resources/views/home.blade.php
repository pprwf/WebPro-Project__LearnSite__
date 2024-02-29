<!DOCTYPE html>
<html data-theme="emerald">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnSite</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- NAVBAR -->
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-25 rounded-full">
                    <img alt="Tailwind CSS Navbar component" src="{{asset('assets/Learnsitebg.png')}}" />
                </div>
            </div>
                <a class="btn btn-ghost text-xl ml-5">LearnSite</a>
            </div>

            <ul class="p-2 bg-base-100 rounded-t-none">
                <li class="btn btn-ghost ml-5 text-xl"><a>Link 1</a></li>
                <li class="btn btn-ghost ml-5 mr-5 text-xl"><a>Link 2</a></li>
            </ul>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-25 rounded-full">
                        <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>


</body>

</html>