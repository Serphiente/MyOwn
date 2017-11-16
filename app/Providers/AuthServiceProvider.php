<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Proveedores
        Gate::define('proveedore_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });

        // Auth gates for: Contact companies
        Gate::define('contact_company_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('contact_company_create', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 7, 8]);
        });
        Gate::define('contact_company_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 7, 8]);
        });
        Gate::define('contact_company_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('contact_company_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Contacts
        Gate::define('contact_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('contact_create', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });
        Gate::define('contact_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('contact_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('contact_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Productos
        Gate::define('producto_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });

        // Auth gates for: Extras
        Gate::define('extra_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Presentacionproducto
        Gate::define('presentacionproducto_access', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('presentacionproducto_create', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('presentacionproducto_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('presentacionproducto_view', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('presentacionproducto_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });

        // Auth gates for: Tipoproducto
        Gate::define('tipoproducto_access', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('tipoproducto_create', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('tipoproducto_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('tipoproducto_view', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('tipoproducto_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });

        // Auth gates for: Principioactivo
        Gate::define('principioactivo_access', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('principioactivo_create', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('principioactivo_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('principioactivo_view', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });
        Gate::define('principioactivo_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 8]);
        });

        // Auth gates for: Producto
        Gate::define('producto_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('producto_create', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('producto_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 7, 8]);
        });
        Gate::define('producto_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('producto_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Listaexterna
        Gate::define('listaexterna_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('listaexterna_create', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 7, 8]);
        });
        Gate::define('listaexterna_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 7, 8]);
        });
        Gate::define('listaexterna_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('listaexterna_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 6, 7, 8]);
        });

        // Auth gates for: Manufacturador
        Gate::define('manufacturador_access', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('manufacturador_create', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('manufacturador_edit', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('manufacturador_view', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });
        Gate::define('manufacturador_delete', function ($user) {
            return in_array($user->role_id, [1, 3]);
        });

        // Auth gates for: Pedido a proveedores
        Gate::define('pedido_a_proveedore_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 7, 8]);
        });

        // Auth gates for: Itemoc
        Gate::define('itemoc_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });
        Gate::define('itemoc_create', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });
        Gate::define('itemoc_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });
        Gate::define('itemoc_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });
        Gate::define('itemoc_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });

        // Auth gates for: Ordendecompra
        Gate::define('ordendecompra_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });
        Gate::define('ordendecompra_create', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });
        Gate::define('ordendecompra_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });
        Gate::define('ordendecompra_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });
        Gate::define('ordendecompra_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 8]);
        });

    }
}
