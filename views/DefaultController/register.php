<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html') ?>

<body>
<center>
    <img src="public/upload/truck.png" width="300" height="200" />
</center>

    <div class="container ">
                   <div class="col">
                <h1 class="panel-header">JOIN</h1>
                <hr>


                <form id="Register" action="?page=register" method="POST">
                    <?php if(isset($message)): ?>
                        <?php foreach($message as $item): ?>
                            <div><?= $item ?></div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <div class=" row">
                        <label for="inputName" class="col-sm-1 col-form-label" >
                            <i class="material-icons md-48">accessibility</i>
                        </label>
                        <div class="col-sm-11">
                            <input type="name" class="form-control" id="inputName" name="name" placeholder="name" required/>
                        </div>
                    </div>

                    <div class=" row">
                        <label for="inputEmail" class="col-sm-1 col-form-label">
                            <i class="material-icons md-48">email</i>
                        </label>
                        <div class="col-sm-11">
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="email" required/>
                        </div>
                    </div>

                    <div class="row">
                        <label for="inputPassword" class="col-sm-1 col-form-label">
                            <i class="material-icons md-48">person</i>
                        </label>
                        <div class="col-sm-11">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password" type="password" required/>
                        </div>
                    </div>

                    <div class="row">
                        <label for="inputPassword" class="col-sm-1 col-form-label">
                            <i class="material-icons md-48">person</i>
                        </label>
                        <div class="col-sm-11">
                            <input type="password" name="password_confirmation" class="form-control" id="inputPassword" placeholder="password confirmation" type="password" required/>
                        </div>
                   </div>

                    <input type="submit" value="Sign in" class="btn btn-primary btn-lg float-right" />
                </form>
            </div>


</body>
</html>

