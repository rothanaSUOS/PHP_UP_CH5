
<?php
include_once ("header.php");
?>

<div class="container-float bg-info">
    <div class="container">
        <h2 class="text-center text-second">List Food For Order</h2>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-white">
                        <h3 class="text-center">Post A food</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Food Name">Food Name</label>
                                <input class="form-control" placeholder="Food Name" type="text">
                            </div>
                            <div class="col-md-6">
                                <label for="Price">Price</label>
                                <input class="form-control" placeholder="Input Price" type="text">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <label for="Image">Choosing Image</label>
                                <input class="form-control" placeholder="Choose Image" type="file">
                            </div>
                            <div class="col-md-6">
                                <label for="Description">Description</label>
                                <textarea class="form-control" name="description" placeholder="Description" rows="3" ></textarea>
                            </div>
                        </div>
                    </div>
                <div class="card-footer bg-white mt-4 mb-4">
                    <button class="btn btn-danger ml-2">CANCEL</button>
                    <button class="btn btn-info add-to-list">ADD TO LIST</button>
                    <button class="btn btn-primary post">POST</button>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
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
    .add-to-list {
        margin-left:46%;
    }
    .card{
        border-radius: 5px;
    }
    .card-footer, .card-header{
        border: none;
    }
    .container{
        height: 580px;
    }
</style>

<?php
include_once ("footer.php");
?>