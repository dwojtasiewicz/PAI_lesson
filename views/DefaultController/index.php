<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>
<?php include(dirname(__DIR__).'/navbar.html'); ?>

<div class="container">
    <div class="row">
        <p>

                <div class="container">
                    <div class="row">
                        <h1 class="col-12 pl-0">FoodTruck</h1>

                        <h4 class="mt-4">List of Foodtruck:</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                            </thead>

                            <tbody class="food-list">
                            </tbody>
                        </table>

                        <button class="btn btn-dark btn-lg" type="button" onclick="getFoodTrucks()">Show FoodTrucks</button>
                    </div>
                </div>

        </p>



    </div>
</div>

</body>
</html>