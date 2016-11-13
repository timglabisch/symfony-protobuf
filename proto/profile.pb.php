<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: profile.proto

namespace Profile;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Guest extends \Google\Protobuf\Internal\Message
{
    private $firstname = '';
    private $lastname = '';
    private $street = '';
    private $housenumber = '';
    private $zip = '';

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($var)
    {
        GPBUtil::checkString($var, True);
        $this->firstname = $var;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($var)
    {
        GPBUtil::checkString($var, True);
        $this->lastname = $var;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($var)
    {
        GPBUtil::checkString($var, True);
        $this->street = $var;
    }

    public function getHousenumber()
    {
        return $this->housenumber;
    }

    public function setHousenumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->housenumber = $var;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($var)
    {
        GPBUtil::checkString($var, True);
        $this->zip = $var;
    }

}

class PaymentInstruction extends \Google\Protobuf\Internal\Message
{
    private $code = '';

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;
    }

}

class BillingAddress extends \Google\Protobuf\Internal\Message
{
    private $firstname = '';
    private $lastname = '';
    private $street = '';
    private $housenumber = '';
    private $zip = '';
    private $paymentInstruction = null;

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($var)
    {
        GPBUtil::checkString($var, True);
        $this->firstname = $var;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($var)
    {
        GPBUtil::checkString($var, True);
        $this->lastname = $var;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($var)
    {
        GPBUtil::checkString($var, True);
        $this->street = $var;
    }

    public function getHousenumber()
    {
        return $this->housenumber;
    }

    public function setHousenumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->housenumber = $var;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($var)
    {
        GPBUtil::checkString($var, True);
        $this->zip = $var;
    }

    public function getPaymentInstruction()
    {
        return $this->paymentInstruction;
    }

    public function setPaymentInstruction(&$var)
    {
        GPBUtil::checkMessage($var, \Profile\PaymentInstruction::class);
        $this->paymentInstruction = $var;
    }

}

class Profile extends \Google\Protobuf\Internal\Message
{
    private $guest = null;
    private $billingAddress = null;

    public function getGuest()
    {
        return $this->guest;
    }

    public function setGuest(&$var)
    {
        GPBUtil::checkMessage($var, \Profile\Guest::class);
        $this->guest = $var;
    }

    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(&$var)
    {
        GPBUtil::checkMessage($var, \Profile\BillingAddress::class);
        $this->billingAddress = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa2030a0d70726f66696c652e70726f746f120750726f66696c65225e0a" .
    "05477565737412110a0966697273746e616d6518012001280912100a086c" .
    "6173746e616d65180220012809120e0a0673747265657418032001280912" .
    "130a0b686f7573656e756d626572180420012809120b0a037a6970180520" .
    "01280922220a125061796d656e74496e737472756374696f6e120c0a0463" .
    "6f646518012001280922a0010a0e42696c6c696e67416464726573731211" .
    "0a0966697273746e616d6518012001280912100a086c6173746e616d6518" .
    "0220012809120e0a0673747265657418032001280912130a0b686f757365" .
    "6e756d626572180420012809120b0a037a697018052001280912370a1270" .
    "61796d656e74496e737472756374696f6e18062001280b321b2e50726f66" .
    "696c652e5061796d656e74496e737472756374696f6e22590a0750726f66" .
    "696c65121d0a05677565737418012001280b320e2e50726f66696c652e47" .
    "75657374122f0a0e62696c6c696e674164647265737318022001280b3217" .
    "2e50726f66696c652e42696c6c696e6741646472657373620670726f746f" .
    "33"
));

