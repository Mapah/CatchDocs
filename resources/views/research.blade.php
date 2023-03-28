<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Nunito', sans-serif;

            }
            .container{
                margin:0 auto;
                margin-top: 5%;
                border-radius: 5px;
                box-shadow:0 0 6px black;
                transition: box-shadow 0.3s ease-out;
                cursor: pointer;
                text-align: center;                
                background-color: violet;
            }
            .align{
                margin-left: 7%;
                display: inline-block;         
            }
            button{
                border-radius: 5px;
                box-shadow:0 0 6px black;
                transition: box-shadow 0.3s ease-out;
                cursor: pointer;
                
            }
        </style>
    </head>
    <body >
        <main>
        <img src="/images/research.png" alt="research">
            <div class="container text-black">
                <h1 class="heading" style="border-style: solid; border-width: 20px 10px 5px 2px;">Welcome To CATCHDOCS </h1><br><br>
                <div>
                    <h2 class="heading">Enter a doccument name to make a research !</h2><br>
                    <form class="form-inline my-2 my-lg-0">
                            <div class="align" style="margin-right:20%;"><input class="form-control mr-sm-2" style=" padding:20%; padding-left:60%; padding-right:60%" type="text" placeholder="Enter document name" aria-label="Search"></div>             
                            <div class="align"><button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button></div>
                        </form><br><br><br>                </div>
            </div><br><br><br>
            <div style="background-color: violet; padding:1%; box-shadow:0 0 6px black; transition: box-shadow 0.3s ease-out; " >
            <a href="http://127.0.0.1:8000/acceuil"><button class="align">Home</button></a>
            <a href="http://127.0.0.1:8000/research"><button class="align">Research</button></a>        
            <a href="http://127.0.0.1:8000/consulter"><button class="align">Consult</button></a>
            </div>
        </main>
    </body>
</html>
