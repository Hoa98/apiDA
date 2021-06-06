<template>
   <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Quản trị Memtor</h3>

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
                      <th style="text-align:center">Username</th>
                      <th style="text-align:center">Email</th>
                      <th style="text-align:center">Address</th>
                      <th style="text-align:center">Gender</th>
                      <th style="text-align:center">Role</th>
                      <th style="text-align:center">Phone</th>
                      <th style="text-align:center"><router-link to="/admin/add-memtor"><button type="button" class="btn btn-primary">Add New</button></router-link></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align:center">183</td>
                      <td style="text-align:center">John Doe</td>
                      <td style="text-align:center">thai@gmail.com</td>
                      <td style="text-align:center">thai binh</td>
                      <td style="text-align:center">Male</td>
                      <td style="text-align:center">Active</td>
                      <td style="text-align:center">123456789</td>
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