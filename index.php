<?php
    session_start();

    include "./class/db.php";
    $db = new db();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
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
        <!-- header -->
        <div class="container text-center border-black-bottom pt-3 pb-3">
            <h6>Click here for the latest covid-19 updates.</h6>
        </div>
        <!-- brand logo -->
        <div class="container text-center border-black-bottom pt-3 pb-3">
            <img src="https://uploads-ssl.webflow.com/5f3ece93689659d6e7431728/5f3ece93689659584f431736_Marina%202.svg">
        </div>
        <!-- mid section  -->
        <div class="container">
            <div class="row mt-3">
                <!-- linker kant eerte gedeelte -->
                <div class="col-md-3 text-center">
                    <h6 class="heading_2">
                        OPENING<br>
                        HOURS<br><br>
                    </h6>
                    <h6 class="about_text">
                        OPEN DAILY FROM<br>
                        11A.M. TILL LATE<br><br>
                    </h6>

                    <small>We'll rock your boat at George Marina</small><br><br>
                    <small>On sunny days we have valet parking for a fee of <u>???12,50</u> during lunch and <u>???15</u> during dinner</small>
                    <!-- linker kant 2 de gedeele -->
                    <hr style="border-bottom: 1px solid black;">
                    <img src="https://uploads-ssl.webflow.com/5f3ece93689659d6e7431728/60d1aff9974cae25741692a3_marina.jpg" loading="lazy" sizes="(max-width: 479px) 200px, (max-width: 767px) 39vw, (max-width: 991px) 200px, (max-width: 1919px) 19vw, 200px" height="140" srcset="https://uploads-ssl.webflow.com/5f3ece93689659d6e7431728/60d1aff9974cae25741692a3_marina-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5f3ece93689659d6e7431728/60d1aff9974cae25741692a3_marina-p-800.jpeg 800w, https://uploads-ssl.webflow.com/5f3ece93689659d6e7431728/60d1aff9974cae25741692a3_marina.jpg 938w" alt="" class="image-12">
                    <b>CONTACT</b><br><br>
                        MAPS<br>
                        E-MAIL<br>
                        PHONE

                </div>
                <!-- midden stuk -->
                <div class="col-md-6 text-center border-black-left border-black-right">

                        <h6 class="Heading_about">
                                THIS IS US
                        </h6>
                        <br><br>
                        <h6 class="about_text">
                                George Marina is set in a spectacular, three storey waterside building in the upcoming Amstelkwartier, right along the banks of the Amstel river that flows into Amsterdam's iconic canals.
                        </h6>
                        <br>
                        <h6 class="about_text">
                            With large windows overlooking the marina in front, an open kitchen and sushi counter, lush plants, a striking 360 green marble bar and an eye-catching staircase right in the middle of the restaurant, it's also our cuisine that will leave a long lasting impression. Being so close to the water, we're famous for our seafood and sushi platters, but you might as well order steak frites, a juicy bistro burger or a veggie dish. A great all-day hangout for breakfast, lunch, dinner or Friday night cocktails accompanied by a live set from our resident <b>DJ</b>.
                        </h6>
                        <br>
                        <h6 class="about_text">
                            Despite our restaurants' modern allure, our large, sunny terrace has more of a C??te d'Azur feel ??? especially in the summer when guests coming from the canals dock their boats in the marina, and enjoy a drink while watching the sunset. No matter what season and what time of the day though, George Marina is a great place to escape hectic, daily life ??? if only for one day.
                        </h6>
                        <em>
                            <b>- fin -</b>
                        </em>

                </div>
                <!-- Rechter kant eerste gedeelte -->
                <div class="col-md-3 text-center">
                    <h3>
                        MENU'S
                        <br>
                        <br>
                        <a id="food" href="./menuFood.php">FOOD</a>
                        <br>
                        <a id="drinks" href="./menuDrinks.php">DRINKS</a>
                        <br>
                        <br>
                    </h3>
                    <!-- rechter kant tweede gedeelte -->
                    <hr style="border-bottom: 1px solid black;">
                    <br>
                    <div class="blackToWhite">
                        <h3><b class="blackToWhite" onclick="toggleActive()">BOOK</b></h3>
                        <h3><b class="blackToWhite" onclick="toggleActive()">MY</b></h3>
                        <h3><b class="blackToWhite" onclick="toggleActive()">TABLE</b></h3>
                    </div>
                    <hr style="border-bottom: 1px solid black;">
                    <div>
                        <a href="./Bestellen.php">
                            <h3 id="bestellen">ORDER</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- reserveren -->
        <div id="reserveren" class="reserveren bg-dark rounded">
            <div class="icon d-flex">
                <i class="far fa-window-close fa-2x icon2" style="color: whitesmoke;" onclick="toggleActive()"></i>
                <!-- <small style="padding: 7px; color: whitesmoke;" >Reserveren</small> -->
                <div style="color: whitesmoke;">
                    <h5>Book a table</h5>
                </div>
            </div>
            <div class="container-fluid text-white text-center reserverenElements">
                <div class="row">
                    <form class="page_1 col-md-12 bestform">
                        <div class="col-md-12 text-left">
                            <small>Date:</small>
                            <input id="date" type="date" class="form-control">
                        </div>
                        <div class="col-md-12 text-left">
                            <small>Time:</small>
                            <select id="time" class="form-control">
                                <option disabled selected id="timeSelect">---select---</option>
                            </select>
                        </div>
                        <div class="col-md-12 text-left">
                            <small>People:</small>
                            <select id="people" class="form-control">
                                <option disabled selected id="peopleSelect">---select---</option>
                            </select>
                        </div>
                        <div class="col-md-12 text-left d-flex flex-row-reverse mt-3">
                            <input type="submit" class="btn btn-light" onclick="next1()" value="Next">
                        </div>
                    </form>

                    <form class="page_2 col-md-12 d-none bestform">
                        <div class="col-md-12 text-left">
                            <small>Name:</small>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="col-md-12 text-left">
                            <small>Email:</small>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="col-md-12 text-left">
                            <small>Phone:</small>
                            <input type="tel" id="phone" class="form-control">
                        </div>
                        <div class="col-md-12 text-left d-flex flex-row-reverse mt-3">
                            <input type="submit" class="btn btn-light" onclick="next2()" value="Next">
                        </div>
                    </form>

                    <div class="page_3 col-md-12 d-none">
                        <div class="col-md-12 text-center">
                            <small>Your reservation has been succesfully made!</small>
                            <p>We send you a confirmation email.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- link js scripts -->
        <script src="main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- <script type="text/javascript">
            </script> -->
    </body>
</html>