<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10); // Paginate results
        return view('Admin.Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // For multiple images
            'status' => 'boolean',
        ]);

        DB::beginTransaction(); // Start transaction

        try {
            $featuredImagePath = null;
            if ($request->hasFile('featured_image')) {
                $featuredImagePath = $request->file('featured_image')->store('public/products');
            }

            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'featured_image' => $featuredImagePath,
                'status' => $request->has('status'), // Check if checkbox is checked
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('public/products/gallery');
                    $product->images()->create(['image_path' => $imagePath]);
                }
            }

            DB::commit(); // Commit transaction
            return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');

        } catch (Exception $e) {
            DB::rollBack(); // Rollback on error
            return redirect()->back()->with('error', 'Failed to create product: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('Admin.Products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status' => 'required|boolean',
            'delete_featured_image_flag' => 'nullable|boolean',
            // 'delete_gallery_images' => 'nullable|string', // <-- REMOVE THIS VALIDATION RULE
        ]);

        DB::beginTransaction();

        try {
            $featuredImagePath = $product->featured_image;

            if ($request->hasFile('featured_image')) {
                if ($featuredImagePath) {
                    Storage::delete($featuredImagePath);
                }
                $featuredImagePath = $request->file('featured_image')->store('public/products');
            } elseif ($request->input('delete_featured_image_flag')) {
                 if ($featuredImagePath) {
                    Storage::delete($featuredImagePath);
                }
                $featuredImagePath = null;
            }

            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'featured_image' => $featuredImagePath,
                'status' => (bool) $request->input('status'),
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('public/products/gallery');
                    $product->images()->create(['image_path' => $imagePath]);
                }
            }

            DB::commit();
            return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update product: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy(Product $product)
    {
        DB::beginTransaction();

        try {

            if ($product->featured_image) {
                Storage::delete($product->featured_image);
            }
            foreach ($product->images as $image) {
                Storage::delete($image->image_path);
                $image->delete();
            }

            $product->delete();

            DB::commit();
            return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to delete product: ' . $e->getMessage());
        }
    }
       public function destroyImage(ProductImage $productImage)
    {
        DB::beginTransaction();
        try {

            if (Storage::exists($productImage->image_path)) {
                Storage::delete($productImage->image_path);
            }
            $productImage->delete();

            DB::commit();
            return response()->json(['message' => 'Image removed successfully.', 'image_id' => $productImage->id], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to remove image.', 'error' => $e->getMessage()], 500);
        }
    }
}
