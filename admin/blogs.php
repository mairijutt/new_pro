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
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="usr">Blog Title</label>
                    <input type="text" class="form-control" v-model="blog_title" placeholder="Type feature Name">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="usr">Blog Date</label>
                    <input type="text" class="form-control" v-model="blog_date" placeholder="Type feature Name">
                  </div>
                </div>
               
                <div class="col-md-3">
                  <div class="custom-file"> <span class="file-text-n">Add Image</span>
                    <input type="file" class="custom-file-input" @change="onFileUpload" ref="blog_file1" id="customFile">
                    <label class="custom-file-label-1" for="customFile">{{image_name1}}</label>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="custom-file"> <span class="file-text-n">Add Banner</span>
                    <input type="file" class="custom-file-input" @change="onFileUpload2" ref="blog_file2" id="customFile">
                    <label class="custom-file-label-1" for="customFile">{{image_name2}}</label>
                  </div>
                </div>
                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="usr">Blog Description</label>
                    <textarea type="text" class="form-control" style="height: 250px;" v-model="blog_description" placeholder="Type feature Name"></textarea>
                  </div>
                </div>
    
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="table-responsive">
              <h2 class="table-heading-1">Blogs</h2>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sr#</th>
                    <th>Blog Title</th>
                    <th>Blog Date</th>
                    <th>Blog Description</th>
                    <th>Blog Image</th>
                    <th>Banner Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(blog, index) in blog_list" :key="index">
                    <td>{{ index+1 }}</td>
                    <td>{{ blog.blog_title }}</td>
                    <td>{{ blog.blog_date }}</td>
                    <td>{{ blog.blog_description }}</td>
                    <td><img :src="blog.blog_img" /></td>
                     <td><img :src="blog.blog_banner_img" /></td>
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
          blog_description:null,
	  blog_date:null,
	  blog_title:null,

	 
          blog_list: null,
          
          blog_img: null,
          blog_banner_img: null,
          
          image_name1:'Select icon',
          image_name2:'Select icon'

        }
      },

      mounted () {
            axios.get('http://realestate.indoortv.co/real_estate_api/blogs/all').then(res => (this.blog_list = res.data.data.all_blogs))
      },
      methods: {
            save(){
              const formData = new FormData();
                formData.append('blog_title', this.blog_title);
                formData.append('blog_date', this.blog_date);
                formData.append('blog_description', this.blog_description);
                formData.append('blog_img', this.blog_banner_img);
                formData.append('blog_banner_img', this.blog_banner_img);
                
                const headers = { 'Content-Type': 'multipart/form-data' };
              axios.post('http://realestate.indoortv.co/real_estate_api/blogs/add', formData, { headers }).then((res) => {this.blog_list = res.data.data.all_blogs;});
              /* this.fet_name=null; this.fet_name=null; this.icon=null;this.icon_name='Select icon'; */
            },

            onFileUpload (event) {
              this.blog_img = this.$refs.blog_file1.files[0];
              this.image_name1= this.$refs.blog_file1.files[0].name;
             },
             
              onFileUpload2 (event) {
              this.blog_banner_img = this.$refs.blog_file2.files[0];
              this.image_name2= this.$refs.blog_file2.files[0].name;
             },

        }
    })
</script>

<?php include 'footer.php';?>
