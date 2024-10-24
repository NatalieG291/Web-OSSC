
    <iframe style="position: absolute; float: left; clear: both; width: 100%; height: 150%; z-index: 0; left no-repeat; z-index: -1" src="canvas/constellation/demo.php"></iframe>
<div class="container-fluid full-width mt-5 pt-5">


    <div class="text-lg-start">
        <div class="container text-md-start">
            <div class="row mt-5 mb-0">
                <div class="col-md-10 col-lg-4 col-xl-5 mx-auto mt-1">
                    <h1 class="text-white form-text-t">¿Te gustaria recibir <br />mas informacion?</h1>
                    <h5 class="text-white form-text-s">Nos pondremos en contacto contigo<br /> ¡Nos vemos pronto!</h5>
                </div>
                <div class="col-md-10 col-lg-4 col-xl-5 mx-auto">
                    <form class="row g-3 text-white" id="contactForm" action="acciones/EnviaEmail_modulos.php" method="post">
                        <fieldset>
                            <div class="col-12">
                                <label for="Nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                            </div>
                            <div class="col-12">
                                <label for="Empresa" class="form-label">Empresa</label>
                                <input type="text" class="form-control" id="Empresa" name="Empresa" required>
                            </div>
                            <div class="col-md-12">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="Email" name="Email" required>
                            </div>
                            <div class="col-md-12">
                                <label for="Telefono" class="form-label">Telefono</label>
                                <input type="tel" class="form-control" id="Telefono" pattern="[0-9]{10}" name="Telefono" required>
                            </div>
                            <div class="col-md-12">
                                <label for="mensaje" class="form-label">Dejanos un mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="2" name="Mensaje"></textarea>
                            </div>

                            <div class="row mb-3 mt-3">
                                <legend class="col-form-label col-sm-12 pt-0">Selecciona el software de tu interes</legend>
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Giro" id="giro"
                                               value="Giro">
                                        <label class="form-check-label" for="giro">
                                            GIRO
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Reloj" id="reloj"
                                               value="Reloj">
                                        <label class="form-check-label" for="reloj">
                                            Control de asistencias
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Confronta" id="confronta"
                                               value="Confronta">
                                        <label class="form-check-label" for="confronta">
                                            Confronta GIRO - IDSE - SUA
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Digitalizador" id="digitalizador"
                                               value="Digitalizador">
                                        <label class="form-check-label" for="digitalizador">
                                            Digitalizador de documentos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Kiosco" id="kiosco"
                                               value="Kiosco de empleados">
                                        <label class="form-check-label" for="kiosco">
                                            Kiosco de empleados
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Clima" id="clima"
                                               value="Clima laboral">
                                        <label class="form-check-label" for="clima">
                                            Clima laboral
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="col-12">
                            <span id="msgForm" class="visually-hidden">status</span>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" id="submitForm">Enviar</button>
                            <div class="spinner-border visually-hidden" id="statusSpinnerForm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        <div class="col-12"></div><div class="col-12"></div><div class="col-12"></div> <!-- se agregan debido a que el boton queda fuera del fondo-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS PARA ENVIAR CORREO-->
<script>
    document.getElementById('contactForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const Form = document.getElementById('contactForm');
        const formData = new FormData(Form);
        document.getElementById("statusSpinnerForm").classList.remove("visually-hidden");

        fetch('acciones/EnviaEmail_modulos.php', {
            method: 'POST',
            body: formData
        }).then(response => {
            if (response.ok) {
                return response.text();
            } else {
                throw new Error('Algo salió mal.');
            }
        }).then(data => {
            document.getElementById("statusSpinnerForm").classList.add("visually-hidden");
            document.getElementById("submitForm").textContent = "Enviado";
            document.getElementById("submitForm").classList.add('btn-success');
            document.getElementById("submitForm").classList.remove('btn-primary');
            setTimeout(() => {
                document.getElementById("submitForm").textContent = "Enviar";
                document.getElementById("submitForm").classList.add('btn-primary');
                document.getElementById("submitForm").classList.remove('btn-success');
            }, 3000);
        }).catch(error => {
            document.getElementById("msgForm").classList.remove("visually-hidden");
            document.getElementById("msgForm").textContent = "Error inesperado";
            document.getElementById("msgForm").classList.add("text-danger");
            document.getElementById("statusSpinnerForm").classList.add("visually-hidden");
            document.getElementById("submitForm").textContent = "Error";
            document.getElementById("submitForm").classList.add('btn-danger');
            document.getElementById("submitForm").classList.remove('btn-primary');
            setTimeout(() => {
                document.getElementById("msgForm").classList.add("visually-hidden");
                document.getElementById("submitForm").textContent = "Enviar";
                document.getElementById("submitForm").classList.add('btn-primary');
                document.getElementById("submitForm").classList.remove('btn-danger');
            }, 3000);
        });
    });
</script>