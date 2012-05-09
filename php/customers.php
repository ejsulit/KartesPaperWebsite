<div id="customers_table">
    <h2> Customers </h2>
    <a href="#" class="add">Add new data</a>
    <table id="customers" class="tablesorter"> 
        <thead> 
        <tr> 
            <th>Company Name</th> 
            <th>Contact Name</th> 
            <th>Address</th> 
            <th>City</th>  
            <th>Contact Number</th> 
            <th>Email</th> 
            <th></th>
        </tr> 
        </thead> 
        <tbody> 
        <?php

            //customers

            $query = "SELECT * FROM customers";
            $query_run = mysql_query($query);
            if($query_run){

                    if(mysql_num_rows($query_run)==NULL){
                            echo '<br/>No results found!';
                    }else{
                            while($row = mysql_fetch_assoc($query_run)){
                                    $company_name = $row['CompanyName'];
                                    $customer_id = $row['CustomerID'];
                                    $contact_name = $row['ContactName'];
                                    $address = $row['Address'];
                                    $city = $row['City'];
                                    $contact_num = $row['ContactNo'];
                                    $email = $row['email'];?>
           
            <tr id="<? echo $customer_id?>" class="tr_<? echo $customer_id ?>">
                <td>
                    <span id="x_<?echo $customer_id?>" class="text"><? echo $company_name ?></span>
                    <input type="text" id="input_x_<? echo $customer_id?>" class="editbox" value="<?echo $company_name?>"/>
                </td>
                <td>
                    <span id="a_<?echo $customer_id?>" class="text"><? echo $contact_name ?></span>
                    <input type="text" id="input_a_<? echo $customer_id?>" class="editbox" value="<?echo $contact_name?>"/>
                </td>
                <td>
                    <span id="b_<?echo $customer_id?>" class="text"><? echo $address ?></span>
                    <input type="text" id="input_b_<? echo $customer_id?>" class="editbox" value="<?echo $address?>"/>
                </td>
                <td>
                    <span id="c_<?echo $customer_id?>" class="text"><? echo $city ?></span>
                    <input type="text" id="input_c_<? echo $customer_id?>" class="editbox" value="<?echo $city?>"/>
                </td>
                <td>
                    <span id="d_<?echo $customer_id?>" class="text"><? echo $contact_num ?></span>
                    <input type="text" id="input_d_<? echo $customer_id?>" class="editbox" value="<?echo $contact_num?>"/>
                </td>
                <td>
                    <span id="e_<?echo $customer_id?>" class="text"><? echo $email ?></span>
                    <input type="text" id="input_e_<? echo $customer_id?>" class="editbox" value="<?echo $email?>"/>
                </td>
                <td class="delete" id="<? echo $customer_id?>">
                    <img src="../images/delete.png" class="trash"/>
                </td>
            </tr>


                            <?php }
                    }
            }
        ?>
    </tbody> 
    </table>
    <a href="#" class="print add">Print table: <img src="../images/print.png" height="25" width="25"/></a>
</div>

