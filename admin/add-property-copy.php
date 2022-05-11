<?php include 'header.php';?>
    <!-- partial -->
    <div id="app" class="main-panel">
      <div class="content-wrapper bg-white">
        <h2 class="table-heading-1">List New Properties</h2>
        <div class="row">
          <div class="form-info">
            <!--<form v-on:submit="save()">-->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="usr">Properties Name</label>
                    <input type="text" v-model="prop_name" class="form-control" id="" placeholder="Type Properties Name" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="usr">Properties address</label>
                    <input type="text"  v-model="prop_address" class="form-control" id="" placeholder="Type Properties address" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="usr">Properties description</label>
                    <textarea v-model="prop_desc" class="form-control" placeholder="Type description" rows="10" required></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="usr">Rooms</label>
                    <input type="text"  v-model="prop_rooms"  class="form-control"  placeholder="Rooms">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="usr">BathRooms</label>
                    <input type="text" v-model="prop_baths" class="form-control" placeholder="BathRooms">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="usr">Space Size</label>
                    <input type="text" v-model="prop_size" class="form-control"  placeholder="Space Size">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="usr">Monthly Rent</label>
                    <input type="text" v-model="prop_rent" class="form-control" placeholder="Monthly Rent">
                  </div>
                </div>
              </div>
              
              <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="sel1" class="form-label">Select Propperty Option</label>
                    <select v-model="prop_opt" class="form-control"  required>
                        <option value="">Choose Propperty Option</option>
                        <option value="Move In Ready">Move In Ready</option>
                        <option value="New Construction">New Construction</option>
                        <option value="Coming Soon">Coming Soon</option>
                        <option value="Available Soon">Available Soon</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">

                 


<!-- Start Custom Drop Down -->
          <label for="usr">Select Features</label>
          <div style="display:flex; width: 318px;">
              <input type="text" v-model="fet_menu_options" class="form-control"  placeholder="Features" readonly>

              <div class="dropdown">
              
                <button class="dropbtn">^</button>

                <div class="dropdown-content">
                  <a v-for="(fet, index) in opt_fet" :key="index"><span id="DropDo" @click="fet_value(fet.id, fet.feature_name)">{{fet.feature_name}}</span><span id="DropDoNext" @click="fet_remove(index)">x</span></a>
                </div>
              </div>
              </div>

 <!-- End Custom Drop Down -->             




                    <!-- <label for="sel1" class="form-label">Select Features</label>
                    <select v-model="prop_fet" class="form-control"  placeholder="Add Feature" multiple required>
                        <option v-for="(fet, index) in opt_fet" :key="index" :value="fet.id">{{fet.feature_name}}</option>
                    </select> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">

              <label for="usr">Select Amenities</label>
              <div style="display:flex; width: 318px;">
              <input type="text" v-model="ame_menu_options" class="form-control"  placeholder="Amenities" readonly>
              <div class="dropdown">
                <button class="dropbtn">^</button>
                <div class="dropdown-content">
                  <a v-for="(ame, index) in opt_amen" :key="index"><span id="DropDo" @click="ame_value(ame.id, ame.amen_name)">{{ame.amen_name}}</span><span id="DropDoNext" @click="ame_remove(index)">x</span></a>
                </div>
              </div>
            </div>
      
                  </div>
                </div>
                <div class="col-md-3">

                          <div class="cus_sel_wrap"><span v-for="(surr, index) in sur_menu_options" :key="index" class="cus-badge">{{surr.sur_name}} <b style="margin-left:20px; cursor:pointer;" @click="sur_cross(index)">X</b><br/></span><div>
                            <div class="dropdown">
                                <button class="dropbtn">^</button>
                                <div class="dropdown-content">
                                  <a v-for="(sur, index) in opt_sur" :key="index" @click="sur_value(sur.id, sur.sur_name)"><span id="DropDo">{{sur.sur_name}}</span></a>
                                </div>
                              </div>
                          </div>
                  
                </div>

               

      </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="file-upload">
                    <div class="image-upload-wrap">
                      <input class="file-upload-input" type='file' @change="onFileUpload" ref="file" accept="image/*" multiple required />
                      
                        <div v-if="file_name==true" class="drag-text"> <img src="images/Image-2.png" />
                          <h3><span>File Uploded</h3>
                         
                        </div>
                        <div v-else class="drag-text"> <img src="images/Image-2.png"  />
                          <h3><span>Upload Feature image</span> or drag and drop</h3>
                          <p>Mp4 upt to 20MB</p>
                          <p>1280px minimum width</p>
                        </div>
                       
                    </div>
                    <div class="file-upload-content"> <img class="file-upload-image" src="#"  alt="your image" />
                      <div class="image-title-wrap">
                        <button type="button" onClick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                      </div>
                    </div>
                  </div>

                  <div id="preview">
    <img v-if="url" :src="url" />
  </div>
</div>

