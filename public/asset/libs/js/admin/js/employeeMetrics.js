     document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('absenteeismChart').getContext('2d');
        const data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Absence Rate',
                    data: [3.2, 3.5, 3.1, 3.4, 3.6, 3.8],
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                    borderColor: 'rgb(255, 99, 132)',
                    borderWidth: 1
                },
                {
                    label: 'Presence Rate',
                    data: [96.8, 96.5, 96.9, 96.6, 96.4, 96.2],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgb(75, 192, 192)',
                    borderWidth: 1
                }
            ]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Rate (%)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    }
                }
            }
        };
        new Chart(ctx, config);
    });
//
//Department Category
//
    


    var chart = c3.generate({
        bindto: "#department-category",
        data: {
            columns: [
                ['Logistic', 4],
                ['HR', 4],
                ['ADMIN', 10],
                ['Finance', 10],
                ['Employee', 30],
    
            ],
            type: 'donut',
    
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); },
    
            colors: {
                Logistic: '#5969ff',
                HR: '#ff407b',
                ADMIN: '#25d5f2',
                Finance: '#ffc750',
                Employee: '#2ec551',
    
    
    
            }
        },
        donut: {
            label: {
                show: false
            }
        },
    
    
    
    });