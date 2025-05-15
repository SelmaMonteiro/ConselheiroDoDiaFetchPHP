
<?php
header('Content-Type: application/json');

$conselhos = [
  ["frase" => "Conhece-te a ti mesmo.", "autor" => "Sócrates"],
  ["frase" => "A felicidade não é algo pronto. Ela vem de suas próprias ações.", "autor" => "Dalai Lama"],
  ["frase" => "Seja a mudança que você quer ver no mundo.", "autor" => "Gandhi"],
  ["frase" => "A dificuldade é aquela coisa terrível que você vê quando tira os olhos do seu objetivo.", "autor" => "Henry Ford"],
  ["frase" => "Não espere por uma crise para descobrir o que é importante em sua vida.", "autor" => "Platão"],
  ["frase" => "A coragem é a primeira das qualidades humanas porque garante todas as outras.", "autor" => "Aristóteles"],
  ["frase" => "Quem tem um porquê para viver pode suportar quase qualquer como.", "autor" => "Friedrich Nietzsche"],
  ["frase" => "O que não me mata, me fortalece.", "autor" => "Friedrich Nietzsche"],
  ["frase" => "Deus não é um enganador.", "autor" => "René Descartes"],
  ["frase" => "A maior riqueza é viver contente com pouco.", "autor" => "Sócrates"],
  ["frase" => "Eu sou o caminho, a verdade e a vida.", "autor" => "Jesus Cristo"],
  ["frase" => "O que me preocupa não é o grito dos maus, mas o silêncio dos bons.", "autor" => "Martin Luther King Jr."],
  ["frase" => "As estrelas não brilham para serem vistas, mas porque são luz. Seja como elas.", "autor" => "Friedrich Nietzsche"],
  ["frase" => "O que importa não é o que você faz, mas quanto amor você coloca no que faz.", "autor" => "Madre Teresa de Caucutá"],
  ["frase" => "Ame o próximo como a ti mesmo.", "autor" => "Jesus Cristo"]
];

$conselhoAleatorio = $conselhos[array_rand($conselhos)];
echo json_encode($conselhoAleatorio);
?>
