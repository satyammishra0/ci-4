<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application List page</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
    <div class="container-fluid puprleColor">
        <div class="container pb-2 pt-2">
            <div class="text-white h4">
                CI4 Crud Application
            </div>
        </div>
    </div>
    <div class="bg-white shadow-sm">
        <div class="container">
            <div class="row">
                <nav class="nav nav-underline">
                    <div class="nav-link">Books / View</div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="" class="btn btn-primary ">Add</a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-2">
                <div class="card">
                    <div class="card-header-title puprleColor pt-2 pb-2  pl-5text-white">
                        <div class="card-header-title">Create Book</div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" name="createForm" id="createForm">
                            <div class="form-group">
                                <label for="" class="black">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name') ?>">

                                <?php
                                if (isset($validation) && $validation->hasError('name')) {
                                ?>
                                    <small class="red">
                                        <?= $validation->getError('name'); ?>
                                    </small>
                                <?php
                                }
                                ?>
                            </div>

                            <div class="form-group">
                                <label for="" class="black">Author</label>
                                <input type="text" class="form-control" name="author" id="author" value="<?= set_value('author') ?>">
                                <?php
                                if (isset($validation) && $validation->hasError('author')) {
                                ?>
                                    <small class="red">
                                        <?= $validation->getError('author'); ?>
                                    </small>
                                <?php
                                }
                                ?>
                            </div>

                            <div class="form-group">
                                <label for="" class="black">Isbn No</label>
                                <input type="text" class="form-control" name="isbn" id="isbn">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>