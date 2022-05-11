<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Area4rent</title>
<!-- plugins:css -->
<link rel="stylesheet" href="css/themify-icons.css">
<!-- inject:css -->
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Quicksand&display=swap" rel="stylesheet">
<!-- endinject -->
<link rel="shortcut icon" href="" />
<script src="js/vue.js"></script>
<script src="js/axios.js"></script>
</head>
<body style="background:#fafafa;">

  <!-- navbar.html -->
 
  <!-- partial active in nav-item class-->

    <!-- sidebar.html -->
  
    <!-- partial -->
    <div id="app" >
      <div class="content-wrapper2">
          <div class="form-info2 center">
            <form method="post" action="index">
              <div class="row">
                <div class="col-md-12">
                
                  <div class="form-group">
                    <label for="usr">User Name</label>
                    <input type="text" class="form-control" name="user_name"  placeholder="Type User Name" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="usr">Password</label>
                    <input type="text" class="form-control" name="pass"  placeholder="Type Password" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="sv-btn"><button class="custom_btn" >Login</button></div>
                </div>
              </div>

            </form>

          </div>
        
      </div>
    </div>


    <?php
    session_start();

    unset($_SESSION['admin_login']);

    if(isset($_POST['user_name']) && isset($_POST['pass'])){
    
    $user = $_POST['user_name'];
    $pass = $_POST['pass'];

      if($user == 'admin' && $pass == '12345'){
        $_SESSION["admin_login"] = "admin_login";
        header("Location: /admin/properties", TRUE, 301);
        exit();
      }

    }
    
    ?>
      
          
       
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
            axios.get('http://localhost/real_estate_api/features/all').then(res => (this.fet_list = res.data.data.all_features))
      },
      methods: {
            save(){
              const formData = new FormData();
                formData.append('fet_file', this.icon);
                formData.append('fet_name', this.fet_name);
                const headers = { 'Content-Type': 'multipart/form-data' };
              axios.post('http://localhost/real_estate_api/features/add', formData, { headers }).then((res) => {this.fet_list = res.data.data.all_features;});
               this.fet_name=null; this.fet_name=null; this.icon=null;this.icon_name='Select icon';
            },

            onFileUpload (event) {
              this.icon = this.$refs.fet_file.files[0];
              this.icon_name = this.$refs.fet_file.files[0].name;
             },

        }
    })
</script>

</div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->

<script src="js/bundle.base.js"></script>


<!-- endinject -->
<!-- Plugin js for this page-->
<script src="js/chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<script src="js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/custom.js"></script>
<script src="js/chart.js"></script>
<!-- End custom js for this page-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>
</html>

