<?php
/**
 * Auto generated from PB_server_common.proto at 2017-09-05 00:45:50
 *
 * protos package
 */

namespace Protos {
/**
 * PBS_ClientHangUpNotify message
 */
class PBS_ClientHangUpNotify extends \ProtobufMessage
{
    /* Field index constants */
    const COMMUNIID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COMMUNIID => array(
            'name' => 'communiid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::COMMUNIID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'communiid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCommuniid($value)
    {
        return $this->set(self::COMMUNIID, $value);
    }

    /**
     * Returns value of 'communiid' property
     *
     * @return integer
     */
    public function getCommuniid()
    {
        $value = $this->get(self::COMMUNIID);
        return $value === null ? (integer)$value : $value;
    }
}
}