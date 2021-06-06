
<template>
<div class="row">
     <div class="col-12">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update danh mục</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputName">Username:</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter username">
                    </div>
                   <div class="form-group">
                    <label for="exampleInputName">Description:</label>
                    <ckeditor value="Hello, World!"></ckeditor>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>
</div>
</template>

<script>
export default {

}
</script>

<style>

</style>