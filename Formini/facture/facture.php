<head>
    <meta charset="UTF-8"/>
    <title>Order Formini</title>
    <link href="facture.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <header>
      <h1>ORDER DETAILS
        <h2>Formini − InviSix</h2>
      </h1>
    </header>
    <section class="flex">
      <dl>
        <dt style="color:#F3694B";>Order code #</dt>
        <dd><?=$_GET['id']?></dd>
        <dt>Date of order</dt>
        <dd><?=$_GET['etat']?></dd>
      </dl>
    </section>
    <section class="flex">
      <dl class="bloc">
        <dt>Ordered in :<a href="http://localhost/Formini/">www.formini.tn</a></dt>
       <dd>
          <dl>
            <dt>Makers</dt>
            <dd>InviSix</dd>
            <dt>Phone</dt>
            <dd>(+216) 25 206 870</dd>
            <dt>Mail</dt>
            <dd>forminitn@gmail.com</dd>
          </dl>
        </dd>
      </dl>
      <dl class="bloc">
        <dt>Our service:</dt>
        <dd>E-Learing</dd>
        <dt>Utility of this receipt:</dt>
        <dd>You should remember your order code to resume the payment ... </dd>
      </dl>
    </section>
    <table>
      <thead>
        <tr> 
          <th>Formation ID</th>
          <th>Formation name</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once __DIR__."/../php/panier/views/backafficherpanier.php";
        ?>
      </tbody>
      <tfoot>
      <?php 
      if($somme!=$_GET['som'])
      {
        ?>
          <tr> 
          <td ></td>
          <td><h4>Coupon:</h4></td>
          <td><h4>-<?php echo $somme-$_GET['som']?>$</h4></td>
        </tr>
        <?php
      }
      ?>
        <tr> 
          <td ><h4 style="color:#F3694B"; >− Please print this receipt (CTRL+P)  −<br><br>
          <?php
            if(isset($_GET['user']))
            {
              ?>
              <a style="color:#F3694B" href="http://localhost/Formini/">-->Click here to continue<--</a>
              <?php
            }
            ?></h4>
        </td>
          <td><h4>Total:</h4></td>
          <td><h4><?=$_GET['som']?>$</h4></td>
        </tr>
      </tfoot>
    </table>
    <footer>
      <p>InviSix – IT - WEB Development 
      <p>Nour Jaafer, Ariana , Tunis, Tunisia | Phone. +216 25 206 870 | <a href="mailto:forminitn@gmail.com">forminitn@gmail.com</a></p>
    </footer>
  </body>