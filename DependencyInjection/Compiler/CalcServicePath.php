<?php
/**
 * Created by PhpStorm.
 * User: Marat
 * Date: 01.09.2018
 * Time: 13:38
 */

namespace Komarovm1988\CalcBundle\DependencyInjection\Compiler;

use Komarovm1988\CalcBundle\Controller\CalcController;
use Komarovm1988\CalcBundle\Service\CalcInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class CalcServicePath implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has(CalcController::class)) {
            return;
        }

        $controller = $container->findDefinition(CalcController::class);
        foreach (array_keys($container->findTaggedServiceIds(CalcInterface::TAG)) as $serviceId) {
            $controller->addMethodCall('initCalcService', [new Reference($serviceId)]);
        }
    }
}