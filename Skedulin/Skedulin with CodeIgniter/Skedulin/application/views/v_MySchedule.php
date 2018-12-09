<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
	
	<title> My Skedul</title>
	
	<!-- icon on title -->
    <link rel="shorcut icon" href="<?php echo base_url() ?>assets/img/HomePage/Logo.png">
    
    <!-- google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">
    
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/bootstrap.min.css">
    
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate/animate.css">
</head>        
<body>
	
	<div class="schedule">
	    <div class="row">
            <div class="profile-pic-container col-2 col-sm-1 wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <img class="profile-pic " src="<?php echo base_url() ?>assets/img/HomePage/Component%204.png" alt="" onclick="openHome()">
            </div>
            <div class="name-container col-1 wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h5 style="font-size: 35px;>"<?php echo $this->session->userdata("username");?></h5>
                <a href="<?php echo base_url('index.php/login/logout'); ?>"style="color:rgb(169,169,169)">Logout</a>
            </div>
	        <div class="col-6 col-sm-8 text-center wow animated zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
                <img class="home-title" src="<?php echo base_url() ?>assets/img/HomePage/Logo.png" alt="">
                <img class="home-title" src="<?php echo base_url() ?>assets/img/HomePage/Header.png" alt="">
                <br><br>
                <!-- <div>   
                    <img class="schedule-logo img-fluid"src="assets/img/MySchedule/schedule-logo.png" alt="">
                    <span class="schedule-title ">My Schedule</span>
                </div> -->
                <img class="schedule-title img-fluid" src="<?php echo base_url() ?>assets/img/MySchedule/mySchedule-title.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="notif-button-container col-2 col-sm-1 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
	            <img class="notification-button" src="<?php echo base_url() ?>assets/img/HomePage/Component%203.png" alt="">
	        </div>
	   </div>
	   
        <div class="add-event-container">
            <div class="row">
                <div class="col-12 col-l-3 col-md-6 col-sm-6 add-event">    
                    <img class="add-logo img-fluid" src="<?php echo base_url() ?>assets/img/MySchedule/add.png" alt="">
                    <img class="add-text img-fluid" src="<?php echo base_url() ?>assets/img/MySchedule/Add%20Event.png" alt="">
                </div>
            </div>
            
            <div class="all-event-container">
                <div class="row event-container-row">
                   
                   <!--               EVENT 1             -->
                    <div class="col-6 col-md-3 col-sm-4 event-container-box">
                       
                        
                        <div class="event-container">
                            <div class="row event-title-container1">
                                <span class="event-title">Rapat Panti</span>
                            </div>
                            <div class="row event-content justify-content-center">
                                <div class="col-12 text-center event-tanggal">10 Oktober 2018</div>
                                <div class="col-12 text-center event-jam">18.00 - 21.00</div>
                                <div class="row person-nama-container">
                                       <table class="table-person-nama">
                                            <tbody>
                                                <tr>
                                                    <td> Dimas </td>
                                                    <td> Risyad </td>
                                                    <td> Harris </td>
                                                    <td> Putratama </td>
                                                    <td> Satria </td>
                                                </tr>
                                           </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--               EVENT 2             -->
                    <div class="col-6 col-md-3 col-sm-4 event-container-box">
                       
                        
                        <div class="event-container">
                            <div class="row event-title-container3">
                                <span class="event-title">Rapat Panti</span>
                            </div>
                            <div class="row event-content justify-content-center">
                                <div class="col-12 text-center event-tanggal">10 Oktober 2018</div>
                                <div class="col-12 text-center event-jam">18.00 - 21.00</div>
                                <div class="row person-nama-container">
                                       <table class="table-person-nama">
                                            <tbody>
                                                <tr>
                                                    <td> Dimas </td>
                                                    <td> Risyad </td>
                                                    <td> Harris </td>
                                                    <td> Putratama </td>
                                                    <td> Satria </td>
                                                </tr>
                                           </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!--               EVENT 3             -->
                    <div class="col-6 col-md-3 col-sm-4 event-container-box">
                       
                        
                        <div class="event-container">
                            <div class="row event-title-container2">
                                <span class="event-title">Rapat Panti</span>
                            </div>
                            <div class="row event-content justify-content-center">
                                <div class="col-12 text-center event-tanggal">10 Oktober 2018</div>
                                <div class="col-12 text-center event-jam">18.00 - 21.00</div>
                                <div class="row person-nama-container">
                                       <table class="table-person-nama">
                                            <tbody>
                                                <tr>
                                                    <td> Dimas </td>
                                                    <td> Risyad </td>
                                                    <td> Harris </td>
                                                    <td> Putratama </td>
                                                    <td> Satria </td>
                                                </tr>
                                           </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!--               EVENT 4            -->
                    <div class="col-6 col-md-3 col-sm-4 event-container-box">
                       
                        
                        <div class="event-container">
                            <div class="row event-title-container3">
                                <span class="event-title">Rapat Panti</span>
                            </div>
                            <div class="row event-content justify-content-center">
                                <div class="col-12 text-center event-tanggal">10 Oktober 2018</div>
                                <div class="col-12 text-center event-jam">18.00 - 21.00</div>
                                <div class="row person-nama-container">
                                       <table class="table-person-nama">
                                            <tbody>
                                                <tr>
                                                    <td> Dimas </td>
                                                    <td> Risyad </td>
                                                    <td> Harris </td>
                                                    <td> Putratama </td>
                                                    <td> Satria </td>
                                                </tr>
                                           </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!--               EVENT 5            -->
                    <div class="col-6 col-md-3 col-sm-4 event-container-box">
                       
                        
                        <div class="event-container">
                            <div class="row event-title-container4">
                                <span class="event-title">Rapat Panti</span>
                            </div>
                            <div class="row event-content justify-content-center">
                                <div class="col-12 text-center event-tanggal">10 Oktober 2018</div>
                                <div class="col-12 text-center event-jam">18.00 - 21.00</div>
                                <div class="row person-nama-container">
                                       <table class="table-person-nama">
                                            <tbody>
                                                <tr>
                                                    <td> Dimas </td>
                                                    <td> Risyad </td>
                                                    <td> Harris </td>
                                                    <td> Putratama </td>
                                                    <td> Satria </td>
                                                </tr>
                                           </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!--               EVENT 6             -->
                    <div class="col-6 col-md-3 col-sm-4 event-container-box">
                       
                        
                        <div class="event-container">
                            <div class="row event-title-container2">
                                <span class="event-title">Rapat Panti</span>
                            </div>
                            <div class="row event-content justify-content-center">
                                <div class="col-12 text-center event-tanggal">10 Oktober 2018</div>
                                <div class="col-12 text-center event-jam">18.00 - 21.00</div>
                                <div class="row person-nama-container">
                                       <table class="table-person-nama">
                                            <tbody>
                                                <tr>
                                                    <td> Dimas </td>
                                                    <td> Risyad </td>
                                                    <td> Harris </td>
                                                    <td> Putratama </td>
                                                    <td> Satria </td>
                                                </tr>
                                           </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!--               EVENT 7             -->
                    <div class="col-6 col-md-3 col-sm-4 event-container-box">
                       
                        
                        <div class="event-container">
                            <div class="row event-title-container4">
                                <span class="event-title">Rapat Panti</span>
                            </div>
                            <div class="row event-content justify-content-center">
                                <div class="col-12 text-center event-tanggal">10 Oktober 2018</div>
                                <div class="col-12 text-center event-jam">18.00 - 21.00</div>
                                <div class="row person-nama-container">
                                       <table class="table-person-nama">
                                            <tbody>
                                                <tr>
                                                    <td> Dimas </td>
                                                    <td> Risyad </td>
                                                    <td> Harris </td>
                                                    <td> Putratama </td>
                                                    <td> Satria </td>
                                                </tr>
                                           </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
	</div>
    <script>
        //Open Home Page
        function openHome() {
            window.location.href = "<?php echo base_url('index.php/Home') ?>";
        }
        
    </script>
	
	<!-- JQuery -->
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    
    <!-- bootstrap JS -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- wow JS -->
    <script src="<?php echo base_url() ?>assets/js/wow/wow.min.js"></script>

    <!-- custom JS -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>

</body>
</html>