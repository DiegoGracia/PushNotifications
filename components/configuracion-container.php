<div class="configuracion-container">
    <!-- Lado izquierdo -->
    <div class="left-side">
        <h2>Configuración del Sitio</h2>
        <form>
            <!-- Input 1: Nombre del sitio -->
            <div class="form-group">
                <label for="site-name">Nombre del sitio</label>
                <input type="text" id="site-name" placeholder="Nombre del sitio">
            </div>

            <!-- Input 2: URL del sitio -->
            <div class="form-group">
                <label for="site-url">URL del sitio</label>
                <input type="text" id="site-url" placeholder="URL del sitio">
            </div>

            <!-- Input 3: Imagen por defecto -->
            <div class="form-group">
                <label for="default-image">Imagen por defecto</label>
                <input type="text" id="default-image" placeholder="Imagen por defecto">
            </div>

            <!-- Switch: Mi sitio no es completamente HTTPS -->
            <div class="form-group switch-group">
                <label for="https-switch">Mi sitio no es completamente HTTPS</label>
                <label class="switch">
                    <input type="checkbox" id="https-switch">
                    <span class="slider"></span>
                </label>
            </div>

            <div class="form-group">
                <label for="certificate">certificado pt12</label>
                <input type="text" id="certificate" placeholder="certificado pt12">
            </div>
        </form>
    </div>

    <!-- Lado derecho -->
    <div class="right-side">
        <h2>Vista Previa</h2>
        <div class="image-container">
            <img src="https://via.placeholder.com/300" alt="Vista previa">
        </div>
    </div>
</div>