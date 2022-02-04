<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;



class CategoryController extends Controller
{
    public function one_to_many() {
        return view('category.index');
    }

    public function satu() {
        $result = DB::select(
            'SELECT
            categories.position as positionCategory,
            products.id as idProduct,
            products.code as codeProduct,
            products.name as nameProduct,
            products.stock as stockProduct,
            products.varian as varianProduct,
            products.description as descriptionProduct,
            products.image as imageProduct
            FROM categories JOIN products
            ON categories.id = products.categories_id
            WHERE categories.position = "Frontend Web Developer"
            ORDER BY products.id');

        return view('category.satu', ['result' => $result]);
    }

    public function dua() {
        $result = DB::select(
            'SELECT
            categories.position as positionCategory,
            products.id as idProduct,
            products.code as codeProduct,
            products.name as nameProduct,
            products.stock as stockProduct,
            products.varian as varianProduct,
            products.description as descriptionProduct,
            products.image as imageProduct
            FROM categories JOIN products
            ON categories.id = products.categories_id
            WHERE categories.position = "Backend Web Developer"
            ORDER BY products.id');

        return view('category.dua', ['result' => $result]);
    }

    public function tiga() {
        $result = DB::select(
            'SELECT
            categories.position as positionCategory,
            products.id as idProduct,
            products.code as codeProduct,
            products.name as nameProduct,
            products.stock as stockProduct,
            products.varian as varianProduct,
            products.description as descriptionProduct,
            products.image as imageProduct
            FROM categories JOIN products
            ON categories.id = products.categories_id
            WHERE categories.position = "Fullstack Web Developer"
            ORDER BY products.id');

        return view('category.tiga', ['result' => $result]);
    }

    public function empat() {
        $result = DB::select(
            'SELECT
            categories.position as positionCategory,
            products.id as idProduct,
            products.code as codeProduct,
            products.name as nameProduct,
            products.stock as stockProduct,
            products.varian as varianProduct,
            products.description as descriptionProduct,
            products.image as imageProduct
            FROM categories JOIN products
            ON categories.id = products.categories_id
            WHERE categories.position = "Android Developer"
            ORDER BY products.id');

        return view('category.empat', ['result' => $result]);
    }

    public function lima() {
        $result = DB::select(
            'SELECT
            categories.position as positionCategory,
            products.id as idProduct,
            products.code as codeProduct,
            products.name as nameProduct,
            products.stock as stockProduct,
            products.varian as varianProduct,
            products.description as descriptionProduct,
            products.image as imageProduct
            FROM categories JOIN products
            ON categories.id = products.categories_id
            WHERE categories.position = "Digital Marketing"
            ORDER BY products.id');

        return view('category.lima', ['result' => $result]);
    }

    public function enam() {
        $result = DB::select(
            'SELECT
            categories.position as positionCategory,
            products.id as idProduct,
            products.code as codeProduct,
            products.name as nameProduct,
            products.stock as stockProduct,
            products.varian as varianProduct,
            products.description as descriptionProduct,
            products.image as imageProduct
            FROM categories JOIN products
            ON categories.id = products.categories_id
            WHERE categories.position = "Data Siences"
            ORDER BY products.id');

        return view('category.enam', ['result' => $result]);
    }
}
