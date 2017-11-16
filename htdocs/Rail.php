<!doctype>
<html>
<head><title>Railway Reservation</title>
<style>
        .container{
            position:relative;
            width:470;
            height:450px;
            border-radius:5px;
            border:1px solid red;
            overflow:hidden;
        }
    </style>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =today 
    
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>
<body bgcolor="white" onload="startTime()">
 <?php
         $from=$to=$date=$Class=$ticket="";
 ?>
<table>
<tr>
     <td rowspan="2"><image src="indr1.gif" width="50" height="50"></td>
     <td colspan="3" style="color:blue;"><font size="6"><i>Indian Railway Catering and Tourism Corporation Limited</i></font></td>
     <td colspan="1"></td>
</tr>
<tr bgcolor="white">
    <td text-align="left" cellpadding="0"><font size="1"><b>A Government of India Enterprise</b></font></td>
    <td colspan="2"></td>
    <td><font size="2" style="color:brown;"><i>Welcome to Indian Railway</i></font></td>
</tr>
<tr bgcolor="yellow">
    <td></td>
    <td colspan=""><p id="txt"></p></td><td colspan="4"><span style="display:inline-block; width:300;"></span>
       <a href="Rail.php" ><i>HOME |</i></a><span style="display:inline-block; width:25;"></span>
       <a href="Contact Us.html" target="_blank"><i>Contact Us |</i></a><span style="display:inline-block; width:25;"></span>
       <a href="logIn.php"><i>Sign Out</i></a>
    </td>
    <td>
<tr bgcolor="seashell">
<td><h1>
<table width="150" height="40" border="2" bordercolor="blue">
  <tr><td style="color:tomato;"><i>Services Provided By IRCTC<i></td></tr><tr></tr>
  <tr><td style="color:green;"><a href="user.php" target="_blank" style="color:green;">User Profile</a></td></tr><tr rowspan="2"></tr>
  <tr><td><a href="http://www.air.irctc.co.in/IndianRailways/" target="_blank">BOOK FLIGHT with IRCTC</a></td></tr>
  <tr></tr>
  <tr><td><a href="http://contents.irctc.co.in/en/IRCTC_andriod_App.html" target="_blank">IRCTC Official App</a></td></tr><tr></tr>
  <tr><td><a href="http://contents.irctc.co.in/en/irctc-advertisement.html" target="_blank"><i>Advertise With Us</i></a></td></tr><tr></tr>
  <tr><td><a href="http://contents.irctc.co.in/en/termsncondftr.html" target="_blank"><i>Train/Coach Booking(FTR)</i></a></td></tr>
</table></h1>
</td>
<td style="color:tomato;">
 <table bgcolor="Aquamarine" width="400" height="475">
 <tr><th colspan="2" bgcolor="LightCyan" style="color:DarkBlue;"><b>Search Trains</b>
      <form method = "post" action="Rail1.php">
         </th></tr>
            <tr>
               <td>From:</td> 
               <td><select name = "From" required>
                <option value="NZM">Hazrat Nizamuddin</option>
                <option value="NDLS">New Delhi Railway Station</option>
                <option value="DEC">Delhi Cantt</option>
                <option value="DEE">Delhi Sarai Rohilla</option>
                <option value="LTT">Lokmanya Tilak Terminus Station</option>
                <option value="CSMT">Chhatrapati Shahu Maharaj Terminus </option>
                <option value="PNVL">Panvel Railway Station </option>
                <option value="BCT">Mumbai Central</option>
                <option value="BDTS">Bandra Terminus Station </option>
                <option value="BSR">Vasai Road Railway Station</option>
               </td>
            </tr>
            
            <tr>
               <td>To:</td>
               <td> <select name = "To" required>
                <option value="NZM">Hazrat Nizamuddin</option>
                <option value="NDLS">New Delhi Railway Station</option>
                <option value="DEC">Delhi Cantt</option>
                <option value="DEE">Delhi Sarai Rohilla</option>
                <option value="LTT">Lokmanya Tilak Terminus Station</option>
                <option value="CSMT">Chhatrapati Shahu Maharaj Terminus</option>
                <option value="PNVL">Panvel Railway Station </option>
                <option value="BCT">Mumbai Central</option>
                <option value="BDTS">Bandra Terminus Station </option>
                <option value="BSR">Vasai Road Railway Station</option>
            </tr>
            
            <tr>
               <td>Date:</td>
               <td><input type ="date" name ="date" min="2017-11-16" required></td>
            </tr>
            <tr><td>Day:</td>
                <td><select name ="day" required>
                <option value="mon">Monday</option>
                <option value="tue">Tuesday</option>
                <option value="wed">Wednesday</option>
                <option value="thu">Thursday</option>
                <option value="fri">Friday</option>
                <option value="sat">Saturday</option>
                <option value="sun">Sunday</option></td>
            </tr>
            <tr>
       
               <td>Class</td>
               <td><select name = "Class">
                     <option value = "2S">Second Class(2S)</option>
                     <option value = "SL">Sleeper Class(SL)</option>
                     <option value = "3AC">Three Tier Air Conditioned Class(3AC)</option>
                     <option value = "2AC">Two Tier Air Conditioned Class(2AC)</option>
                     <option value = "1AC">First Class Air Conditioned(1AC)</option>
                  </select></td>
            </tr>
            
            <tr>
               <td>Ticket Type:</td>
               <td>
                  <input type = "radio" name = "ticket" value = "i-ticket">i-ticket
                  <input type = "radio" name = "ticket" value = "e-ticket">e-ticket
               </td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "search" value = "Search"><input type = "reset" name = "reset" value = "Reset"> 
               </td>
            </tr>
         </table>
      </form>
 </td>
<td></td>
<td rowspan="5"><font size="4" style="color:green"><i>Sawach Rail-Sawach Bharat </br>Clean & Green India</i></font>
  <div id="imgGallary" class="container">
   <img src="sawach3.jpg" alt="" width="470" height="450" />
    <img src="sawach4.jpg" alt="" width="470" height="450" />
    <img src="Sawch1.jpeg" alt="" width="470" height="450" />
    <img src="sawach5.jpg" alt="" width="470" height="450" />
</div>
<script>
(function(){
        var imgLen = document.getElementById('imgGallary');
        var images = imgLen.getElementsByTagName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },4000);
        }
})();
</script>
</td>
<td rowspan="5">
      <table><tr><td style="color:red;">
      <h2> <b>IMPORTANT INFORMATION</b><h2></td>
      </tr>
      <tr><td style="color:brown;" bgcolor="seashell"><h3><i><p>Passengers are advised not to carry inflammable/dangerous/explosive 
      articles as part of their luggage and also to desist from smoking in the trains.</p><p>Dear Customer, to help improve the quality 
      of service, you are requested to please sign-out your account before closing the web.</p><p>Always keep correct information 
      in your profile, garbage/junk values in profile may lead to deactivation of your account.</p><h3></td>
      </tr></table>
<tr><th height="25" colspan="3"></th>
</tr></tr><tr></tr><tr></tr><tr></tr>
<tr><th height="25" colspan="5"><marquee><font style="color:green;height:75px;" height="75"><i>If a country is to be corruption free and become a nation of beautiful minds, I strongly feel there are three key societal members who can make a difference. They are the father, the mother and the teacher.<u>Dr.APJ Abdul Kalam</u></i></font></marquee></th>
</tr>
</table>
</body>
</html>
