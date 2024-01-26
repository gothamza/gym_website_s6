<?php 

$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");

if (isset($_POST['add'])) {

    # code...
   header("Location:list_produit.php");
}



 ?>
<html>
    <head>
      <meta charset="utf-8">
    <title>Gymnast - Gym Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
        <style type="text/css">
            body{

                background-size: 100%;
                background-image: url(sallsp1.jpg);
            }
            .carr{
                border: 2px double cyan ;
                 width:50% ;
                 height:100% ;
                 margin-top: 50px;
                 margin-left:25%;
                 background-image: url(sport.jpg);
                  
                 

            }
            
            .entet{
             width:100%;
             height:30% ;
             
             background-size: 100%;
            
            }
            .sall{

                text-decoration:underline;
                 text-align:center;
                 color: red;
                 text-shadow:-1px 1px 1px blue;
                 margin-left:0%;
                 padding: 50px;
         
}
.ferm{
        background-color: red;
        color:white;
        font-size:20px; 
        width:40px;
        height: 40px;
        margin-left:90%;
        margin-top:10px ;
        border-radius: 50%;
       }   
            
          

        </style>
    </head>
    <body>
       
            <a  style="    " href="admin_html.php"><button class="ferm">X</button></a>
            
            
            
     
      
           <!-- Class Timetable Start -->
    <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Class Timetable</h4>
            <h4 class="display-4 font-weight-bold">Working Hours and Class Time</h4>
        </div>
        <div class="tab-class">
            <ul class="nav nav-pills justify-content-center mb-4">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#class-all">All Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-cardio">Cardio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-crossfit">Crossfit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-powerlifting">Powerlifting</a>
                </li>
            </ul>
            <input  style="width: 100px; margin-left:40%; height: 25px;" classe="dd"  type='submit' name="add" value="Ajouter"/>
            <div class="tab-content">
                <div id="class-all" class="container tab-pane p-0 active">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <?php if(isset($_POST['M1'])){echo"background-color=red;";} ?>
                                    <th class="bg-secondary text-white align-middle">8.00am - 10.00am</th>
                                    <td style="background-color: red;"><input type="checkbox" name="M1"></td>
                                   <td><input type="checkbox" name="M2"></td>
                                   <td><input type="checkbox" name="M3"></td>
                                   <td><input type="checkbox" name="M4"></td>
                                   <td><input type="checkbox" name="M5"></td>
                                   <td><input type="checkbox" name="M6"></td>
                                   <td><input type="checkbox" name="M7"></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">12.00pm - 3.00pm</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">3.00pm - 6.00pm</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                  <tr>
                                    <th class="bg-secondary text-white align-middle">6.00pm - 9.00pm</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                  <tr>
                                    <th class="bg-secondary text-white align-middle">9.00pm - 12.00pm</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               
               
    <!-- Class Timetable End -->
        </div>
    </body>
</html>