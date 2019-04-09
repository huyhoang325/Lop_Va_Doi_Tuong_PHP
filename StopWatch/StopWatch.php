<?php
class StopWatch {
    private $started;
    private $finished;
    private $sleep;

    public function start(){
        $this->started = microtime(true);
        sleep(3);
    }

    public function setSleep($sleep){
        $this->sleep = microtime($sleep);
    }

    public function getSleep(){
        return $this->sleep;
    }

    public function stop(){
        $this->finished = microtime(true) - $this->started;
    }

    public function show(){
        return $this->finished;
    }
}

    $watch = new StopWatch();
    $watch->setSleep(3);
    $watch->start();
    $watch->getSleep();
    $watch->stop();
    echo "Thời gian đã trôi: ".$watch->show(). " giây";

?>