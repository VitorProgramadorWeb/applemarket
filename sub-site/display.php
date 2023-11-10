<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>Display</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos/reset.css" type="text/css">
    <link rel="stylesheet" href="estilos/menu.css" type="text/css">
</head>
<body>
    
    <?php include "menu.php" ?>

    <?php
        class Carro {
            public $cor;
            public $modelo;

            public function __construct($cor, $modelo) {
                $this->cor = $cor;
                $this->modelo = $modelo;
            }

            public function message() {
                return "Meu carro é da cor $this->cor e do modelo $this->modelo<br>";
            }
        }

        $carro1 = new Carro("Amarelo", "Jeep");
        echo $carro1->message();
        $carro2 = new Carro("Vermelho", "Mercedes");
        echo $carro2->message();
        $carro3 = new Carro("Azul", "Ferrari");
        echo $carro3->message();
    ?>

    <h1>Display</h1>

    <p>A propriedade <span>display</span> define se o elemento é tratado como um elemento em bloco ou em linha e o layout de fluxo usado para os seus filhos.</p>

    <h2>Flow Layout</h2>
    <ul>
        <li><span>Inline:</span> São elementos dispostos em linha, ou seja, de acordo como as palavras estão dispostas dentro do parágrafo, uma na frente da outra. Vão da direita para a esquerda.</li>
        <li><span>Block:</span> São elementos dispostos em bloco, um em cima do outro, assim como os parágrafos e títulos. Vão de cima para baixo.</li>
    </ul>

</body>
</html>