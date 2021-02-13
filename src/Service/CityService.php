<?php

declare(strict_types=1);

namespace App\Service;

use App\DTO\Controller\Request\CreateCityRequest;
use App\DTO\Controller\Response\CityResponse;
use App\Entity\City;
use App\Repository\CityRepository;

class CityService
{
    public function __construct(
        private CityRepository $cityRepository
    ) { }

    public function create(CreateCityRequest $createCityRequest): CityResponse
    {

    }

    public function update(CreateCityRequest $createCityRequest, int $id): CityResponse
    {

    }

    public function getResponseById(int $id): CityResponse
    {

    }

    public function getAll(): array
    {

    }

    public function deleteById(int $id): void
    {

    }

    public function getById(int $id): City
    {

    }
}
