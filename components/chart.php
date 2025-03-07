
<div class="chart-container">
    <h2><?php echo $chartTitle; ?></h2>
    <canvas id="<?php echo $chartId; ?>"></canvas>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const dataUrl = '<?php echo $dataUrl; ?>';
    fetch(dataUrl)
        .then(response => response.json())
        .then(data => {
            const ctx = document.getElementById('<?php echo $chartId; ?>').getContext('2d');

            new Chart(ctx, {
                type: '<?php echo $chartType; ?>', 
                data: {
                    labels: data.labels, // Etiquetas
                    datasets: [{
                        label: '<?php echo $datasetLabel; ?>', // Etiqueta del dataset
                        data: data.data, // Datos
                        backgroundColor: '<?php echo $backgroundColor; ?>', // Color de fondo
                        borderColor: '<?php echo $borderColor; ?>', // Color del borde
                        borderWidth: <?php echo $borderWidth; ?>, // Ancho del borde
                        pointRadius: <?php echo $pointRadius; ?>, // Tamaño de los puntos
                        pointBackgroundColor: '<?php echo $pointBackgroundColor; ?>', // Color de los puntos
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: <?php echo $beginAtZero; ?> 
                        }
                    },
                    responsive: true, 
                    maintainAspectRatio: false 
                }
            });
        })
        .catch(error => {
            console.error('Error al cargar los datos:', error);
        });
});
</script>