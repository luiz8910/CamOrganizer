
let cep_validator = document.getElementById("zip_code");

cep_validator.addEventListener('input', function (event) {
    let inputValue = event.target.value;

    event.target.value = inputValue.replace(/[^0-9-/]/g, '');
})


// Função para buscar o endereço pelo CEP
async function buscarEndereco() {

    let cep = document.getElementById("zip_code");

    // Remover qualquer máscara do CEP (como traços ou espaços)
    cep = cep.value.replace(/\D/g, '');

    // Validar o formato do CEP
    if (!/^[0-9]{8}$/.test(cep)) {
        console.error('CEP inválido.');
        return;
    }

    try {
        const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        if (!response.ok) {
            throw new Error('Erro ao buscar dados do CEP.');
        }

        const data = await response.json();

        if (data.erro) {
            console.error('CEP não encontrado.');
            return;
        }

        console.log('Endereço encontrado:', data);

        document.getElementById('address').value = data.logradouro;
        document.getElementById('city').value = data.localidade;
        document.getElementById('uf').value = data.uf;
        document.getElementById('number').focus();

    } catch (error) {
        console.error('Erro na consulta:', error.message);
    }
}

buscarEndereco();
