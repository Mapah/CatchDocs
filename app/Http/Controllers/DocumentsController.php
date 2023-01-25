<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Documents;
use Symfony\Component\HttpFoundation\Response;

class DocumentsController extends Controller
{
    public function documentsStore(Request $request)
    {
        $this->validate($request, [
            'documents' => 'required|image|mimes:pdf|max:5000',
        ]);
        $documents_path = $request->file('documents')->store('documents', 'public');

        $data = Documents::create([
            'documents' => $documents_path,
        ]);

        return response($data, Response::HTTP_CREATED);
    }
}
