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
    <div class="grid place-items-center min-h-screen p-2">
        <div class="w-full max-w-md p-6 space-y-3 bg-white shadow-md rounded-lg">
            <div class="text-3xl text-error text-center">ลงทะเบียนเข้าสู่ระบบ</div>
            <div class="flex justify-center"><progress class="progress w-56 progress-warning"></progress></div>
            <div class="border-4 border-base-100 p-4">
                <div class="space-y-4">
                    <!-- page1 -->

                    <?php if ($data == null): ?>
                    <form action="register" method="POST">
                        @csrf
                        <div class="text-md text-neutral">ชื่อบัญชีผู้ใช้งาน</div>
                        <input type="text" name="username" placeholder="Enter Username" class="text-base input input-bordered input-info w-full mt-1" required />
                        @error("username")
                        <div class="flex justify-center mt-5"><span class="text-error">{{ $message }}</span></div>
                        @enderror
                        <div class="text-md text-neutral mt-5">เบอร์โทร</div>
                        <input type="number" name="phone" placeholder="Enter Phone number" class="text-base input input-bordered input-info w-full mt-1" required />
                        @error("phone")
                        <div class="flex justify-center mt-5"><span class="text-error">{{ $message }}</span></div>
                        @enderror
                        <div class="text-md text-neutral mt-5">อีเมล</div>
                        <input type="text" name="email" placeholder="Enter Email Address" class="text-base input input-bordered input-info w-full mt-1" required />
                        @error("email")
                        <div class="flex justify-center mt-5"><span class="text-error">{{ $message }}</span></div>
                        @enderror
                        <div class="text-md text-neutral mt-5">รหัสผ่าน</div>
                        <input type="password" name="password" placeholder="Enter Password" class="text-base input input-bordered input-info w-full mt-1" required />
                        @error("password")
                        <div class="flex justify-center mt-5"><span class="text-error">{{ $message }}</span></div>
                        @enderror
                        <div class="text-md text-neutral mt-5">ยืนยันรหัสผ่าน</div>
                        <input type="password" name="password_confirmation" placeholder="Enter Confirm Password" class="text-base input input-bordered input-info w-full mt-1" required />
                        @error("password")
                            @if($message == "• กรุณากรอกรหัสผ่านให้ตรงกัน")
                                <div class="flex justify-center mt-5"><span class="text-error">{{ $message }}</span></div>
                            @endif
                        @enderror
                        <button class="btn btn-secondary text-xl w-full mt-8" name="next">ถัดไป</button>
                    </form>
                    <!-- page2 -->

                    <?php else: ?>
                    <form action="regsiter" method="POST">
                        @csrf
                        <div class="text-md text-neutral">ชื่อจริง</div>
                        <input type="text" name="fname" placeholder="Enter Firstname" class="text-base input input-bordered input-info w-full mt-1" required />
                        <div class="text-md text-neutral mt-5">นามสกุล</div>
                        <input type="text" name="lname" placeholder="Enter Lastname" class="text-base input input-bordered input-info w-full mt-1" required />
                        <div class="text-md text-neutral mt-5">เลือกบทบาท</div>
                        <select name="role" class="select text-base bg-sky-100 mt-1" required>
                            <option value = "" disabled selected hidden>เลือกบทบาท</option>
                            <option value = 1 >นักเรียน</option>
                            <option value = 2 >ผู้สอน</option>
                        </select>
                        <button class="btn btn-secondary text-xl w-full mt-8">ลงทะเบียน</button>
                    </form>

                    <?php endif; ?>
                </div>
            </div>
            <div class="text-center">
                <a href="login" class="text-lg link link-secondary">มีบัญชีอยู่แล้ว</a>
            </div>
        </div>
    </div>
</body>
</html>
