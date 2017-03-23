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
        parent::__construct();
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

    /**
     * 店舗商品一覧
     */
    public function detail(Request $request, $storeId)
    {
        // 店舗商品取得
        $store = $this->storeRepository->getStoreProducts($storeId);

        return view('store.detail', compact('store'));
    }
}
