<div class="dashboard-content">
    <h1>Dashboard</h1>
    <div class="card-container">
    <?php
        $title = "Usuarios";
        $number = 1200;
        if (file_exists('components/card.php')) {
            include 'components/card.php';
        } else {
            echo "<p>Error: El archivo card.php no se encontró.</p>";
        }
    ?>
    <?php
        $title = "Usuarios";
        $number = 1200;
        if (file_exists('components/card.php')) {
            include 'components/card.php';
        } else {
            echo "<p>Error: El archivo card.php no se encontró.</p>";
        }
    ?>
    <?php
        $title = "Usuarios";
        $number = 1200;
        if (file_exists('components/card.php')) {
            include 'components/card.php';
        } else {
            echo "<p>Error: El archivo card.php no se encontró.</p>";
        }
    ?>
    </div>

    <?php
        $chartTitle = "Subscriptores por Mes";
        $chartId = "subscribersChart";
        $chartType = "line";
        $datasetLabel = "Suscriptores";
        $dataUrl = "assets/data/data.json"; 
        $backgroundColor = "rgba(75, 192, 192, 0.2)";
        $borderColor = "rgba(75, 192, 192, 1)";
        $borderWidth = 2;
        $pointRadius = 5;
        $pointBackgroundColor = "rgba(75, 192, 192, 1)";
        $beginAtZero = true;
        include 'components/chart.php';
    ?>
</div>