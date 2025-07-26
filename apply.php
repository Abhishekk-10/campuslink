<?php

include 'config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $teamMembers = $_POST['teamMembers'];
    $projectName = $_POST['projectName'];
    $techStack = $_POST['techStack'];
    $team = $_POST['team'];

    $sql = "INSERT INTO team_join_requests (name, team_members, project_name, tech_stack, team)
            VALUES ('$name', '$teamMembers', '$projectName', '$techStack', '$team')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Form submitted successfully!');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hackathon Teams</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .team {
            background-color: white;
            padding: 20px;
            margin: 15px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .team h2 {
            margin: 0 0 10px;
            color: #222;
        }

        .team p {
            margin: 5px 0;
            color: #555;
        }

        .join-btn {
            margin-top: 10px;
            background-color: #007BFF;
            color: white;
            padding: 8px 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .join-btn:hover {
            background-color: #0056b3;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.6);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            width: 400px;
            border-radius: 10px;
            position: relative;
        }

        .modal h3 {
            margin-top: 0;
        }

        .modal input, .modal textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .close {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 22px;
            cursor: pointer;
            color: red;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
            padding: 8px 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #1e7e34;
        }
    </style>
</head>
<body>

    <h1>Available Hackathon Teams</h1>

    <div class="team">
        <h2>Team AlphaCoders</h2>
        <p>Hackathon: CodeStorm 2025</p>
        <p>Skills: Web Dev, UI/UX, Backend</p>
        <button class="join-btn" onclick="openModal('AlphaCoders')">Join</button>
    </div>

    <div class="team">
        <h2>Team ByteHunters</h2>
        <p>Hackathon: DevSprint</p>
        <p>Skills: AI/ML, Frontend, Research</p>
        <button class="join-btn" onclick="openModal('ByteHunters')">Join</button>
    </div>

    <div class="team">
        <h2>Team FutureBuilders</h2>
        <p>Hackathon: Hack4Future</p>
        <p>Skills: Backend, DevOps, Management</p>
        <button class="join-btn" onclick="openModal('FutureBuilders')">Join</button>
    </div>

    <!-- Modal Dialog Box -->
    <div class="modal" id="joinModal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3>Join <span id="teamNameDisplay"></span></h3>
            <form id="joinForm" method="POST" action="">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="text" name="teamMembers" placeholder="Team Members' Names" required>
                <input type="text" name="projectName" placeholder="Project Name" required>
                <textarea name="techStack" placeholder="Tech Stack (e.g., HTML, CSS, JS)" rows="3" required></textarea>
                <input type="hidden" name="team" id="teamHidden">
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function openModal(teamName) {
            document.getElementById("joinModal").style.display = "block";
            document.getElementById("teamNameDisplay").innerText = teamName;
            document.getElementById("teamHidden").value = teamName;
        }

        function closeModal() {
            document.getElementById("joinModal").style.display = "none";
            document.getElementById("joinForm").reset();
        }
    </script>
</body>
</html>
