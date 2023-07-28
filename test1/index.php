<?php 
class RandomNumberSum{

    private $numbers = [];
    
    public function __construct() {
        $this->fillArrayWithRandomNumbers(50);
    }

    private function fillArrayWithRandomNumbers($count) {
        for ($i = 0; $i < $count; $i++) {
            $this->numbers[] = rand(1, 1000);
        }
    }

    public function processNumbers() {
        $start = microtime(true);
        $sum = 0;
        echo "Number with position:"."</br>";
        foreach ($this->numbers as $key=>$number) {

            echo $key."=>".$number."&nbsp; &nbsp;";
            
            if ($number % 7 === 0 && $number % 2 === 0) {
                $sum += $number * 3;
            }

        }
        $end = microtime(true);
        $timeTaken = $end - $start;

        return [
            'sum' => $sum,
            'time_taken' => $timeTaken,
        ];
    }
}

$randomNumberSum = new RandomNumberSum();
$result = $randomNumberSum->processNumbers();

// Output
echo "</br></br>";
echo "Sum of the numbers that are divisible by 7 and even (multiplied by 3): {$result['sum']}\n"."</br>";
echo "Time taken to complete: {$result['time_taken']} seconds\n";

?>