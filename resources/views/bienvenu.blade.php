<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Authentification des Docuements</title>
    <link rel="stylesheet" id="theme_link" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css" />
    <link rel="stylesheet" href="navbar-fixed-right.min.css">
    <link rel="stylesheet" href="navbar-fixed-left.min.css">
    <link rel="stylesheet" href="docs.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href>Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('scanner')}}">Scanner un document</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" data-class="fixed-left">
                            <i class="fa fa-arrow-left"></i>
                            Fixed Left
                        </a>
                        <a class="dropdown-item" data-class="fixed-top">
                            <i class="fa fa-arrow-up"></i>
                            Fixed Top
                            <small>(original)</small>
                        </a>
                        <a class="dropdown-item" data-class="fixed-right">
                            <i class="fa fa-arrow-right"></i>
                            Fixed Right
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">Separated link</a>
                        <a class="dropdown-item">One more separated link</a>
                    </div>
                </li>
                <li class="nav-item dropdown">

                    <div class="card-body">
                        <div class="form-group">
                            <label class="nav-link">
                                Thème
                            </label>
                            <select class="form-control width-md" id="theme_select" onchange="selectTheme(value)"></select>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">



            </ul>
        </div>


    </nav>

    <div class="container">
        <!-- <div class="jumbotron">
            <h1 class="display-4">
                Bootstrap Navbar Sidebar
                <br>
                <small>Fixed to Left or Right</small>
            </h1>
            <p>
                <strong>
                    Use classic Bootstrap navbar as sidebar, on left or right side.
                </strong>
            </p>
            <p>
                <a class="github-button" href="https://github.com/mladenplavsic/bootstrap-navbar-sidebar" data-icon="octicon-star" data-show-count="true" aria-label="Star mladenplavsic/bootstrap-navbar-sidebar on GitHub">Star</a>
                <a class="github-button" href="https://github.com/mladenplavsic/bootstrap-navbar-sidebar/fork" data-icon="octicon-repo-forked" data-show-count="true" aria-label="Fork mladenplavsic/bootstrap-navbar-sidebar on GitHub">Fork</a>
                <a class="github-button" href="https://github.com/mladenplavsic" aria-label="Follow @mladenplavsic on GitHub">Follow @mladenplavsic</a>
            </p>
            <p>Same as when using <code>.fixed-top</code> for navbar - add class <code>.fixed-left</code> or <code>.fixed-right</code>
                where needed.</p>
            <p>Click buttons below, and appropriate class will be added to example navbar.</p>
            <div class="btn-group" role="group">
                <button type="button" data-class="fixed-left" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i>
                    Fixed Left
                </button>
                <button type="button" data-class="fixed-top" class="btn btn-primary">
                    <i class="fa fa-arrow-up"></i>
                    Fixed Top
                    <small>(original)</small>
                </button>
                <button type="button" data-class="fixed-right" class="btn btn-primary">
                    <i class="fa fa-arrow-right"></i>
                    Fixed Right
                </button>
            </div> -->
        @yield('acceuil')
    </div>



    </div>

    <script src="docs.js"></script>

</body>

</html>