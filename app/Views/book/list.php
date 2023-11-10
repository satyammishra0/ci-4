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
                        <div class="card-header-title">Books</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Isbn no.</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>The alchamist</td>
                                <td>123456</td>
                                <td>Paulo coetlhto</td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>


                            <tr>
                                <td>1</td>
                                <td>The alchamist</td>
                                <td>123456</td>
                                <td>Paulo coetlhto</td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>



                            <tr>
                                <td>1</td>
                                <td>The alchamist</td>
                                <td>123456</td>
                                <td>Paulo coetlhto</td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>



                            <tr>
                                <td>1</td>
                                <td>The alchamist</td>
                                <td>123456</td>
                                <td>Paulo coetlhto</td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>