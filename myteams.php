 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Hackathon Activity</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f4f8;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 800px;
      margin: auto;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #1e3a8a;
    }

    .card {
      background: white;
      padding: 20px;
      margin-bottom: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .card h2 {
      margin-bottom: 15px;
      color: #333;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      background: #e2e8f0;
      margin-bottom: 10px;
      padding: 10px 15px;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>📅 My Hackathon Activity</h1>

    <!-- Section 1: Hackathons you've requested to join -->
    <section class="card">
      <h2>✅ Hackathon Join Requests</h2>
      <ul id="joinRequestsList">
        <!-- Data will be loaded here -->
      </ul>
    </section>

    <!-- Section 2: Teams you have created -->
    <section class="card">
      <h2>👥 My Created Teams</h2>
      <ul id="createdTeamsList">
        <!-- Data will be loaded here -->
      </ul>
    </section>
  </div>

  <script>
    // Sample Dummy Data (replace this with PHP + fetch later)
    const joinRequests = [
      { hackathon: "AI Innovation Challenge", date: "2025-07-22" },
      { hackathon: "Smart City Hack", date: "2025-07-18" }
    ];

    const createdTeams = [
      { teamName: "Tech Titans", hackathon: "Green Energy Hackathon" },
      { teamName: "Code Ninjas", hackathon: "Startup Sprint 2025" }
    ];

    // Load data into HTML
    window.onload = function () {
      const joinList = document.getElementById("joinRequestsList");
      const teamList = document.getElementById("createdTeamsList");

      joinRequests.forEach(item => {
        const li = document.createElement("li");
        li.innerText = `${item.hackathon} (requested on ${item.date})`;
        joinList.appendChild(li);
      });

      createdTeams.forEach(item => {
        const li = document.createElement("li");
        li.innerText = `${item.teamName} - ${item.hackathon}`;
        teamList.appendChild(li);
      });
    };
  </script>
</body>
</html>
