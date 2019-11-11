<!DOCTYPE html>
 <html>
      <head>
           <title>Webslesson Tutorial | Stylish Switch Button using CSS3 and Jquery</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <style>
           .wrapper{
                width:500px;
                margin:0 auto;
           }
           .switch{
                width:200px;
                height:100px;
                background:#E5E5E5;
                z-index:0;
                margin:0;
                padding:0;
                appearance:none;
                border:none;
                cursor:pointer;
                position:relative;
                border-radius:100px;
           }
           .switch:before{
                content: ' ';
                position:absolute;
                left:5px;
                top:5px;
                width:190px;
                height:90px;
                background:#FFFFFF;
                z-index:1;
                border-radius:95px;
           }
           .switch:after{
                content:' ';
                width:88px;
                height:88px;
                border-radius:86px;
                z-index:2;
                background:#FFFFFF;
                position:absolute;
                transition-duration:500ms;
                top:6px;
                left:6px;
                box-shadow:0 2px 5px #999999;
           }
           .switchOn, .switchOn:before{
                background:#4cd964; !important;
           }
           .switchOn:after{
                left:105px;
           }
           </style>
           <script>
           $(document).ready(function(){
                $('.switch').click(function(){
                     $(this).toggleClass("switchOn");
                });
           });
           </script>
      </head>
      <body>
           <div class="wrapper" align="center">
                <br />
                <label>
                     <input type="checkbox" name="switch" class="checkbox" />
                     <div class="switch"></div>
                </label>
                <br />
           </div>
      </body>
 </html>
