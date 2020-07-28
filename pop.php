

<!DOCTYPE html>
<html>
    <head>
        <title>Blue-header-opt-name-email-vert-inline-rect</title>
        <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400;700&display=swap" rel="stylesheet">
        <style type="text/css">
            body{
            font-family: 'HelveticaNeue','Heebo', sans-serif;
            margin-bottom: 60px;
            }
            nav{
            background-color: #00A2FF;
            height: 50px;
            }
            footer{
            background-color: #c5eaff;
            margin-top: 10px;
            font-size: 12px;
            font-weight: lighter;
            line-height: 20px;
            }
            div.video-box{
            width: 608px;
            height: 342px;
            margin-bottom: 25px;	
            }
            video{
            border: 2px solid #e1ecf4;
            width: 100%;
            height: 100%;
            }
            div.form{
            width: 560px;
            border-radius: 7px;	
            border: 1px solid #0f80c4;
            background-color: white;
            }
            div.form-body{
            width: 100%; 
            padding: 5px 15px;
            font-size: 18px;
            font-weight: lighter;
            background-color: #bbe6ff;
            border-bottom-right-radius: 7px;
            border-bottom-left-radius: 7px;
            }
            div.form-bottom-text{
            font-size: 10px;
            margin-top: 10px;
            max-width: 70%;
            font-weight: lighter;
            }
            input[type=text]{
            width: 100%;
            padding: 7px;
            margin: 4px 0px;
            font-size: 14px;
            border: 1px solid #999999;
            }

  input::-webkit-input-placeholder  {
    color: black; opacity:1;
         font-style: italic;
         font-weight: 300;
         text-align: center;
}
input:-moz-placeholder {
    color: black; opacity:1;
         font-style: italic;
         font-weight: 300;
         text-align: center;
}
input::-moz-placeholder {
    color: black; opacity:1;
         font-style: italic;
         font-weight: 300;
         text-align: center;
}
input:-ms-input-placeholder {
    color: black; opacity:1;
         font-style: italic;
         font-weight: 300;
         text-align: center;
}
            input[type=submit]{
            width: 100%;
            padding: 11px 4px;
            border-radius: 10px;
            background-image: linear-gradient(to top, #03a3ff, #20abff, #34b2ff, #44b9ff, #54c0ff);
            border: 1px solid #0f80c4;		
            color: white;
            margin-top: 10px;
            font-weight: bold;
            font-size: 30px;
            }
            div.form-heading{
            max-width: 80%;
            font-weight: 400;
            font-size: 18px;
            padding: 6px 0px;
            }
            div.wrapper{
            margin-top: 50px;
            }
            h2 {
            margin-top: 75px;
            margin-bottom: 25px;
            max-width: 588px;
            font-size: 30px;
            font-weight: bold;
            }
            a.navbar-brand{
            margin-left: 40px;
            font-style: italic;
            }
            html {
            position: relative;
            min-height: 100%;
            }
            .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 0px; 
            }
            .footer a {
            margin: 0px 8px;
            color: black;
            }
            .footer a:hover{
            text-decoration: none;
            border-bottom: 1px dotted black;
            }
            div#pop-form{
            z-index: 1;
            position: fixed;
            top:50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            }
            .video-box button
            {
            width: 100%;
            padding: 14px 0px;
            border-radius: 10px;
            background-image: linear-gradient(to top, #03a3ff, #20abff, #34b2ff, #44b9ff, #54c0ff);
            border: 1px solid #0f80c4;		
            color: white;
            font-weight: bold;
            font-size: 24px;
            }
            a.close
            {   
            margin: -18px;
            opacity: 1;
            font-size: 35px;
            color: #2590d2;        
		    color: #2590d2; 
		    background: radial-gradient(white 50%, transparent 50%);    
			}		            
		    a.close:hover{
            opacity: 1 !important;
            color: #2590d2 !important;
            cursor: pointer;
            }
            
            @media (max-width: 767px) {		
            nav {
            height: 60px;
            }
            div.form {
            width: 450px;
            }
            div.form-body{
            width: 448px;
            }
            div.video-box{
            max-width: 95%;
            height: 10%;
            margin-bottom: 8px;	
            }
            video{
            max-width: 100%;
            height: 100%;
            }
            h2{
            font-size: 20px;
            margin-top: 72px;
            margin-bottom: 12px;
            }
            div.form-bottom-text{
            max-width: 90%;
            }
            div.form-heading{
            font-size: 12px;
            }
            a.close{
            margin:-12px;
            font-size: 25px;
            cursor: pointer;
            }
            input[type=submit]{
            font-size: 18px;
            padding: 12px 0;
            }
            .wrapper button
            {
            margin-top: 0px;
            max-width: 100%;
            font-size: 20px;
            }
            div.form-heading{
            max-width: 95%;
            }
            a.navbar-brand{ 
            margin-left: 0;
            }
            footer{
            font-size: 11px;
            }
            }
            @media (max-width: 526px) {
            div.form {
            width: 380px;
            }
            div.form-body{
            width: 378px;
            }
            }
            #progress {
            height: 28px;
            width: 95%;
            border-radius: 5px;
            border : 1px solid #999999;
            padding: 2px;
            background-image: linear-gradient(to top, #dbdbdb, #e3e3e3, #eaeaea, #f2f2f2, #fafafa);
            margin: 10px 4px;
            }
            #progress:after {
            content: 'Progress 60% Complete';  /* Report progress % here*/
            display: block;
            background-image: linear-gradient(to top, #077bbf, #208bce, #319adc, #40abeb, #4fbbf9);
            width: 60%;  /* Set progress % here*/
            height: 100%;
            border-radius: 5px;
            border: 1px solid #929292;
            float: left;
            color: white;
            text-align: center;
            font-style: italic;
            font-size: 14px;
            }
        </style>
    </head>
    <body>
        <!--Header-->
        <!--Header-->
        <!--Header-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top header-theme-blue" >
            <a class="navbar-brand" href="index.html">Logo here</a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <!--Header-->
        <!--Header-->
        <!--Header-->
        <!--video-->
        <!--video-->
        <!--video-->
        <center>
        <div class="wrapper">
            <div class="container">
                <h2>“This is the most exciting, jaw dropping headline every written in the history of headlines!”</h2>
                <div class="video-box">
                    <video controls="controls" >
                        <source src="a.mp4">
                    </video>
                    <button onclick="document.getElementById('pop-form').style.display='block'; ">Secure My Seat!</button>
                </div>
            </div>
            <!--video-->
            <!--video-->
            <!--video-->
            <!--inlin-form-->
            <!--inlin-form-->
            <!--inlin-form-->
            <div class="container" style="display: none;" id="pop-form">
                <div class="form">
                    <a class="close" onclick="document.getElementById('pop-form').style.display='none'" >
                    <i class="fa fa-times-circle" aria-hidden="true"></i></a>
                    <div id="progress">
                    </div>
                    <div class="form-body">
                        <form>
                            <div class="form-heading">
                                Please Enter Your First Name & Email Address Below To Continue:
                            </div>
                            <input type="text" placeholder="My first name is...." name="first_name">
                            <input type="text" placeholder="My best email is...." name="email">
                            <input type="submit"  value="Get Instant Access!">
                        </form>
                        <div class="form-bottom-text">
                            *We will never sell, share or distribute your information. You can unsubscribe at any time.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--inlin-form-->
        <!--inlin-form-->
        <!--inlin-form-->
        <!--footer-->
        <!--footer-->
        <!--footer-->
        <div class="footer">
            <!-- Footer -->
            <footer class="page-footer font-small blue pt-4">
                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">
                    <center>
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-4 mt-md-0 mt-3">
                            <!-- Content -->
                            <p>This site is not a part of the Facebook website or Facebook Inc.  Additionally, This site is NOT endorsed by Facebook in any way. FACEBOOK is a trademark of FACEBOOK, Inc.</p>
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none pb-3">
                        <!-- Grid column -->
                        <div class="col-md-4 mb-md-0 mb-3">
                            <ul class="list-unstyled">
                                Copyright © 2011 - 2020 
                                <li>
                                    <a href="YourWebsite.com" target="_blank">YourWebsite.com™.</a>
                                </li>
                                All Rights Reserved.
                                <li>
                                    <a href="#!" target="_blank">Privacy Policy</a>
                                    <a href="#!" target="_blank">Terms & Conditions</a>
                                    <a href="#!" target="_blank">DMCA</a>
                                    <a href="#!" target="_blank">Earnings Disclaimer</a>
                                </li>
                                <li>
                                    <a href="#!">GDPR Compliance</a>
                                    <a href="#!">Data Protection</a>
                                    <a href="#!">We Use Cookies</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none pb-3">
                        <!-- Grid column -->
                        <div class="col-md-4 mb-md-0 mb-3">
                            <!-- Links -->
                            <ul class="list-unstyled">
                                Contact:
                                <li>
                                    <a href="mailto:hello@YourWebsite.com">hello@yourwebsite.com</a>
                                </li>
                                <li>
                                    <a href="tel:+995555555555">555-555-5555</a>
                                </li>
                                <li>
                                    Your street address #555, City, State, Zipcode, Country
                                </li>
                            </ul>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
                <!-- Footer Links -->
            </footer>
            <!-- Footer -->
        </div>
        <!--footer-->
        <!--footer-->
        <!--footer-->
    </body>
</html>

