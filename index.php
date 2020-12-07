<!DOCTYPE html>
<html>
  <head>
    <title>Puzzle game</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  </head>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      color: #588c7e;
      font-family: monospace;
      font-size: 14px;
      text-align: left;
      }
      th {
      background-color: #588c7e;
      color: #D4EE9F;
      }
      tr:nth-child(even) {
        background-color: #D4EE9F;
      }
  </style>
  <body>
    <!--<div class="name">
      <p id="name"></p>
    </div>-->
    <div class="leaderboard"> 
      <input type="text" id="myText" size="22" style="border-radius: 4px;border: 2px solid rgb(247, 237, 103)" value="Enter your name">
      <!--<button onclick="render()">Submit name</button>-->
    </div>
    <div id="leaderboard" class="score">
        <table>
            <form action="insert.php" method="POST">
                <!--<input type="text" name="Playername" size="22" style="border-radius: 4px;border: 2px solid rgb(247, 237, 103)" value="Enter your name"><br><br>
                <input type="text" name="playerscore" size="22" style="border-radius: 4px;border: 2px solid rgb(247, 237, 103)" value="Enter your score"><br>
                <button type="submit" name="submit">Submit</button>-->
                <p name="playerName"></p>
                <P name="playerScore"></P>
            </form>
            <tr>
            <h4>leaderboard</h4>
            <th>Player</th>
            <th>Points</th>
            </tr>
            <?php
                include 'connection.php';

                $sql = "SELECT * FROM players ORDER BY playerScore ASC, id ASC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["playerName"] . "</td><td>"
                        . $row["playerScore"]. "</td></tr>";
                    }
                        echo "</table>";
                } else { echo "0 results"; }

                $conn->close();
            ?>
        </table>
    </div>
    <div class="game">
      <h5>The following Puzzle is a website URL of a company</h5>
          <p> Hint!!:<br> C***U**.****A</p>
      <div class="grid">
        <button>C</button>
        <button>O</button>
        <button>N</button>
        <button>D</button>
        <button>U</button>
        <button>R</button>
        <button>R</button>
        <button>E</button>
        <button>.</button>
        <button>C</button>
        <button>O</button>
        <button>.</button>
        <button>Z</button>
        <button>A</button>
        <button></button>
        <button></button>
      </div>
      <div class="footer">
        <button>Play</button>
        <span id="move">Points: 100</span>
        <span id="time">Time: 100</span>
      </div>
    </div>
    <h1 class="message">You win!</h1>
    <script type="module" src="js/game_functions.js"></script> 
  </body>
</html>