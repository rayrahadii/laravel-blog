<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('home') }}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                
                <li class="nav-small-cap"><span class="hide-menu">Main Menu</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                            class="hide-menu">Post </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('post.create') }}" class="sidebar-link"><span
                                    class="hide-menu"> Tambah Post
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('post.index') }}" class="sidebar-link"><span
                                    class="hide-menu"> List Post
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('post.trash') }}" class="sidebar-link"><span
                                    class="hide-menu">
                                    Trash
                                </span></a>
                        </li>
                    
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                    aria-expanded="false"><i data-feather="book" class="feather-icon"></i><span
                        class="hide-menu">Kategori </span></a>
                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                    <li class="sidebar-item"><a href="{{ route('category.create') }}" class="sidebar-link"><span
                                class="hide-menu"> Tambah Kategori
                            </span></a>
                    </li>
                <li class="sidebar-item"><a href="{{ route('category.index') }}" class="sidebar-link"><span
                                class="hide-menu"> List Kategori
                            </span></a>
                    </li>
                
                </ul>
            </li>

            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">Tags </span></a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item"><a href="{{ route('tag.create') }}" class="sidebar-link"><span
                            class="hide-menu"> Tambah Tag
                        </span></a>
                </li>
            <li class="sidebar-item"><a href="{{ route('tag.index') }}" class="sidebar-link"><span
                            class="hide-menu"> List Tag
                        </span></a>
                </li>
            
            </ul>
        </li>
                
                
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards.html"
                        aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                            class="hide-menu">Cards
                        </span></a>
                </li>
            
                <li class="list-divider"></li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>