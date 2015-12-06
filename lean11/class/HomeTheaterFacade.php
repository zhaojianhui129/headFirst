<?php
class HomeTheaterFacade{
    private $amp,$tuner,$dvd,$cd,$projector,$screen,$lights,$popper;
    public function __construct(Amplifier $amp,
                                Tuner $tuner,
                                DvdPlayer $dvd,
                                CdPlayer $cd,
                                Projector $projector,
                                Screen $screen,
                                TheaterLights $lights,
                                PopcornPopper $popper){
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->lights = $lights;
        $this->popper = $popper;
    }
    /**
     * 看电影
     * @param string $movie
     */
    public function watchMovie($movie = ''){
        echo 'Get ready to watch a movie...<br>';
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim();
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }
    /**
     *停止电影
     */
    public function endMovie(){
        echo 'Shutting movie theater down...<br>';
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }
}