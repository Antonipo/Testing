<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Casa de Cambio "Caylloma"</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label> Moneda</label>
                            <?php
                            $Monedas = array("Dolar", "Euro", "Yen", "Peso", "Libra");
                            $Simbolos = array("US$", "€", "¥", "$", "£");
                            $Cambios = array(["3.52", "3.55"], ["4.18", "4.19"], ["0.03", "0.04"], ["0.16", "0.17"], ["4.54", "4.55"]);
                            $Operaciones = array("Compra", "Venta");

                            $Selected1 = array("selected", "", "", "", "");
                            $Selected2 = array("checked", "");
                            $change = "";
                            $result = "";
                            $amount = "";

                            if (isset($_POST["tp"])) {
                                $Selected1[$_POST["currency"]] = "selected";
                                $Selected2[$_POST["operation"]] = "checked";
                                $change =  $Cambios[$_POST["currency"]][$_POST["operation"]];
                            }

                            if (isset($_POST["recibe"])) {
                                $Selected1[$_POST["currency"]] = "selected";
                                $Selected2[$_POST["operation"]] = "checked";
                                $change =  $Cambios[$_POST["currency"]][$_POST["operation"]];
                                $amount = number_format($_POST["amount"], 2, ".", "");
                                $result = $change * $amount;
                                $result = $Simbolos[$_POST["currency"]] . ' ' . number_format($result, 2, ".", "");
                            }
                            ?>
                        </td>
                        <td>
                            <select name="currency">
                                <?php
                                for ($i = 0; $i < count($Monedas); $i++) {
                                    echo "<option value=$i $Selected1[$i]>$Monedas[$i]</option>";
                                }
                                ?>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <?php
                            for ($i = 0; $i < count($Operaciones); $i++) {
                                echo "<input type=radio name=operation value=$i $Selected2[$i]>$Operaciones[$i]";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tipo de Cambio S/</label>
                        </td>
                        <td>
                            <input type="text" name="change" value="<?php echo $change ?>" readonly=" readonly" size="9">
                            <input type="submit" value="T.P." name="tp">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Total C/V</label>
                        </td>
                        <td>
                            <input type="number" name="amount" step="0.01" min="0.01" max="9999.99" value="<?php echo $amount ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Recibe" name="recibe">
                        </td>
                        <td>
                            <input type="text" name="result" value="<?php echo $result ?>" readonly="readonly" size="9">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>