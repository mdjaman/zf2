<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Search_Lucene
 * @subpackage Analysis
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace Zend\Search\Lucene\Analysis\Analyzer\Common\Utf8;
use Zend\Search\Lucene\Analysis\Analyzer\Common;
use Zend\Search\Lucene\Analysis\TokenFilter;

/**
 * @uses       \Zend\Search\Lucene\Analysis\Analyzer\Common\Utf8\Utf8
 * @uses       \Zend\Search\Lucene\Analysis\TokenFilter\LowerCaseUtf8
 * @category   Zend
 * @package    Zend_Search_Lucene
 * @subpackage Analysis
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class CaseInsensitive extends Common\Utf8
{
    public function __construct()
    {
        parent::__construct();

        $this->addFilter(new TokenFilter\LowerCaseUtf8());
    }
}

