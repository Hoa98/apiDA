
<template>
<div class="row">
     <div class="col-12">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm người dùng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form @submit.prevent="addUser" @keydown="form.onKeydown($event)">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputName">Username:</label>
                   <input v-model="form.username" :class="{ 'is-invalid': form.errors.has('username') }" class="form-control" type="text" name="username">
          <!-- <has-error :form="form" field="username" /> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                     <input v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }" class="form-control" type="email" name="email">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputAddress">Address:</label>
                    <input type="email" class="form-control" id="exampleInputAdress" placeholder="Enter address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone">Phone:</label>
                    <input type="email" class="form-control" id="exampleInputPhone" placeholder="Enter phone">
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input v-model="form.password" :class="{ 'is-invalid': form.errors.has('password') }" class="form-control" type="password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="">Avatar</label>
                    <input type="file" class="form-control" name="avatar">
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
                  <button type="submit" :loading="form.busy" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>
</div>
</template>

<script>
import Form from 'vform'

export default {
  data: () => ({
    form: new Form({
      username: '',
      email: '',
       password: ''
    })
  }),
    methods: {
        async addUser () {
      // Submit the form.
      await this.form.post(route('create.user'))

      this.$router.push({ name: 'users' })
    },
    }
}
</script>

<style>

</style>