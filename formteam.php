<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Team - Simple Text View</title>
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
      box-shadow: 0 4px 6px rgba(0,0,0,0.6);
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

    input::placeholder,
    textarea::placeholder {
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

    .team-line {
      padding: 10px;
      border-bottom: 1px solid #333;
      font-size: 16px;
      color: #e0e0e0;
    }

    .team-line span {
      color: #00bcd4;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h1>Create Your Team</h1>

  <form id="teamForm">
    <label for="teamName">Team Name</label>
    <input type="text" id="teamName" placeholder="Enter team name" required>

    <label for="participants">Number of Participants</label>
    <input type="number" id="participants" placeholder="e.g. 4" required min="1">

    <label for="skills">Skills Required</label>
    <textarea id="skills" placeholder="e.g. HTML, CSS, JavaScript" required></textarea>

    <button type="submit">Create Team</button>
  </form>

  <div id="teamList">
    <!-- Teams will appear here -->
  </div>

  <script>
    document.getElementById('teamForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const name = document.getElementById('teamName').value.trim();
      const count = document.getElementById('participants').value.trim();
      const skills = document.getElementById('skills').value.trim();

      if (name === '' || count === '' || skills === '') {
        alert("Please fill all fields!");
        return;
      }

      const line = document.createElement('div');
      line.className = 'team-line';
      line.innerHTML = `🔹 <span>${name}</span> (${count} members) – Skills: ${skills}`;
      document.getElementById('teamList').appendChild(line);

      // Clear the form
      document.getElementById('teamForm').reset();
    });
  </script>

</body>
</html
