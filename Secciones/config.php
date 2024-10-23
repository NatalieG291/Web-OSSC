<?php
    $config = include('acciones/config.php');
?>

<div class="m-4 mt-5 pt-5">
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item mx-2">
            <a href="#correos" class="nav-link active" data-bs-toggle="tab">Listado de correos</a>
        </li>
        <li class="nav-item mx-2">
            <a href="#SMTP" class="nav-link" data-bs-toggle="tab">Servidor SMTP</a>
        </li>
        <!--        <li class="nav-item">
                    <a href="#messages" class="nav-link" data-bs-toggle="tab">Messages</a>
                </li>-->
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="correos">


            <div class="col-md-10 col-lg-4 col-xl-5 mx-auto" id="input-container">
                <h2>Correos para notificacion</h2>
            </div>
            <div class="col-md-10 col-lg-4 col-xl-5 mx-auto mb-3">
                <span id="status" class="visually-hidden">error</span>
            </div>
            <div class="col-md-10 col-lg-4 col-xl-5 mx-auto">
                <button class="btn btn-primary" onclick="collectAndSendInputs()">Guardar</button>
                <button class="btn btn-success" onclick="addInput()">Nuevo correo</button>
            </div>

        </div>
        <div class="tab-pane fade" id="SMTP">
            <div class="col-md-10 col-lg-4 col-xl-5 mx-auto">
                <form id="configForm" class="row g-3" action="acciones/update_config.php" method="post">
                    <fieldset>
                        <legend>Configuracion de servidor SMTP</legend>
                        <div class="col-md-12 mb-3">
                            <label for="Servidor" class="form-label">Servidor SMTP</label>
                            <input type="text" class="form-control" id="Servidor" name="ServidorSMTP" value="<?php echo htmlspecialchars($config['ServidorSMTP']); ?>" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="puerto" class="form-label">Puerto</label>
                            <input type="text" class="form-control" id="puerto" name="puerto" value="<?php echo htmlspecialchars($config['puerto']); ?>" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Email" class="form-label">Cuenta de correo</label>
                            <input type="Email" class="form-control" id="Email" name="correo" value="<?php echo htmlspecialchars($config['correo']); ?>" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="Pass" name="contra" value="<?php echo htmlspecialchars($config['contra']); ?>" required>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Seguridad</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="seguridad" id="SSL" value="SSL" <?php if(htmlspecialchars($config['seguridad']) == 'SSL') { echo 'checked';} ?>>
                                    <label class="form-check-label" for="SSL">
                                        SSL
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="seguridad" id="TLS" value="TLS" <?php if(htmlspecialchars($config['seguridad']) == 'TLS') { echo 'checked';} ?>>
                                    <label class="form-check-label" for="TLS">
                                        TLS
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="col-md-12 mb-3">
                            <div class="form-check form-check-inline form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="debug" name="debug" <?php if(htmlspecialchars($config['debug']) == 'true') { echo 'checked';} ?>>
                                <label class="form-check-label" for="debug">Debuggear</label>
                            </div>
                            <div class="form-check form-check-inline form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="auth" name="autenticar" <?php if(htmlspecialchars($config['autenticar']) == 'true') { echo 'checked';} ?>>
                                <label class="form-check-label" for="auth">Autenticar</label>
                            </div>
                        </div>
                        <span id="status2" class="mb-3 visually-hidden">erorr</span><br />
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="messages">
        <h4 class="mt-2">Messages tab content</h4>
        <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
    </div>
</div>

<script>
    document.getElementById('configForm').addEventListener('submit', function (event) {
        event.preventDefault();

        var formData = new FormData(this);

        fetch('acciones/update_config.php', {
            method: 'POST',
            body: formData
        }).then(response => {
            if (response.ok) {
                return response.text();
            } else {
                throw new Error('Algo salió mal.');
            }
        }).then(data => {
            document.getElementById('status2').textContent = data;
            document.getElementById('status2').classList.add('text-success');
            document.getElementById("status2").classList.remove("visually-hidden");
            setTimeout(() => {
                document.getElementById("status2").classList.remove("text-success");
                document.getElementById("status2").classList.add("visually-hidden");
                document.getElementById("status2").textContent = "";
            }, 3000);
        }).catch(error => {
            document.getElementById('status2').textContent = error;
            document.getElementById('status2').classList.add('text-success');
            document.getElementById("status2").classList.remove("visually-hidden");
            setTimeout(() => {
                document.getElementById("status2").classList.remove("text-success");
                document.getElementById("status2").classList.add("visually-hidden");
                document.getElementById("status2").textContent = "";
            }, 3000);
        });
    });
</script>