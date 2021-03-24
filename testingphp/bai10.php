<?php
if (($myfile = fopen("products.csv", "r")) !== FALSE) 
?>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>total</th>
            <th>customer_id</th>
        </tr>
    </thead>
    <tbody>
    <?php while (($data = fgetcsv($myfile)) !== FALSE){?>
        <tr>
            <td><?php echo $data[0];?></td>
            <td><?php echo $data[1];?></td>
            <td><?php echo $data[2];?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php fclose($myfile); ?>