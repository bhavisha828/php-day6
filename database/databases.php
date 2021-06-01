<?php
$connection = mysqli_connect("localhost","root","","tbl_student");

if ($_POST) {
  
  $Name = $_POST['txt1'];
  $Gender = $_POST['txt2'];
  $Date_of_Birth = $_POST['txt3'];
  $Email = $_POST['txt4'];
  $Mobileno = $_POST['txt5'];
  $Address = $_POST['txt6'];
  $Area = $_POST['txt7'];
  $Pincode = $_POST['txt8'];
  $Bloodgroup = $_POST['txt9'];
  $Feedback = $_POST['txt10'];
  $Password = $_POST['txt11'];
  

  $q = mysqli_query($connection, "insert_into_std (Name, Gender, Date_of_Birth, Email, Mobileno, Address, Area, Pincode, Bloodgroup, Feedback, Password) values('{$Name}','{$Gender}','{$Date_of_Birth}','{$Email}','{$Mobileno}','{$Address}','{$Area}','{$Pincode}','{$Bloodgroup}','{$Feedback}','{$Password}')") or die(mysqli_error($connection));
  if ($q) {
    echo "<script>alert('record added')</script>";
  }
}

?>

<html>
<body>
<tr></tr>
<form method="post" >
    
       <table>
        
       <tr> <td>Name : <input type="text" name="txt1"><br/></td></tr>
        <tr><td>Gender: <select name="txt2">
        <option>Male</option>
        <option>Female</option>
            </select></td></tr>
        <tr><td>Date_of_Birth : <input type="date" name="txt3"><br/></td></tr>
        <tr><td>Email : <input type="email" name="txt4"><br/></td></tr>
        <tr><td>Mobileno : <input type="number" name="txt5"><br/></td></tr>
        <tr><td>Address : <input type="textarea" name="txt6"><br/></td></tr>
        <tr><td>Area : <input list="lang" name="txt7">
          <datalist id="lang">
          <option value="Demai">demai</option>     
          <option value="Ahemdabad">ahemdabad</option>
          <option value="Vadodara">vadodara</option>
          <option value="Surat">surat</option>
          </datalist> <br/></td></tr>
        <tr><td>Pincode : <input type="pincode" name="txt8"></td></tr>
        <tr><td>Bloodgroup : <input type="text" name="txt9"></td></tr>
        <tr><td>Feedback : <input type="textarea" name="txt10"></td></tr>
        <tr><td>Password : <input type="password" name="txt11"><br/></td></tr>
        <tr><td>Submit : <input type="submit"></td></tr>
       </table>



  </form>
</body></html>