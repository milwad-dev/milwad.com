<aside class="doc_left_sidebarlist">
    <div class="open_icon" id="left">
        <i class="arrow_carrot-right"></i>
        <i class="arrow_carrot-left"></i>
    </div>
    <div class="scroll">
        <ul class="list-unstyled nav-sidebar">
            @foreach($navbarItems as $title)
                <li class="nav-item {{ $title === $page ? 'active' : null }}">
                    <a href="{{ route('docs.details', ['repo' => title_to_page($repo), 'version' => $version, 'page' => $title]) }}"
                       class="nav-link">
                        <i class="arrow_right mr-2"></i>{{ page_to_title($title, true) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
