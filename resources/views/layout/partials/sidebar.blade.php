<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <!-- Channels&Numbers -->
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Channels & Numbers</h6>
                    <ul>
                        <li class="{{ Request::is('channels') ? 'active' : '' }}"><a href="{{ url('channels') }}"><i
                                    data-feather="box"></i><span>Channels</span></a>
                        </li>
                        <li class="{{ Request::is('numbers-list') ? 'active' : '' }}"><a
                                href="{{ url('numbers-list') }}"><i data-feather="box"></i><span>Numbers</span></a>
                        </li>
                        <li class="{{ Request::is('tools-and-compliance') ? 'active' : '' }}"><a
                                href="{{ url('tools-and-compliance') }}"><i data-feather="box"></i><span>Tools &
                                    Compliance</span></a>
                        </li>
                        <li class="{{ Request::is('my-requests', 'my-requests/request-channel') ? 'active' : '' }}"><a
                                href="{{ url('my-requests') }}"><i data-feather="box"></i><span>My Requests</span></a>
                        </li>

                        {{--  <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Request::is('channels', 'numbers-list', 'numbers', 'tools-and-compliance', 'my-requests', 'my-requests/request-channel') ? 'active subdrop' : '' }}">
                                <i data-feather="grid"></i><span>Channels / Numbers</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li>
                                    <a href="{{ url('channels') }}"
                                        class="{{ Request::is('channels') ? 'active' : '' }}">
                                        Channels
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('numbers-list') }}"
                                        class="{{ Request::is('numbers-list') ? 'active' : '' }}">
                                        Numbers
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('tools-and-compliance') }}"
                                        class="{{ Request::is('tools-and-compliance') ? 'active' : '' }}">
                                        Tools & Compliance
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('my-requests') }}"
                                        class="{{ Request::is('my-requests', 'my-requests/request-channel') ? 'active' : '' }}">
                                        My Requests
                                    </a>
                                </li>
                            </ul>
                        </li>  --}}

                    </ul>
                </li>
                <!-- /Channels&Numbers -->
                <!-- Campaigns -->
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Campaigns</h6>
                    <ul>

                        <li class="{{ Request::is('/','broadcast', 'broadcast/broadcast-list', 'broadcast/broadcast-voice', 'broadcast/broadcast-whatsapp', 'broadcast/broadcast-email', 'broadcast/broadcast-sms') ? 'active' : '' }}"><a href="{{ url('broadcast') }}"><i
                                    data-feather="target"></i><span>broadcast</span></a>
                        </li>
                        <li class="{{ Request::is('flow') ? 'active' : '' }}"><a href="{{ url('flow') }}"><i
                                    data-feather="target"></i><span>Flows</span></a>
                        </li>
                        <li class="{{ Request::is('broadcast/templates', 'flow/templates', 'broadcast/template') ? 'active' : '' }}"><a href="{{ url('broadcast/templates') }}"><i
                                    data-feather="target"></i><span>Templates</span></a>
                        </li>

                        {{--  <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Request::is('broadcast', 'broadcast/broadcast-list', 'broadcast/broadcast-voice', 'broadcast/broadcast-whatsapp', 'broadcast/broadcast-email', 'broadcast/broadcast-sms', 'flow', 'broadcast/templates', 'flow/templates', 'broadcast/template') ? 'active subdrop' : '' }}">
                                <i data-feather="target"></i>
                                <span>Campaigns</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ url('broadcast') }}"
                                        class="{{ Request::is('broadcast', 'broadcast/broadcast-list', 'broadcast/broadcast-voice', 'broadcast/broadcast-whatsapp', 'broadcast/broadcast-email', 'broadcast/broadcast-sms') ? 'active' : '' }}">
                                        broadcast</a>
                                </li>
                                <li><a href="{{ url('flow') }}" class="{{ Request::is('flow') ? 'active' : '' }}">
                                        Flows</a>
                                </li>
                                <li><a href="{{ url('broadcast/templates') }}"
                                        class="{{ Request::is('broadcast/templates', 'flow/templates', 'broadcast/template') ? 'active' : '' }}">
                                        Templates</a>
                                </li>
                            </ul>
                        </li>  --}}
                    </ul>
                </li>
                <!-- /Campaigns -->
                {{--  <!-- Analyze -->
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Analyze</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Request::is('dashboard-new', 'dashboard-old') ? 'active subdrop' : '' }}">
                                <i data-feather="activity"></i>
                                <span>Analyze</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ url('dashboard-new') }}"
                                        class="{{ Request::is('dashboard-new') ? 'active' : '' }}">New Dashboard</a>
                                </li>
                                <li><a href="{{ url('dashboard-old') }}"
                                        class="{{ Request::is('dashboard-oldw') ? 'active' : '' }}">Old Dashboard</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- /Analyze -->  --}}
                <!-- Peopole -->
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Peopoles</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Request::is('people/overview', 'people/persons', 'people/companies', 'people/segments', 'people/tags', 'people/events', 'people/analytics', 'people/configuration') ? 'active subdrop' : '' }}">
                                <i data-feather="users"></i>
                                <span>Peopole</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('people.overview') }}"
                                        class="{{ Request::is('people/overview') ? 'active' : '' }}">Overview</a>
                                </li>
                                {{--  <li><a href="{{ url('') }}"
                                        class="{{ Request::is('people/persons') ? 'active' : '' }}">Persons</a>
                                </li>
                                <li><a href="{{ url('') }}"
                                        class="{{ Request::is('people/companies') ? 'active' : '' }}">Companies</a>
                                </li>
                                <li><a href="{{ url('') }}"
                                        class="{{ Request::is('people/segments') ? 'active' : '' }}">Segments</a>
                                </li>
                                <li><a href="{{ url('') }}"
                                        class="{{ Request::is('people/tags') ? 'active' : '' }}">Tags</a>
                                </li>
                                <li><a href="{{ url('') }}"
                                        class="{{ Request::is('people/events') ? 'active' : '' }}">Events</a>
                                </li>
                                <li><a href="{{ url('') }}"
                                        class="{{ Request::is('people/analytics') ? 'active' : '' }}">Analytics</a>
                                </li>
                                <li><a href="{{ url('') }}"
                                        class="{{ Request::is('people/configuration') ? 'active' : '' }}">Configuration</a>
                                </li>  --}}
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- /Peopole -->

                {{--  <!-- Main -->
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Request::is('index', '/', 'sales-dashboard') ? 'active subdrop' : '' }}"><i
                                    data-feather="grid"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ url('index') }}"
                                        class="{{ Request::is('index', '/') ? 'active' : '' }}">Admin Dashboard</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- /Main -->  --}}

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
