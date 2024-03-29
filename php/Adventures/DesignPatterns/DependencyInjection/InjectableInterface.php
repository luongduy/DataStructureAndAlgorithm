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

/**
 * CreatedBy: thang.tran@tiki.vn
 * Date: 10/31/15
 * Time: 2:08 PM
 */
namespace DesignPatterns\DependencyInjection;

interface InjectableInterface
{

    public function setDI($dependencyInjector);

    public function getDI();

}