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
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="usr">Feature Name</label>
                    <input type="text" class="form-control" v-model="fet_name" placeholder="Type feature Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="custom-file"> <span class="file-text-n">Add Icon</span>
                    <input type="file" class="custom-file-input" @change="onFileUpload" ref="fet_file" id="customFile">
                    <label class="custom-file-label-1" for="customFile">{{icon_name}}</label>
                  </div>
                </div>
                <div class="col-md-4"></div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="table-responsive">
              <h2 class="table-heading-1">Features</h2>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sr#</th>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(item, index) in fet_list" :key="index">
                    <td>{{ index+1 }}</td>
                    <td>{{ item.feature_name }}</td>
                    <td><img :src="item.icon" /></td>
                    <td @click="greet()">Edit / Delete </td>
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
          fet_list: null,
          fet_name: null,
          icon: null,
          icon_name:'Select icon'

        }
      },

      mounted () {
            axios.get('http://realestate.indoortv.co/real_estate_api/features/all').then(res => (this.fet_list = res.data.data.all_features))
      },
      methods: {
            save(){
              const formData = new FormData();
                formData.append('fet_file', this.icon);
                formData.append('fet_name', this.fet_name);
                const headers = { 'Content-Type': 'multipart/form-data' };
              axios.post('http://realestate.indoortv.co/real_estate_api/features/add', formData, { headers }).then((res) => {this.fet_list = res.data.data.all_features;});
               this.fet_name=null; this.fet_name=null; this.icon=null;this.icon_name='Select icon';
            },

            onFileUpload (event) {
              this.icon = this.$refs.fet_file.files[0];
              this.icon_name = this.$refs.fet_file.files[0].name;
             },

        }
    })
</script>

<?php include 'footer.php';?>
