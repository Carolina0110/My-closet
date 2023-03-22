const listaRoupas = document.getElementById('lista-roupas');

function adicionarRoupa() {
  const roupa = prompt('Digite o nome da roupa:');
  const itemLista = document.createElement('li');
  itemLista.textContent = roupa;
  listaRoupas.appendChild(itemLista);
}

document.getElementById('btn-adicionar').addEventListener('click', adicionarRoupa);