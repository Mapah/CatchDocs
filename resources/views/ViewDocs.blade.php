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
                margin-top: 10%;
                border-radius: 5px;
                box-shadow:0 0 6px black;
                transition: box-shadow 0.3s ease-out;
                cursor: pointer;
                width: 30%;                
                padding-left: 4%;
                padding-right: 4%;
                padding-bottom: 10%;
                text-align: center;                
                background-color: violet;
            }
            h2{
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
            }
            .card-header{
                
                padding: .5%;
                background-color: white;
            }
            h3 {
                padding-bottom: 8%;
            }
            button{
                border-radius: 5px;
                box-shadow:0 0 6px black;
                transition: box-shadow 0.3s ease-out;
                cursor: pointer;
                padding: 2%;
            }
        </style>
    </head>
    <body >
        <main class="py-4">
            <div class="container">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h2>WelCome To CETCHDOCS</h2></div>
                        <div class="card-body">
                            <h3>You are logged in!</h3>
                            <a class="nav-link" href="http://127.0.0.1:8000/TableDocs"><button>view Document</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
