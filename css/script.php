<?php 
$etudiant = [
    [
        'nom' => 'pouye',
        'prenom' => 'alassane',
        'age' => 20,
        'mail' => 'pouye@gmail.com',
    ],
    [
        'nom' => 'thiane',
        'prenom' => 'zeyneb',
        'age' => 22,
        'mail' => 'thiane@gmail.com',
    ],
    [
        'nom' => 'mboup',
        'prenom' => 'ibrahima',
        'age' => 19,
        'mail' => 'mboup@gmail.com',
    ]
] 
if (key_exists('nom',$etudiant)) {
    echo 'la clee nom est bien dans le tableau ';
}
else{
    echo 'la cle nom n\'est pas dans le tableau';
}
foreach($etudiant as $val){
    echo $val['prenom'] .' '.$val['nom']. 'a pour mail :' . $val['mail'] . PHP_EOL;
}
?>