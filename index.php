<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département</p>
      <?php $department =
      ['80' => 'Somme',
       '02' => 'Aisne',
       '59' => 'Nord',
       '62' => 'Pas-De-Calais'
     ];
      foreach ($department as $key => $value) {
      ?>
      <p>Le département <?php echo $key;?> correspond à <?php echo $value; }?></p>
    </body>
</html>
