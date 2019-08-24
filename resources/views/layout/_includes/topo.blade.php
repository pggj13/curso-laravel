<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo')</title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
            <nav>
                <div class="container">
                    <div class="nav-wrapper deep-orange">
                        <a href="#!" class="brand-logo">APiRestFul</a>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">

                            <li><a href="/">Home</a></li>
                            <li><a href="{{route('user.cadastrar')}}">Cadastrar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

