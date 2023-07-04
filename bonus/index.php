<?php

   include __DIR__.'/partials/array.php';

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
            <div class="row mt-5">
                <div class="col-12">
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
                                        <?php echo $hotel['parking']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['vote']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['distance_to_center']; ?>
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