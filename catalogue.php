<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include 'layouts/css_.php'; ?>
	<title>CVP</title>
</head>
<body>
	
	<?php include 'route.php'; ?>
    <div class="wrapper-dekstop">
     <?php include 'template/elements/navbar.php'; ?>

     <div class="container-fluid">
      <?php include 'template/catalogue/index.php'; ?>
      <?php //include 'process.php'; ?>
  </div>

  <?php include 'template/elements/footer.php'; ?>
</div>

<div class="wrapper-mobile">
    <?php include 'template/elements/navbar-mobile.php'; ?>
      <div class="container-mobile">
        <?php include 'template/catalogue/index-mobile.php'; ?>
      </div>
    <?php include 'template/elements/footer-mobile.php'; ?>
</div>

<?php include 'layouts/js_.php'; ?>
<script>
  $(function(){
    $("#ppp").on("submit", function(event) {
        event.preventDefault();
        var formData = {
            'email': $('input[name=email]').val()
        };
        console.log(formData);

        $.ajax({
            url: "process.php",
            type: "post",
            data: formData,
            success: function(d) {
               if(d == '01'){
                  $('.disabled-btn').addClass('enabled-btn').prop('disabled', false);
              } else{
                  $('.disabled-btn').removeClass('enabled-btn').prop('disabled', true);
              }
          }
      });
    });
}) 

  $(function(){
    $("#sss").on("submit", function(event) {
        event.preventDefault();
        var formData = {
            'email': $('input[name=imail]').val()
        };
        console.log(formData);

        $.ajax({
            url: "process.php",
            type: "post",
            data: formData,
            success: function(d) {
               if(d == '01'){
                  $('.disabled-btn').addClass('enabled-btn').prop('disabled', false);
              } else{
                  $('.disabled-btn').removeClass('enabled-btn').prop('disabled', true);
              }
          }
      });
    });
}) 
</script>
</body>
</html>