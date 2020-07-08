<?php
include_once ("header.php");
?>

<div class="container-float bg-info">
    <div class="container">
        <h2 class="text-center text-second">List all food</h2>
        <div class="row bg-white">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price Per Plate</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Thai food</th>
                        <td>HOlle this is description</td>
                        <td>12$</td>
                        <td> 
                            <button class="btn btn-danger btn-sm">Delete</button> 
                            <button class="btn btn-info btn-sm">Edit</button> 
                            <button class="btn btn-primary btn-sm">Repost</button> 
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Thai food</th>
                        <td>HOlle this is description</td>
                        <td>12$</td>
                        <td> 
                            <button class="btn btn-danger btn-sm">Delete</button> 
                            <button class="btn btn-info btn-sm">Edit</button> 
                            <button class="btn btn-primary btn-sm">Repost</button> 
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Thai food</th>
                        <td>HOlle this is description</td>
                        <td>12$</td>
                        <td> 
                            <button class="btn btn-danger btn-sm">Delete</button> 
                            <button class="btn btn-info btn-sm">Edit</button> 
                            <button class="btn btn-primary btn-sm">Repost</button> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-4">
            <button class="btn btn-danger ml-auto">Send Order</button>
        </div>
    </div>
</div>

<style>
    .food-list-img{
        margin-left: -20px !important;
        margin: 0;
        width: 330px;
        height: 200px;
    }
    .add {
        margin-left:90%;
    }
    .img-template {
        height: 500px;
        width: 1600px;
    }
    .container{
        height: 580px;
    }
</style>

<?php
include_once ("footer.php");
?>