
<?php
    session_start();
    include("conne.php");
?>
<div class="row">
    <div class="col-lg-12">
    <?php
                include("index.php");
            ?>  
        <h1 class="page-header">Page</h1>
        <form action="savepoduct.php" class="form-horizontal" method= "post" enctype="multipart/form-data">
        <div class="form-group">
                <label for="picture" class="control-label col-md-3">type: </label>
                <div class="col-md-9">
                    <input type="radio" name="rdoType" value="1" checked required>Amd</label>
                    <input type="radio" name="rdoType" value="2">Intel</label>
                    <input type="radio" name="rdoType" value="3">Kingson</label>
                </div>
            </div> 
            <div class="form-group">
                <label for="name" class="control-label col-md-3">brand : </label>
                <div class="col-md-9">
                    <input type="text"name="txtbrand" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Description : </label>
                <div class="col-md-9">
                    <input type="text" name="txtDescription" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">model : </label>
                <div class="col-md-9">
                    <input type="text"name="txtmodel" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">color :</label>
                <div class="col-md-9">
                    <input type="text"name="txtcolor" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">license :</label>
                <div class="col-md-9">
                    <input type="text"name="txtlicense" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">province :</label>
                <div class="col-md-9">
                    <input type="text"name="txtprovince" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">modelYear :</label>
                <div class="col-md-9">
                    <input type="text"name="txtmodelYear" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">price :</label>
                <div class="col-md-9">
                    <input type="text"name="txtprice" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">price :</label>
                <div class="col-md-9">
                    <input type="text"name="txtprice" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Product picture : </label>
                <div class="col-md-9">
                    <input type="file" name="filePic" class="form-control-file" accept="img/*">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Save </button>
                    <button type="reset" class="btn btn-danger">Reset </button>
                </div>
            </div>  
            </form>
    </div>
</div>