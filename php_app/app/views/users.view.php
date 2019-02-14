<?php require('partials/head.php'); ?>

<?php if($error) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $error; ?>
    </div>
<?php endif;?>

<div class="row">
    <div class="col-lg-5">
        <div class="card form-group">
            <div class="card-body">
                <h2 class="card-title">Submit your account</h2>
                <form method="POST" action="/users">
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card form-group">
            <div class="card-body">
                <h2 class="card-title">Users now register!</h2>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Date created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(sizeof($users) > 0): ?>
                            <?php foreach($users as $index => $user) :?>
                                <tr>
                                    <td><?= $index+1; ?></td>
                                    <td><?= $user->username; ?> </td>
                                    <td><?= $user->date_created; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                                
                                No data available
                            
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</div>

<?php require 'partials/footer.php'; ?>