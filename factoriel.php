<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcul de la factorielle</title>
    </head>
    <body>
        <h1>Calcul de la factorielle</h1>
        <script>
            function factorielle(a) {
                if (a === 1)
                    return 1;
                else
                    return a * factorielle(a - 1);
            }

            function calculFactorielle() {
                let x = parseInt(prompt("Entrez une valeur entière entre 1 et 8:"));

                if (x > 8 || x < 1) {
                    alert("On a dit entre 1 et 8 !");
                } else {
                    let f = factorielle(x);
                    alert("Factorielle " + x + " égal " + f);
                }
            }

            window.onload = function() {
                calculFactorielle();
            };
        </script>
    </body>
</html>

