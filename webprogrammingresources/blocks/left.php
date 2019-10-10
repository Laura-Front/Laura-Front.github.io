<div class="left_title">Առարկաներ</div>
<?
$result2 = mysql_query("SELECT  * FROM lessons ",$db);
if(!$result2)
{
echo "<p>Բազայից տվյալների ընտրությունը չի կատարվել:<br></p>";
exit(mysql_error());
}
if(mysql_num_rows($result2)>0)
{
$myrow2=mysql_fetch_array($result2);
do
{
printf("<p><a  class='left_link' href='lessons.php?les=%s'>%s</a></p>",$myrow2["id"],$myrow2["title"]);
}
while($myrow2=mysql_fetch_array($result2));
}
else
{
echo "<p>Ինֆորմացիան աղյուսակում բացակայում է</p>";
exit();
}
?>
<div  class="left_title">Թեստեր</div>
<ul>
<li class="left_li" >HTML   հարցեր
<ul>
<li  class="left_li"><a   href="test_1.php" >Թեստ_1</a>
<li  class="left_li"><a   href="test_2.php">Թեստ_2</a>
<li  class="left_li"><a   href="test_3.php" >Թեստ_3</a>
<li  class="left_li"><a   href="test_4.php">Թեստ_4</a>
</ul>
<li  class="left_li" >  DHTML   հարցեր
<ul>
<li  class="left_li" ><a   href="test_5.php" >Թեստ_1</a>
<li  class="left_li"><a   href="test_6.php">Թեստ_2</a>
<li  class="left_li"><a   href="test_7.php" >Թեստ_3</a>
</ul>
<li  class="left_li" > CSS   հարցեր
<ul>
<li  class="left_li" ><a   href="test_8.php" >Թեստ_1</a>
<li  class="left_li"><a   href="test_9.php">Թեստ_2</a>
</ul>
</ul>
<div  class="left_title">Խաչբառ</div>
<p><a  class="left_link" href="xach2.php" > Հայերեն խաչբառ</a></p>
<p><a  class="left_link" href="xach1.php" > Անգլերեն խաչբառ</a></p>
<div class="left_title">Առաջադրանքներ</div>
<?
$result2 = mysql_query("SELECT  * FROM laber ",$db);
if(!$result2)
{
echo "<p>Բազայից տվյալների ընտրությունը չի կատարվել:<br></p>";
exit(mysql_error());
}
if(mysql_num_rows($result2)>0)
{
$myrow2=mysql_fetch_array($result2);
do
{
printf("<p><a  class='left_link' href='labs.php?id=%s'>%s</a></p>",$myrow2["id"],$myrow2["title"]);
}
while($myrow2=mysql_fetch_array($result2));
}
else
{
echo "<p>Ինֆորմացիան աղյուսակում բացակայում է</p>";
exit();
}
?>
<div class="left_title">Փնտրում</div>
<form action="search.php" method="post" name="form_s">
<p class="search_t">Փնտրման հարցումը պետք է լինի 4 սիմվոլից ոչ քիչ</p>
<p><input name="search" type="text" size="25" maxlength="40">
<br>
<p><input class="search_b" name="submit_s" type="submit" value="Փնտրել"></p>
<br>