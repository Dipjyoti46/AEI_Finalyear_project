<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Cancel Payment</title>
    <style>
        .center{
            display: flex;
            min-height:100vh;
            justify-content: center;
            align-items: center;
            color: rgb(255, 0, 0);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .cncl{
            display: flex;
            justify-content: center;
        }
        .btn-cancel{
            width: inset;
            justify-content:center;
            background-color: red;
            border:1px solid black;
            border-radius:5px;

        }
        
    </style>
</head>
<body>
    <div class="center">
        <div class="row">
            <div class="cancel-msg">
                <h3>Cancel Ticket</h3>
            </div>
            <div class="image">
                <img src="https://freepngimg.com/thumb/sad_emoji/36875-1-sad-emoji-hd.png" alt="image" width="128" height="128">
            </div>
            <div class="cncl">
                <a href="../home.php" ><button class="btn btn-cancel">Go to home</button></a>
                
            </div>
        </div>    
    </div>
</body>
</html>