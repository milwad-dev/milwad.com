<?php

namespace App\Http\Controllers;

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\File;

class DocsController extends Controller
{
    public function __invoke(string $repo, string $version, string $page)
    {
        $directory = resource_path("docs/$repo/$version/");
        $path = $directory . "$page.md";

        abort_if(!file_exists($path), 404);

        $content = Markdown::convertToHtml(file_get_contents($path));
        $navbarItems = config("repos.packages.$repo", []);
        $repo = page_to_title($repo);

        return view('home.pages.docs.docs', compact([
            'repo',
            'version',
            'page',
            'content',
            'navbarItems',
        ]));
    }
}
