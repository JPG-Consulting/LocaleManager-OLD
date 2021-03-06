<?php
/**
 * LocaleManager
 *
 * Locale manager for ZF-2
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * @author Juan Pedro Gonzalez Gutierrez
 * @copyright Copyright (c) 2013 Juan Pedro Gonzalez Gutierrez (http://www.jpg-consulting.com)
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPLv2 License
 */
namespace LocaleManager\Storage;

use Zend\Stdlib\ArrayUtils;

class DbStorage implements StorageInterface
{

    /**
     * Available locales.
     *
     * @var array
     */
    protected $locales = array();

    /**
     * Constructor.
     *
     * @param array $options
    */
    public function __construct( $options = array() )
    {
        
    }

    /**
     * Adapter factory.
     *
     * @param array|\Traversable $options
     * @return \LocaleManager\Storage\DefaultAdapter
     */
    public static function factory( $options = array())
    {
        if ($options instanceof \Traversable) {
            $options = ArrayUtils::iteratorToArray($options);
        }
         
        return new static( $options );
    }

    /**
     * Check if the locale is available.
     *
     * @param string $locale
     * @return bool
     */
    public function has( $locale )
    {
        return in_array($locale, $this->locales);
    }


}