<?php
include("config.php");
?>
<html>
    <head>
        <title>Online Result Result</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div align="center">
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <h3 class="s">SEM RESULT</h3>           
       
<br />
<br />
<br />
<form method="post" action="viewResult.php" >
<table border="0" cellpadding="5" cellspacing="35" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Roll No:</td><td><input type="text" required="required" name="roll" class="fields" size="20" placeholder="Enter Roll No." /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="SHOW" class="fields" /></td></tr>

</table>
</form>
<br />
<br />
<br />
<a href="index.php" class="link">Main Page</a>
</div>
</body>
</html>