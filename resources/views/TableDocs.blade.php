<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Nunito', sans-serif;

            }
            .container{
                margin:0 auto;
                margin-top: 5%;
                width: 50%;
                border-radius: 5px;
                box-shadow:0 0 6px black;
                transition: box-shadow 0.3s ease-out;
                cursor: pointer;
                height: auto;
                padding: 3%;
                text-align: center;                
                background-color: violet;
            }
            .heading{
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
            }
            h1{
                background-color: white;
                margin:0 auto;
            }
            .DiffDocs{
                width: 99%;
                padding-bottom: 70%;
                background-color: white;           
            }
            button{
                border-radius: 5px;
                box-shadow:0 0 6px black;
                transition: box-shadow 0.3s ease-out;
                cursor: pointer;
                padding: 1%;
                margin-left: 70%;
            }
        </style>
    </head>
    <body >
        <main c>
            <div class="container">
            <h1 class="heading">Welcome To CATCHDOCS View Documents</h1>
            <div>
                <h2 class="heading">TABLE OF DOCUMENTS</h2>
                <section class="DiffDocs"></section><br><br>
                <a class="nav-link" href="http://127.0.0.1:8000/ViewDocs"><button>Return</button></a>
            </div>

            </div>
        </main>
    </body>
</html>
