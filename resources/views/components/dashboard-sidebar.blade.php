<div class="sidebars settings-sidebar theiaStickySidebar" id="sidebar2">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu5" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Request::is('dashboard-new') ? 'active subdrop' : '' }} "><i
                                    data-feather="server"></i><span>General overview</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ url('dashboard-new') }}"
                                        class="{{ Request::is('dashboard-new') ? 'active' : '' }}">General overview</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Request::is('storage-settings', 'ban-ip-address') ? 'active subdrop' : '' }} "><i
                                    data-feather="layout"></i><span>Delivery</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ url('storage-settings') }}"
                                        class="{{ Request::is('storage-settings') ? 'active' : '' }}">Total traffic</a></li>
                                <li><a href="{{ url('ban-ip-address') }}"
                                        class="{{ Request::is('ban-ip-address') ? 'active' : '' }}">Delivery rate</a>
                                </li>
                                <li><a href="{{ url('ban-ip-address') }}"
                                        class="{{ Request::is('ban-ip-address') ? 'active' : '' }}">Failed</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
