<?php
session_start();
echo $_SESSION["log"];
?>
<html>
<head>

<script src="../jquery.js"></script>
<script>
$(document).ready(function(){

  $("#loading").hide();

  $("#clickMe").click(function(){

    $("#loading").show();

    $.ajax({
      method:"POST",
      url:"b.php",
      data:{so1:3, so2:4}
    }).done(function(data){
      $("#loading").hide();
      $("#ketqua").html(data);
    });

  });

});
</script>

</head>
<body>

<img id="loading" src="loading.gif" width="50" />
<div id="clickMe">Click 1</div>
<div id="ketqua"></div>

<iframe width="560" height="315" src="https://www.youtube.com/embed/z5JLkgk0Cok" frameborder="0" allowfullscreen></iframe>

</body>
</html>
