<?php

namespace CarouselVideos\View\Cell;

use Cake\View\Cell;

class CarouselCell extends Cell
{
    public function display()
    {
        $this->loadModel('CarouselVideos.CarouselVideos');

        $carouselVideos = $this->CarouselVideos->find();
        $firstVideo = clone $carouselVideos;
        $firstVideoLength = $firstVideo->first()->length;
        $count = $carouselVideos->count();

        $this->set(compact('carouselVideos', 'count', 'firstVideoLength'));
    }
}
