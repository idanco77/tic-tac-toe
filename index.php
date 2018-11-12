<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Match Match</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center display-4">Tic Tac Toe</h1>
            <div id="details" class="bg-warning text-dark">
                <span class="bold">O</span> Player<input type="text" id="player1" class="ml-2"><br>
                <span class="bold">X</span> player<input type="text" id="player2" class="ml-2"><br><br>
                <input type="button" id="str" class="btn btn-primary" value="START GAME">
            </div>

            <div id="center">
                <div class="row mb-2">
                    <div id="winner" class="col-md-6 offset-md-3 text-center bg-success text-light pt-4">
                        <h2>The Winner Is: <span id="name"></span></h2>    
                    </div>

                </div>
            </div>
            <div class="names">
                <div class="row mb-2 lead">
                    <div class="col-md-4">
                        <span class="h3  bg-dark text-light px-2" id="p1"></span>         
                    </div>
                    <div class="col-md-4">
                        <h4 id="message-second" class="text-center"></h4>
                        <h4 id="message-first" class="text-center"></h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <span class="h3 bg-dark text-light px-1" id="p2"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <table id="tic-tac" class="hi">
                        <tr>
                            <td id="top-left" class="cl">
                                <img src="images/X.png" alt="X" class="x">
                                <img src="images/O.jpg" alt="O" class="o">
                            </td>
                            <td id="top-center" class="cl">
                                <img src="images/X.png" alt="X" class="x">
                                <img src="images/O.jpg" alt="O" class="o">
                            </td>
                            <td id="top-right" class="cl">
                                <img src="images/X.png" alt="X" class="x">
                                <img src="images/O.jpg" alt="O" class="o">
                            </td>
                        </tr>
                        <tr>
                            <td id="middle-left" class="cl">
                                <img src="images/X.png" alt="X" class="x">
                                <img src="images/O.jpg" alt="O" class="o">
                            </td>
                            <td id="middle-center" class="cl">
                                <img src="images/X.png" alt="X" class="x">
                                <img src="images/O.jpg" alt="O" class="o">
                            </td>
                            <td id="middle-right" class="cl">
                                <img src="images/X.png" alt="X" class="x">
                                <img src="images/O.jpg" alt="O" class="o">
                            </td>
                        </tr>
                        <tr>
                            <td id="bottom-left" class="cl">
                                <img src="images/X.png" alt="X" class="x">
                                <img src="images/O.jpg" alt="O" class="o">
                            </td>
                            <td id="bottom-center" class="cl">
                                <img src="images/X.png" alt="X" class="x">
                                <img src="images/O.jpg" alt="O" class="o">
                            </td>
                            <td id="bottom-right" class="cl">
                                <img src="images/X.png" alt="X" class="x">
                                <img src="images/O.jpg" alt="O" class="o">
                            </td>
                        </tr>
                    </table>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 text-center mt-2">
                    <input type="button" id="res" class="btn" value="Restart game">      
                </div>

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="tic_tac_toe.js" type="text/javascript"></script>
    </body>
</html>



