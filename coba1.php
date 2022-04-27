<html>
    <head>
        <title>Belajarphp.net - ChartJS</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
            <canvas id="myChart" width="100" height="100"></canvas>
            <canvas id="pieChart" width="100" height="100"></canvas>
        </div>
            </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                    datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
        
   <script>
        var data = {
  labels: ["x1", "x2", "x3", "x4", "x5"],
  datasets: [{
    label: "Actual",
    backgroundColor: 'rgba(0, 0, 255, 0.5)',
    borderWidth: 1,
    data: [40, 150, 50, 60, 70],
    yAxisID: "bar-y-axis1"
  }]
};

// invert the sign of each of the values.
data.datasets[0].data.map((currentValue, index, array) => {
  array[index] = currentValue * -1;
});

var options = {
  tooltips: {
    callbacks: {
      label: function(tooltipItem, data) {
        var label = data.datasets[tooltipItem.datasetIndex].label || '';

        if (label) {
          label += ': ';
        }
        label += tooltipItem.xLabel * -1; // invert the sign for display.
        return label;
      }
    }
  },
  scales: {
    yAxes: [{
      id: "bar-y-axis1",
      categoryPercentage: 0.5,
      barPercentage: 0.5,
      position: 'right' // right-align axis.
    }],

    xAxes: [{
      id: "bar-x-axis1",
      stacked: false,
      ticks: {
        callback: function(value, index, values) {
          return value * -1; // invert the sign for tick labelling.
        },
        beginAtZero: true
      }
    }]
  }
};

var ctx = document.getElementById("canvas").getContext("2d");
var myBarChart = new Chart(ctx, {
  type: 'horizontalBar',
  data: data,
  options: options
}); </script>
        <script>
            var ctx = document.getElementById("pieChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                    datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    </body>
</html>
var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        
                            label: '# of Votes',
                            data: [120, 190, 30, 50, 20, 30],
                            backgroundColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 0.9)',
                                'rgba(255, 206, 86, 0.9)',
                                'rgba(75, 192, 192, 0.9)',
                                'rgba(153, 102, 255, 0.9)',
                                'rgba(255, 159, 64, 0.9)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        xAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            
                            }]
                    }
                }
                
            });