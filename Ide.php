
<?php $mensagem = 'hello  '; //atribuindo valor a variavel 
echo($mensagem);

// your code goes here
//<?php echo 'hello word';
$a = 2;
$b = 3;
$soma= $a +$b; 
echo($soma);

if ($soma % 2 == 1){
    echo(' numero impar ');
}
else {
    echo(' numero par ');
}

#laço de repetição while 
echo(" laço while: ");

$i = 0;
while($i < 10){
    echo($i );
    $i++;
}
#laço de repetição do...while
echo(" laço do...while: ");

$u = 0;
do{
    echo($u);
    $u++;
}while($u < 10);

#laço for 
echo(" laço for: ");

for($u = 0;$u <10;$u++){
    echo($u);
}

#comando foreach 
echo(" laço foreach: ");

$c = [11,12,13,14,15,16,17,18,19,20];
foreach ($c as $j){
    echo($j);
}
