<html>
<head>
    <title>Leer datos</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<h1>Accounts</h1>

<p>
    <?php
      require_once("connect_data.php");
 if ($account->count()>0)
    {
        $datos = $account->find( 
            array('status' => 'ACTIVE')
         );
        ?>
        <table border=1>
        <?php
        foreach ($datos as $dato) {
?>      <tr>
                         <td><p><label>ID: </label><?php echo $dato["_id"]; ?></p></td>
                        <td><p><label>Account ID: </label><?php echo $dato["accountId"]; ?></p></td>
                        <td><p><label>External A: </label><?php echo $dato["externalAccountId"]; ?></p></td>
                        <td><p><label>Currency Code: </label><?php echo $dato["currencyCode"]; ?></p></td>
                        <td><p><label>Status: </label><?php echo $dato["status"]; ?></p></td>
                        <td><p><label>Tipo: </label><?php echo $dato["type"]; ?></p></td>
                        <td><p><label>Account Name: </label><?php echo $dato["accountName"]; ?></p></td>
        </tr>
                 <?php
         }
                 ?>
                 </table>
                 <?php
    }else{
                ?>
                        <h4></i>No Data in Data Base</h4>
                <?php 
    } ?>

</p>
</body>

</html>


