<script>


var dataLine = {
        labels: <?php echo json_encode($label_day); ?>,
        datasets: [{
            label: 'Energi',
            data: <?php echo json_encode($energy_data_daily); ?>,
            backgroundColor: '#ff6384',
            borderColor: '#ff6384',
            borderWidth: 1,
            fill:false,
        }]
}

var dataLine2 = {
    labels: <?php echo json_encode($label_day); ?>,
    datasets: [{
        label: 'Daya',
        data: <?php echo json_encode($power_data_daily); ?>,
        backgroundColor: '#36a2eb',
        borderColor: '#36a2eb',
        borderWidth: 1,
        fill:false,
    }]
}

var optionsChart = {
    responsive: true,
    mainAspectRatio : true,
    aspectRatio : 4
}

function start(){

    var ctx = document.getElementById('canvas_day_energy').getContext('2d');
    var myChart = new Chart(ctx,{
        type: 'line',
        data: dataLine,
        options: optionsChart
    });

    var ctx2 = document.getElementById('canvas_day_power').getContext('2d');
    var myChart = new Chart(ctx2,{
        type: 'line',
        data: dataLine2,
        options: optionsChart
    });

    var ctx3 = document.getElementById('canvas_year').getContext('2d');
    var myChart = new Chart(ctx3,chartConfig);
}

window.onload = start();
</script>