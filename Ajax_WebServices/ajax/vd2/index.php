<html>
<head>

<script src="../jquery.js"></script>
<script>
$(document).ready(function(){

  $("#clickMe").click(function(){

    $.get("a.php", function(data){
      $("#ketqua").append(data);
    });

    $.post("b.php", {so1:"1", so2:"2" } , function(data){
      $("#ketqua").append(data);
    });

  });

});
</script>

</head>
<body>

<h1>INDEX</h1>

<div id="clickMe">Click 1</div>
<div id="ketqua"></div>

<iframe width="560" height="315" src="https://www.youtube.com/embed/z5JLkgk0Cok" frameborder="0" allowfullscreen></iframe>

</body>
</html>
