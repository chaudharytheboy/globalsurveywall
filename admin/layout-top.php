<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Walmart</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico">
<!-- Stylesheets -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<script>
        function Walmart(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#walmart').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function Walmartpopsimg(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#walmartpops').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
</script>
</head>
<body>
<!-- Header -->

<div class="top-header">
        <span><a href="#"><img src="../images/Walmart-logo2.png" class="img-responsive"></a></span>
        <!-- <span>amazon</span>
	<br>Shopper Survey ✓ -->

    </div>