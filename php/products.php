<div id="products_table">
    <h2> Products </h2>
    <a href="#" class="add">Add new data</a>
    <table id="products" class="tablesorter"> 
        <thead> 
        <tr> 
            <th>Product ID</th> 
            <th>Product Name</th> 
            <th>Color</th> 
            <th>Quantity Remaining</th>  
            <th>Size</th>
            <th>Class</th>
            <th></th>
        </tr> 
        </thead> 
        <tbody> 
        <?php
                include 'connect.php';
                //products
                $query = "SELECT * FROM products";
                $query_run = mysql_query($query);
                if($query_run){
                        if(mysql_num_rows($query_run)==NULL){
                                echo '<br/>No results found!';
                        }else{
                                while($row = mysql_fetch_assoc($query_run)){
                                        $id = $row['product_id'];
                                        $pname = $row['product_name'];
                                        $color = $row['Color'];
                                        $qty = $row['qtyOnHand'];
                                        $size = $row['Size'];
                                        $class = $row['class_name'];
                                        $price = $row['price'];?>
            <tr id="<? echo $id?>" class="tr_<? echo $id ?>">
                <td>
                    <span id="x_<?echo $id?>" class="text"><?echo $id?></span>
<!--                    <input type="text" id="input_x_<? echo $id?>" class="editbox" value="<?echo $id?>"/>-->
                </td>   
                <td>
                    <span id="a_<?echo $id?>" class="text"><?echo $pname?></span>
                    <input type="text" id="input_a_<? echo $id?>" class="editbox" value="<?echo $pname?>"/>
                </td>   
                <td>
                    <span id="b_<?echo $id?>" class="text"><?echo $color?></span>
                    <input type="text" id="input_b_<? echo $id?>" class="editbox" value="<?echo $color?>"/>
                </td>
                <td>
                    <span id="c_<?echo $id?>" class="text"><?echo $qty?></span>
                    <input type="text" id="input_c_<? echo $id?>" class="editbox" value="<?echo $qty?>"/>
                
                </td>   
                <td>
                    <span id="d_<?echo $id?>" class="text"><?echo $size?></span>
                    <input type="text" id="input_d_<? echo $id?>" class="editbox" value="<?echo $size?>"/>
                
                </td> 
                <td>
                    <span id="e_<?echo $id?>" class="text"><?echo $class?></span>
                    <input type="text" id="input_e_<? echo $id?>" class="editbox" value="<?echo $class?>"/>
                </td>
                <td class="delete_p" id="<? echo $id?>">
                    <img src="../images/delete.png" class="trash"/>
                </td>                
            </tr>                         
                                <?php }
                        }
                }
        ?>
    </tbody> 
    </table>
    <a href="#" class="print_p add">Print table: <img src="../images/print.png" height="25" width="25"/></a>
</div>