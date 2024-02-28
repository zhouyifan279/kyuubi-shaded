<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.16.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class AbortTxnsRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'txn_ids',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        2 => array(
            'var' => 'errorCode',
            'isRequired' => false,
            'type' => TType::I64,
        ),
    );

    /**
     * @var int[]
     */
    public $txn_ids = null;
    /**
     * @var int
     */
    public $errorCode = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['txn_ids'])) {
                $this->txn_ids = $vals['txn_ids'];
            }
            if (isset($vals['errorCode'])) {
                $this->errorCode = $vals['errorCode'];
            }
        }
    }

    public function getName()
    {
        return 'AbortTxnsRequest';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::LST) {
                        $this->txn_ids = array();
                        $_size688 = 0;
                        $_etype691 = 0;
                        $xfer += $input->readListBegin($_etype691, $_size688);
                        for ($_i692 = 0; $_i692 < $_size688; ++$_i692) {
                            $elem693 = null;
                            $xfer += $input->readI64($elem693);
                            $this->txn_ids []= $elem693;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->errorCode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('AbortTxnsRequest');
        if ($this->txn_ids !== null) {
            if (!is_array($this->txn_ids)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('txn_ids', TType::LST, 1);
            $output->writeListBegin(TType::I64, count($this->txn_ids));
            foreach ($this->txn_ids as $iter694) {
                $xfer += $output->writeI64($iter694);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->errorCode !== null) {
            $xfer += $output->writeFieldBegin('errorCode', TType::I64, 2);
            $xfer += $output->writeI64($this->errorCode);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}