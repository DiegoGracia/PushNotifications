<h1>Audiencia</h1>
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