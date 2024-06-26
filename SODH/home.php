<!DOCTYPE html>
<html lang="en">
<head>
    <title>Impact Of Social Determinants Of Health</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }
        main {
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        section {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            margin-bottom: 15px;
        }
        form {
            display: flex;
            margin-top: 10px;
        }
        label {
            margin-right: 10px;
            color: #333;
        }
        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 8px 15px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Impact Of Social Determinants Of Health</h1>
    
    <header>
        <h1 style="margin: 0;">Dashboard</h1>
    </header>
    <main>
        <section class="analytics-section">
            <h2>Weather Analytics</h2>
            <p>Current Temperature: 25°C</p>
            <p>Humidity: 70%</p>
        </section>
        <section class="diet-section">
            <h2>Daily Dietary Notification</h2>
            <p>Today's Recommendation: Eat more fruits and vegetables.</p>
            <p>Track your intake:</p>
            <form id="diet-form">
                <label for="food-input">Food:</label>
                <input type="text" id="food-input" name="food" placeholder="Enter food">
                <button type="submit">Add</button>
            </form>
        </section>
        <section class="analytics-chart-section">
            <h2>Analytics Chart</h2>
            <canvas id="analyticsChart" width="400" height="200"></canvas>
        </section>

        <section>

            <h2>Desease and Health</h2>
            <p>Click the button below.</p>
            <button onclick="window.location.href='dengue.php'">Go</button>

            <h2>Food and Nutrition</h2>
            <p>Click the button below.</p>
            <button onclick="window.location.href='food.php'">Go</button>



        </section>

       
    </main>
    <footer>
        <p style="margin: 0;">&copy; 2023 Dashboard. All rights reserved.</p>
    </footer>
    <script>
        // Placeholder JavaScript for dashboard functionalities
        document.getElementById('diet-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Placeholder logic for handling form submission
            const foodInput = document.getElementById('food-input').value;
            alert(`Food added: ${foodInput}`);
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Placeholder data for the analytics chart
            const analyticsChartData = [10, 20, 30, 40, 50, 60, 70];
            // Function to create the analytics chart
            // Function to create the analytics chart as a pie chart
function createAnalyticsChart() {
    const ctx = document.getElementById('analyticsChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7'],
            datasets: [{
                label: 'Analytics Data',
                data: analyticsChartData,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 69, 0, 0.5)' // Add more colors as needed
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 69, 0, 1)' // Add more colors as needed
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            aspectRatio: 1, // Maintain a 1:1 aspect ratio
}
});
}
            // Call the createAnalyticsChart function when the page loads
            createAnalyticsChart();
        });
    </script>
</body>
</html>
