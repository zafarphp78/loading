<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Loading</title>
  <style>
    #progress {
      width: 100%;
      background-color: #f1f1f1;
    }
    #bar {
      width: 0%;
      height: 15px; /* Increased height */
      background-color: #4caf50;
      text-align: center;
      line-height: 15px; /* Adjust line-height to match the height */
      color: white;
    }
  </style>
  <script>
    function move() {
      var elem = document.getElementById("bar");
      var width = 0;
      var id = setInterval(frame, 50);

      function frame() {
        if (width >= 100) {
          clearInterval(id);
          window.location.href = "https://digital-copyright.replit.app/request";
        } else {
          width++;
          elem.style.width = width + '%';
          elem.innerHTML = width * 1 + '%';
        }
      }
    }
  </script>
</head>
<body>

<div id="progress">
  <div id="bar">Loading...</div>
</div>

<script>
  move();
</script>

</body>
</html>
