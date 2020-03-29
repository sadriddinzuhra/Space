<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/my_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body style="background-image: url('img/main.jpg');">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="index.html">COSMOS</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Message.html">Message</a>
        </li>    
      </ul>
    </nav>

    <table class="table table-hover text-light">
        <tr>
            <th>№</th>
            <th>Event</th>
            <th>Date</th>
        </tr>
        <?php
          $conn = mysqli_connect("localhost", "zuhra", "123456789", "events");
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              }
          $sql = "SELECT id, name, date FROM events1";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
              . $row["date"]. "</td></tr>";
            }
            echo "</table>";
          } 
          else { echo "0 results"; }
          $conn->close();
        ?>
    </table>

    <footer class="page-footer font-small blue bg-dark text-muted">
      <div class="footer-copyright text-center py-3">© 2020 Copyright: Zuhra Sadriddin</div>
    </footer>

  </body>

</html>
