<?php
class MuteQuack implements QuackBehavior{
    public function quacking(){
        echo '<<  Silence  >><br>';
    }
}