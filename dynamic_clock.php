<!DOCTYPE html>
<head>
    <title>Dynamic Clock</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <style>
        body {
            background-color: #130F30;
            color: #fff;
        }
        #currentTime {
            text-align: center;
            font-size: 48px;
            padding-top: 250px;
        }
    </style>
</head>
<body>
    <div id="currentTime"></div>

    <script>
        var systemTime = new Date(<?php date_default_timezone_set('UTC'); echo strtotime('now')*1000 ?>);
        (function displayTime(){
            systemTime.setTime(systemTime.getTime()+1000);
            var serverTime = systemTime.getHours() + ":"  + systemTime.getMinutes() + ":" + systemTime.getSeconds();
            document.getElementById("currentTime").innerHTML = serverTime;
            setTimeout(displayTime, 1000);
        })();
    </script>
</body>
</html>