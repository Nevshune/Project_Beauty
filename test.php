
<!DOCTYPE html>
<html>
<head>
    <title>SweetAlert</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>
    <button onclick="normal()">Normal Alert</button>
    <button onclick="sweet()">Sweet Alert</button>
 
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script type="text/javascript">
    function sweet() {
        swal("Good job!", "You clicked the button!", "success");
    }
</script>
</body>
</html>