<?php
// PHP backend logic (runs on form submit)
$successMessage = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "campuslink"; // 🔁 Apna database name yaha daalo

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        $errorMessage = "Database connection failed!";
    } else {
        // Get form values
        $teamName = $conn->real_escape_string($_POST['teamName']);
        $participants = (int) $_POST['participants'];
        $skills = $conn->real_escape_string($_POST['skills']);

        // Insert query
         $sql = "INSERT INTO teams (team_name, participants, skills)
        VALUES ('$teamName', $participants, '$skills')";


        if ($conn->query($sql) === TRUE) {
            $successMessage = "✅ Team created successfully!";
        } else {
            $errorMessage = "❌ Error: " . $conn->error;
        }

        $conn->close();
    }
}
?>

<!-- 🌑 HTML with dark theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Team</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #121212;
      color: #f0f0f0;
      padding: 30px;
      max-width: 700px;
      margin: auto;
    }

    h1 {
      text-align: center;
      color: #00bcd4;
    }

    form {
      background-color: #1e1e1e;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #bbbbbb;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #444;
      border-radius: 6px;
      font-size: 16px;
      background-color: #2c2c2c;
      color: #f0f0f0;
    }

    input::placeholder, textarea::placeholder {
      color: #888;
    }

    button {
      background-color: #00bcd4;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0097a7;
    }

    .message {
      padding: 12px;
      border-left: 5px solid #00bcd4;
      margin-bottom: 20px;
      background-color: #1e1e1e;
    }

    .team-summary {
      background-color: #1e1e1e;
      padding: 15px;
      border-left: 4px solid #00bcd4;
      border-radius: 8px;
      margin-top: 20px;
    }

    .team-summary h3 {
      margin: 0 0 10px 0;
      color: #00ffcc;
    }

    .team-summary p {
      margin: 4px 0;
    }
  </style>
</head>
<body>

  <h1>Create Your Team</h1>

  <!-- ✅ Show success or error -->
  <?php if ($successMessage): ?>
    <div class="message" style="color: #00ffcc;"><?php echo $successMessage; ?></div>
  <?php elseif ($errorMessage): ?>
    <div class="message" style="color: #ff6666;"><?php echo $errorMessage; ?></div>
  <?php endif; ?>

  <!-- 📄 Form -->
  <form method="POST" onsubmit="showTeamCard(event)">
    <label for="teamName">Team Name</label>
    <input type="text" id="teamName" name="teamName" required>

    <label for="participants">Number of Participants</label>
    <input type="number" id="participants" name="participants" required min="1">

    <label for="skills">Skills Required</label>
    <textarea id="skills" name="skills" required></textarea>

    <button type="submit">Create Team</button>
  </form>

  <!-- 📦 Team Card Display -->
  <div id="teamCard"></div>

  <!-- 🔥 JavaScript -->
  <script>
    function showTeamCard(event) {
      // Stop actual form submit
      event.preventDefault();

      // Get values
      const teamName = document.getElementById('teamName').value.trim();
      const participants = document.getElementById('participants').value;
      const skills = document.getElementById('skills').value.trim();

      // Create display
      const cardDiv = document.getElementById('teamCard');
      cardDiv.innerHTML = `
        <div class="team-summary">
          <h3>🚀 Team Preview</h3>
          <p><strong>Team Name:</strong> ${teamName}</p>
          <p><strong>Participants:</strong> ${participants}</p>
          <p><strong>Skills:</strong> ${skills}</p>
        </div>
      `;

      // Submit the form after 500ms delay to show preview first
      setTimeout(() => {
        event.target.submit();
      }, 500);
    }
  </script>

</body>
</html>
