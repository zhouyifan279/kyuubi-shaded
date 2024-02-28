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

class ThriftHiveMetastore_set_hadoop_jobid_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'jobId',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'cq_id',
            'isRequired' => false,
            'type' => TType::I64,
        ),
    );

    /**
     * @var string
     */
    public $jobId = null;
    /**
     * @var int
     */
    public $cq_id = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['jobId'])) {
                $this->jobId = $vals['jobId'];
            }
            if (isset($vals['cq_id'])) {
                $this->cq_id = $vals['cq_id'];
            }
        }
    }

    public function getName()
    {
        return 'ThriftHiveMetastore_set_hadoop_jobid_args';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->jobId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->cq_id);
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
        $xfer += $output->writeStructBegin('ThriftHiveMetastore_set_hadoop_jobid_args');
        if ($this->jobId !== null) {
            $xfer += $output->writeFieldBegin('jobId', TType::STRING, 1);
            $xfer += $output->writeString($this->jobId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->cq_id !== null) {
            $xfer += $output->writeFieldBegin('cq_id', TType::I64, 2);
            $xfer += $output->writeI64($this->cq_id);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}