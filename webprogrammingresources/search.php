
<?php  include("blocks/bd.php");        /*Միացում բազային*/
if (isset($_POST['submit_s'])) 
{
$submit_s=$_POST['submit_s'];
} 
if (!isset($_POST['search'])) 
{
$search=$_POST['search'];
}    

if(isset($submit_s))
{
if(empty($search) or strlen($search)<4)
{
exit("<p>Հարցումը ներմուծված չէ կամ այն 4 սիմվոլից փոքր է</p>");
}
$search=trim($search);/*ազատվում ենք բացատներից*/
$search=stripslashes($search);/*ազատվում ենք սլեշներից*/
$search=htmlspecialchars($search);/*html տեգերը հասկանալու համար*/
}
else
{
exit("<p>Դուք դիմել եք ֆայլին առանց անհրաժեշտ պարամետրերի</p>");
}

?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$search"; ?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
 <?  include("blocks/header.php");  ?>

   <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
	  

<td width="200px" valign="top" class="left">
	<? include("blocks/left.php");  ?>
</td>

	
	<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0" valign="top">
<tr>
<td  width='25%' class='top_t'>
<p><b><a href="index.php"> Գլխավոր</a></b></p>
</td>
<td  width='25%' class='top_t'>
<p><b><a href="havel.php">  Հավելված</a></b></p>
</td>
<td   width='25%' class='top_t'>
<p><b><a href="about.php"> Հեղինակի մասին</a></b></p>
</td>
</tr>
</table>	
<br><br>

  <?php 
 
  $result = mysql_query("SELECT id,title,description,date,author,view,mini_img FROM data WHERE MATCH(text) AGAINST('$search')",$db);
if(!$result)
{
echo "<p>Բազայից տվյալների ընտրությունը չի կատարվել:<br></p>";
exit(mysql_error());
}
if(mysql_num_rows($result)>0)
{
$myrow=mysql_fetch_array($result);
do {
        
printf ("<table align='center' class='lesson'>
         
		 <tr>
         <td class='lesson_title'>
		 <p class='lesson_name'><img class='mini' align='left' src='%s'><a href='view_lesson.php?id=%s'>%s</a></p>
		 <p class='lesson_adds'>Ամսաթիվ: %s</p>
		 <p class='lesson_adds'>Հեղինակ: %s</p></td>
         </tr>
         
		 <tr>
         <td>%s<p class='lesson_view'> Դիտումներ: %s</p></td>
         </tr>
         
		 </table><br><br>",$myrow["mini_img"], $myrow["id"], $myrow["title"],$myrow["date"],$myrow["author"],$myrow["description"], $myrow["view"]); 
}	
while ($myrow = mysql_fetch_array ($result));	  		  
}
else
{
echo "<p>Ինֆորմացիան Ձեր հարցումով չի գտնվել</p>";
exit();
}
?>
  
	</td>
    </tr>
  </table>
    </td>
 </tr>
<? include("blocks/footer.php");?>
</table>
</body>
</html>

    
                            
