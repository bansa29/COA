<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body bgcolor="SeaShell">
<?php
$From=$_POST['From'];
$To=$_POST['To'];
$date=$_POST['date'];
$day=$_POST['day'];
$Class=$_POST['Class'];
$ticket=$_POST['ticket'];
$link = mysqli_connect("localhost", "root", "", "User");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql="SELECT * FROM RailRes";
$result = $link->query($sql);
if ($result->num_rows > 0)
{  $s=0;
    echo "<table><tr><th>Train Number</th><th>Train Name</th><th>Departure Time</th><th>Arrival Time</th><th>Total Distance</th><th>Total Duration</th><th>$day</th><th>$Class</th></tr>";
    while($row = $result->fetch_assoc())
    {
        if(($row['From']==$From and $row['To']==$To)and($row[$day]=='y' and $row[$Class]=='y'))      
      {
             $s=$s+1;
             echo "<tr><td>" . $row["train_no"]. "</td><td>" . $row["train_name"]."</td><td>".$row["dep_time"]."</td><td>".$row["arrival_time"].
                  "</td><td>".$row["total_distance"]."</td><td>".$row["total_time"]."</td><td>". $row[$day]."</td><td>" .$row[$Class]."</td></tr><br>";
      }
    }
echo"</table></br>";
if($s==0)
{
    echo"  <script>
             window.alert('No Tain Available');
          </script> "    ;
        header('refresh:0.0; url=Rail.php');
}
echo"</table></br>";
} 
else 
{
    echo "0 results";
}
$link->close();
?>
<h1 style="color:green">Book Ticket</h1>
<form method="post" action="Rail2.php">
     Enter Train Number:<input type='text' name="train_no" value="" required></br>
     Date: <input type="date" name ="date" required></br>
     Day:<select name ="day" required>
            <option value="mon">Monday</option>
            <option value="tue">Tuesday</option>
            <option value="wed">Wednesday</option>
            <option value="thu">Thursday</option>
            <option value="fri">Friday</option>
            <option value="sat">Saturday</option>
            <option value="sun">Sunday</option>
            </select>
      </br>
      Quota:<input type="radio" name="quota" value="gen">Genral
            <input type="radio" name="quota" value="ladies">Ladies
      </br>
      <table border="1">
      <tr>
         <th>S.NO.</th>
         <th>Name</th>
         <th>Age</th>
         <th>Sex</th>
         <th>Berth Preference</th>
         <th>Senior Citizen</th>
      </tr>
      <tr>
          <td>1.</td>
          <td><input type="text" name="data[name1][]" value="NULL"></td>
          <td><input type="number" name="data1[age][]" ></td>
          <td><input list="gender" name="data2[sex][]" >
              <datalist id="gender">
              <option value="Male">
              <option value="Female">
              <option value="other">
              </datalist></td>
          <td><input list="berth" name="data3[berth][]" ><datalist id="berth">
              <option value="lower"><option value="side_lower"><option value="uper"><option value="side_uper"></datalist></td>
           <td><input type="radio" name="s_citi"></td>
      </tr>
       <tr>
          <td>2.</td>
          <td><input type="text" name="data[name1][]" value="NULL"></td>
          <td><input type="number" name="data1[age][]" ></td>
          <td><input list="gender" name="data2[sex][]" >
              <datalist id="gender">
              <option value="Male">
              <option value="Female">
              <option value="other">
              </datalist></td>
          <td><input list="berth" name="data3[berth][]" ><datalist id="berth">
              <option value="lower"><option value="side_lower"><option value="uper"><option value="side_uper"></datalist></td>
           <td><input type="radio" name="s_citi"></td>
      </tr>
        <tr>
          <td>3.</td>
          <td><input type="text" name="data[name1][]" value="NULL"></td>
          <td><input type="number" name="data1[age][]" ></td>
          <td><input list="gender" name="data2[sex][]" >
              <datalist id="gender">
              <option value="Male">
              <option value="Female">
              <option value="other">
              </datalist></td>
          <td><input list="berth" name="data3[berth][]" ><datalist id="berth">
              <option value="lower"><option value="side_lower"><option value="uper"><option value="side_uper"></datalist></td>
           <td><input type="radio" name="s_citi"></td>
      </tr>
       <tr>
          <td>4.</td>
          <td><input type="text" name="data[name1][]" value="NULL"></td>
          <td><input type="number" name="data1[age][]" ></td>
          <td><input list="gender" name="data2[sex][]" >
              <datalist id="gender">
              <option value="Male">
              <option value="Female">
              <option value="other">
              </datalist></td>
          <td><input list="berth" name="data3[berth][]" ><datalist id="berth">
              <option value="lower"><option value="side_lower"><option value="uper"><option value="side_uper"></datalist></td>
           <td><input type="radio" name="s_citi"></td>
      </tr>
       <tr>
          <td>5.</td>
          <td><input type="text" name="data[name1][]" value="NULL"></td>
          <td><input type="number" name="data1[age][]" ></td>
          <td><input list="gender" name="data2[sex][]" >
              <datalist id="gender">
              <option value="Male">
              <option value="Female">
              <option value="other">
              </datalist></td>
          <td><input list="berth" name="data3[berth][]" ><datalist id="berth">
              <option value="lower"><option value="side_lower"><option value="uper"><option value="side_uper"></datalist></td>
           <td><input type="radio" name="s_citi"></td>
      </tr>
       <tr>
          <td>6.</td>
          <td><input type="text" name="data[name1][]" value="NULL"></td>
          <td><input type="number" name="data1[age][]" ></td>
          <td><input list="gender" name="data2[sex][]" >
              <datalist id="gender">
              <option value="Male">
              <option value="Female">
              <option value="other">
              </datalist></td>
          <td><input list="berth" name="data3[berth][]" ><datalist id="berth">
              <option value="lower"><option value="side_lower"><option value="uper"><option value="side_uper"></datalist></td>
           <td><input type="radio" name="s_citi"></td>
      </tr>
      </table>
      <input type="radio" name="auto_upg">Consider Auto Upgradation</br>
     <input type='submit' value="Book Now">

</form>
</body>
</html>
