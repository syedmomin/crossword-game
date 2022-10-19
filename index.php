<?php
$conn = mysqli_connect('localhost','u874471053_syedmomin','8:Y]|NI+d','u874471053_game');
session_start();
if(!isset($_SESSION['nam'])){
  header("location:index.php");
  die();
} 
if(isset($_POST['sid'])){
  mysqli_query($conn, "UPDATE login set timr1 = '".$_POST['sid']."' where mal = '".$_SESSION['nam']."'");
}

if(isset($_POST['fin'])){
  mysqli_query($conn, "UPDATE login set status1 = '".$_POST['fin']."'  where mal = '".$_SESSION['nam']."'");
}
$sql = mysqli_query($conn,"SELECT * FROM answer");
$ck  = mysqli_fetch_array($sql); 
if(isset($_POST['name']) == $ck['ur_nam']){
  mysqli_query($conn, "DELETE FROM answer where ur_nam = '".$_SESSION['nam']."' ;");
  mysqli_query($conn, "INSERT INTO  answer(ur_id,ur_nam,b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11,b12,b13,b14,b15,b16,b17,b18,b19,b20,b21,b22,b23,b24,b25,b26,b27,b28,b29,b30,b31,b32,
  b33,b34,b35,b36,b37,b38,b39,b40,b41,b42,b43,b44,b45,b46,b47,b48,b49,b50,b51,b52,b53,b54,b55,b56,b57,b58,b59,b60,b61,b62,b63,b64,b65,b66,
  b67,b68,b69,b70,b71,b72,b73,b74,b75,b76,b77,b78,b79,b80,b81,b82,b83,b84,b85,b86,b87,b88,b89,b90,b91,b92,b93,b94,b95,b96,b97,b98,b99)value(
  '".$_SESSION['id']."','".$_SESSION['nam']."','".@$_POST['b1']."','".@$_POST['b2']."','".@$_POST['b3']."','".@$_POST['b4']."','".@$_POST['b5']."','".@$_POST['b6']."','".@$_POST['b7']."','".@$_POST['b8']."','".@$_POST['b9']."','".@$_POST['b10']."','".@$_POST['b11']."','".@$_POST['b12']."','".@$_POST['b13']."','".@$_POST['b14']."','".@$_POST['b15']."','".@$_POST['b16']."','".@$_POST['b17']."','".@$_POST['b18']."','".@$_POST['b19']."','".@$_POST['b20']."','".@$_POST['b21']."','".@$_POST['b22']."','".@$_POST['b23']."','".@$_POST['b24']."','".@$_POST['b25']."','".@$_POST['b26']."','".@$_POST['b27']."','".@$_POST['b28']."',
  '".@$_POST['b29']."','".@$_POST['b30']."','".@$_POST['b31']."','".@$_POST['b32']."','".@$_POST['b33']."','".@$_POST['b34']."','".@$_POST['b35']."','".@$_POST['b36']."','".@$_POST['b37']."','".@$_POST['b38']."','".@$_POST['b39']."','".@$_POST['b40']."','".@$_POST['b41']."','".@$_POST['b42']."','".@$_POST['b43']."','".@$_POST['b44']."','".@$_POST['b45']."','".@$_POST['b46']."','".@$_POST['b47']."','".@$_POST['b48']."','".@$_POST['b49']."','".@$_POST['b50']."','".@$_POST['b51']."','".@$_POST['b52']."','".@$_POST['b53']."','".@$_POST['b54']."','".@$_POST['b55']."','".@$_POST['b56']."','".@$_POST['b57']."','".@$_POST['b58']."',
  '".@$_POST['b59']."','".@$_POST['b60']."','".@$_POST['b61']."','".@$_POST['b62']."','".@$_POST['b63']."','".@$_POST['b64']."','".@$_POST['b65']."','".@$_POST['b66']."','".@$_POST['b67']."','".@$_POST['b68']."','".@$_POST['b69']."','".@$_POST['b70']."','".@$_POST['b71']."','".@$_POST['b72']."','".@$_POST['b73']."','".@$_POST['b74']."','".@$_POST['b75']."','".@$_POST['b76']."','".@$_POST['b77']."','".@$_POST['b78']."','".@$_POST['b79']."','".@$_POST['b80']."','".@$_POST['b81']."','".@$_POST['b82']."','".@$_POST['b83']."','".@$_POST['b84']."','".@$_POST['b85']."','".@$_POST['b86']."','".@$_POST['b87']."','".@$_POST['b88']."',
  '".@$_POST['b89']."','".@$_POST['b90']."','".@$_POST['b91']."','".@$_POST['b92']."','".@$_POST['b93']."','".@$_POST['b94']."','".@$_POST['b95']."','".@$_POST['b96']."','".@$_POST['b97']."','".@$_POST['b98']."','".@$_POST['b99']."')");
  
}else{

//   mysqli_query($conn, "INSERT INTO  answer(ur_id,ur_nam,b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11,b12,b13,b14,b15,b16,b17,b18,b19,b20,b21,b22,b23,b24,b25,b26,b27,b28,b29,b30,b31,b32,
//   b33,b34,b35,b36,b37,b38,b39,b40,b41,b42,b43,b44,b45,b46,b47,b48,b49,b50,b51,b52,b53,b54,b55,b56,b57,b58,b59,b60,b61,b62,b63,b64,b65,b66,
//   b67,b68,b69,b70,b71,b72,b73,b74,b75,b76,b77,b78,b79,b80,b81,b82,b83,b84,b85,b86,b87,b88,b89,b90,b91,b92,b93,b94,b95,b96,b97,b98,b99)value(
//   '".$_SESSION['id']."','".$_SESSION['nam']."','".@$_POST['b1']."','".@$_POST['b2']."','".@$_POST['b3']."','".@$_POST['b4']."','".@$_POST['b5']."','".@$_POST['b6']."','".@$_POST['b7']."','".@$_POST['b8']."','".@$_POST['b9']."','".@$_POST['b10']."','".@$_POST['b11']."','".@$_POST['b12']."','".@$_POST['b13']."','".@$_POST['b14']."','".@$_POST['b15']."','".@$_POST['b16']."','".@$_POST['b17']."','".@$_POST['b18']."','".@$_POST['b19']."','".@$_POST['b20']."','".@$_POST['b21']."','".@$_POST['b22']."','".@$_POST['b23']."','".@$_POST['b24']."','".@$_POST['b25']."','".@$_POST['b26']."','".@$_POST['b27']."','".@$_POST['b28']."',
//   '".@$_POST['b29']."','".@$_POST['b30']."','".@$_POST['b31']."','".@$_POST['b32']."','".@$_POST['b33']."','".@$_POST['b34']."','".@$_POST['b35']."','".@$_POST['b36']."','".@$_POST['b37']."','".@$_POST['b38']."','".@$_POST['b39']."','".@$_POST['b40']."','".@$_POST['b41']."','".@$_POST['b42']."','".@$_POST['b43']."','".@$_POST['b44']."','".@$_POST['b45']."','".@$_POST['b46']."','".@$_POST['b47']."','".@$_POST['b48']."','".@$_POST['b49']."','".@$_POST['b50']."','".@$_POST['b51']."','".@$_POST['b52']."','".@$_POST['b53']."','".@$_POST['b54']."','".@$_POST['b55']."','".@$_POST['b56']."','".@$_POST['b57']."','".@$_POST['b58']."',
//   '".@$_POST['b59']."','".@$_POST['b60']."','".@$_POST['b61']."','".@$_POST['b62']."','".@$_POST['b63']."','".@$_POST['b64']."','".@$_POST['b65']."','".@$_POST['b66']."','".@$_POST['b67']."','".@$_POST['b68']."','".@$_POST['b69']."','".@$_POST['b70']."','".@$_POST['b71']."','".@$_POST['b72']."','".@$_POST['b73']."','".@$_POST['b74']."','".@$_POST['b75']."','".@$_POST['b76']."','".@$_POST['b77']."','".@$_POST['b78']."','".@$_POST['b79']."','".@$_POST['b80']."','".@$_POST['b81']."','".@$_POST['b82']."','".@$_POST['b83']."','".@$_POST['b84']."','".@$_POST['b85']."','".@$_POST['b86']."','".@$_POST['b87']."','".@$_POST['b88']."',
//   '".@$_POST['b89']."','".@$_POST['b90']."','".@$_POST['b91']."','".@$_POST['b92']."','".@$_POST['b93']."','".@$_POST['b94']."','".@$_POST['b95']."','".@$_POST['b96']."','".@$_POST['b97']."','".@$_POST['b98']."','".@$_POST['b99']."')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js" integrity="sha512-5XAS7mhslf6oGjLxzmY4iYfFwDGf8G1ZBeWdymR/+y8ZCvPWwI3Ff+WrS+kabqYdIEwYaLEnJhsuymZxgrneQg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Game Words Scrambler</title>
</head>
<style>
    .table>tbody>tr>td{
   padding: 0;
 }
 .table{
   width: auto;
 }
  .chn{
      width: 30px;
      height: 30px;
      font-size: 13px;
     font-weight: bold;
     text-indent: 5px;
     text-transform: uppercase;
  }
.user-wrp {
	position: relative;
	width: 50%;
}
.user-wrp .inputText{
	width: 30px;
  height: 30px;
  font-size: 13px;
  font-weight: bold;
  text-indent: 5px;
  text-transform: uppercase;
 	box-shadow: none !important;
}
.user-wrp .floating-label {
    display:none;
	position: absolute;
	pointer-events: none;
	transition: 0.2s ease all;
}
.user-wrp input:focus ~ .floating-label,
.user-wrp input:not(:focus):valid ~ .floating-label{
	display:block;
	top: 0px;
	left: 5px;
	font-size: 9px;
	opacity: 1;
}
  .count{
      width:150px;
      border: 2px solid rgb(104, 106, 112);
      border-radius: 50px;
      font-size: 30px;
     font-weight:bolder;
    margin:0 auto;
      margin-bottom:5px;
  }
  .counttxt{
    font-size: 30px;
     font-weight: bold;
     color: rgb(104, 106, 112);
   
  }
  .bett{
      padding-left:3%;
      padding-bottom:1%;
      width:100%;
      height:800px;
  }
  p {
    margin-top: 0;
    margin-bottom: 0rem;
}

    @media (min-width: 1000px) and (max-width:1200px) {
.table>tbody>tr>td{
   padding: 0;
 }
 .table{
   width: auto;
 }
  .chn{
      width: 22px;
      height: 25px;
      font-size: 13px;
     font-weight: bold;
     text-indent: 2px;
     text-transform: uppercase;
  }
      
  }
     
     
  @media (min-width: 320px) and (max-width:1000px) {
       
  .count{
      width:150px;
      border: 2px solid rgb(104, 106, 112);
      border-radius: 50px;
      font-size: 20px;
     font-weight:bolder;
    margin:0 auto;
      margin-bottom:5px;
  }
  .counttxt{
    font-size: 20px;
     font-weight: bold;
     color: rgb(104, 106, 112);
   
  }
  }
  #hd1{
     font-size: 28px;
     font-family: Helvetica, sans-serif;
     font-weight: 780;
     text-align: center;
     color: #1c2754;
  }
  #hd2{
     font-size: 28px;
     font-family: Helvetica, sans-serif;
     font-weight: 780;
     text-align: center;
     color: rgb(104, 106, 112);;
  }
