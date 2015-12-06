<?php
class DisplayCurrentConditions implements Observer,DisplayElement{
    private $temperature;
    private $humidity;
    private $weatherData;
    public function __construct($weatherData){
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }
    public function update($temp, $humidity, $pressure){
        $this->temperature = $temp;
        $this->humidity = $humidity;
        self::display();
    }
    public function display(){
        echo "目前状况：温度  ".$this->temperature.'摄氏度，湿度  '.$this->humidity.'% <br>';
    }
}