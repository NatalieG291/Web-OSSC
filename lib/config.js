

function addInput(value = '') {
    const container = document.getElementById('input-container');
    const inputGroup = document.createElement('div');
    inputGroup.className = 'input-group';
    const newInput = document.createElement('input');
    newInput.type = 'email';
    newInput.value = value;
    newInput.className = 'form-control';
    const removeButton = document.createElement('button');
    removeButton.textContent = 'X';
    removeButton.className = 'btn btn-outline-danger';
    removeButton.type = 'button';
    removeButton.onclick = () => container.removeChild(inputGroup);
    inputGroup.appendChild(newInput);
    inputGroup.appendChild(removeButton);
    container.appendChild(inputGroup);
}

function loadConfig() {
    fetch('acciones/emails.json')
        .then(response => response.json())
        .then(data => {
            const values = data.correos.split(';');
            values.forEach(value => addInput(value));
        })
        .catch(error => console.error('Error al cargar configuración:', error));
}


function collectAndSendInputs() {
    const container = document.getElementById('input-container');
    const inputs = container.getElementsByTagName('input');
    const values = [];
    for (let i = 0; i < inputs.length; i++) {
        values.push(inputs[i].value);
    }
    const valuesString = values.join(';');
    console.log('Enviando valores:', valuesString);
    // Enviar los valores a un servidor usando Fetch API
    fetch('acciones/update_emails.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ correos: valuesString })
    })
        .then(response => response.json())
        .then(data => {
            document.getElementById('status').textContent = data.message;
            document.getElementById('status').classList.add('text-success');
            document.getElementById("status").classList.remove("visually-hidden");
            setTimeout(() => {
                document.getElementById("status").classList.remove("text-success");
                document.getElementById("status").classList.add("visually-hidden");
                document.getElementById("status").textContent = "";
            }, 3000);
        })//console.log('Respuesta del servidor:', data))
        .catch(error => {
            document.getElementById('status').textContent = error.message;
            document.getElementById('status').classList.add('text-danger');
            document.getElementById("status").classList.remove("visually-hidden");
            setTimeout(() => {
                document.getElementById("status").classList.remove("text-danger");
                document.getElementById("status").classList.add("visually-hidden");
                document.getElementById("status").textContent = "";
            }, 3000);
        });
}


window.onload = loadConfig;