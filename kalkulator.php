<?php    
ini_set('display_errors',0);                  
    if( isset( $_POST['calculate'] ))
    {
        $operator=$_POST['operator'];
        if($operator=="+")
        {
            $var1 = $_POST['op1'];
            $var2 = $_POST['op2'];
            $result= $var1+$var2;
        }
        if($operator=="-")
        {
            $var1 = $_POST['op1'];
            $var2 = $_POST['op2'];
            $result= $var1-$var2;
        }
        if($operator=="*")
        {
            $var1 = $_POST['op1'];
            $var2 = $_POST['op2'];
            $result =$var1*$var2;
        }
        if($operator=="/")
        {
            $var1 = $_POST['op1'];
            $var2 = $_POST['op2'];
            $result= $var1/$var2;
        }
       
       
    }
?>









<form method="post">
  
      <input name="op1" type="number" />
                <select name="operator">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
         <input name="op2" type="number" />
        <input type="submit" name="calculate" value="Izracunaj" /></td>
 <br>
            
            <p><?php echo $result;?></p>
            
            
            
</form>
            
      
       
            
  





