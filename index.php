<?php include('header.php'); ?>

    
<div class="container">
     <div class="jumbotron">
            <section class="login-block">
                <!-- Container-fluid starts -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Authentication card start -->

                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h4 class="text-center">Welcome to Your IT Support System</h4>
                                </div>
                             </div>

                             <br><br>

                                <form action="pagedeux.php" method="POST">
                                    <div class="col-md-2">
                                    <div class="form-group">                                                
                                    <div class="form-group form-primary">  
                                        <select name="" id="">
                                            <option value="Mr">Mr</option>
                                            <option value="Mlle">Mlle</option>
                                            <option value="Mme">Mme</option>
                                        </select>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="col-md-2">
                                    <input type="text" class="form-control" name="username" placeholder="firstname" required="required">
                                    </div>
                                    <div class="col-md-2">
                                    <input type="text" class="form-control" name="username" placeholder="lastname" required="required">
                                    </div>

                                    <div class="col-md-2">
                                        <select name="" id="">
                                            <option value="admin">admin</option>
                                            <option value="manager">manager</option>
                                            <option value="ceo">ceo</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                    <div class="form-group form-primary">                                                
                                    <input type="submit" class="btn btn-danger btn-block">
                                    </div>
                                    </div>


                                </form>

                         
                                
                            
        
                                <!-- end of form -->
                        </div>
                        <!-- end of col-sm-12 -->

                      
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of container-fluid -->
            </section>
     </div>
             
    </div>




    <?php include('footer.php'); ?>
