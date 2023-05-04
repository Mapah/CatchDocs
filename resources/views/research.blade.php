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
            .bgimg{
                position: absolute;
                z-index: 1;
             }
             .index{
                background-color: blue;
                position: absolute;
                z-index: 2;
                margin:0 auto;
                margin-top: 5%;
                margin-left: 16%;
                border-radius: 5px;
                box-shadow:0 0 6px black;
                transition: box-shadow 0.3s ease-out;
                text-align: center;  
                color: white;
            }
            .container{
                margin:0 auto;
            }
            .align{
                margin-left: 7%;  
                      
            }
            .button{
                border-radius: 5px;
                box-shadow:0 0 6px black;
                transition: box-shadow 0.3s ease-out;
                cursor: pointer;
                
            }

        </style>
    </head>
    <body >
        <main>
            <img  src="{{asset('images/research.jpg')}}" alt="acceuil" class="bgimg" style="width:100%; height:100%;">
            <div class="container text-black ">
                <div class="index">
                    <h1 class="heading" style="border-style: solid; border-width: 20px 10px 5px 2px;">Welcome To CATCHDOCS </h1><br><br>
                    <h2 class="heading">Enter a doccument name to make a research !</h2><br>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="align" style="margin-right:30%;"><input class="form-control mr-sm-2" style=" padding:20%; padding-left:60%; padding-right:60%" type="text" placeholder="Enter document name" aria-label="Search"></div>             
                        <div class="align"><button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button></div>
                    </form><br><br><br>                
                </div>
            </div><br><br><br>
            <div  style="background-color: blue; padding:1%; box-shadow:0 0 6px black; transition: box-shadow 0.3s ease-out; z-index: 2; position: absolute; margin-top: 30%; width:100%" >
                <a href="http://127.0.0.1:8000"><button class="align btn btn-secondary my-2 my-sm-0">Home</button></a>
                <a href="http://127.0.0.1:8000/research"><button class="align btn btn-secondary my-2 my-sm-0">Research</button></a>        
                <a href="http://127.0.0.1:8000/consulter"><button class="align btn btn-secondary my-2 my-sm-0">Consult</button></a>
            </div>
        </main>
    </body>
</html>
