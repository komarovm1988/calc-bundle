<?php

namespace Komarovm1988\CalcBundle;

use Komarovm1988\CalcBundle\DependencyInjection\Compiler\CalcServicePath;
use Komarovm1988\CalcBundle\Service\CalcInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class Komarovm1988CalcBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new CalcServicePath());
        $container->registerForAutoconfiguration(CalcInterface::class)->addTag(CalcInterface::TAG);
    }
}