<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo"<script>
                alert('Item already added');
                window.location.href='collection.php';
                </script>";
            }
            else
            {
            $Count=count($_SESSION['cart']);
            $_SESSION['cart'][$Count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>
            alert('Item Added');
            window.location.href='collection.php';
            </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>
            alert('Item Added');
            window.location.href='collection.php';
            </script>";
        }
    }
}
if(isset($_POST['Remove_Item']))
{
    foreach($_SESSION['cart'] as $key => $value){
        if($value['Item_Name']==$_POST['Item_Name'])
        {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        
        echo"<script>
        alert('Item Removed');
        window.location.href='wishlist.php';
        </script>";
        } 
    }
}

// Start the session

// Include database connection file
include(".php");

// Check if the cart is not empty
if(!empty($_SESSION['cart'])) {
    // Prepare a SQL statement to insert cart items
    $stmt = $pdo->prepare("INSERT INTO cart_items (item_name, item_price) VALUES (:item_name, :item_price)");

    // Iterate over each item in the cart
    foreach($_SESSION['cart'] as $key => $value) {
        // Bind parameters and execute the SQL statement
        $stmt->execute(array(':item_name' => $value['Item_Name'], ':item_price' => $value['Price']));
    }
}
?>