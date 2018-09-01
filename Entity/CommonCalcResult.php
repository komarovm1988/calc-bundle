<?php
/**
 * Created by PhpStorm.
 * User: Marat
 * Date: 01.09.2018
 * Time: 13:29
 */

namespace Komarovm1988\CalcBundle\Entity;


class CommonCalcResult implements CalcResultInterface
{
    private $status;
    private $message;

    public function __construct(int $status)
    {
        $this->status = $status;
    }

    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}