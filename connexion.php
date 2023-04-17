<?php 
    session_start();
    include('header.php'); 
    include('helpers/database.php');
   


    $msg="";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        // $password = sha1($password);
        $userType = $_POST['userType'];

        $sql = "SELECT * FROM users WHERE username=? AND password=? 
        AND user_Type=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("sss",$username,$password,$userType);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        session_regenerate_id();
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['user_type'];
        session_write_close();

        if($result->num_rows==1 && $_SESSION['role']=="admin"){
            header("location:admin.php");
        }
        elseif($result->num_rows==1 && $_SESSION['role']=="manager"){
            header("location:manager.php");
        }
        elseif($result->num_rows==1 && $_SESSION['role']=="ceo"){
            header("location:ceo.php");
        }
        else{
            $msg = "utilisateur et le mot de passe sont incorrect ";
        }



    }   
    




?>


    
<div class="container">
     <div class="jumbotron">
            <section class="login-block">
                <!-- Container-fluid starts -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Authentication card start -->

                                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="md-float-material form-material">
                                <!-- <form action="insertion_user.php" method="POST" class="md-float-material form-material"> -->
                          
                                   
                                        <div class="card-block">
                                            <div class="row m-b-20">
                                                <div class="col-md-12">
                                                    <h4 class="text-center">Se connecter</h4>
                                                </div>
                                            </div>



                                            <!-- <form method="POST" action="index.php"> -->
                                        <div class="form-group">                                                
                                            <div class="form-group form-primary">                                                
                                                <input type="text" class="form-control" name="username" placeholder="username" required="required">
                                                <i class="flaticon-user"></i>
                                            </div>
                                        </div>

                                        <div class="form-group">                                                
                                            <div class="form-group form-primary">                                                
                                                <input type="password" class="form-control" name="password" placeholder="password" required="required">
                                                <i class="flaticon-user"></i>
                                            </div>
                                        </div>


                                        <div class="form-group">                                                
                                            <div class="form-group form-primary">                                                
                                                <label for="userType">je suis : </label>
                                                <input type="radio" name="userType" value="admin" class="custom-radio" required>&nbsp;admin |
                                                <input type="radio" name="userType" value="manager" class="custom-radio" required>&nbsp;manager |
                                                <input type="radio" name="userType" value="ceo" class="custom-radio" required>&nbsp;ceo |
                                            </div>
                                        </div>


                                        <div class="form-group">                                                
                                            <div class="form-group form-primary">                                                
                                            <input type="submit" name="login" class="btn btn-danger btn-block">
                                            </div>
                                        </div>



                                       
                                    

                                        <h5 class="text-danger text-center"><?php echo $msg; ?></h5>
                                    
                                          
                                        
                                
                                </form>
        
                                <!-- end of form -->
                        </div>
                        <!-- end of col-sm-12 -->

                        <br><br>
                                <?php 
        if (isset($message))
            {
        echo '<p class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$message."</p>";

        }
        ?>
        </p>

        <p>


        <?php 
        if (isset($erreurs))
        {
        echo '<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$erreurs."</p>";

        }
        ?>

                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of container-fluid -->
            </section>
     </div>
             
    </div>


<?php include('footer.php'); ?>