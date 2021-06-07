<template>
   <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Quản trị danh mục thử thách</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="text-align:center">ID</th>
                       <th style="text-align:center">Name</th>
                      <th style="text-align:center">Image</th>
                      <th style="text-align:center">Description</th>
                      <th style="text-align:center"><router-link to="/admin/add-category"><button type="button" class="btn btn-primary">Add New</button></router-link></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align:center">183</td>
                      <td style="text-align:center">hihi</td>
                      <td style="text-align:center">image</td>
                      <td style="text-align:center">day la mot bai toan kho</td>
                      <td style="text-align:center">
                        <button type="button" class="btn btn-info">Update</button>
                        <button type="button" class="btn btn-danger">Delele</button>
                      </td>
                    </tr>
           
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</template>

<script>
export default {

}
</script>

<style>

</style>