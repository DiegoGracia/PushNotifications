<div class="table-container">
    <h2><?php echo $tableTitle; ?></h2>
    <table id="<?php echo $tableId; ?>">
        <thead>
            <tr>
                <?php foreach ($headers as $header): ?>
                    <th><?php echo $header; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <!-- Las filas se llenarán con JavaScript -->
        </tbody>
    </table>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const dataUrl = '<?php echo $dataUrl; ?>';

    fetch(dataUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Error en la solicitud: ${response.status} ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            const tbody = document.querySelector('#<?php echo $tableId; ?> tbody');
            tbody.innerHTML = '';
            data.forEach(row => {
                const tr = document.createElement('tr');

                <?php foreach ($headers as $key => $header): ?>
                    const td<?php echo $key; ?> = document.createElement('td');
                    td<?php echo $key; ?>.textContent = row.<?php echo $key; ?>;
                    tr.appendChild(td<?php echo $key; ?>);
                <?php endforeach; ?>

                tbody.appendChild(tr);
            });
        })
        .catch(error => {
            console.error('Error al cargar los datos:', error);
            alert('Error al cargar los datos. Revisa la consola para más detalles.');
        });
});
</script>