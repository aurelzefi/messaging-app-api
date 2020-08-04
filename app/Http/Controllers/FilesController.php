<?php

namespace App\Http\Controllers;

use App\File;

class FilesController extends Controller
{
    /**
     * Display the specified file.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(File $file)
    {
        $this->authorize('view', $file);

        return response()->file(storage_path("app/{$file->name}"));
    }
}
