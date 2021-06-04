<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task-2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script type="text/javascript" src="main.js"></script>
        <style>
           
            .container{
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction:column;
            }
            #answer{
                margin-top:10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
                    <div class="mb-3">
                        <label class="form-label">Length</label>
                        <select id="length">
                            <?php
                                for($i = 2; $i<=30; $i+=2){
                                    echo("<option value='$i'>$i</option>");
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Width</label>
                    <select id="width">
                            <?php
                                for($i = 2; $i<=30; $i+=2){
                                    echo("<option value='$i'>$i</option>");
                                }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="calculate()">Calculate</button>
                    <div id="answer"></div>
        </div>
    
    </body>
</html>