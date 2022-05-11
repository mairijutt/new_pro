<?php include 'header.php';?>

  <body>
    <!-- Load jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="filter_multi_select.css" />
    <script src="filter-multi-select-bundle.min.js"></script>

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
                    <label for="sel1" class="form-label">Select Features</label>
                    <select multiple name="features" id="features" class="form-control feature">
                        <!-- <option value="1">Square</option>
                        <option value="2">circle</option>
                        <option value="3">polygon</option>
                        <option value="4">Ellipse</option>
                        <option value="5">Triangle</option>
                        <option value="6">Rectangle</option> -->
                     </select>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="sel1" class="form-label">Select Ameities</label>
                    <select multiple name="amenities" id="amenities" class="form-control">
                        <option value="1">Square</option>
                        <option value="2">circle</option>
                        <option value="3">polygon</option>
                        <option value="4">Ellipse</option>
                        <option value="5">Triangle</option>
                        <option value="6">Rectangle</option>
                     </select>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="sel1" class="form-label">Select Surroundings</label>
                    <select multiple name="sroundings" id="sroundings" class="form-control">
                        <option value="1">Square</option>
                        <option value="2">circle</option>
                        <option value="3">polygon</option>
                        <option value="4">Ellipse</option>
                        <option value="5">Triangle</option>
                        <option value="6">Rectangle</option>
                     </select>
                  </div>
                </div>
              

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="sel1" class="form-label">Select Options</label>
                    <select name="Fet_option" class="form-control">
                        <option value="Move In Ready">Move In Ready</option>
                        <option value="New Construction">New Construction</option>
                        <option value="Coming Soon">Coming Soon</option>
                        <option value="Available Soon">Available Soon</option>
                     </select>
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

              <div class="row">
                <div class="col-md-12">
                    <!-- <h4>{{message}}</h4> -->
                  <div class="sv-btn"><button @click="save()" class="custom_btn f-right">Save</button></div>
                </div>
              </div>
            <!--</form>-->
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    
     
    
    <script>

$.ajax({
        url: "http://realestate.indoortv.co/real_estate_api/property/all",
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {

          $.each(res.data.all_fet , function(i, obj){
             $('#features').append($('<option>').text(obj.feature_name).attr('value', obj.id));
             
          });
            console.log(res.data.all_fet);

            

           // $('<option value="data.firstName">data.firstName</option>').append(data.firstName);
        }
    });
    
      $(function () {
         var shapes = $('.feature').filterMultiSelect({
          selectAllText: 'all...',
          placeholderText: 'Select Features',
          caseSensitive: true,
        });
      });

      $(function () {
         var shapes = $('#amenities').filterMultiSelect({
          selectAllText: 'all...',
          placeholderText: 'Select Amenities',
          caseSensitive: true,
        });
      });

      $(function () {
         var shapes = $('#sroundings').filterMultiSelect({
          selectAllText: 'all...',
          placeholderText: 'Select Sroundings',
          caseSensitive: true,
        });
      });
     
    </script>
  </body>

</html>

