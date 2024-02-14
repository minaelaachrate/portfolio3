
<?php 
$name="mina elaachrate";
$gmail="mina.elaacgrate@gmail.com";


if(isset($_GET["login"])){
    $nom=$_GET["name/prenom"];
    $email=$_GET["email"];
    $date=$_GET["dat"];
    $time=$_GET["time"];
} 
if($name===$nom && $gmail==$email)
    {
      
        echo "Bienvenue notre member".$nom;
        echo  "email".$email;
        echo "la date est" .$date;
        echo "le tempe est".$time;                                                    


    }
else{
       
        echo "email erroné";
    }
    



?>