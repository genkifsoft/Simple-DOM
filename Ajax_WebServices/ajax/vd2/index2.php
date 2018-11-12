
<html>
<head>

<script src="../jquery.js"></script>
<script>
$(document).ready(function(){

  $("#clickMe").click(function(){

    // $.ajax().done();
    //       {}  function(){}

    $.ajax({
      method:"POST",
      url:"b.php",
      data:{so1:3, so2:4}
    }).done(function(data){
      $("#ketqua").html(data);
    });

  });

});
</script>

</head>
<body>

<div id="clickMe">Click 1</div>
<div id="ketqua"></div>

<iframe width="560" height="315" src="https://www.youtube.com/embed/z5JLkgk0Cok" frameborder="0" allowfullscreen></iframe>

</body>
</html>
