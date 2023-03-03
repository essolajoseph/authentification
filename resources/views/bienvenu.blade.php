<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Navbar Sidebar - Fixed to Left or Right</title>
    <link rel="stylesheet"
          id="theme_link"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css"/>
    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script >var themes = [
    'cerulean',
    'cosmo',
    'cyborg',
    'darkly',
    'flatly',
    'journal',
    'litera',
    'lumen',
    'lux',
    'materia',
    'minty',
    'pulse',
    'sandstone',
    'simplex',
    'sketchy',
    'slate',
    'solar',
    'spacelab',
    'superhero',
    'united',
    'yeti'
];

$(document).ready(function () {
    $('[data-class]').click(function () {
        updateNavbarClass($(this).attr('data-class'));
    });

    updateNavbarClass('fixed-left');

    themes.forEach(function (theme) {
        $('#theme_select').append($('<option>', {
            value: theme,
            text: theme.charAt(0).toUpperCase() + theme.slice(1),
            selected: theme === 'materia'
        }));
    });
});

function updateNavbarClass(className) {
    $('nav')
        .removeClass(function (index, css) {
            return (css.match(/(^|\s)fixed-\S+/g) || []).join(' ');
        })
        .addClass(className);

    $('[data-class]').removeClass('active').parent('li').removeClass('active');
    $('[data-class="' + className + '"]').addClass('active').parent('li').addClass('active');

    fixBodyMargin(className);
}

function fixBodyMargin(className) {
    if (/fixed-(left|right)/.test(className)) {
        $('body').removeAttr('style');
        if (className === 'fixed-right') {
            $('body').css('marginLeft', 0);
        } else {
            $('body').css('marginRight', 0);
        }
    } else {
        $('body').css({
            "margin-right": 0,
            "margin-left": 0,
            "padding-top": '90px'
        });
    }
}

function selectTheme(theme) {
    $('#theme_link').attr('href', 'https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/' + theme + '/bootstrap.min.css');
}
</script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <style>body {
  min-height: 200vh;
}

a {
  cursor: pointer;
}</style>
<style>body{padding-top:90px}@media (min-width:768px){body{padding-top:0}}@media (min-width:768px){body{margin-left:232px}}.navbar.fixed-left{position:fixed;top:0;left:0;right:0;z-index:1030}@media (min-width:768px){.navbar.fixed-left{bottom:0;width:232px;flex-flow:column nowrap;align-items:flex-start}.navbar.fixed-left .navbar-collapse{flex-grow:0;flex-direction:column;width:100%}.navbar.fixed-left .navbar-collapse .navbar-nav{flex-direction:column;width:100%}.navbar.fixed-left .navbar-collapse .navbar-nav .nav-item{width:100%}.navbar.fixed-left .navbar-collapse .navbar-nav .nav-item .dropdown-menu{top:0}}@media (min-width:768px){.navbar.fixed-left{right:auto}.navbar.fixed-left .navbar-nav .nav-item .dropdown-toggle:after{border-top:.3em solid transparent;border-left:.3em solid;border-bottom:.3em solid transparent;border-right:none;vertical-align:baseline}.navbar.fixed-left .navbar-nav .nav-item .dropdown-menu{left:100%}}</style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href>Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item">Action</a>
                    <a class="dropdown-item">Another action</a>
                    <a class="dropdown-item">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item">Separated link</a>
                    <a class="dropdown-item">One more separated link</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-left">
                    <i class="fa fa-arrow-left"></i>
                    Fixed Left
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-top">
                    <i class="fa fa-arrow-up"></i>
                    Fixed Top
                    <small>(original)</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-right">
                    <i class="fa fa-arrow-right"></i>
                    Fixed Right
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
 
    <div class="jumbotron">
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
            <a class="github-button" href="https://github.com/mladenplavsic/bootstrap-navbar-sidebar"
               data-icon="octicon-star" data-show-count="true"
               aria-label="Star mladenplavsic/bootstrap-navbar-sidebar on GitHub">Star</a>
            <a class="github-button" href="https://github.com/mladenplavsic/bootstrap-navbar-sidebar/fork"
               data-icon="octicon-repo-forked" data-show-count="true"
               aria-label="Fork mladenplavsic/bootstrap-navbar-sidebar on GitHub">Fork</a>
            <a class="github-button" href="https://github.com/mladenplavsic"
               aria-label="Follow @mladenplavsic on GitHub">Follow @mladenplavsic</a>
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
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>
                    Select another bootstrap theme from
                    <a href="https://bootswatch.com/" target="_blank">Bootswatch</a>
                </label>
                <select class="form-control width-md" id="theme_select" onchange="selectTheme(value)"></select>
            </div>
        </div>
    </div>

    <div class="height-100 bg-light">
       @yield('acceuil')
         
    </div> 

</div>

</body>
</html>
