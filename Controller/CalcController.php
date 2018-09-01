<?php
/**
 * Created by PhpStorm.
 * User: Marat
 * Date: 01.09.2018
 * Time: 13:20
 */

namespace Komarovm1988\CalcBundle\Controller;

use Komarovm1988\CalcBundle\Service\CalcInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CalcController extends AbstractController
{
    /** @var CalcInterface */
    private $calcService = null;

    public function initCalcService(CalcInterface $calcService)
    {
        $this->calcService = $calcService;
    }

    /**
     * @Route("/calc")
     * @param string $input
     * @return JsonResponse
     */
    public function getCalcResult(string $input): JsonResponse
    {
        $calcResult = $this->calcService->getCalcResult($input);

        return $this->json([
            'status' => $calcResult->getStatus(),
            'message' => $calcResult->getMessage(),
        ]);
    }
}