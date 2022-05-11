<?php include 'header.php';?>
   
    <!-- partial -->
    <div id="app" class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div style="height:80px;"></div>
            <div class="sv-btn"><a href="add-property" class="sv-n-btn" @click="save()">Add Property</a></div>
          </div>
        </div>




        <div style="height:80px;"></div>


            <div class="row">

            <div class="col-1"></div>

            <div class="col-10">

            <div class="row">

              <div class="col-3" v-for="(prop, index) in prop_list" :key="index">
              <div class="card" style="width: 18rem;margin-bottom:10px; height: 350px; border-radius: 20px; 
    margin-bottom: 50px;">
                
                      <img :src="prop.img" class="card-img-top" style="border-radius: 20px 20px 0px 0px;" alt="...">
                      <a href="/detail?id=50" style=" a:hover {
    color: #0056b3;
    text-decoration: underline;
    text-decoration: none;
    color: black;
}">
                      <div class="pos position-absolute sticky-top mt-3">
                        <button class="mov_btn" style="background-color: white;
    border: none;
    color: red;
    padding: 10px;
    border-radius: 8px;
    margin-left: 10px;">{{prop.ready_option}}</button>
                      </div>
                      <div class="car-body" style="margin: 18px;">
                      <p class="card-text"><h5><b>$ {{prop.monthly_rent}}</b> / Month</h5></p>
                      <p class="card-text">{{prop.property_name}}</p>
                      <p class="card-text row justify-content-around"><img src="../images/item-foot1.png"/><b>{{prop.rooms}}</b><img src="../images/item-foot2.png"/><b>{{prop.bath_rooms}}</b><img src="./images/item-foot3.png"/><b>{{prop.space_size}} SqFt</b></p>
                      </div>  
                    </a>  
                    
                    </div>
                </div>
</div>

              </div>
                <div class="col-1"></div>
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

            prop_list:[],

opt_amen:[],
opt_fet:[],
opt_sur:[],

        }
      },

      mounted () {
        //    axios.get('http://realestate.indoortv.co/real_estate_api/surrondings/all').then(res => {this.surr_list = res.data.data.all_surroundings});
            axios.get("http://realestate.indoortv.co/real_estate_api/property/all").then(res => {this.prop_list = res.data.data.all_property; this.opt_amen = res.data.data.all_amen; this.opt_fet = res.data.data.all_fet; this.opt_sur = res.data.data.all_surr;});
          },
      methods: {
            save(){
               const formData = new FormData()
                formData.append('surr_name', this.surr_name)
                formData.append('surr_address', this.surr_address)
                formData.append('surr_class', this.surr_class)
                formData.append('surr_distance', this.surr_distance)
                formData.append('surr_contact', this.surr_contact)
              axios.post('http://indoortv.co/real_estate_api/surrondings/add', formData).then((res) => {this.surr_list = res.data.data.all_surroundings});

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

