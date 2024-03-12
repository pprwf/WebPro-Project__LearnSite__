<style>
    .website_name {
        font-family: 'Maitree', sans-serif;
        font-weight: bold;
    }
</style>
<?php
    $default = array(
        "คอร์สทั้งหมด" => "course",
        "สมัครสมาชิก" => "register",
        "เข้าสู่ระบบ" => "login"
    );

    $user = array(
        "คอร์สทั้งหมด" => "course",
        "คอร์สของฉัน" => "user"
    );

    $instructor = array(
        "คอร์สทั้งหมด" => "course",
        "จัดการคอร์ส" => "course/manage"
    );

    $picture = asset('assets/nanachipfp.jpg');
?>
@if (!isset($query))
<nav id="navbar" class="navbar bg-secondary flex justify-between bg-slate-50 shadow-md">
    <a href="/">
        <img src="{{ asset('assets/LearnsiteLogo.jpg') }}" class="size-11 rounded-full ml-2">
        <h1 class="website_name text-3xl ml-2">LearnSite</h1>
    </a>
    <div class="mr-3">
            @foreach ($default as $name => $link)
                <a class="btn btn-ghost text-xl" href="{{ $link }}">{{ $name }}</a>
            @endforeach
    </div>
</nav>
@else
    <?php
        $query = session() -> get("query");
    ?>
    <nav id="navbar" class="navbar bg-secondary flex justify-between bg-sky-800 shadow-md">
        <a href="/">
            <img src="{{ asset('assets/LearnsiteLogo.jpg') }}" class="size-11 rounded-full ml-2">
            <h1 class="website_name text-3xl ml-2 text-slate-100">LearnSite</h1>
        </a>
        <div class="mr-3">
            @if ($query -> role == 0)
                @foreach ($instructor as $name => $link)
                    <a class="btn btn-ghost text-xl text-slate-200" href="{{ $link }}">{{ $name }}</a>
                @endforeach
            @else
                @foreach ($user as $name => $link)
                    <a class="btn btn-ghost text-xl text-slate-200" href="{{ $link }}">{{ $name }}</a>
                @endforeach
            @endif
            <div class="dropdown dropdown-end ml-3 mr-3">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-25 rounded-full">
                        @if ($query -> picture != null)
                            $picture = $query -> picture;
                        @endif
                        <img src="{{ $picture }}" class="size-48  rounded-full border-orange-600 border-4">
                    </div>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li><a href="user/profile" class="justify-between">แก้ไขโปรไฟล์<span class="badge">ใหม่</span></a></li>
                    <li><a href="/">ลงทะเบียนออก</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endif
