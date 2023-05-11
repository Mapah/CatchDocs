<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>CatchDocs</title>

            <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Nunito', sans-serif;
                background-image: url('acceuil.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            
            .bgimg{
                position: absolute;
                z-index: 1;
             }
             .bgimg2{
                position: absolute;
                z-index: 1;
                margin-top: 63%;
             }
            .wellcome{
                position: absolute;
                z-index: 2;
                padding-top: 3%;
            }
            .descriptuion1{
                position: absolute;
                z-index: 2;
                margin-top: 45%;
                font-style: italic;
                color: black;
            }   
            
            .description{
                position: absolute;
                z-index: 2;
                margin-top: 70%;
                font-style: italic;
                color: white;
            }   
        </style>
    </head>
    <body style="padding-top: 5rem; padding-bottom:5%;">
            <nav class="navbar navbar-expand-md text-white navbar-light  fixed-top shadow p-3 mb-5 rounded" style="color: purple;" > 
            <nav class="navbar navbar-expand-md text-white navbar-light  fixed-top shadow p-3 mb-5 rounded" style="color: purple;" > 
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/consulter" style="font-family:italics; color:black;"><h4>Consult</h4></a>
                                <a class="nav-link" href="http://127.0.0.1:8000/consulter" style="font-family:italics; color:black;"><h4>Consult</h4></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/research" style="font-family:italics; color:black;"><h4>Research</h4></a>
                                <a class="nav-link" href="http://127.0.0.1:8000/research" style="font-family:italics; color:black;"><h4>Research</h4></a>
                            </li>
                        </ul>
<!-- 
<!-- 
                        <form class="form-inline my-2 my-lg-0">
                            <i class="nav-icon fas fa-user"></i>
                            <a href="#" style="font-family:italics; color:white;"><h5>Login</h5></a>
                        </form> -->
                        </form> -->
                    </div>
                </div>
            </nav>
        <img  src="{{asset('images/acceuil.jpg')}}" alt="acceuil" class="bgimg" style="width:100%; height:100%;">
        <img  src="{{asset('images/acceuil2.jpg')}}" alt="acceuil2" class="bgimg2" style="width:100%; height:100%;">

        <main role="main" class="container">
            <div class="wellcome">
                <h1 class="heading" style=" font-style: italic; color:purple"><em>Welcome To CATCHDOCS </em></h1><br><br>
                <h1 style=" font-style: bold;">Home Page</h1><br><br><br><br><br><br><br>
            </div>
            <div class="descriptuion1">
            <div class="wellcome">
                <h1 class="heading" style=" font-style: italic; color:purple"><em>Welcome To CATCHDOCS </em></h1><br><br>
                <h1 style=" font-style: bold;">Home Page</h1><br><br><br><br><br><br><br>
            </div>
            <div class="descriptuion1">
                <h3>CatchDocs</h3>
                <p>description</p><br><br>
            </div>
            <div class="description" style="padding: 3rem 1.5rem; margin: top 100%;">
            </div>
            <div class="description" style="padding: 3rem 1.5rem; margin: top 100%;">
                <h3>Objectifs And Content</h3>
                <p>description</p><br><br>
                <h3>Our Mission</h3>
                <p>description</p><br><br>
                <h3>About Us</h3>
                <P>Description</P>
            </div>
        </main>
                      <!-- Main Footer -->
        <footer class="main-footer" style="background-color:grey; padding:3%">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                MTM
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022-2023<a href="http://127.0.0.1:8000/acceuil">CatchDocs</a>.</strong> All rights reserved.
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
                crossorigin="anonymous"></script>
    </body>
</html>
