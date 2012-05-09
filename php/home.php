<?php	
        session_start();
        
	if(isset($_SESSION['username'])){?>
	
<html>
<head>
	<title>Administrator Page</title>
        <link rel="stylesheet" href="../css/styles.css" />
        <script src="../js/jquery.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="../js/jquery.tablesorter.js"></script>
</head>
<body>
	<div id="wrapper">
            <div id="header">

            </div>
                <div id="list">
                    <a class="nav_links" href="customers.php"><img src="../images/customers.png" /></a>
                    <a class="nav_links" href="products.php"><img src="../images/products.png" /></a>
                    <a class="nav_links" href="reports.php"><img src="../images/reports.png" /></a>
                </div>
                <div id="add_data">
                    <div id="fill">
                    <label>Company Name:</label> <input type="text" id="company_name" /><br/><br/>
                    <label>Contact Name:</label> <input type="text" id="contact_name" /><br/><br/>
                    <label>Address:</label> <input type="text" id="address"/><br/><br/>
                    <label>City:</label> <input type="text" id="city" /><br/><br/>
                    <label>Contact Number:</label> <input type="text" id="contact_number" /><br/><br/>
                    <label>Email:</label> <input type="email" id="email" /><br/><br/>
                    <input type="submit" value="Add" id="submit" /><input type="submit" value="Cancel" id="cancel" />
                    </div>
                </div>
                <div id="add_prod">
                    <div id="fill">
                    <label>Product Name:</label> <input type="text" id="prd" /><br/><br/>
                    <label>Color:</label> <input type="text" id="col" /><br/><br/>
                    <label>Quantity:</label> <input type="text" id="qty"/><br/><br/>
                    <label>Size:</label> <input type="text" id="sze" /><br/><br/>
                    <label>Class</label> <input type="text" id="cls" /><br/><br/>
                    <input type="submit" value="Add" id="yes" /><input type="submit" value="Cancel" id="no" />
                    </div>
                </div>            
                
            <div id="content">
                <? include 'products.php' ?>
                <? include 'customers.php' ?>
                <? include 'reports.php' ?>
                <div id="alert">Updated</div>

            </div>
            <div id="footer">
                <p>&copy;Copyright Kartes Paper Company 2012</p>
                <a href="../index.html">go to homepage</a>
            </div>
	</div>
    <script src="../js/admin.js"></script>
    <script src="../js/customers.js"></script>
    <script src="../js/prods.js"></script>
    <script src="../js/jquery.print.js"></script>
</body>
</html>

<?php
	}else{
		header('Refresh: 2, index.php');
		die("You must be logged in");
	}
	require 'connect.php';
?>

