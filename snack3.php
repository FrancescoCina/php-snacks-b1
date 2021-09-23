<!-- 

    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”



 -->




 <?php 
 
    
    $name = $_GET["name"];
    $is_name_valid = false;
    $mail = $_GET["mail"];
    $is_mail_valid = false;

    $age = $_GET["age"];
    $is_age_valid = false;

    // Controllo validità "name"
    if ( strlen($name) >= 3 ){
    $is_name_valid = true;    }
    else {
    $is_name_valid = false;   
    }

    // Controllo validità "mail"
    if (strpos($mail, ".") && strpos($mail, "@")){
        $is_mail_valid = true;
    } else {
        $is_mail_valid = false;
    }
    
    // Controllo validità "age"
    if(is_numeric($age)){
        $is_age_valid = true;
    } else {
        $is_age_valid = false;
    }

    if (($is_name_valid == true) && ($is_mail_valid == true) && ($is_age_valid == true)){
        echo "Accesso Riuscito!";
    } else {
        echo "Accesso Negato!";
    }
 ?>





<!-- Query string:

?name=gi&mail=fra@gmail.com&age=27

-->