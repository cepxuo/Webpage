<html>
<body bgcolor = "black">
<center>
  <h2><font color = "gold">Test Web Server was built using Terraform <font color = "aqua"> v0.14</font></h2><br><br>
  <font color = "red">This page is stored in <b><a href="https://github.com/cepxuo/webpage">GitHub</a></b></font><br><br>
  <font colog = "gold">Server internal IP: <?php echo @shell_exec("ec2-metadata -o | awk {'print $2'}"); ?></font><br><br>
  <font colog = "gold">Availability Zone: <?php echo @shell_exec("ec2-metadata -z | awk {'print $2'}"); ?></font><br><br>
</center>

<font color = "green">
<b>Version 3.0</b>
</font>
</body>
</html>
