<?php
if(isset($_COOKIE['username'])){

echo "Logovan je korisnik са usernameom:" . $_COOKIE['username'];

}
else{
    echo "NEma koalcica. "    ;
}

setcookie('korisnik', 'Dragana', time() + 60*60*24);

// setcookie('korisnik', 'Dragana', time() - 60*60*24);


if(count($_COOKIE)>0){
echo "Trenutno postoji" .count($_COOKIE) . "sacuvanih kolacica.";

}
else{
    echo "Nema sacuvanih kolacica.";
}


$user = ["ime" => "Sreten",
         "email "=> "sreten@gmail.com",
        "godine" => 23];


        // setcookie('user', $user, time()+3600);

// serijalizacija
        $userSerijalizovan = serialize($user);

        setcookie("user", $userSerijalizovan, time()+3600);

        $usercookie = $_COOKIE['user'];
        echo '<br>';
        echo $usercookie;

        // deserijalizacija

        $userdeserijalizovan = unserialize($_COOKIE['user']);

        echo "<br>" . $userdeserijalizovan['ime'];

        print_r($userdeserijalizovan);
     

?>