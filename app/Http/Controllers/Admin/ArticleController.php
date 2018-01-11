<?php
/**
 * 文章表.
 * User: Victory
 * Date: 2018/1/11 0011
 * Time: 11:42
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Articles;

class ArticleController extends Controller
{
    public function __construct()
    {

    }

    /**
     * 获取文章列表
     */
    public function index()
    {
        $list = Articles::all();
        return view('admin.articles/index',['list'=>$list]);
    }
}