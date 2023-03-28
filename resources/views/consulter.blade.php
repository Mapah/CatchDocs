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
            .heading{
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
            }
            h1{
                color: black;
                margin:0 auto;             
            }
            button{
                border-radius: 5px;
                box-shadow:0 0 6px black;
                transition: box-shadow 0.3s ease-out;
                cursor: pointer;
                padding: .5%;
                margin-left: 70%;

            }
            .align{
                margin:2%;
                display: inline-block; 
                      
            }
        </style>
    </head>
    <body >
        <main>
            <div class="container text-white">
                <h1 class="heading">Welcome To CATCHDOCS </h1>
                <div>
                    <form class="form-inline my-2 my-lg-0">
                            <div class="align"><input class="form-control mr-sm-2" type="text" placeholder="For advanced research" aria-label="Search"></div>             
                            <div class="align" style="margin-left: -10%;"><button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button></div>
                        </form>
                </div><br><br>
            </div><br><br><br>
            <div style="background-color: violet; box-shadow:0 0 6px black; transition: box-shadow 0.3s ease-out; " >
            <a href="http://127.0.0.1:8000/acceuil"><button class="align">Home</button></a>
            <a href="http://127.0.0.1:8000/research"><button class="align">Research</button></a>        
            <a href="http://127.0.0.1:8000/consulter"><button class="align">Consult</button></a>
            </div><br><br><br>
            <div class="align" style="width: 25%; background-color:blue; text-align:center; font-style: italic;">
            <div style="width: 99%; background-color:violet; box-shadow:0 0 6px black; transition: box-shadow 0.3s ease-out; "><h4>users</h4></div>
            <div style="width: 99%; background-color:violet; box-shadow:0 0 6px black; transition: box-shadow 0.3s ease-out; "><h4>Documents</h4></div>
            <div style="width: 99%; background-color:violet; box-shadow:0 0 6px black; transition: box-shadow 0.3s ease-out; "><h4>offices</h4></div>
            <div style="width: 99%; background-color:violet; box-shadow:0 0 6px black; transition: box-shadow 0.3s ease-out; "><h4>department</h4></div>
                <div style="width: 99%; background-color:violet; box-shadow:0 0 6px black; transition: box-shadow 0.3s ease-out; "><h4>Key words</h4></div>
            </div>
            <div class="align" style="width: 50%; background-color:pink;">
            <img src="/images/consult.png" alt="consult">
                 cvbn,;
            </div>
        </main>
    </body>
</html>
