<?php
include ('abstractviewtemplate.php');
class OrderReport extends ViewTemplate
{
    public function renderTableHtml()
    {	     	    
    	$sql = "SELECT `customer`.`name`,GROUP_CONCAT(`order`.id) , `order`.`total` ,GROUP_CONCAT(`order_item`.product_id) 
    	FROM customer LEFT JOIN `order` ON `customer`.`customer_id` = `order`.`customer_id` 
    	LEFT JOIN order_item ON `order`.id = `order_item`.id  
    	GROUP BY `customer`.`customer_id`" ;
		$result = $this->connection->query($sql);
		
    	foreach ($result as  $value) {
    		echo  "<table >
			            <tr>
			                <th>customer_name</th>
			                <th>order_ids</th>
			                <th>total</th>
			               <th>product_ids</th>
			            </tr>
			            <tr>
			                <td>" . $value["name"] . "</td>
			                <td>" . $value["GROUP_CONCAT(`order`.id)"] . "</td>	
			                <td>" . $value["total"] . "</td>
			                <td>" . $value["GROUP_CONCAT(`order_item`.product_id)"] . "</td>	       
			            </tr>
			        </table>"; 		
    	}     
  	}

}
?>
