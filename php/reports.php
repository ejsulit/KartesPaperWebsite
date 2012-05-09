<div id="reports_table">
    <ul>
        <li><h2><a href="orders" class="orders">Orders</a></h2></li>
        <li><h2><a href="inventory" class="inventory">Inventory</a></h2</li>
    </ul>
</div>
    <div id="orders">
        <table id="reports" class="tablesorter"> 
            <thead> 
            <tr> 
                <th>Order Date</th> 
                <th>Product Name</th> 
                <th>Color</th> 
                <th>Quantity</th> 
                <th>Unit Price</th> 
                <th>Price</th>
                <th>Class Name</th> 
                <th>Size</th> 
            </tr> 
            </thead> 
            <tbody> 
            <?php

                //customers

                $query = "SELECT * FROM orders";
                $query_run = mysql_query($query);
                if($query_run){

                        if(mysql_num_rows($query_run)==NULL){
                                echo '<br/>No results found!';
                        }else{
                                while($row = mysql_fetch_assoc($query_run)){
                                        $or_id = $row['or_id'];
                                        $order_no = $row['order_no'];
                                        $date = $row['OrDate'];
                                        $customer_id = $row['CustomerID'];
                                        $product_id = $row['product_id'];
                                        $product_name = $row['product_name'];
                                        $color = $row['color'];
                                        $qty = $row['qty'];
                                        $unit_price = $row['UnitPrice'];
                                        $price = $row['price'];
                                        $class_name = $row['class_name'];
                                        $size = $row['size']?>
                <tr>
                    <td><? echo $date ?></td>
                    <td><? echo $product_name ?></td>
                    <td><? echo $color ?></td>
                    <td><? echo $qty ?></td>
                    <td><? echo $unit_price ?></td>
                    <td><? echo $price ?></td>
                    <td><? echo $class_name ?></td>
                    <td><? echo $size ?></td>
                   
                </tr>


                                <?php }
                        }
                }
            ?>
        </tbody> 
        </table>
        <a href="#" class="print_o add">Print table: <img src="../images/print.png" height="25" width="25"/></a>
    </div>
    <div id="inventory">
        <table id="reports" class="tablesorter"> 
            <thead> 
            <tr> 
                <th>Product ID</th> 
                <th>Quantity</th> 
                <th>Class Name</th> 
                <th>Product Name</th> 
                <th>Color</th> 
                <th>Size</th> 
                <th>Price</th> 
            </tr> 
            </thead> 
            <tbody> 
            <?php

                //customers

                $query = "SELECT tb1.product_id,tb1.qtyOnHand,tb3.class_name,tb1.product_name,tb1.color,tb4.Size,tb1.price FROM products AS tb1,orders AS tb2,class AS tb3,size AS tb4 GROUP BY tb1.product_name LIMIT 0, 30 ";
                $query_run = mysql_query($query);
                if($query_run){

                        if(mysql_num_rows($query_run)==NULL){
                                echo '<br/>No results found!';
                        }else{
                                while($row = mysql_fetch_assoc($query_run)){
                                    $product_id = $row['product_id'];
                                    $quantity = $row['qtyOnHand'];
                                    $class_name = $row['class_name'];
                                    $product_name = $row['product_name'];
                                    $color = $row['color'];
                                    $size = $row['Size'];
                                    $price = $row['price'];
                                    ?>
                <tr>
                    <td><? echo $product_id ?></td>
                    <td><? echo $quantity ?></td>
                    <td><? echo $class_name ?></td>
                    <td><? echo $product_name ?></td>
                    <td><? echo $color ?></td>
                    <td><? echo $size ?></td>
                    <td><? echo $price ?></td>
               
                </tr>


                                <?php }
                        }
                }
            ?>
        </tbody> 
        </table>
        <a href="#" class="print_i add">Print table: <img src="../images/print.png" height="25" width="25"/></a>
    </div>
