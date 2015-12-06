<?php
class MyObserver implements SplObserver{
    public function update(SplSubject $subject){
        $value = var_export($subject->getValue(), true);
        echo "<pre>主题有数据更新了，赶紧来看呀，数据是：\n".$value."</pre>\n";
    }
}