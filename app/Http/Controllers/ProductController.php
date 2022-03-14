<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\categoryRepository;
use App\Repositories\productRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductController extends AppBaseController
{
    /** @var ProductRepository $productRepository */
    private $productRepository;
    private $categoryRepository;

    public function __construct(ProductRepository $productRepo, CategoryRepository $categoryRepo)
    {
        $this->middleware('auth');
        $this->productRepository = $productRepo;
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->all();
        $categories = $this->categoryRepository->all();
        return view('products.index')
            ->with('products', $products)
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->all();
        return view('products.create')
            ->with('categories', $categories);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $request->image->move(public_path('productImages'), $request->image->getClientOriginalName());
        $input = $request->all();
        $input['image']=$request->image->getClientOriginalName();
        $product = $this->productRepository->create($input);
        Flash::success('Product saved successfully.');
        return redirect(route('products.index'));
    }

    /**
     * Display the specified product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);
        $categories = $this->categoryRepository->all();
        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')
            ->with('product', $product)
            ->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);
        $categories = $this->categoryRepository->all();

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')
            ->with('product', $product)
            ->with('categories', $categories);
    }

    /**
     * Update the specified product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }
        $input = $request->all();
        if($request->hasFile('image')){
            \Illuminate\Support\Facades\File::delete(public_path('productImages').'\\'.$product->image);
            $request->image->move(public_path('productImages'), $request->image->getClientOriginalName());
            $input['image']=$request->image->getClientOriginalName();
        }
        $product = $this->productRepository->update($input, $id);

        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified product from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }
        \Illuminate\Support\Facades\File::delete(public_path('productImages').'\\'.$product->image);
        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }
}
