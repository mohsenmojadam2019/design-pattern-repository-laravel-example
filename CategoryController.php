<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoriesRepository;
 
class CategoriesController extends Controller
{
    private $categories;
 
    public function __construct(CategoriesRepository $categories)
    {
        $this->categories = $categories;
    }
 
    public function index()
    {
        $all = $this->categories->all();
        $find = $this->categories->find(429);
        $paginate = $this->categories->paginate();
        // ...
    }
