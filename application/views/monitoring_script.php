<script>
var ctx = document.getElementById('canvas_day').getContext('2d');

var chartConfig = {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
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
                'rgba(255, 99, 132, 1)',
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
        responsive: true,
        aspectRatio : 2
        /*scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }*/
    }
};
var myChart = new Chart(ctx,chartConfig);

var ctx2 = document.getElementById('canvas_month').getContext('2d');
var myChart = new Chart(ctx2,chartConfig);

var ctx3 = document.getElementById('canvas_year').getContext('2d');
var myChart = new Chart(ctx3,chartConfig);

</script>