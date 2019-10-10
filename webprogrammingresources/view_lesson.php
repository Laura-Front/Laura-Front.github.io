
<?php  
  include("blocks/bd.php");        /*Միացում բազային*/
  if (isset($_GET['id']))  {$id=$_GET['id'];} /* lessons.php?id=?*/
  if (!isset($id)) {$id=1;}     /* lessons.php?id=1 */
$result = mysql_query("SELECT *FROM data WHERE id='$id'",$db);
if(!$result)
{
echo "<p>Բազայից տվյալների ընտրությունը չի կատարվել:<br></p>";
exit(mysql_error());
}
if(mysql_num_rows($result)>0)
{
$myrow=mysql_fetch_array($result);
$new_view=$myrow["view"]+1;
$update=mysql_query("UPDATE data SET view='$new_view' WHERE id='$id'",$db);
}
else
{
echo "<p>Ինֆորմացիան աղյուսակում բացակայում է</p>";
exit();
}
?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $myrow["title"]; ?></title>
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


  <?php 
printf("%s<p class='view'>Դիտումներ: %s</p>",$myrow["text"],$myrow["view"]);
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

    
                            
