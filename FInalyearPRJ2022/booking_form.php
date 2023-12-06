
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE TICKET BOOKING SYSTEM FOR PARKS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/booking_ui.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
 
</head>
<body>
 
    <div class="modal_booking">
        <div class="modal_cobtainer">
            <div class="modal_content">
                <h3>BOOK NOW</h3>
                <p>Fill the required information</p>
                <div class="park_name" style="color: red; font-style: italic;">
                <h4><?php echo "$p_name" ?></h4>
                </div>
                <div class="booking_form">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="api/ticket_booking.php" method="post">
                                <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
                                <!--Card-->
                                <div class="card shadow mb-5 bg-white rounded book-form">
                                    <!--Card-Body-->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- <input type="text" name="p_name" class="browser-default custom-select mb-4" id="p_name" value="<?php echo "$p_name"?>" disabled> -->
                                            
                                             <select name="p_name" class="browser-default custom-select mb-4" required>
                                                <option value="<?php echo "$p_name" ?>"><?php echo "$p_name" ?></option>
                                             </select>
                                            </div>
                                        </div>
                                               
                                        <!--Second Row-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="c_fname" class="form-control" placeholder="First name" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="c_lname" class="form-control" placeholder="Last name" required>
                                            </div>
                                        </div>
                                        <!--Fourth Row-->
                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <input type="date" name="b_date" class="form-control" placeholder="Enter date" required>
                                            </div>
                                            
                                            <!-- <div class="col-sm-6">
                                                <select name="t_members" class="browser-default custom-select mb-4" id="select" required>
                                                    <option value="" disabled="" selected="">Total Members</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div> -->
                                        </div>
                                        <!--Fifth Row-->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <select name="kids" class="browser-default custom-select mb-4" id="select" required>
                                                    <option value="" disabled="" selected="">Kids(0-14)</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select name="adults" class="browser-default custom-select mb-4" id="select" required>
                                                    <option value="" disabled="" selected="">Adults(15-64)</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select name="seniors" class="browser-default custom-select mb-4" id="select" required>
                                                    <option value="" disabled="" selected="">Seniors(65+)</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-book " >Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
                            

                                        
                        
                                            
                                    
                                    

                                                
                                
                                            
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

                                            
                                            

                                        


