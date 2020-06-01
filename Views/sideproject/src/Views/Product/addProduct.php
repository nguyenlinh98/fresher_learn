<h5 class="mt-4" style="color: white;background-color: #4c7095;line-height: 40px ">
    <i class="fab fa-microsoft mr-1 ml-2"></i>Products Management
</h5>
<form action="#" method="post">
    <div class="">
        <div class="form-group row">
            <label for="name" class="col-md-3">Name Product:</label>
            <input type="text" name="name" id="" class="form-control col-md-9">
        </div>
    </div>
    <div class="">
        <div class="form-group row">
            <label for="price" class="col-md-3">Price:</label>
            <input type="text" name="price" class="form-control col-md-9">
        </div>
    </div>
    <div class="">
        <div class="form-group row">
            <label for="Description:" class="col-md-3">Desription:</label>
            <textarea cols="10" rows="4" class="form-control col-md-9"></textarea>
        </div>
    </div>
    <div class="">
        <div class="form-group row">
            <label for="image" class="col-md-3">Images:</label>
            <div  class=" col-md-9">
                <input type="file" multiple class="row form-control ">
                <input type="file" multiple class="row form-control">
            </div>
        </div>
    </div>
    <div class="">
        <div class="form-group row">
            <label for="active" class="col-md-3">Active:</label>
            <div  class="col-md-9">
                <button type="button" class="form-control btn btn-primary">active</button>
            </div>
        </div>
    </div>
    <button type="submit" name="btnInsert" class="btn btn-primary">Add</button>

</form>