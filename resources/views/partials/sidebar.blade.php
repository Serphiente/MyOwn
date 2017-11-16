@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_action_access')
                <li class="{{ $request->segment(2) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('proveedore_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.proveedores.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('contact_company_access')
                <li class="{{ $request->segment(2) == 'contact_companies' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contact_companies.index') }}">
                            <i class="fa fa-building-o"></i>
                            <span class="title">
                                @lang('quickadmin.contact-companies.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('contact_access')
                <li class="{{ $request->segment(2) == 'contacts' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contacts.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span class="title">
                                @lang('quickadmin.contacts.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('producto_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cube"></i>
                    <span class="title">@lang('quickadmin.productos.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('producto_access')
                <li class="{{ $request->segment(2) == 'productos' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.productos.index') }}">
                            <i class="fa fa-plus"></i>
                            <span class="title">
                                @lang('quickadmin.producto.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('listaexterna_access')
                <li class="{{ $request->segment(2) == 'listaexternas' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.listaexternas.index') }}">
                            <i class="fa fa-list-ol"></i>
                            <span class="title">
                                @lang('quickadmin.listaexterna.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('extra_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-align-justify"></i>
                    <span class="title">@lang('quickadmin.extras.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('presentacionproducto_access')
                <li class="{{ $request->segment(2) == 'presentacionproductos' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.presentacionproductos.index') }}">
                            <i class="fa fa-arrow-right"></i>
                            <span class="title">
                                @lang('quickadmin.presentacionproducto.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('tipoproducto_access')
                <li class="{{ $request->segment(2) == 'tipoproductos' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.tipoproductos.index') }}">
                            <i class="fa fa-arrow-right"></i>
                            <span class="title">
                                @lang('quickadmin.tipoproducto.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('principioactivo_access')
                <li class="{{ $request->segment(2) == 'principioactivos' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.principioactivos.index') }}">
                            <i class="fa fa-arrow-right"></i>
                            <span class="title">
                                @lang('quickadmin.principioactivo.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('manufacturador_access')
                <li class="{{ $request->segment(2) == 'manufacturadors' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.manufacturadors.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.manufacturador.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('pedido_a_proveedore_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-ul"></i>
                    <span class="title">@lang('quickadmin.pedido-a-proveedores.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('itemoc_access')
                <li class="{{ $request->segment(2) == 'itemocs' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.itemocs.index') }}">
                            <i class="fa fa-cart-plus"></i>
                            <span class="title">
                                @lang('quickadmin.itemoc.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('ordendecompra_access')
                <li class="{{ $request->segment(2) == 'ordendecompras' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.ordendecompras.index') }}">
                            <i class="fa fa-align-justify"></i>
                            <span class="title">
                                @lang('quickadmin.ordendecompra.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
