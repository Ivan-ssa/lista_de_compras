function adicionarItem() {
    var nomeItem = document.getElementById('nome_item').value;
    var qtdeItem = document.getElementById('qtde').value;
    var valorItem = document.getElementById('valor').value;

    // Valida a quantidade e valor para garantir que são números e dentro dos limites
    if(nomeItem && !isNaN(qtdeItem) && !isNaN(valorItem) && valorItem <= 9999) {
        var itemList = document.getElementById('itemList');
        var newItem = document.createElement('div');
        newItem.classList.add('item');
        newItem.textContent = `Item: ${nomeItem}, Quantidade: ${qtdeItem}, Valor: R$ ${valorItem}`;
        itemList.appendChild(newItem);

        // Limpa os campos de entrada
        document.getElementById('nome_item').value = '';
        document.getElementById('qtde').value = '';
        document.getElementById('valor').value = '';
    } else {
        alert("Por favor, preencha todos os campos corretamente. O valor máximo é 9999.");
    }
}