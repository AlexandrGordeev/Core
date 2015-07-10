<?php
/**
 * 
 *
 * All rights reserved.
 * 
 * @author Falaleev Maxim
 * @email max@studio107.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 12/09/14.09.2014 16:27
 */

namespace Modules\Core\Models;

use Exception;
use Mindy\Orm\Manager;
use Mindy\Orm\Model;

abstract class SettingsModel extends Model
{
    /**
     * @param bool $asArray
     * @return \Mindy\Orm\Orm
     */
    public static function getInstance($asArray = false)
    {
        $className = get_called_class();
        $manager = new Manager(new $className);
        list ($model, ) = $manager->asArray($asArray)->getOrCreate(['id' => 1]);
        return $model;
    }

    public function t($text)
    {
        return $this->getModule()->t($text, [], 'settings');
    }
}