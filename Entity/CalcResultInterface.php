<?php
/**
 * Created by PhpStorm.
 * User: Marat
 * Date: 01.09.2018
 * Time: 13:28
 */

namespace Komarovm1988\CalcBundle\Entity;


interface CalcResultInterface
{
    public const STATUS_OK = 1;
    public const STATUS_ERROR = 2;

    public function getStatus(): int;
    public function getMessage(): string;
}