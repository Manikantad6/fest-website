
 <?php
            if ( isset( $_FILES['pdfFile'] ) ) {
	if ($_FILES['pdfFile']['type'] == "application/pdf") {
		$source_file = $_FILES['pdfFile']['tmp_name'];
		$dest_file = "upload/".$_FILES['pdfFile']['name'];

		if (file_exists($dest_file)) {
			print "The file name already exists!!";
		}
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error!!");
			if($_FILES['pdfFile']['error'] == 0) {
				print "Pdf file uploaded successfully!";
				print "<b><u>Details : </u></b><br/>";
				print "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
				print "File Size : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
				print "File location : upload/".$_FILES['pdfFile']['name']."<br/>";
			}
		}
	}
	else {
		if ( $_FILES['pdfFile']['type'] != "application/pdf") {
			print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
			print "Invalid  file extension, should be pdf !!"."<br/>";
			print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
		}
	}
}














$url='localhost';
$username = "root";
$password = "root";
$dbname = "sapience";
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$mail=$_POST['email'];
$mobile = $_POST['mobile'];
$regno = $_POST['regno'];
$year = $_POST['year'];
$clg = $_POST['college'];
$branch = $_POST['branch'];
$checkbox1 = $_POST['topics'];
$chk=""; 
foreach($checkbox1 as $chk1) 
{ 
$chk.= $chk1.","; 
} 

$conn = mysqli_connect($url, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO main(firstname,lastname,mail,mobile,regno,year,college,branch,topics)VALUES( '$fn','$ln','$mail','$mobile','$regno','$year','$clg','$branch', '$chk' )";

if (isset($_POST['submit']))
{
	if($branch=="Computer Science & Engineering"){
        $target = "upload/cse/";}
        else{ $target = "upload/";}
	$target = $target . basename($_FILES['uploaded']['name']);
	$ok = 1;
	if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
	{
		echo "The file " . basename($_FILES['uploaded']['name']) . " has been uploaded";
	}
	else
	{
		echo "Sorry, there was a problem uploading your file.";
	}
}
if(mysqli_query($conn,$sql)) {
    echo "<html><body><script>";
echo "alert('Your message has been send successfully');";
echo "</script></body></html>";

$URL="index.php";
echo "<script>location.href='$URL'</script>";
 


 //create html of the data
        ob_start();
        ?>

            <br><image src='lg.jpg' alt='image'/>
          <h1 style="text-align:center; color:red ">Samyak - 2018</h1><hr>
        <h2 style="padding-left: 30px; text-decoration: underline">Submitted Details are</h2>
        <table style="font-size: 20px" align="center"> 
             <tbody style="border: 3px dashed black" align="left">
                                  <tr><td>First Name:</td><td><?php echo $fn;?></td></tr><br>
                 <tr style='border:3px solid black'><td>Last Name: </td><td><?php echo $ln;?></td></tr><br>
                 <tr><td>Email:</td><td><?php echo $mail;?></td></tr><br>
                 <tr><td>Mobile:</td><td><?php echo $mobile;?></td></tr><br>
                 <tr><td>Registration Number:</td><td><?php echo $regno;?></td></tr><br>
                 <tr><td>Year:</td><td><?php echo $year;?></td></tr><br>
                 <tr><td>College:</td><td><?php echo $clg;?></td></tr><br>
                 <tr><td>Branch:</td><td><?php echo $branch;?></td></tr><br>
                 <tr><td>Events:</td><td><?php echo $chk;?></td></tr>
                  
                 
         </tbody></table>
               <h2 style="padding-left: 40px">Note: Bring this printout while attending to sapience event <br> Amount to be paid is rs100/-</h2>
		
        <?php 
        $body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);

        include("mpdf60/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0, 0, 0, 0, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);
      ob_clean();
        //output pdf
        $mpdf->Output('sapience.pdf','D');



echo 'Data added sucessfully';


} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>