</div>
</div>


              <div class="row">
                <div class="col-md-12">
                  <div class="file-upload">
                    <div class="image-upload-wrap">
                      <input class="file-upload-input" type='file' @change="MultionFileUpload" ref="Multifile" accept="image/*" multiple required />
                      
                        <div v-if="Multi_file_name==true" class="drag-text"> <img src="images/Image-2.png" />
                          <h3><span>Files Uploded</h3>
                         
                        </div>
                        <div v-else class="drag-text"> <img src="images/Image-2.png"  />
                          <h3><span>Upload Gallery Images</span> or drag and drop</h3>
                          <p>Mp4 upt to 20MB</p>
                          <p>1280px minimum width</p>
                        </div>
                       
                    </div>
                    <div class="file-upload-content"> <img class="file-upload-image" src="#"  alt="your image" />
                      <div class="image-title-wrap">
                        <button type="button" onClick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                      </div>
                    </div>
                </div>
              </div>
</div>
</div>
                  
               
              
   
           


              <div class="row">
                <div class="col-md-12">
                    <h4>{{message}}</h4>
                  <div class="sv-btn"><button @click="save()" class="custom_btn f-right">Save</button></div>
                </div>
              </div>
            <!--</form>-->
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
                 url:null,
                 fet_menu_options:[],
                 fet_menu_options_id:[],

                 ame_menu_options:[],
                 ame_menu_options_id:[],

                 sur_menu_options:[],
                 sur_menu_options_id:[],




                  prop_name:'',
                  prop_address:'',
                  prop_desc:'',
                  prop_opt:'',
                  prop_rooms:'',
                  prop_size:'',
                  prop_baths:'',
                  prop_rent:'',
                  prop_amen:[],
                  prop_fet:[],
                  prop_sur:[],
                  prop_file:null,
                  prop_list:[],
                  file_name:false,
                  Multi_file_name:false,

                  prop_multi_files:[],


                  opt_amen:[],
                  opt_fet:[],
                  opt_sur:[],
                  
                  message:'',

                  

        }
      },

      mounted () {
        axios.get("http://realestate.indoortv.co/real_estate_api/property/all").then(res => {this.prop_list = res.data.data.all_property; this.opt_amen = res.data.data.all_amen; this.opt_fet = res.data.data.all_fet; this.opt_sur = res.data.data.all_surr;});
      },
      methods: {

                fet_value(id, name){
                  this.fet_menu_options.push(name);
                  this.fet_menu_options_id.push(id);
                },

               
                fet_remove(id){
                  this.fet_menu_options.splice(id, 1);
                  this.fet_menu_options_id.splice(id, 1);
                },

                ame_value(id, name){

                  this.ame_menu_options.push(name);
                  this.ame_menu_options_id.push(id);

               

                  },

                  ame_remove(id){
                    this.ame_menu_options.splice(id, 1);
                    this.ame_menu_options_id.splice(id, 1);
                  },

                  sur_value(id, name){
                    const obj ={id:id,sur_name:name};
                    this.sur_menu_options.push(obj);
                  },

                  sur_remove(id){
                    this.sur_menu_options.splice(id, 1);
                    this.sur_menu_options_id.splice(id, 1);
                  },

                  sur_cross(id){
                    this.sur_menu_options.splice(id, 1);
                  },


            save(){
              if(this.prop_name==''||
                    this.prop_address==''||
                    this.prop_desc==''||
                    this.prop_opt==''||
                    this.prop_rooms==''||
                    this.prop_size==''||
                    this.prop_baths==''||
                    this.prop_rent==''|| this.file_name == false){
                      alert("Please Fill Form Cearfully");
              }
              else{
              const formData = new FormData()
              formData.append('property_name', this.prop_name)
              formData.append('property_address', this.prop_address)
              formData.append('property_desc', this.prop_desc)
              formData.append('img', this.prop_file)
              formData.append('monthly_rent', this.prop_rent)
              formData.append('rooms', this.prop_rooms)
              formData.append('ready_option', this.prop_opt)
              formData.append('space_size', this.prop_size)
              formData.append('bath_rooms', this.prop_baths)
              formData.append('features', JSON.stringify(this.ame_menu_options_id))
              formData.append('amenities',  JSON.stringify(this.fet_menu_options_id))
              formData.append('surrondings', JSON.stringify(this.sur_menu_options_id))

              for (let i = 0; i < this.prop_multi_files.length; i++) {
                formData.append('files[]', this.prop_multi_files[i]);
              }
              const headers = { 'Content-Type': 'multipart/form-data' };
              axios.post("http://realestate.indoortv.co/real_estate_api/property/add", formData, { headers }).then((res) => {console.log(this.prop_list = res.data.data.all_property)});
              
                //  setTimeout("window.location.replace('http://realestate.indoortv.co/admin/properties')", 2000);
                 
                 this.message= 'Gallery Images Uploading';
                 
                }
            },

            MultionFileUpload (event) {
              this.prop_multi_files = this.$refs.Multifile.files;
              this.Multi_file_name = true;
             },

            onFileUpload (event) {

              this.prop_file = this.$refs.file.files[0];
              this.url = URL.createObjectURL(this.prop_file);
              this.file_name = true;
             },

             

        }
    })
</script>


<?php include 'footer.php';?>
