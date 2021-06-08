<template>
   <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Quản trị người dùng</h3>

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
                      <th style="text-align:center"><router-link :to="{name: 'add.users'}"><button type="button" class="btn btn-primary">Add New</button></router-link></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                      <td style="text-align:center">{{user.id}}</td>
                      <td style="text-align:center">{{user.username}}</td>
                      <td style="text-align:center">{{user.email}}</td>
                      <td style="text-align:center">
                        <router-link :to="{name: 'edit.users', params: { id: user.id }}" class="btn btn-info">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteUser(user.id)">Delete</button>
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
        name: 'List',
        data: function() {
	        return {}
        },
       computed: {
           users () {
               return this.$store.state.user.users;
           }
        },
        created: function () {
            this.$store.dispatch('user/fetch');
        },
        methods: {
            deleteUser: function (id) {
	            let result = confirm('Are you sure');

	            if (!result) {
                    return;
                }

                this.$store.dispatch('user/deleteUser', id);
            }
        }
}
</script>

<style>

</style>