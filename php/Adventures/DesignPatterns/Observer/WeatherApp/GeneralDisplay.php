<?php
/*
 +------------------------------------------------------------------------+
 | ThangTD Adventures                                                     |
 +------------------------------------------------------------------------+
 | Source (https://github.com/thangcest2/DataStructureAndAlgorithm)       |
 +------------------------------------------------------------------------+
 | In love with my wife Mai Phuong Nguyen                                 |
 +------------------------------------------------------------------------+
 | Authors: Tran Duc Thang <thangcest2@gmail.com>                         |
 |          or             <thang.tran@tiki.vn>                           |
 +------------------------------------------------------------------------+
*/

namespace DesignPatterns\Observer\WeatherApp;
use OOPCore\Object;
use DesignPatterns\Observer\Observer\Core\Publisher;
use DesignPatterns\Observer\Observer\Core\ObserverInterface;
use Utilities\BashColorsString;

/**
 * @class GeneralDisplay
 */

class GeneralDisplay extends Object implements ObserverInterface, DisplayInterface
{
    /**
     * @var \DesignPatterns\Observer\Observer\Core\Publisher
     */
    private $_publisher;

    private $_temprature;
    private $_humidity;
    private $_pressure;

    /**
     * Indicate what publisher to listen on
     * @param Publisher $publisher
     */
    public function __construct(Publisher $publisher)
    {
        $this->_publisher = $publisher;
        $this->_publisher->addObserver($this);
    }

    public function display()
    {
        echo BashColorsString::make(sprintf("Wheather detail: %s temprature, %s humidity, %s pressure.", $this->_temprature . "%", $this->_humidity, $this->_pressure) . PHP_EOL, 'yellow');
    }

    /**
     * @param \DesignPatterns\Observer\Observer\Core\Publisher | \DesignPatterns\Observer\WeatherApp\WeatherStationPublisher $publisher
     * @return void
     */
    public function update(Publisher $publisher){
        if ($publisher instanceof WeatherStationPublisher) {
            $this->_temprature = $publisher->getTemprature();
            $this->_humidity = $publisher->getHumidity();
            $this->_pressure = $publisher->getPressure();
            $this->display();
        }

    }
    
}