::-webkit-scrollbar {
  width: 10px; 
  height: 8px;          
  border: 1px solid #d5d5d5;
}
::-webkit-scrollbar-thumb {
  background: rgb(98, 98, 98); 
  border-radius: 20px;
}
input[type="file"] {
    display: none;
}
.custom-file-upload {
    width:100%;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    border: 1px solid #ccc;
    display: inline-block;
    padding: 10px 12px;
    cursor: pointer;
    text-align:center;
}
</style>
<body>
    
  <?php
     $stt = mysqli_query($conn,"SELECT * FROM login where mal = '".$_SESSION['nam']."'");
     $fis  = mysqli_fetch_array($stt);  
    if($fis['status1'] == "successful"){
    ?>
     <h1 class="text-center" style="color: #1c2754;margin-top:10%">Application Submitted</h1>
<?php 
    }else{ ?>
    <div class="container-fluid">
       <center><img src="../logo.png" height="150px"/></center>
          <h2 id="hd1">CONTROL AWARENESS DRIVE</h2>
          <h2 id="hd2">CROSSWORD</h2>
          <div class="container-fluid" > 
       <div class="row">
         <div  class="col-sm-12 col-md-12 col-lg-4 overflow-auto" style="height: 500px;">
          <h4 id="hd2" class="sticky-top bg-white">Across</h4>
          <p class="font-weight-bold">1. Nasir realized that his colleague has been in direct contact with a covid patient and is still working from office. However, Nasir is not comfortable reporting this in person. In this case, he may email it through_______ platform to raise his concern.</p>
          <p class="font-weight-bold">3. Sameer joined XYZ Corp three years after leaving DH. His boss casually asked Sameer if he knew anything about DH’s acquisition strategy regarding one of its subsidiaries. Until how many years Sameer is bound to keep the information confidential according to policy?</p>
          <p class="font-weight-bold">5. This is the only authorized person for external communications in the company?</p>
          <p class="font-weight-bold">7. To provide equal opportunity to all potential and current investors, Company observes ______ period prior to the announcement of annual results.</p>
          <p class="font-weight-bold">8. HR and Internal Audit are in a conflict on when an employee or LM is supposed to complete their mid-year review. One is supposed to complete it by the end of ____?</p>
          <p class="font-weight-bold">11. Hania's Laptop got snatched at gun point, after filing for FIR, which document should she file in the company?</p>
          <p class="font-weight-bold">13. A potential candidate for the position of Investment Analyst is your close relative. You are required to disclose your interest in this situation as there exist a ______ in such situation.</p>
          <p class="font-weight-bold">14. An employee posted on Instagram account regarding his promotion at DH Corp. This act is in violation with one of DH Corp’s policy, as you can only show affiliation with DH on _________.</p>
          <p class="font-weight-bold">15. All emergency changes to infrastructure, application programs and configuration in the software shall be reviewed and approved by the Head of ________. </p>
          <p class="font-weight-bold">16. Sami, an employee at DH Corp, is also simultaneously on the board of his family’s investment business this could prevent him from acting in the best interest for DH. Thus, such situation requires _______ on behalf of Sami. </p>
         </div>
         <div class="col-sm-12 col-md-12 col-lg-4 " id="capture">
           <form id="submit_form">
          <div class="count d-flex justify-content-center">
          <?php 
         
          if(!empty($_SESSION['nam'])){
            $sqq = mysqli_query($conn,"SELECT * FROM login where mal = '".$_SESSION['nam']."'");
            $upp  = mysqli_fetch_array($sqq); 
            $timer = explode(':', $upp['timr1']);
            ?>
            <p id="deep"><label id="minutes" class="counttxt"><?php echo @$timer[0] ?></label>:<label id="seconds" class="counttxt"><?php echo @$timer[1]  ?></label></p>
            <?php
          }else{
          ?>
          <p id="deep"><label id="minutes" class="counttxt">00</label>:<label id="seconds" class="counttxt">00</label></p>
          <?php
          }?>
          </div>
              <table class="table" align="center">
    <tbody>
    <?php 
            $sqli = mysqli_query($conn,"SELECT * FROM answer where ur_nam = '".$_SESSION['nam']."'");
            $update  = mysqli_fetch_array($sqli); ?>
      <tr>
        <input type="text" name="id" value="<?php echo $_SESSION['id'] ?>" hidden>
        <input type="text" name="name" value="<?php echo $_SESSION['nam'] ?>" hidden>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td >
        <div class="user-wrp"><input type="text"  class="inputText" maxlength="1"  name="b1" onchange="gn()"  value="<?php echo @$update['b1'] ?>"/>
        <span class="floating-label">1</span></div>
        </td>
        <td ><input type="text" class="chn" maxlength="1"  name="b2" onchange="gn()"   value="<?php echo @$update['b2'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b3" onchange="gn()"  value="<?php echo @$update['b3'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b4" onchange="gn()"  value="<?php echo @$update['b4'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b5" onchange="gn()"  value="<?php echo @$update['b5'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b6" onchange="gn()"  value="<?php echo @$update['b6'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b7" onchange="gn()"  value="<?php echo @$update['b7'] ?>"/></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b8" value="<?php echo @$update['b8'] ?>"/>
        <span class="floating-label">2</span></div>
        </td>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b9" value="<?php echo @$update['b9'] ?>"/>
        <span class="floating-label">3</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b10"  onchange="gn()"  value="<?php echo @$update['b10'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b11"  onchange="gn()"  value="<?php echo @$update['b11'] ?>"/></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b12" value="<?php echo @$update['b12'] ?>"/>
        <span class="floating-label">4</span></div></td>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
      </tr>
      <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b13"  onchange="gn()"  value="<?php echo @$update['b13'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b14"  onchange="gn()"  value="<?php echo @$update['b14'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b15"  onchange="gn()"  value="<?php echo @$update['b15'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
      <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b16" value="<?php echo @$update['b16'] ?>"/>
        <span class="floating-label">5</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b17"  onchange="gn()"  value="<?php echo @$update['b17'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b18"  onchange="gn()"  value="<?php echo @$update['b18'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b19" value="<?php echo @$update['b19'] ?>"/>
        <span class="floating-label">6</span></div></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b20"  onchange="gn()"  value="<?php echo @$update['b20'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b21"  onchange="gn()"  value="<?php echo @$update['b21'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b22"  onchange="gn()"  value="<?php echo @$update['b22'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b23" value="<?php echo @$update['b23'] ?>"/>
        <span class="floating-label">7</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b24"  onchange="gn()"  value="<?php echo @$update['b24'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b25"  onchange="gn()"  value="<?php echo @$update['b25'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b26"  onchange="gn()"  value="<?php echo @$update['b26'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b27"  onchange="gn()"  value="<?php echo @$update['b27'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b28"  onchange="gn()"  value="<?php echo @$update['b28'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b29" value="<?php echo @$update['b29'] ?>"/>
        <span class="floating-label">8</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b30"  onchange="gn()"  value="<?php echo @$update['b30'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b31"  onchange="gn()"  value="<?php echo @$update['b31'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b32"  onchange="gn()"  value="<?php echo @$update['b32'] ?>"/></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled   maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b33"  onchange="gn()"  value="<?php echo @$update['b33'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b34"  onchange="gn()"  value="<?php echo @$update['b34'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b35"  onchange="gn()"  value="<?php echo @$update['b35'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b36"  onchange="gn()"  value="<?php echo @$update['b36'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b37" value="<?php echo @$update['b37'] ?>"/>
        <span class="floating-label">9</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b38"  onchange="gn()"  value="<?php echo @$update['b38'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b39"  onchange="gn()"  value="<?php echo @$update['b39'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b40"  onchange="gn()"  value="<?php echo @$update['b40'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b41"  onchange="gn()"  value="<?php echo @$update['b41'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b42"  onchange="gn()"  value="<?php echo @$update['b42'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b43" value="<?php echo @$update['b43'] ?>"/>
        <span class="floating-label">10</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b44"  onchange="gn()"  value="<?php echo @$update['b44'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b45" value="<?php echo @$update['b45'] ?>"/>
        <span class="floating-label">11</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b46"  onchange="gn()"  value="<?php echo @$update['b46'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b47"  onchange="gn()"  value="<?php echo @$update['b47'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b48"  onchange="gn()"  value="<?php echo @$update['b48'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b49"  onchange="gn()"  value="<?php echo @$update['b49'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b50"  onchange="gn()"  value="<?php echo @$update['b50'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b51"  onchange="gn()"  value="<?php echo @$update['b51'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b52"  onchange="gn()"  value="<?php echo @$update['b52'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b53"  onchange="gn()"  value="<?php echo @$update['b53'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b54"  onchange="gn()"  value="<?php echo @$update['b54'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b55"  onchange="gn()"  value="<?php echo @$update['b55'] ?>"/></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b56" value="<?php echo @$update['b56'] ?>"/>
        <span class="floating-label">12</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b57"  onchange="gn()"  value="<?php echo @$update['b57'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b58"  onchange="gn()"  value="<?php echo @$update['b58'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b59"  onchange="gn()"  value="<?php echo @$update['b59'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b60"  onchange="gn()"  value="<?php echo @$update['b60'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b61"  onchange="gn()"  value="<?php echo @$update['b61'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b62"  onchange="gn()"  value="<?php echo @$update['b62'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b63"  onchange="gn()"  value="<?php echo @$update['b63'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b64"  onchange="gn()"  value="<?php echo @$update['b64'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1" style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b65"  onchange="gn()"  value="<?php echo @$update['b65'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b66"  onchange="gn()"  value="<?php echo @$update['b66'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b66" value="<?php echo @$update['b66'] ?>"/>
        <span class="floating-label">13</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b68"  onchange="gn()"  value="<?php echo @$update['b68'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b69"  onchange="gn()"  value="<?php echo @$update['b69'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b70"  onchange="gn()"  value="<?php echo @$update['b70'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b71"  onchange="gn()"  value="<?php echo @$update['b71'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b72"  onchange="gn()"  value="<?php echo @$update['b72'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b73"  onchange="gn()"  value="<?php echo @$update['b73'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b74"  onchange="gn()"  value="<?php echo @$update['b74'] ?>"/></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b75"  onchange="gn()"  value="<?php echo @$update['b75'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b76"  onchange="gn()"  value="<?php echo @$update['b76'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b77" value="<?php echo @$update['b77'] ?>"/>
        <span class="floating-label">14</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b78"  onchange="gn()"  value="<?php echo @$update['b78'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b79"  onchange="gn()"  value="<?php echo @$update['b79'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b80"  onchange="gn()"  value="<?php echo @$update['b80'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b81"  onchange="gn()"  value="<?php echo @$update['b81'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b82"  onchange="gn()"  value="<?php echo @$update['b82'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b83"  onchange="gn()"  value="<?php echo @$update['b83'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b84"  onchange="gn()"  value="<?php echo @$update['b84'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b85" value="<?php echo @$update['b85'] ?>"/>
        <span class="floating-label">15</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b86"  onchange="gn()"  value="<?php echo @$update['b86'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled  /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled  maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b87"  onchange="gn()"  value="<?php echo @$update['b87'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b88"  onchange="gn()"  value="<?php echo @$update['b88'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
            <tr>
        <td ><input type="text" class="chn" style="background-color: #1c2754" disabled   maxlength="1"  /></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b89"  onchange="gn()"  value="<?php echo @$update['b89'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
        <td ><div class="user-wrp"><input type="text"  class="inputText" maxlength="1" onchange="gn()"  name="b99" value="<?php echo @$update['b99'] ?>"/>
        <span class="floating-label">16</span></div></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b90"  onchange="gn()"  value="<?php echo @$update['b90'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b91"  onchange="gn()"  value="<?php echo @$update['b91'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b92"  onchange="gn()"  value="<?php echo @$update['b92'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b93"  onchange="gn()"  value="<?php echo @$update['b93'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b94"  onchange="gn()"  value="<?php echo @$update['b94'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b95"  onchange="gn()"  value="<?php echo @$update['b95'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b96"  onchange="gn()"  value="<?php echo @$update['b96'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b97"  onchange="gn()"  value="<?php echo @$update['b97'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  name="b98"  onchange="gn()"  value="<?php echo @$update['b98'] ?>"/></td>
        <td ><input type="text" class="chn" maxlength="1"  style="background-color: #1c2754" disabled /></td>
      </tr>
    </tbody>
  </table>
</form>
      </div>
         <div  class="col-sm-12 col-md-12 col-lg-4  overflow-auto " style="height: 500px;">
          <h4 id="hd2" class="sticky-top bg-white">Down</h4>
          <p class="font-weight-bold">1. John, an employee at DH Corp, bought 1000 company shares on 5th March. He completed all the requirements according to the company policy. If he sells the company shares within the six-month period, the profit will be tendered to _______. </p>
          <p class="font-weight-bold">2. Procurement of goods and services above Rs 100,000/- will require at least _________ quotations. </p>
          <p class="font-weight-bold">4. Whistleblowing policy applies to all stakeholders, including _______, management, board, vendors business partners and the shareholders?</p>
          <p class="font-weight-bold">6. Individuals are not permitted to change their budgets without approvals, or in case if it is specified in____ policy</p>
          <p class="font-weight-bold">7. A document prepared to bind two parties into a transaction on various terms & conditions</p>
          <p class="font-weight-bold">9. Saif, a DH Corp employee, received a gift of nominal value thirty-nine thousand. He does not remember the policy. What is the nominal value up to which you need approval from department head?</p>
          <p class="font-weight-bold">10. All employees should ensure compliance with the ______ procedure, report incidents, hazards and near misses and share learnings in order to build a culture of safety</p>
          <p class="font-weight-bold">12. All departments need to conduct risk monitoring and develop contingency procedures as per the schedule given in their risk_______. </p>
         </div>
       </div>
        </div>
        <div class="d-flex justify-content-center" style=" box-shadow: inset 0 7px 15px -7px rgba(133, 133, 133, 0.657);">
        <form>
          <?php 
           $sql = mysqli_query($conn,"SELECT * FROM login where mal ='".$_SESSION['nam']."'");
           $row  = mysqli_fetch_array($sql);
          ?>
            <div class="form-group d-flex justify-content-between mt-4">
                <label>Name</label>
                <input type="text" class="form-control bg-light " style="width:400px;"  id="nam" value="<?php echo $row['nam'] ?>" required>
              </div>
              <div class="form-group d-flex justify-content-between">
                <label>Designation </label>
                <input type="text" class="form-control bg-light ml-2" style="width:400px;"  id="des" value="<?php echo $row['des'] ?>" required>
              </div>
            <div class="form-group d-flex justify-content-between">
              <label>Email</label>
              <input type="text" class="form-control bg-light" style="width:400px;"  id="mal" value="<?php echo $row['mal'] ?>" required>
            </div>
            <a  class="btn btn-primary" onclick="screenshot()" style="background-color: #1c2754;margin-left: 80%;width: 100px;" >Submit</a>
            <!--<a  class="btn btn-primary" id="sel" style="background-color: rgb(5, 63, 200);margin-left: 80%;width: 100px;" >Submit</a>-->
          </form>
        </div>
    </div>
<?php
    }?>
    <div class="modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <h1 style="color: #1c2754;">Application Submitted</h1>
      </div>
    </div>
  </div>
</div>
<script>


function gn() {
  var std = $('#deep').text();
$.ajax({
  url : "index.php",
  type : "POST",
  data : $('#submit_form').serialize(),
  success : function(data){
console.log('DanySAM');
  } 
});

$.ajax({
  url : "index.php",
  type : "POST",
  data :  { sid: std},
  success : function(data){
console.log('cat');
  } 
});
}
function screenshot() {
      $('.modal').modal({backdrop: 'static', keyboard: false});
 $.ajax({
  url : "index.php",
  type : "POST",
  data :  {fin: "successful"},
  success : function(data){
console.log('catt');
  } 
});
        html2canvas(document.querySelector("#capture")).then(canvas => {
             var dataURL = canvas.toDataURL();
             var nam = $("#nam").val();
             var des = $("#des").val();
             var eml = $("#mal").val();

             Email.send({
        Host : "smtp.titan.email",
        Username : "admin@infotechabout.com",
        Password : "Admin123456#$",
        To : 'ayesha.javaid@dawoodhercules.com',
        // To : 'syedmomin168@gmail.com',
        From : "admin@infotechabout.com",
        Subject : "Dataminds "+ nam + " " + eml,
        Body : "answer Sheet "+ nam + " "+ des ,
        Attachments : [
    {
        name : "answer.png",
        data : dataURL
    }]
    }).then(
      // message => alert(message),
    );
        });
    }
var st = $('#deep').text();

var a = st.split(':');
var seconds = (+a[0]) * 60 + (+a[1]); 



var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");

var totalSeconds = seconds;
setInterval(setTime, 1000);



function setTime() {
 ++totalSeconds;
 gn();
 if(totalSeconds == 2700){
  screenshot(); 
}
 secondsLabel.innerHTML = pad(totalSeconds % 60);
minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
}

function pad(val) {
var valString = val + "";
if (valString.length < 2) {
   return "0" + valString;
  } else {
    return valString;
  }
}
    </script>
    
</body>
</html>