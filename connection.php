<?php
    $customer = $_POST['customer']; 
    $menu = $_POST['menu']; 
    $quantity = $_POST['quantity']; 
    $Location = $_POST['Location']; 
    $contact = $_POST['contact'];
    
    $conn = new mysqli('localhost','root','','rest');
    
    if($conn->connect_error){
        
        
        die('Connection Failed : '.$conn->connect_error);
}

else{
    
    $stmt = $conn->prepare("insert into pm(customer, menu, quantity, Location, contact)
    

    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi",$customer, $menu, $quantity, $Location, $contact);
    
    $stmt->execute();
    echo "succefull";
    $stmt->close();
    $conn->close();
}

    
   




?>

