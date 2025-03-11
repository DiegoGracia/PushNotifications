<div class="create-notification-container">
    <div class="top-section">
        <h1>Crear Notificación Push</h1>
        <button class="custom-button" onclick="window.location.href='index.php?section=notifications'">
            <i class="fas fa-arrow-left"></i>
            <span>Volver</span>
        </button>
    </div>

    <div class="input-container white-container">
        <input type="text" placeholder="Nombre del mensaje" class="large-input">
    </div>

    <div class="selection-container white-container">
        <div class="radio-buttons">
            <label>
                <input type="radio" name="option" value="opcion1"> Opción 1
            </label>
            <label>
                <input type="radio" name="option" value="opcion2"> Opción 2
            </label>
        </div>
        <select class="country-selector">
            <option value="">Selecciona un país</option>
            <option value="mx">México</option>
            <option value="us">Estados Unidos</option>
            <option value="es">España</option>
        </select>
    </div>

    <div class="split-container white-container">
        <div class="form-container">
            <form>
                <div class="form-group">
                    <label for="notification-link">Enlace de notificación</label>
                    <input type="text" id="notification-link" placeholder="Enlace de notificación">
                </div>
                <div class="form-group">
                    <label for="notification-message">Mensaje de la notificación</label>
                    <textarea id="notification-message" placeholder="Mensaje de la notificación"></textarea>
                </div>
                <div class="form-group">
                    <label for="notification-image">Imagen de la notificación</label>
                    <input type="text" id="notification-image" placeholder="Imagen de la notificación">
                </div>
                <button type="submit" class="custom-button">
                    <span>Enviar</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>

        <!-- Lado derecho: Imagen de placeholder -->
        <div class="image-container">
            <img src="https://via.placeholder.com/300" alt="Placeholder">
        </div>
    </div>
</div>