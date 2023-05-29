<?php
// // Check if form is submitted
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Get form data
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Validate form data
//     $errors = array();
//     if (empty($email)) {
//         $errors[] = 'Email is required';
//     }
//     if (empty($password)) {
//         $errors[] = 'Password is required';
//     }

//     // If there are no errors, proceed with login
//     if (empty($errors)) {
//         // Perform login operation here
//     } else {
//         // Display error messages
//         foreach ($errors as $error) {
//             echo $error . '<br>';
//         }
//     }
// }
?>



<?php
session_start();

     require "../Admin/includes/configure.php";

    // $connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');

   if(!$connnection){
        die("not connected".mysqli_error($connnection));
     }else{

    if(isset($_REQUEST['submit'])){

        $usname=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        

        $query="SELECT * FROM `entrepreneur-reg-table1` WHERE username='$usname' && password='$password'";

       

        $pass=mysqli_query($connnection,$query);
        $row_count=mysqli_num_rows($pass);

        if($row_count){
            echo "Login success";
            $_SESSION['username']=$usname;
            $_SESSION['current-time']=time();

            


            if($_REQUEST)
            header("location:../Entrepreneur/investor_showProfile_first_Get_start.php");

        }else{
                // investor
                $query="SELECT * FROM `investor_reg_table1` WHERE username='$usname' && password='$password'";

       

                $pass=mysqli_query($connnection,$query);
                $row_count=mysqli_num_rows($pass);
        
                if($row_count){
                    echo "Login success";
                    $_SESSION['username']=$usname;
                    $_SESSION['current-time']=time();
        
                    
        
        
                    if($_REQUEST)
                    header("location:../Investor/investor_home.php");
        
                }else{
                    header("location:loginForm.php");
                    echo "not loged in";
                }
                // investor
        }
    }
}

?>