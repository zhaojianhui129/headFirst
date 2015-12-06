<?php
class Tea extends CaffeineBeverage{
    public function brew(){
        echo 'Stepping the tea<br>';
    }
    public function addCondiments(){
        echo 'Adding Lemon<br>';
    }
    public function customerWantsCondiments(){
        if (isset($_GET['add']) && $_GET['add'] == 'y'){
            return true;
        }else{
            return false;
        }
    }
}