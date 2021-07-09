<?php
    require_once __DIR__ . "/classes/Buyer.php";
    require_once __DIR__ . "/classes/CreditCard.php";
    require_once __DIR__ . "/classes/Products.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Shop-Online</title>
    </head>
    <body>

        <header>
            <h1>SHOP ONLINE</h1>
        </header>

        <main>
        <?php
            $newProduct = new Products('MSI', '1000€', 10);

            $newBuyer = new Buyer('Nicolas', 'Morelli', '25', 'nmorelli@email.com', 'root');

            $newCreditCard = new CreditCard('Mastercard', '4858XXX',  111);
        ?>
            <div class="container_products">

                <h2>PRODOTTO:</h2>

                <h3>
                    BRAND: <?= $newProduct->getBrand(); ?>
                </h3>
                <p>
                    PREZZO: <?= $newProduct->getPrice(); ?>
                </p>
                <p>
                    QUANTITA: <?= $newProduct->getQuantity(); ?>
                </p>

            </div>

            <div class="container_buyer">

                <h2>COMPRATORE:</h2>

                <h3>
                    NOME: <?= $newBuyer->firstname; ?>
                </h3>
                <h3>
                    COGNOME: <?= $newBuyer->lastname; ?>
                </h3>
                <p>
                    ETA': <?= $newBuyer->age; ?>
                </p>
                <p>
                    EMAIL: <?= $newBuyer->email; ?>
                </p>
                <p>
                    PASSWORD: <?= $newBuyer->password; ?>
                </p>

            </div>

            <div class="container_credit_card">

                <h2>CARTA DI CREDITO:</h2>

                <h3>
                    TIPO: <?= $newCreditCard->getType(); ?>
                </h3>
                <p>
                    NUMERO: <?= $newCreditCard->getNumber(); ?>
                </p>
                <p>
                    CVC: <?= $newCreditCard->getCvc(); ?>
                </p>

            </div>
        </main>
        
    </body>
</html>