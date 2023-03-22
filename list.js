const listaRoupas = document.getElementById('lista-roupas');

function adicionarRoupa() {
  const roupa = prompt('Digite o nome da roupa:');
  const itemLista = document.createElement('li');
  itemLista.textContent = roupa;
  listaRoupas.appendChild(itemLista);
}

document.getElementById('btn-adicionar').addEventListener('click', adicionarRoupa);

// Obter referências aos elementos select e img
const blusasSelect = document.getElementById('blusas');
const blusasIcon = document.getElementById('blusas-icon');
const calcasSelect = document.getElementById('calcas');
const calcasIcon = document.getElementById('calcas-icon');
const casacosSelect = document.getElementById('casacos');
const casacosIcon = document.getElementById('casacos-icon');
const vestidosSelect = document.getElementById('vestidos');
const vestidosIcon = document.getElementById('vestidos-icon');

// Definir um objeto que mapeia os valores dos options aos caminhos dos ícones
const iconPaths = {
  'blusa-branca': 'icons/blusa-branca.png',
  'blusa-preta': 'icons/blusa-preta.png',
  'blusa-vermelha': 'icons/blusa-vermelha.png',
  'camisa-social-azul': 'icons/camisa-social-azul.png',
  'calca-jeans': 'icons/calca-jeans.png