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
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="custom-file">
                    <label for="usr">Add You Tube Link</label>
                    <input type="text" class="form-control" v-model="vlink" placeholder="Enter Youtube Link">
                  </div>
                </div>
                <div class="col-md-4"></div>
              </div>
            </form>
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
          vlink: null
        }
      },
      mounted(){

        axios.get('http://realestate.indoortv.co/real_estate_api/videos/all').then((res) => {this.vlink=res.data.data.vlink[0].video_link});
      },

      methods: {
            save(){
              const formData = new FormData();
              formData.append('video_link', this.vlink)
              const headers = { 'Content-Type': 'multipart/form-data' }
              axios.post('http://realestate.indoortv.co/real_estate_api/videos/add', formData, { headers }).then((res) => {this.vlink=res.data.data.vlink[0].video_link});
              
            }

        }
    })
</script>

<?php include 'footer.php';?>
