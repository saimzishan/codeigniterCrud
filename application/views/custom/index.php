<!DOCTYPE html>
<html>
<head>
    <title>Codeigniter 3 - Ajax CRUD Example</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Codeigniter 3 CRUD Example</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item"> Create Item</button>
            </div>
        </div>
    </div>

    <table class="table table-bordered">

        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th width="200px">Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?php echo $item->name; ?></td>
                <td><?php echo $item->email; ?></td>
                <td>
                    <form method="DELETE" action="<?php echo base_url('products/delete/'.$item->id);?>">
                        <a class="btn btn-info btn-xs" href="<?php echo base_url('products/edit/'.$item->id) ?>">Edit</a>
                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>

    <ul id="pagination" class="pagination-sm"></ul>

    <!-- Create Item Modal -->
    <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>

                <div class="modal-body">

                    <form data-toggle="validator" action="store" method="POST">

                        <div class="form-group">
                            <label class="control-label" for="title">Name:</label>
                            <input type="text" name="name" class="form-control" data-error="Please enter Name." required />
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="title">Email:</label>
                            <input type="text" name="email" class="form-control" data-error="Please enter Email." required />
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn crud-submit btn-success">Submit</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Edit Item Modal -->
    <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
                </div>

                <div class="modal-body">

                    <form data-toggle="validator" action="" method="put">

                        <div class="form-group">
                            <label class="control-label" for="title">Title:</label>
                            <input type="text" name="name" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="title">Description:</label>
                            <input type="text" name="email" class="form-control" data-error="Please enter Email." required />
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


</body>
</html>