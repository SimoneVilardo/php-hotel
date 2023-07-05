<?php

   include __DIR__.'/partials/vars.php';

   if(isset($_GET['park'])){

        $parkHotel = [];

        foreach($hotels as $hotel) {
            if($hotel['parking'] == filter_var($_GET['park'], FILTER_VALIDATE_BOOLEAN)){
                $parkHotel [] = $hotel;
            }
            else if($_GET['park'] == "tutti"){
                $parkHotel = $hotels;
            }
        }

        $hotels = $parkHotel;
   };

   if(isset($_GET['rated'])){

        $voteHotel = [];

        foreach($hotels as $hotel) {
            if($hotel['vote'] >= $_GET['rated']){
                $voteHotel [] = $hotel;
                
            }
            else if($_GET['rated'] == "tutti"){
                $voteHotel = $hotels;
            }
        }

        $hotels = $voteHotel;
   };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Hotel</title>
</head>
    <body>
        <div class="container">
            <div class="row mt-4 mb-5">
                <div class="col-12">
                    <form action="index.php" method="GET">
                        <h3>PARKING:</h3>
                        <select class="form-select mt-4 mb-4" name="park" id="park">
                            <option value="tutti" selected>TUTTI</option>
                            <option value="1">YES</option>
                            <option value="2">NO</option>
                        </select>
                        <h3>VOTE:</h3>
                        <select class="form-select mt-4 mb-4" name="rated" id="rated">
                            <option value="tutti" selected>TUTTI</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-info">INVIA</button>
                    </form>
                </div>
                <div class="col-12 mt-5">
                    <table class="table">
                        <thead>
                            <tr class="text-center table-dark fs-2">
                                <th scope="col">NAME</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">PARKING</th>
                                <th scope="col">VOTE</th>
                                <th scope="col">DISTANCE TO CENTER</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($hotels as $hotel) { ?>
                                <tr class="text-center fs-4 table-info">
                                    <th scope="row">
                                        <?php echo $hotel['name']; ?>
                                    </th>
                                    <td>
                                        <?php echo $hotel['description']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['parking'] === true ? 'SI' : 'NO'; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['vote']; ?>/5
                                    </td>
                                    <td>
                                        <?php echo $hotel['distance_to_center']; ?>km
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>