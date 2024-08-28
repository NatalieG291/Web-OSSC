    <div style="display: block; visibility: visible;" id="formsend">
        <div class="formsend js-formsend" id="formOpen">
            <div class="formsend-underlay"></div> <a class="formsend__trigger text-replace form" id="btnOpenForm"></a>
            <div class="formsend__content">
                <div class="formsend__layout">
                    <header class="formsend__header" style="zoom: 1;">
                        <h2 style="text-align: left;"> <span>Contactanos</span></h2>
                        <div class="formsend-account" style="display: flex; align-items: center;">
                            <span class="formsend__close" id="btnOpenForm2"></span>
                        </div>
                    </header>
                    <div id="formsend-body" class="formsend__body" style="zoom: 1;">
                        <div>
                            <div class="formsend-option formsend-toggle formsend-form"
                                 style="display: block; zoom: 1.2;">
                                <div style="margin-bottom: 10px;">
                                    <div class="formsend-label">
                                        Nombre <span class="formsend-required">*</span>
                                    </div> <input type="text" id="txtNombre" class="formsend-input" required>
                                </div>
                                <div style="margin-bottom: 10px;">
                                    <div class="formsend-label">
                                        Correo electronico <span class="formsend-required">*</span>
                                    </div> <input type="email" id="txtEmail" class="formsend-input" required>
                                </div>
                                <div style="margin-bottom: 10px;">
                                    <div class="formsend-label">
                                        ¿Como podemos ayudarte? <span class="formsend-required">*</span>
                                    </div> <textarea class="formsend-input"
                                                     style="min-height: 80px; padding: 5px 10px;" id="txtDetalle" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="formsend__footer" style="font-size: 14px;">
                        <a class="formsend__checkout"
                           style="background-color: rgb(63, 156, 217);" id="btnEnviar" onclick="EnviaMensaje()">
                            <div class="spinner-border visually-hidden" id="statusSpinner" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <em id="status">
                                <span id="txtStatus">Enviar</span> <svg viewBox="0 0 24 24" class="icon icon--sm">
                                    <g fill="none" stroke="#FFF">
                                        <line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3"
                                              y1="12" x2="21" y2="12"></line>
                                        <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  points="15,6 21,12 15,18 "></polyline>
                                    </g>
                                </svg>
                            </em>
                        </a>
                    </footer>
                </div>
            </div>
        </div>
    </div>