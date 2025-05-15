
function buscarConselho() {
  fetch('conselhos.php')
    .then(response => response.json())
    .then(data => {
      const conselho = `"${data.frase}" — ${data.autor}`;
      document.getElementById('conselho').textContent = conselho;
    })
    .catch(error => {
      document.getElementById('conselho').textContent = "Erro ao buscar conselho.";
      console.error('Erro:', error);
    });
}
