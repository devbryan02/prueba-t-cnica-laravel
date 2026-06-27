<?php

namespace App\Features\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Features\Product\Services\ProductService;
use App\Features\Product\Resources\ProductResource;
use App\Features\Product\Requests\StoreProductRequest;
use App\Features\Product\Requests\UpdateProductRequest;

class ProductController extends Controller

{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProducts();

        return ProductResource::collection($products);
    }

    public function store(StoreProductRequest $request)
    {
        $product = $this->productService->createProduct($request->validated());

        return new ProductResource($product);
    }

    public function show($id)
    {
        $product = $this->productService->getProductById($id);

        return new ProductResource($product);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = $this->productService->updateProduct($id, $request->validated());

        return new ProductResource($product);
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);

        return response()->json(null, 204);
    }

}
