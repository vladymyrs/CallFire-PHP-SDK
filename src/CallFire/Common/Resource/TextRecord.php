<?php

namespace CallFire\Common\Resource;

class TextRecord extends ActionRecord
{

    /**
     * @var string
     */
    public $message = null;

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

}
