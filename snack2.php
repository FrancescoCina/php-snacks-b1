<!-- 

Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.


 -->


 <?php 
 
 $students = [
    [
        "name" => "Carlo",
        "lastname" => "Rossi",
        "votes" => [8,6,5,4,9]
    ],
    [
        "name" => "Mario",
        "lastname" => "Bianchi",
        "votes" => [8,4,6,2,5]
    ],
    [
        "name" => "Giulio",
        "lastname" => "Gialli",
        "votes" => [4,8,7,6,2]
    ],
    [
        "name" => "Matteo",
        "lastname" => "Verdi",
        "votes" => [10,8,6,2,7]
    ],
 ];

$average_votes = 0;
$tot_votes = 0;
 
 foreach($students as $student){
     echo $student["name"] . ' ';
     echo $student["lastname"] . '<br/>';
    foreach($student["votes"] as $vote){
        $tot_votes+=$vote;
    }
    echo $average_votes = $tot_votes / 5 . '<br/>';
 }
 ?>