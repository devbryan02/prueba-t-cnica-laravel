<?php

namespace App\Features\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Features\Category\Services\CategoryService;
use App\Features\Category\Resources\CategoryResource;


class CategoryController extends Controller
{
    protected CategoryService $categoryService;

    // inyeccion de dependencias
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();

        return CategoryResource::collection($categories);
    }

}
