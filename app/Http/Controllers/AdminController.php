<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Supplier;


class AdminController extends Controller
{
    public function addCategory()
    {
        return view('admin.addcategory');
    }

    public function postAddCategory(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        
        return redirect('/addcategory');
    }

    public function viewCategory()
    {
        $categories = Category::all();
        return view('admin.viewcategory', compact('categories'));
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }

    public function updateCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.updatecategory', compact('category'));
    }

    public function postUpdateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect('/viewcategory');
    }

    public function addSupplier()
    {
        return view('admin.addsupplier');
    }

    public function postAddSupplier(Request $request)
    {
        $supplier = new Supplier();
        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_contact = $request->supplier_contact;
        $supplier->save();
        return redirect()->back();
    }

    public function viewSupplier()
    {
        $suppliers = Supplier::all();
        return view('admin.viewsupplier', compact('suppliers'));
    }

    public function deleteSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->back();
    }

    public function updateSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.updatesupplier', compact('supplier'));
    }

    public function postUpdateSupplier(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->supplier_name=$request->supplier_name;
        $supplier->supplier_contact=$request->supplier_contact;
        
        $supplier->save();

        return redirect('/viewsupplier');
    }

    public function addProduct()
    {
        return view('admin.addproduct');
    }
}
