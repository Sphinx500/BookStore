<?php include("../template/header.php"); ?>

<div class="col-md-5">




    <div class="card">
        <div class="card-header">
            Books Data
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" id="txtID" name="txtID" placeholder="Enter ID">
                </div>

                <div class="form-group">
                    <label for="txtName">Name:</label>
                    <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Enter Book Name">
                </div>

                <div class="form-group">
                    <label for="txtImg">Cover:</label>
                    <input type="file" class="form-control" id="txtImg" name="txtImg" placeholder="Enter Image Cover">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="button" class="btn btn-success">Add</button>
                    <button type="button" class="btn btn-warning">Modify</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Cover</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>2</td>
                <td>Learn PHP</td>
                <td>Image.jpg</td>
                <td>Seleccionar |   Borrar</td>
            </tr>
        </tbody>

    </table>
</div>


<?php include("../template/footer.php"); ?>