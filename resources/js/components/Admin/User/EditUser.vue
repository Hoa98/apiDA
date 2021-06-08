
<template>
<div class="row">
     <div class="col-12">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update người dùng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form @submit.prevent="updateUser">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputName">Username:</label>
                    <input type="text"  v-model="user.username" class="form-control" name="username" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" v-model="user.email" class="form-control" name="email" placeholder="Enter email">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputAddress">Address:</label>
                    <input type="email" class="form-control" id="exampleInputAdress" placeholder="Enter address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone">Phone:</label>
                    <input type="email" class="form-control" id="exampleInputPhone" placeholder="Enter phone">
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password:</label>
                    <input type="password" v-model="user.password" class="form-control" name="password" placeholder="Password">
                  </div> -->
                  <div class="form-group">
                    <label for="">Avatar</label>
                    <input type="file" @change="upload($event)" class="form-control" name="avatar">
                  </div>
                   <!-- <div class="form-group">
                     <label for="exampleInputGender">Gender:</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Male</label><br>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Female</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputRole">Role:</label><br>
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  </div> -->
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
import { mapGetters } from 'vuex'
export default {
data: function() {
	        return {
            file: ''
          }
        },
    computed: mapGetters({
      user: 'user/user'
  }),
   
   created()  {
       this.$store.dispatch('user/fetchOne',this.$route.params.id);
    },
    methods: {
        upload(event){
        this.file = event.target.files[0];
        },
        updateUser () {
        let myFormData = new FormData();
         myFormData.append('avatar', this.file);
         myFormData.append('username', this.user.username);
         myFormData.append('email', this.user.email);
         myFormData.append('id', this.user.id);
        // Submit the form.
       
        this.$store.dispatch('user/editUser',myFormData);

        // Redirect home.
        this.$router.push({ name: 'users' })
        },
      
    }
}
</script>

<style>

</style>