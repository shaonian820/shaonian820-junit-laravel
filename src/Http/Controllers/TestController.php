<?php
namespace Shaonian820\ShaonianJunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
class TestController  extends Controller
{
	public function index()
	{
		return '这是一个测试类的index方法';
	}
}