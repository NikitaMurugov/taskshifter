<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index(): JsonResponse
    {
        $routeCollection = collect(Route::getRoutes())->reduce(function ($acc, $item) {
            if (str_starts_with($item->uri(), 'api')) {
                return [...$acc, [
                    "path" => $item->uri() . '/',
                    "method(s)" => $item->methods()
                ]];
            } return $acc;
        }, []);

        return response()->json([
            'code' => 200,
            'message' => 'here all api routes',
            'availableRoutes' => [
                ...$routeCollection
            ]
        ]);
    }

    public function about()
    {
        return response()->json([
            'code' => 200,
            'message' => 'about info',
            'about' => [
                'organization' => 'info info info info',
                'ITN' => '5405100203',
            ]
        ]);
    }

    public function contact()
    {
        return response()->json([
            'code' => 200,
            'message' => 'contact info',
            'about' => [
                'phones' => [
                    [
                        'phone' => '8(909)9092222',
                        'face' => 'Putin Victor Nikolaevich',
                    ],
                    [
                        'phone' => '8(909)9092222',
                        'face' => 'Grandevalt Natalia Maximovna',
                    ],
                ],
                'emails' => [
                    [
                        'email' => "VNP@yandex.ru",
                        'face' => 'Putin Victor Nikolaevich',
                    ],
                    [
                        'phone' => 'GRANDeVALT_Nataxa@yandex.ru',
                        'face' => 'Grandevalt Natalia Maximovna',
                    ],
                ],
            ]
        ]);
    }
}
