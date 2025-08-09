<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

    {{-- <style>
        .main-container{
            display: flex;
            justify-content: center;
            align-items: center; /* Center vertical */
            min-height: 100vh; /* Full height */
        }
        .card-container{
            display: flex;
            border: 2px solid;
            border-radius: 15px;
            width: 80rem;
            height: fit-content;
            justify-content: center;
            align-items: center;
            min-height: 70vh; /* Full height */

        }
    </style> --}}

    <style>
        .main-container{
            display: flex;
            justify-content: center;
            align-items: center; /* Center vertical */
            min-height: 100vh; /* Full height */
        }
        .card-container{
            display: flex;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2),
                        0 15px 35px rgba(0, 0, 0, 0.15),
                        0 20px 60px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;

            box-shadow: 10px;
            border-radius: 15px;
            width: 80rem;
            height: fit-content;
            justify-content: center;
            align-items: center;
            min-height: 70vh; /* Full height */
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="card-container">
            <div>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>