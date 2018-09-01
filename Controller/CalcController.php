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
use Symfony\Component\HttpFoundation\Request;

class CalcController extends AbstractController
{
    /** @var CalcInterface */
    private $calcService = null;

    public function initCalcService(CalcInterface $calcService)
    {
        $this->calcService = $calcService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getCalcResult(Request $request): JsonResponse
    {
        $input = $request->get('input');

        if ($input === null) {
            $this->json([
                'status' => 'error',
                'message' => 'Не указан входной параметр input',
            ]);
        }

        $calcResult = $this->calcService->getCalcResult($input);

        return $this->json([
            'status' => $calcResult->getStatus(),
            'message' => $calcResult->getMessage(),
        ]);
    }
}