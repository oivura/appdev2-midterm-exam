<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Retrieving a list of all products.
     */
    public function index()
    {
        return response()->json(['message' => 'Display all products']);
    }

    /**
     * Creating a new product.
     */
    public function store(Request $request)
    {
        return response()->json(['message' => 'Product created successfully']);
    }

    /**
     * Retrieving a specific product by ID.
     */
    public function show(string $id)
    {
        return response ()->json(['message' => 'Display product with ID: ' . $id]);
    }

    /**
     * Updating an existing product by ID
     */
    public function update(Request $request, string $id)
    {
        return response ()->json(['message' => 'Product with ID: <id> updated successfully']); 
    }

    /**
     * Deleting a product by ID
     */
    public function destroy(string $id)
    {
        return response ()->json(['message' => 'Product with ID: <id> deleted successfully' ]);
    }
}
