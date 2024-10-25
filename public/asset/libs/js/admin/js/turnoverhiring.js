        // Data
        const data = {
            all: {
                total: 150,
                change: '+5%',
                chartData: {
                    labels: ['Turnover', 'Hiring Needs'],
                    datasets: [{
                        label: 'All Employees',
                        data: [10, 20],
                        backgroundColor: ['#ff407b', '#25d5f2'],
                        borderColor: ['#16a34a', '#2563eb'],
                        borderWidth: 1
                    }]
                }
            },
            male: {
                total: 85,
                change: '+3%',
                chartData: {
                    labels: ['Turnover', 'Hiring Needs'],
                    datasets: [{
                        label: 'Male Employees',
                        data: [7, 15],
                        backgroundColor: ['#ff407b', '#25d5f2'],
                        borderColor: ['#16a34a', '#2563eb'],
                        borderWidth: 1
                    }]
                }
            },
            female: {
                total: 65,
                change: '+7%',
                chartData: {
                    labels: ['Turnover', 'Hiring Needs'],
                    datasets: [{
                        label: 'Female Employees',
                        data: [8, 12],
                        backgroundColor: ['#ff407b', '#25d5f2'],
                        borderColor: ['#16a34a', '#2563eb'],
                        borderWidth: 1
                    }]
                }
            }
        };

        // Initialize chart
        const ctx = document.getElementById('turnoverChart').getContext('2d');
        let turnoverChart = new Chart(ctx, {
            type: 'bar',
            data: data.all.chartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#e5e7eb'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });

        // Update function
        function updateDashboard(category) {
            // Update buttons
            document.querySelectorAll('.button').forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.category === category) {
                    btn.classList.add('active');
                }
            });

            // Update stats
            document.getElementById('totalEmployees').textContent = data[category].total;
            document.getElementById('yoyChange').textContent = data[category].change;

            // Update chart
            turnoverChart.data = data[category].chartData;
            turnoverChart.update();
        }

        // Event listeners
        document.querySelectorAll('.button').forEach(button => {
            button.addEventListener('click', (e) => {
                const category = e.currentTarget.dataset.category;
                updateDashboard(category);
            });
        });
        var chart = new Chartist.Pie('.ct-chart-allemployee', {
            series: [60, 30, 30],
            labels: ['Bananas', 'Apples', 'Grapes']
        }, {
            donut: true,
            showLabel: false,
            donutWidth: 40
    
        });