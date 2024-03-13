<!DOCTYPE html>
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
</head>
<body>
    <nav>
        @include('components.navbar')
    </nav>
    <?php session() -> get("query"); ?>
    <div class="flex flex-col md:flex-row w-full">
        <aside class="leftbar md:w-1/12 flex-none border-orange-600 border-2">
        </aside>
        <main class="flex flex-col md:flex-row w-full md:w-3/4 p-4">
            <img src="{{ asset('assets/profile.jpg') }}" class="size-48  rounded-full border-orange-600 border-4" alt="">
            <div class="card w-full bg-base-100 shadow-xl mt-8 md:ml-12 md:mt-0 rounded-lg border-orange-600 border-2">
                <div class="bg-primary">
                    <h1 class="text-3xl mt-5 ml-5">{{ $query -> fname . " " . $query -> lname }}</h1>
                    <p class="text-base ml-5 mb-5">{{ "@" . $query -> username }}</p>
                    <h1 class="text-3xl mt-5 ml-5 mb-5 text-secondary">
                        @if ($query -> role == 0)
                            Instructor
                        @else
                            Student
                        @endif
                    </h1>
                </div>

                <div class="m-5">
                    <form action="{{url('edit-data/'.$query->uid)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 text-xl">ชื่อ</div>
                        <input type="text" name="fname" class="text-base input input-bordered w-96" value="{{ $query -> fname }}"  />
                        <div class="mb-3 mt-3 text-xl">นามสกุล</div>
                        <input type="text" name="lname" class="text-base input input-bordered w-96" value="{{ $query -> lname }}"  />
                        <div class="mb-3 mt-3 text-xl">อีเมล</div>
                        <input type="email" name="email" class="text-base input input-bordered w-96" value="{{ $query -> email }}"  />
                        <div class="mb-3 mt-3 text-xl">Username</div>
                        <input type="text" name="username" class="text-base input input-bordered w-96" value="{{ $query -> username }}"  />
                        <div class="mb-3 mt-3 text-xl">เบอร์โทร</div>
                        <input type="text" name="phone" class="text-base input input-bordered w-96" value="{{ $query -> phone }}"  />
                        <br><br>
                        <button type="submit" class="btn btn-success">บันทึก</button>
                    </form>
                </div>
            </div>
        </main>

    </div>

    <footer>
        @include('components.footer')
    </footer>


</body>

</html>