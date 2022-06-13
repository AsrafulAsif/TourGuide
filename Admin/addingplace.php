<?php
include("connection.php");

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adding Place</title>
  <style>


    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      resize: vertical;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>

  <?php
  include('adminNavbar.php');
  ?>

  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      
      <!--drop down start-->

      <div class="row">
        <div class="col-25">
          <label for="fname">Division Name:</label>
        </div>
        <div class="col-75">
          <div class="custom-select" style="width:200px;">
          <select name="dname">
            <option name="dname" value="Dhaka">Dhaka</option>
            <option name="dname" value="Chittagong">Chittagong</option>
            <option name="dname" value="Barisal">Barisal</option>
            <option name="dname" value="Khulna">Khulna</option>
            <option name="dname" value="Mymensingh">Mymensingh</option>
            <option name="dname" value="Rajshahi">Rajshahi</option>
            <option name="dname" value="Rangpur">Rangpur</option>
            <option name="dname" value="Sylhet">Sylhet</option>
          </select>
           
          </div>
        </div>
      </div>
      <!-- drop down end -->

<!-- place name start here -->

      <div class="row">
        <div class="col-25">
          <label for="pname">Place Name:</label>
        </div>
        <div class="col-75">
          <input type="text" id="pname" name="pname" placeholder="Enter Place name">
        </div>
      </div>

      <!-- place name end here -->

      <!-- place address start here -->
      <div class="row">
        <div class="col-25">
          <label for="fname">Place Address:</label>
        </div>
        <div class="col-75">
          <input type="text" id="paddress" name="paddress" placeholder="Enter Place address">
        </div>
      </div>
      <!-- place address end here -->

      <!-- place longitude star -->
      <div class="row">
        <div class="col-25">
          <label for="fname">Place Longitude:</label>
        </div>
        <div class="col-75">
          <input type="text" id="plongitude" name="plongitude" placeholder="Enter Place longitude">
        </div>
      </div>
      <!-- place longitude end here -->


      <!-- place latitude start here  -->
      <div class="row">
        <div class="col-25">
          <label for="fname">Place Latitude:</label>
        </div>
        <div class="col-75">
          <input type="text" id="platitude" name="platitude" placeholder="Enter Place latitude">
        </div>
      </div>
      <!-- place latitude end here  -->





<!-- place image start here -->
      <div class="row">
        <div class="col-25">
          <label for="lname">Place Image:</label>
        </div>
        <div class="col-75">
          <input type="file" id="lname" name="uploadfile" placeholder="Select place image:">
        </div>
      </div>
<!-- place image end here -->


      <div class="row">
        <div class="col-25">
          <label for="subject">Write about the place:</label>
        </div>
        <div class="col-75">
          <textarea type="text" name="pinfo" placeholder="Write something about place.." style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" name="submit" value="upload File">
      </div>
    </form>
  </div>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
  $p_latitude=$_POST['platitude'];
  $p_longitude=$_POST['plongitude'];
  $p_address=$_POST['paddress'];

  $d_name = $_POST['dname'];
  $p_name = $_POST['pname'];
  //upload file code....
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "image/" . $filename;
  move_uploaded_file($tempname, $folder);
  $p_info = $_POST['pinfo'];


  $sql = "INSERT INTO division(place_division,place_name,place_address,place_log,place_lat,place_image,place_description)
   VALUES('$d_name','$p_name','$p_address','$p_longitude','$p_latitude','$folder','$p_info')";
  mysqli_query($conn, $sql);
}
//mysqli_close($conn);

?>