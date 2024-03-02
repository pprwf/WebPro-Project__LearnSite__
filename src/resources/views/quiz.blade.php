<!DOCTYPE html>
<html data-theme="emerald">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnSite</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #E4FFF2;
        }

        .color-1 {
            background-color: #F1F1F1;
        }

        .centered-div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="grid items-center justify-center h-srceen">
        <div class="min-h-screen flex items-center justify-center">
            <div class="border-4 border-neutral m-10 rounded-lg">
                <p class="text-2xl bg-emerald-500 border-2 border-neutral text-white p-4 rounded-lg m-2">Quiz : 01 How to manage money</p>
                <div class="bg-white p-4 rounded-b-lg">
                    <div class="grid items-center color-1 rounded-lg">
                        <p class="ml-5 text-lg ">the quiz make for</p>
                    </div>
                    <p class="ml-5 mt-5 text-xl">Your Email : nanachi@gmail.com</p>
                    <div class="border-2 border-neutral m-10 rounded-lg">
                        <p class="text-lg m-5">How Elon Musk walk be like him and you will rich</p>
                        <div class="flex flex-col ml-8 mt-5 mb-5">
                            <label><input type="radio" class="radio mt-2" name="ans" value="A"> With legs</label>
                            <label><input type="radio" class="radio mt-2" name="ans" value="B"> With arms</label>
                            <label><input type="radio" class="radio mt-2" name="ans" value="C"> With both</label>
                            <label><input type="radio" class="radio mt-2" name="ans" value="D"> Without</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer -->
    @include('components.footer')

</body>

</html>