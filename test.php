<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Live Clock Example</title>
  <style>
    #clock {
      font-weight: bold;
    }
  </style>
  <script>
    function updateTime() {
      var date = new Date();
      var options = { timeZone: 'Asia/Kolkata' };
      var time = date.toLocaleTimeString('en-US', options);
      var dateString = date.toDateString();
      document.getElementById("clock").innerHTML = dateString + " <span>" + time + "</span>";
    }
    setInterval(updateTime, 1000);
  </script>
</head>
<body>
  <h1>Current Time:</h1>
  <div id="clock">
    <?php echo date('D M d, Y h:i:s A'); ?>
  </div>
</body>
</html>
