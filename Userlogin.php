<?php
if(isset($_POST['submit']))
{
    $Utype=$_POST['UTyp'];
    $Uemail=$_POST['usemail'];
    $Uspass=$_POST['uspswd'];
    // echo $Utype."</br>";
    // echo $Uemail,$Uspass."</br>";
    
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        // echo "connection successful";
        mysql_select_db("medtour");
        $sql = "select `UType`,`UEmail`,`UPass` from `registration` where `UEmail`='$Uemail'";
  
   $query = mysql_query($sql,$con);
  // echo "Query Successful";
   while($rs = mysql_fetch_assoc($query))
   {    
        $utyp=$rs['UType'];
       $uemail=$rs['UEmail'];
       $upass=$rs['UPass'];
    
    
   }  
     $Npass=md5($Uspass);
    //  echo $Npass."</br>";
    //  echo $utyp."</br>";
    //  echo "I am checking data";
          if($Utype==$utyp)
          {
            if($Uemail==$uemail)
            {
                if($Npass==$upass)
                {
                  $sql3="insert into `login` values('$Utype','$Uemail','$Npass')";
                  if(mysql_query($sql3,$con))
                  {
                      echo "<script>alert('Login Successfully');</script>";
                      echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.html';</script>");
                  }
                  else
                  {
                    echo "<script>alert('Something went wrong please try again');</script>";
                    echo ("<script LANGUAGE='JavaScript'>window. location. href='Userlogin.html';</script>");
                  }
                }
                else
                {
                   echo "<script>alert('Wrong Email or Password');</script>";
                   echo ("<script LANGUAGE='JavaScript'>window. location. href='Userlogin.html';</script>"); 
                }
                
            } 
          }      
            mysql_close($con);       
         
    }
}


?>