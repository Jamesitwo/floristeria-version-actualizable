<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;


use function Ramsey\Uuid\v1;

// Import the Product model and the ProductRequest for validation
// Import necessary classes

class ProductController extends Controller
{
    public function index()
    {
        // Show the index page with a list of products
        // Fetch the first 5 products ordered by name in ascending order
       $products= Product::orderBy('name','asc')->limit(5)->get();
        return view('index',compact('products'));
    }


    public function products(){
        $products=Product::all();
        // Show the products page with all products
        return view('products.products',compact('products'));

    }

    public function productShow($id, $name)
    {
        // Show the product details based on the ID and name
        $product=Product:: where('id',$id)->where('name',$name)->first();
        

        return view('Products.productShow',compact('product'));
        

    }

    public function create()
    {
        // Show the form to create a new product
        return view('products.create');
    }

    public function store(ProductRequest $request){
        $data=$request->validated();
        // Validate the request data
        if ($request->hasFile('img_url')) {
        $imageName = time() . '_' . uniqid() . '.' . $request->file('img_url')->extension();
        $request->file('img_url')->move(public_path('images'), $imageName);
        $data['img_url']= 'images/'. $imageName; // o 'storage/images/...'
        }
       
        Product::create($data);
        // Redirect to the product creation page after storing the product
        return redirect()->route('product.create');
    }

    public function edit(Product $product)
    {
        
        // Show the form to edit an existing product
        // The product is automatically injected by the route model binding
        // If the product is not found, it will return a 404 error
        

        return view('products.edit', compact('product'));

    }

    public function update(ProductRequest $request, Product $product){
        //Storage::disk('public')->delete($product->img_url);

       $data = $request->validated();

    // Si se sube una nueva imagen
        if ($request->hasFile('img_url')) {
            // Eliminar la imagen anterior si existe
            if ($product->img_url && file_exists(public_path($product->img_url))) {
                unlink(public_path($product->img_url));
            }

            // Subir nueva imagen
            $imageName = time() . '_' . uniqid() . '.' . $request->file('img_url')->extension();
            $request->file('img_url')->move(public_path('images'), $imageName);
            $data['img_url'] = 'images/' . $imageName;
        } else {
            // Mantener la imagen anterior
            $data['img_url'] = $product->img_url;
        }
        // Validate the request data
        $product->update($data);
        return redirect()->route('product.edit', ['product' => $request->id]);
    }

    public function destroy(Product $product){
        // Delete the product
        // The product is automatically injected by the route model binding
        // If the product is not found, it will return a 404 error
        $product->delete();
        // Redirect to the index page after deletion

    }

}
