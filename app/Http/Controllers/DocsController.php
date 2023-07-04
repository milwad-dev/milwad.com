<?php

namespace App\Http\Controllers;

use GrahamCampbell\Markdown\Facades\Markdown;

class DocsController extends Controller
{
    public function __invoke(string $repo, string $version, string $page)
    {
        $path = resource_path("docs/$repo/$version/$page.md");

        abort_if(!file_exists($path), 404);

        $content = Markdown::convertToHtml(file_get_contents($path));

        return view('home.pages.docs.docs', compact('content'));
    }
}
