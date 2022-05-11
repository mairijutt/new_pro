<?php include 'header.php';?>
   
    <!-- partial -->
    <div id="app" class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="sv-btn"><a href="#" class="sv-n-btn" @click="save()">Save</a></div>
          </div>
        </div>
        <div class="row">
          <div class="form-info">
            <form>
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="usr">Business Name</label>
                    <input type="text" v-model="surr_name" class="form-control" id="" placeholder="Type Business Name">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="usr">Address</label>
                    <input type="text" v-model="surr_address" class="form-control" id="" placeholder="Type Address">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="sel1" class="form-label">Class</label>
                     <input type="text" v-model="surr_class" class="form-control" id="" placeholder="Type Class">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="usr">Distance</label>
                    <input type="text" v-model="surr_distance" class="form-control" id="" placeholder="Type distance">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="usr">Contact Info</label>
                    <input type="text" v-model="surr_contact" class="form-control" id="" placeholder="Contact Info">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="table-responsive">
              <h2 class="table-heading-1">Surroundings</h2>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sr #</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Distance</th>
                    <th>Contact</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(surr, index) in surr_list" :key="index">
                    <td>{{index+1}}</td>
                    <td>{{surr.sur_name}}</td>
                    <td>{{surr.sur_address}}</td>
                    <td>{{surr.sur_class}}</td>
                    <td>{{surr.sur_distance}}</td>
                    <td>{{surr.sur_contact}}</td>
                    <td>Edit / Delete</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->


  <script>
    new Vue({
      el: '#app',
      data () {
        return {
            surr_name:'',
            surr_address:'',
            surr_class:'',
            surr_distance:'',
            surr_contact:'',
            surr_list:[],
        }
      },

      mounted () {
            axios.get('http://realestate.indoortv.co/real_estate_api/surrondings/all').then(res => {this.surr_list = res.data.data.all_surroundings});
      },
      methods: {
            save(){
               const formData = new FormData()
                formData.append('surr_name', this.surr_name)
                formData.append('surr_address', this.surr_address)
                formData.append('surr_class', this.surr_class)
                formData.append('surr_distance', this.surr_distance)
                formData.append('surr_contact', this.surr_contact)
              axios.post('http://realestate.indoortv.co/real_estate_api/surrondings/add', formData).then((res) => {this.surr_list = res.data.data.all_surroundings});

                this.surr_name='';
                this.surr_address='';
                this.surr_class='';
                this.surr_distance='';
                this.surr_contact='';
            },

            // onFileUpload (event) {
            //   this.icon = this.$refs.fet_file.files[0];
            //   this.icon_name = this.$refs.fet_file.files[0].name;
            //  },

        }
    })
</script>

<?php include 'footer.php';?>

