<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <?php
    $nasc = $_GET["nascimento"] ?? '1900';
    $anoAtual = date("Y");
    $ano = $_GET["anoEscolhido"] ?? $anoAtual;


    ?>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <h1>Calculadora de Idade</h1>
            <label for="">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" value="<?= $nasc ?>" min="1900" max="<?= $anoAtual ?>" required>

            <label for="">Quer saber sua idade em que ano?<strong>(Atualmente estamos em <?= $anoAtual ?>)</strong></label>
            <input type="number" name="anoEscolhido" value="<?= $ano ?>" min="1900" required>

            <input type="submit" value="Qual será minha idade?">
        </form>

    </main>

    <section>
        <h2>Resultado</h2>
        <?php $idade = $ano - $nasc;

        if ($ano <= $nasc) {
            echo "Não é possível calculcar sua idade informando nascimento inferior ou igual ao ano escolhido.";
        } else {
            echo "Quem nasceu em $nasc terá $idade anos no ano de<strong> $ano.</strong> ";
        }
        ?>

    </section>
</body>

</html>