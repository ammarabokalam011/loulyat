<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductAPIRequest;
use App\Http\Requests\API\UpdateProductAPIRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ProductController
 * @package App\Http\Controllers\API
 */

class ProductAPIController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     * GET|HEAD /products
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $products = Product::where('categoryID',$request->get('categoryID'))->get();
        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }

    public function getProducts(Request $request)
    {
        $ids=$request->get('productsIDs',[]);
        $ids = array_map('intval', explode(',', $ids));

        $products = Product::whereIn('id',$ids)->get();
        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }


    /**
     * Display the specified Product.
     * GET|HEAD /products/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show(Request $request)
    {
        /** @var Product $product */
        $id=$request->get('productID');
        $product = $this->productRepository->find($id);
        if (empty($product)) {
            return $this->sendError('Product not found');
        }
        return $this->sendResponse($product, 'Product retrieved successfully');
    }

}
