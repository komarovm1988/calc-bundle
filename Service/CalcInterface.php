<?php

namespace Komarovm1988\CalcBundle\Service;

use Komarovm1988\CalcBundle\Entity\CalcResultInterface;

interface CalcInterface
{
    public const TAG = 'calc.service';

    public function getCalcResult(string $input): CalcResultInterface;
}