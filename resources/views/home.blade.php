<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6777ef" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <title>Document</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle">
                <div class="container" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

            </i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
        <link rel="stylesheet" href="css/home.css">

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo active"> <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">Scanner Qrcode
                    </span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link ">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Releve1</span>

                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Releve2</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Releve3</span>
                    </a> <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        {{-- <span class="nav_name">Files</span> --}}
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        {{-- <span class="nav_name">Stats</span> --}}
                    </a>
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    {{-- <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div> --}}
    <h4>mon code page 1</h4>
    @include ('index');
    <!--Container Main end-->
    <script type="text/javascript" src="js/home.js"></script>
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>