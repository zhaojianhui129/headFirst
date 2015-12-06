<?php
class WeatherData implements Subject{
    private $observers, $temperature, $humidity, $pressure;//观察者列表
    public function __construct(){
        $this->observers = array();//观察者列表
    }
    public function registerObserver($o){
        $this->observers[] = $o;
    }
    public function removeObserver($o){
        $i = array_search($o, $this->observers, true);
        if ($i){
            unset($this->observers[$i]);
        }
    }
    public function notifyObserver(){
        foreach ($this->observers as $ov){
            $ov->update($this->temperature, $this->humidity, $this->pressure);
        }
    }
    public function measurementsChanged(){
        self::notifyObserver();
    }
    public function setMeasurements($temperature, $humidity, $pressure){
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        self::measurementsChanged();
    }
}