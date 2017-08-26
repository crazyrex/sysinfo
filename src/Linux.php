<?php
/**
 * @package     Cronfig Mautic Bundle
 * @copyright   2016 Cronfig.io. All rights reserved
 * @author      Jan Linhart
 * @link        http://cronfig.io
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Cronfig\Sysinfo;

/**
 * Class Linux
 */
class Linux extends AbstractOs implements OsInterface
{
    /**
     * Checks whether the current OS is equal to the current class
     *
     * @return bool
     */
    public function inUse()
    {
        return strtolower($this->getCurrentOsName()) === 'linux';
    }

    /**
     * Counts CPU cores of the current system
     *
     * @return int
     */
    public function getCoreCount()
    {
        return (int) trim(shell_exec('nproc --all'));
    }
}
