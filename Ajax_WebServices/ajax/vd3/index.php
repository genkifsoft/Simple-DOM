<html>
<head>

<script src="../jquery.js"></script>
<script>
$(document).ready(function(){
  $("#txtEmail").blur(function(){
    var e = $(this).val();
    alert(e);
  });
});
</script>

</head>
<body>

<form>

<input type="text" id="txtEmail" placeholder="Email" />
<span id="thongbaoEmail"></span>

<input type="text" id="txtUsername" placeholder="Username" />
<span id="thongbaoUsername"></span>

<input type="submit" value="Dang ki" />

</form>

<!--
Accounts: Id, Username, Email, Password
-->

</body>
</html>
