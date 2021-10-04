<?php 
session_start();
include "./class/bestelClass.php";
$test= new Bestel();

if(isset($_POST["add"])) {
    // print($_POST['currency']);
    // print($_POST['name']);
    $test->add($_POST['name'], $_POST['currency']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Page title -->
        <title>George | Bestellen</title>
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
    </head>
    <body>
        <div class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Bestelling</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggle()">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>gerechten hier</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="toggle()">Close</button>
              </div>
            </div>
          </div>
        </div>
        <?php $test->show(); ?>
        <?php $test->total();?>
    </body>
    <script type="text/javascript">
        function toggle() {
            $(".modal").toggle();
        }
        
        function add(val1, val2){
            $.post('./api/bestel.php', {name: val1, currency: val2}, function(response){
                console.log(response)
                location.reload();
            })
        }
    </script>

</html>