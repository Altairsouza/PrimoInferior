<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimoInferior</title>
</head>

<body>
    <?php


numerosPrimos(10, 29);

function numerosPrimos($n1, $n2)
{
    $primos = array();

    $n1++;
    $n2--;

    for ($i = $n1; $i <= $n2; $i++) {
        $cont = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $cont++;
            }
        }
        if ($cont == 2) {
            $primos[] = $i;
        }
    }

    $n1--;
    $n2++;

    echo "Numero Incial: " . $n1 . "<br>";
    echo "Numero Final: " . $n2 . "<br>";
    echo "Encontrados " . count($primos) . " numeros primos " . implode(", ", $primos) . "<br>";
}

?>
</body>

</html>