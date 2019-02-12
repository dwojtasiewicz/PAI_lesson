<!DOCTYPE html>
<html xmlns:text-align="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body  style="background-image: url(/pai/public/upload/tlo.jpg); background-attachment: fixed">
<?php include(dirname(__DIR__).'/navbar.html'); ?>

<div class="container" >
    <div class="row">
        <p>

                <div class="container"  >
                    <div class="row">

                        <form  method="POST">
                            <table style="float:right " class="mt-4">
                                <tr >
                                    <td>
                                        <label for="inputSearch" class="col-sm-1 col-form-label">
                                            <i class="material-icons md-48">search</i>
                                        </label>
                                    </td>
                                    <td style="width: 600px">
                                        <div class="col-sm-12" >
                                            <input  type="text" class="form-control" id="inputSearch" name="text" placeholder="Search" required/>
                                        </div>
                                    </td>
                                    <td >
                                        <input type="button" onclick="searcher()" value="Search" on class="btn btn-dark" />
                                    </td>
                                </tr>
                            </table>

                        </form>


                    </div>
                        <div class="row">
                                   <h4  class="btn btn-info btn-lg mt-4 text-light " >List of Foodtruck:</h4></div>
                                    <table class="table table-hover" style="background: rgba(255,  255,  255,  0.9">

                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Description</th>

                                        </tr>
                                        </thead>

                                        <tbody class="food-list">
                                        </tbody>
                                    </table>

                        <button class="btn btn-dark " type="button" onclick="getFoodTrucks()">Show FoodTrucks</button>

                        </div>
                    </div>
                </div>

        </p>



    </div>
</div>

</body>
</html>