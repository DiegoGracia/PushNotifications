<div>
    <div class="notificaciones-top-container">
        <h1>Notificaciones Push</h1>
        <?php
        $action = "window.location.href='index.php?section=create-notification';";
        $icon = "fas fa-save";
        $text = "Nueva Notificacion";
        include 'components/button.php'; 
        ?>
    </div>
    <?php
        $tableTitle = "Mensajes Enviados";
        $tableId = "messagesTable";
        $headers = [
            "nombre" => "Nombre del Mensaje",
            "status" => "Status",
            "fecha" => "Fecha",
            "destinatarios" => "Destinatarios",
            "conversaciones" => "Conversaciones"
        ];
        $dataUrl = "assets/data/messages.json"; // URL del archivo JSON o API

        include 'components/notifications-table.php';
    ?>
</div>