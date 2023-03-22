
Obter referências aos elementos select e img
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
  'calca-jeans': 'icons/calca-jeans.png',
  'calca-preta': 'icons/calca-preta.png',
  'calca-sarja-bege': 'icons/calca-sarja-bege.png',
  'jaqueta-couro': 'icons/jaqueta-couro.png',
  'moletom-cinza': 'icons/moletom-cinza.png',
  'blazer-preto': 'icons/blazer-preto.png',
  'vestido-vermelho': 'icons/vestido-vermelho.png',
  'vestido-preto': 'icons/vestido-preto.png',
  'vestido-florido': 'icons/vestido-florido.png',
};

// Definir uma função para atualizar o ícone baseado na opção selecionada
function updateIcon(select, icon) {
  const value = select.value;
  const path = iconPaths[value];
  icon.src = path;
}

// Adicionar um listener de mudança de opção para cada select
blusasSelect.addEventListener('change', function() {
  updateIcon(blusasSelect, blusasIcon);
});

calcasSelect.addEventListener('change', function() {
  updateIcon(calcasSelect, calcasIcon);
});

casacosSelect.addEventListener('change', function() {
  updateIcon(casacosSelect, casacosIcon);
});

vestidosSelect.addEventListener('change', function() {
  updateIcon(vestidosSelect, vestidosIcon);
});