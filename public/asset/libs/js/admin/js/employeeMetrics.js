// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get the canvas element
    const ctx = document.getElementById('absenteeismChart').getContext('2d');
    
    // Sample data - replace with your actual data
    const chartData = {
        male: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            absent: [10.2, 9.8, 3.1, 2.9, 3.0, 3.7],
            present: [90.8, 97.2, 96.9, 97.1, 97.0, 97.3]
        },
        female: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            absent: [10.5, 3.2, 3.4, 3.1, 9.3, 3.0],
            present: [96.5, 96.8, 96.6, 96.9, 90.7, 95.0]
        },
        all: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            absent: [20.35, 11.0, 6.25, 3.0, 11.15, 6.85],
            present: [80.65, 90.0, 96.75, 97.0, 90.85, 97.15]
        }
    };

    // Initialize the chart with 'all' data
    let absenteeismChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: chartData.all.labels,
            datasets: [
                {
                    label: 'Absence Rate:',
                    data: chartData.all.absent,
                    backgroundColor: 'rgba(231, 74, 59, 0.8)',
                    borderColor: 'rgba(231, 74, 59, 1)',
                    borderWidth: 1,
                    borderRadius: 4,
                    barPercentage: 0.8,
                    categoryPercentage: 0.4
                },
                {
                    label: 'Presence Rate:',
                    data: chartData.all.present,
                    backgroundColor: 'rgba(28, 200, 138, 0.8)',
                    borderColor: 'rgba(28, 200, 138, 1)',
                    borderWidth: 1,
                    borderRadius: 4,
                    barPercentage: 0.8,
                    categoryPercentage: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        callback: function(value) {
                            return value + '%';
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        boxWidth: 12
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + context.parsed.y.toFixed(1) + '%';
                        }
                    }
                }
            }
        }
    });

    // Add click event listeners to all buttons
    const buttons = document.querySelectorAll('.button');
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            updateChart(category);
            
            // Update active button state
            buttons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Function to update chart data
    function updateChart(category) {
        absenteeismChart.data.labels = chartData[category].labels;
        absenteeismChart.data.datasets[0].data = chartData[category].absent;
        absenteeismChart.data.datasets[1].data = chartData[category].present;
        
        // Change accent colors based on category
        let accentColor;
        switch(category) {
            case 'male':
                accentColor = 'rgba(54, 185, 204, 0.8)';
                absenteeismChart.data.datasets[0].backgroundColor = accentColor;
                break;
            case 'female':
                accentColor = 'rgba(246, 194, 62, 0.8)';
                absenteeismChart.data.datasets[0].backgroundColor = accentColor;
                break;
            default:
                accentColor = 'rgba(231, 74, 59, 0.8)';
                absenteeismChart.data.datasets[0].backgroundColor = accentColor;
        }
        
        absenteeismChart.update();
    }

    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});