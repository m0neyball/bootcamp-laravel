<?php

namespace App\Http\Controllers;

use App\Repositories\BenRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BenController extends Controller
{
    /*
    private $repository;

    public function __construct(BenRepository $repository)
    {

        $this->repository = $repository;
    }
    */

    public function ben(BenRepository $repository)
    {
        return $repository->get();
    }
}
