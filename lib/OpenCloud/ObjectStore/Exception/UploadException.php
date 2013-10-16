<?php
/**
 * PHP OpenCloud library.
 * 
 * @copyright 2013 Rackspace Hosting, Inc. See LICENSE for information.
 * @license   https://www.apache.org/licenses/LICENSE-2.0
 * @author    Jamie Hannaford <jamie.hannaford@rackspace.com>
 * @author    Glen Campbell <glen.campbell@rackspace.com>
 */

namespace OpenCloud\ObjectStore\Exception;

/**
 * Description of UploadException
 * 
 * @link 
 */
class UploadException extends \Exception
{
    protected $state;

    public function __construct($state, \Exception $exception = null)
    {
        parent::__construct(
            'An error was encountered while performing an upload: ' . $exception->getMessage(),
            0,
            $exception
        );

        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}