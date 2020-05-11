<?PHP

if (!isset($_SESSION['id'])) {
    session_start();
    $_SESSION['id'] = 55;
}

include_once __DIR__ . "/../core/panierC.php";
include_once __DIR__ . "/../../coupon/core/couponC.php";
$panier1C = new panierC();
$listepaniers = $panier1C->sommepanier();



foreach ($listepaniers as $roa) {


    if (isset($_GET["coupon"]) && !empty($_GET["coupon"])) {


        $coupon1C = new couponC();
        $listecoupons = $coupon1C->recuperercoupon($_GET["coupon"]);

        foreach ($listecoupons as $row) {
            if ($row['type'] == 3) {
                $listepaniers = $panier1C->verifierpanier($row['value']);

                if ($listepaniers == 0) {
                    $link = $_SESSION['id'] . "&id_formation=" . $row['value'] . "&id_coupon=" . $_GET["coupon"];

                    header("Location: http://localhost/Formini/php/panier/views/ajoutpanier.php?id=$link");
                } else {
?>



                    <tr class="">
                        <th scope="row">Cart Subtotal</th>
                        <td class="text-right">$<?PHP echo $roa['som']; ?></td>
                    </tr>

                    <tr>
                        <th scope="row"><small class="text-muted">Discount</small></th>
                        <td class="text-right text-muted"><small>*****</small></td>
                    </tr>
                    <tr>
                        <th scope="row">Order Total</th>
                        <td>
                            <h2 class="text-right">$<?PHP echo $prix = $roa['som']; ?></h2>
                        </td>
                    </tr>


                <?php
                }
                ob_end_flush();
            } else {
                if($roa['som']==0)
                {
                    header("Location: http://localhost/Formini/CartMedone.php");
                }
                else{

                ?>
                <tr class="">
                    <th scope="row">Cart Subtotal</th>
                    <td class="text-right">$<?PHP echo $roa['som']; ?></td>
                </tr>
                <tr>
                    <th scope="row"><small class="text-muted">Discount</small></th>
                    <td class="text-right text-muted"><small><?php if ($row['type'] == 1) echo '$';
                                                                else echo '%';
                                                                echo $row['value'] ?></small></td>
                </tr>
                <tr>
                    <th scope="row">Order Total</th>
                    <td>
                        <h2 class="text-right">$<?php if ($row['type'] == 1) echo $prix = $roa['som'] - $row['value'];
                                                else echo $prix = $roa['som'] - ($roa['som'] * $row['value']) / 100; ?></h2>
                    </td>
                </tr>




        <?php
            }
        }
        }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    } else {
        ?>
        <tr class="">
            <th scope="row">Cart Subtotal</th>
            <td class="text-right">$<?PHP echo $roa['som']; ?></td>
        </tr>

        <tr>
            <th scope="row"><small class="text-muted">Discount</small></th>
            <td class="text-right text-muted"><small>*****</small></td>
        </tr>
        <tr>
            <th scope="row">Order Total</th>
            <td>
                <h2 class="text-right">$<?PHP echo $prix = $roa['som']; ?></h2>
            </td>
        </tr>









<?php
    }
}
?>