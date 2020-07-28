<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                
                <li class="nav-small-cap"><span class="hide-menu">Main Menu</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                            class="hide-menu">Artikel </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="table-basic.html" class="sidebar-link"><span
                                    class="hide-menu"> Tambah Artikel
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><span
                                    class="hide-menu"> List Artikel
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><span
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
                    <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><span
                                class="hide-menu">
                                Trash
                            </span></a>
                    </li>
                
                </ul>
            </li>

            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">Tags </span></a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item"><a href="#" class="sidebar-link"><span
                            class="hide-menu"> Tambah Tag
                        </span></a>
                </li>
            <li class="sidebar-item"><a href="{{ route('tag.index') }}" class="sidebar-link"><span
                            class="hide-menu"> List Tag
                        </span></a>
                </li>
                <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><span
                            class="hide-menu">
                            Trash
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
                <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                        aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                            class="hide-menu">Logout</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>