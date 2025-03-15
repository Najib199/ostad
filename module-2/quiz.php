<?php

function evaluateQuiz(array $questions , array $answers): int{
    $score = 0;
    foreach($questions as $index=> $question ){
        if($answers[$index] === $question['correct']){
            $score++ ;
        }
    }
    return $score;
}

$questions = [
    ['question' => 'what is 2+2' , 'correct' => '4'],
    ['question' => 'what is capital of france' , 'correct' => 'Paris'],
    ['question' => 'who wrote hamlet' , 'correct' => 'Shakespeare']
];

$answers = [];
foreach($questions as $index => $question){
    echo($index+1)."." .$question['question']. "\n";
    $answers[] = trim(readline("Your Answer : "));
}
$score = evaluateQuiz($questions , $answers);
$score = 3;

echo "\nYou scored $score out of the" .count($questions). '\n';
if($score === count($questions)){
    echo "Excellent job ! \n";
}elseif($score>1){
    echo "Good Effort !\n";
}else{
    echo "your result is failed !\n";
}
