<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>



<style> 
header {
  
  background-image:url("m.png");
  height:650px;
  width:100%;
  background-position:top;  /*important to adjust image of boy*/
  background-repeat:repeat;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;}
.button3 {
          background-color:red;
          color:white;
          
          float:right;
          
          
             
           width:7%;}




.button4 {
          background-color:violet;
          

          color:white;
          

         float:right;
        
         width:7%;}
         
.right{
float:right;
background-color:white;
width:400px;
border:3px solid gray;}
           .button {
          
  background-color:url("b.png");
  border:10px solid url("b.png");
  color: black;

   padding :30px;
   display: inline-block;
  text-align: center;

  margin: 4px 2px;/* space*/
  text-decoration: none;
  font-size: 20px;
  cursor:pointer;}
 .id{
  float:right;
  background-color:url("b.png");
  
  color:black;
   padding :40px;

  text-align: center;
  

  text-decoration:none;
  
  font-size: 20px;
  
  cursor:pointer;

}
.id2{

  float:left;
  background-color:url("b.png");
  border:50px solid url("b.png");
  color:black;
   padding :30px;
  text-align: center;
  text-decoration: none;
  
  font-size: 20px;
  
  cursor:pointer;


}
.div2{

background-color:lightgrey;
width:100%;
height:900px;
}
.center{

margin: auto; /*define block at center*/
    background-color:white;
    width: 40%;
    height:900px;
    border: 3px solid lightgrey;
    padding: 10px;




}

.button5 {

background-color:peachpuff;
color:Black;

width: 10%;
float:right;
}
.button9{
  background-color:yellowgreen;
  width:10%;
  
  float:right;
}



</style>
<body>
<header>
<span style='font-size:100px;'align="left">&#10024;<font color="red">Pradnya Kitchen</font></span>
  





  <button background-image:url("m.png"); class="button button3 "><a href="offlinesai.html">offline</a></button>
  <button background-image:url("m.png"); class="button button4 "><a href="online.html>">online</a></button>
   
  
 
  <button background-image:url("m.png"); class="button button9"><a href="audio.html">Music</a></button>
  <button background-image:url("m.png"); class="button button5 "><a href="r.html">rate</a></button>
  
  
  
  
 
 
 
  
  <div class="id">
  

    
    
    
    
    
   
  </div>  
  

</header>
<section>

<div class="right">
                <p><b>pradnya kitchen</b></p>
                
               <p>we cook food with ingredient of taste and quality.</p>

                    
                
            
               
                   
        </div>








<div class="div2">
  <div class= "div2 center">
  <p>order now</p>
    <p>delivery within 15 min</p>
    
    <form action="connection.php"  method="post">
    <br>
    <p><b>customer</b></p>
     <input type="text" name="customer" placeholder="enter your name">
    

     
     
    
  </br>
</br>
    <p><b>which food to order</b></p>
    <input type="text" name="menu"  placeholder="enter your dish name">
    
     
     
</br>
   
   <p><b>quantity</b></p>
   <input type="number"   name="quantity" placeholder="quantity of dish">
  
</br>  

   
      <p><b>payment Type</b></p>
      
         <input type="radio" name="cash type">Cash On Delivery</br></br>
        <input type="radio" name="UPI type">UPI</br></br>
        <input type="radio" name="account type">net banking</br></br>
        

      
    <p><b>Location</b></p>
      <input type="text"    name="Location" placeholder="enter your address"><br>
     
    </br>
    

    
<p><b>suggestions</b></p>
    <textarea rows="5" cols="60%"></textarea>
  
  </br> 
  
<p><b>contact</b></p>



<input type="number"   name="contact" placeholder="enter number">


<button>sub</button>
       
</div>     
</div>
</body>
</html>