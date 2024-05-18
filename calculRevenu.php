<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calcul des revenus</title>
</head>
<body>
<h1>Calcul des revenus</h1>
<script>
const MAX = 100;
const OUI = 1;
const NON = 0;
let revenu = [];
let mois = [];
let jour = [];
let annee = [];
let ctr;
let cont;
let total_mois, grand_total;

function afficheInstructions() {
    alert("Ce programme vous permet de saisir le revenu et la date de naissance de 99 personnes maxi, pour calculer et afficher le total des revenus mois par mois, le total annuel des revenus, et la moyenne de ces revenus.");

    cont = continuer();

    if (cont === OUI) {
        lecture();
        afficheResult();
    } else {
        alert("Programme interrompu par l'utilisateur !");
    }
}

function lecture() {
    for (cont = OUI, ctr = 0; ctr < MAX && cont === OUI; ctr++) {
        mois[ctr] = parseInt(prompt("Mois (1 - 12):"));
        while (mois[ctr] < 1 || mois[ctr] > 12) {
            mois[ctr] = parseInt(prompt("Mois (1 - 12):"));
        }
        
        jour[ctr] = parseInt(prompt("Jour (1 - 31):"));
        while (jour[ctr] < 1 || jour[ctr] > 31) {
            jour[ctr] = parseInt(prompt("Jour (1 - 31):"));
        }
        
        annee[ctr] = parseInt(prompt("Année (0 - 1994):"));
        while (annee[ctr] < 0 || annee[ctr] > 1994) {
            annee[ctr] = parseInt(prompt("Année (0 - 1994):"));
        }
        
        revenu[ctr] = parseFloat(prompt("Revenu annuel (en francs):"));

        cont = continuer();
    }
}

function afficheResult() {
    grand_total = 0;
    let result = "";
    result += "\n\nSalaires\n=========";
    
    for (let x = 1; x <= 12; x++) {
        total_mois = 0;
        for (let y = 0; y < ctr; y++) {
            if (mois[y] === x) {
                total_mois += revenu[y];
            }
        }
        result += "\nLe total pour le mois " + x + " est " + total_mois;
        grand_total += total_mois;
    }

    result += "\n\nLe total des revenus est de " + grand_total;
    result += "\nLa moyenne des revenus est de " + (grand_total / ctr);

    result += "\n\n* * * fin des résultats * * *";
    alert(result);
}

function continuer() {
    let x = parseInt(prompt("Voulez-vous continuer ? (0=non / 1=oui)"));
    while (x !== 0 && x !== 1) {
        x = parseInt(prompt(x + " est erroné ! Entrez 0 pour sortir ou 1 pour continuer :"));
    }
    if (x === 0)
        return NON;
    else
        return OUI;
}

afficheInstructions();
</script>
</body>
</html>