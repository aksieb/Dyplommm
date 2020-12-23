<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{

    public function index(
        CategoryRepository $categoryRepository
    ) {
        $categories = $categoryRepository->getByCategoryId();

        return view('front.welcome', array(
            'categories'    => $categories
        ));
    }

    public function category(
        $id,
        CategoryRepository $categoryRepository
    ) {
        $category = $categoryRepository->find($id);
        $categories = $categoryRepository->getByCategoryId();

        return view('front.category', array(
            'category'      => $category,
            'categories'    => $categories
        ));
    }

    public function file($filename)
    {
        return Storage::download('/files/' . $filename);
    }
}
