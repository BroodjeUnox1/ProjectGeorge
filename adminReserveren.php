<?php
    session_start();

    include "./class/db.php";
    $db = new db();
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

        <!-- Page title -->
        <title>George | Homepage</title>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  link & cdn's || bootstrap css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- style.css -->
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- fontawsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="dash">
            <div class="date">
                <div id="datepicker"></div>
                <div class="timeSelectDashboard">
                    <select name="" id="">
                        <option value="">All</option>
                        <option value="">12:00</option>
                        <option value="">13:00</option>
                        <option value="">14:00</option>
                        <option value="">15:00</option>
                    </select>
                </div>
            </div>
           
            <div id="dashData">
                <table class="table">
                    <thead>
                        <th>time</th>
                        <th>name</th>
                        <th>email</th>
                        <th>people</th>
                    </thead>
                    <tbody id=tableData>

                    </tbody>
                </table>
            </div>
        </div>
        


        
        <!-- link js scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
        <script src="main.js"></script>
        <!-- <script type="text/javascript">
            </script> -->
    </body>
</html>