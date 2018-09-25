<form action="" method="post">
<input type="checkbox" name="check1" value="Futsal">Futsal<br/>
<input type="checkbox" name="check2" value="Basket">Basket<br/>
<input type="checkbox" name="check3" value="Voly">Voly<br/>
<input type="checkbox" name="check4" value="Badminton">Badminton<br/>
<input type="submit" name="enter" value="Enter">
</form>


<?php  
 if(isset($_POST['enter']))  
 {  
  echo "Hobi Anda:<br/>";  
  if (isset($_POST['check1'])) {  
  echo "-".$_POST['check1']." <br/>";  
  }  
  if (isset($_POST['check2'])) {  
  echo "-".$_POST['check2']." <br/>";  
  }  
  if (isset($_POST['check3'])) {  
  echo "-".$_POST['check3']." <br/>";  
  }  
  if (isset($_POST['check4'])) {  
  echo "-".$_POST['check4']." <br/>";  
  }  
 }  
 ?>  