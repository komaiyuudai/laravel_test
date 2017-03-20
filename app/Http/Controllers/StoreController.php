<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Repositories\StoreRepository;

class StoreController extends Controller
{
    protected $storeRepository;

    public function __construct(
        StoreRepository $storeRepository
    )
    {
        $this->storeRepository = $storeRepository;
    }

    /**
     * 店舗一覧
     */
    public function index()
    {
        // 店舗取得
        $stores = $this->storeRepository->getStores();

        return view('store.index', compact('stores'));
    }
}
