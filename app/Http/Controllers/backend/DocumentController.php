<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Document;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    public function upload(Request $request)
    {        
        // Validate the request to ensure all necessary data is provided
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,png,xls|max:2048',
            'user_id' => 'required|integer|exists:users,id',
            'department' => 'required|string|max:255',
        ]);

        // Handle the file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Generate a unique name for the file
            $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $generatedName = 'deers-doc-' . Str::slug($originalFileName) . '-' . time() . '.' . $extension;

            // Store the file in the 'documents' directory with the new name
            $path = $file->storeAs('documents', $generatedName);

            // Store document data in the database
            $document = Document::create([
                'user_id' => $request->user_id,
                'name' => $generatedName,
                'department' => $request->input('department'),
                'file_path' => $path,
            ]);

            return response()->json([
                'message' => 'File uploaded and data stored successfully',
                'document' => $document,
            ], 201);
        }

        return response()->json([
            'message' => 'No file uploaded',
        ], 400);
    }
}