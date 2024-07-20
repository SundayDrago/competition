import './bootstrap';

// resources/js/performanceChart.js

import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', function () {
    const labels = JSON.parse(document.getElementById('labels').textContent);
    const averageScores = JSON.parse(document.getElementById('average_score').textContent);
    const totalAttempts = JSON.parse(document.getElementById('total_attempts').textContent);

    const ctx = document.getElementById('performanceChart').getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Average Score',
                    data: averageScores,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Total Attempts',
                    data: totalAttempts,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
