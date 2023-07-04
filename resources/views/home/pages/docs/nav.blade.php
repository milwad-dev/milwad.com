<aside class="doc_left_sidebarlist">
    <div class="open_icon" id="left">
        <i class="arrow_carrot-right"></i>
        <i class="arrow_carrot-left"></i>
    </div>
    <div class="scroll">
        <ul class="list-unstyled nav-sidebar">
            @foreach($navbarItems as $title)
                <li class="nav-item">
                    <a href="{{ route('docs.details', ['repo' => $repo, 'version' => $version, 'page' => $title]) }}"
                       class="nav-link">
                        <img src="{{ asset('assets/img/side-nav/home.png') }}" alt="">{{ page_to_title($title, true) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
