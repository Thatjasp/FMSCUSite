<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="index.css" />
  <body>
    <header>
      <div class="container">
        <div class="header-wrapper">
          <div class="left-wrapper">
            <img src="DuVjwpGf.jpg" width="100" height="100"/>
          </div>
          <div class="center-wrapper">
            <h1>FMSCU IT</h1>
          </div>
          <div class="right-wrapper">
            <div class="index-wrapper">
              <a href="#">FITS</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="content-wrapper">
      <div class="background"><div class="welcome">Welcome</div></div>
      <div class="title-wrapper"></div>
      <div class="position-wrapper"></div>
      <div class="position-wrapper"></div>
    </div>
    <div>
      <table>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Employee ID</th>
        <?php 
          $connection = mysqli_connect("localhost", "root", "", "fmscu");
          if ($connection -> connect_error) {
            die("Conecion failed:". $connection-> connect_error);
          }
          $sqlQuery = "SELECT * FROM 'employee_table'";
          $result = $connection-> query($sqlQuery);
          if($result-> num_rows > 0) {
            while ($rows = $result-> fetch_assoc()) {
              echo "<tr><td>". $rows["FirstName"] ."</td><td>". $rows["LastName"] . "</td><td>" . $rows["EID"]<"/td></tr>";
            }
            echo "</table>";
          } else if (!empty($result->num_rows)){
            echo $result-> num_rows ." result";
          } else {
            echo "0 result";
          }

          $connection-> close();
        ?>
      </table>
    </div>
    <footer>
      <div class="footer-wrapper">
        <div class="footer-content">
          <div class="footer-box"><h2>Contact Us</h2></div>
          <div class="footer-box"><p>carr go brrr:</p></div>
          <div class="footer-box"><p>airplane go brr:</p></div>
          <div class="footer-box"><p>me go brr:</p></div>
        </div>
      </div>
    </footer>
  </body>
</html>
