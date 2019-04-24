<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class produkController extends Controller
{
    public function index()
	{ 
		$produk=['meja','kursi','buku','lampu'];
		return view('produk.index', compact('produk'));
	} 
	
	public function create()
	{ 
		//
	}
	public function store(Request $request)
	{ 
		//
	}
	public function show($id)
	{ 
		//
	}
	public function update(Request $request, $id)
	{ 
		//
	}
	public function destroy($id)
	{ 
		//
	}
}
