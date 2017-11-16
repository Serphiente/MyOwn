<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('contact_companies', 'Admin\ContactCompaniesController');
    Route::post('contact_companies_mass_destroy', ['uses' => 'Admin\ContactCompaniesController@massDestroy', 'as' => 'contact_companies.mass_destroy']);
    Route::resource('contacts', 'Admin\ContactsController');
    Route::post('contacts_mass_destroy', ['uses' => 'Admin\ContactsController@massDestroy', 'as' => 'contacts.mass_destroy']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('presentacionproductos', 'Admin\PresentacionproductosController');
    Route::post('presentacionproductos_mass_destroy', ['uses' => 'Admin\PresentacionproductosController@massDestroy', 'as' => 'presentacionproductos.mass_destroy']);
    Route::post('presentacionproductos_restore/{id}', ['uses' => 'Admin\PresentacionproductosController@restore', 'as' => 'presentacionproductos.restore']);
    Route::delete('presentacionproductos_perma_del/{id}', ['uses' => 'Admin\PresentacionproductosController@perma_del', 'as' => 'presentacionproductos.perma_del']);
    Route::resource('tipoproductos', 'Admin\TipoproductosController');
    Route::post('tipoproductos_mass_destroy', ['uses' => 'Admin\TipoproductosController@massDestroy', 'as' => 'tipoproductos.mass_destroy']);
    Route::post('tipoproductos_restore/{id}', ['uses' => 'Admin\TipoproductosController@restore', 'as' => 'tipoproductos.restore']);
    Route::delete('tipoproductos_perma_del/{id}', ['uses' => 'Admin\TipoproductosController@perma_del', 'as' => 'tipoproductos.perma_del']);
    Route::resource('principioactivos', 'Admin\PrincipioactivosController');
    Route::post('principioactivos_mass_destroy', ['uses' => 'Admin\PrincipioactivosController@massDestroy', 'as' => 'principioactivos.mass_destroy']);
    Route::post('principioactivos_restore/{id}', ['uses' => 'Admin\PrincipioactivosController@restore', 'as' => 'principioactivos.restore']);
    Route::delete('principioactivos_perma_del/{id}', ['uses' => 'Admin\PrincipioactivosController@perma_del', 'as' => 'principioactivos.perma_del']);
    Route::resource('productos', 'Admin\ProductosController');
    Route::post('productos_mass_destroy', ['uses' => 'Admin\ProductosController@massDestroy', 'as' => 'productos.mass_destroy']);
    Route::resource('listaexternas', 'Admin\ListaexternasController');
    Route::post('listaexternas_mass_destroy', ['uses' => 'Admin\ListaexternasController@massDestroy', 'as' => 'listaexternas.mass_destroy']);
    Route::post('listaexternas_restore/{id}', ['uses' => 'Admin\ListaexternasController@restore', 'as' => 'listaexternas.restore']);
    Route::delete('listaexternas_perma_del/{id}', ['uses' => 'Admin\ListaexternasController@perma_del', 'as' => 'listaexternas.perma_del']);
    Route::resource('manufacturadors', 'Admin\ManufacturadorsController');
    Route::post('manufacturadors_mass_destroy', ['uses' => 'Admin\ManufacturadorsController@massDestroy', 'as' => 'manufacturadors.mass_destroy']);
    Route::post('manufacturadors_restore/{id}', ['uses' => 'Admin\ManufacturadorsController@restore', 'as' => 'manufacturadors.restore']);
    Route::delete('manufacturadors_perma_del/{id}', ['uses' => 'Admin\ManufacturadorsController@perma_del', 'as' => 'manufacturadors.perma_del']);
    Route::resource('itemocs', 'Admin\ItemocsController');
    Route::post('itemocs_mass_destroy', ['uses' => 'Admin\ItemocsController@massDestroy', 'as' => 'itemocs.mass_destroy']);
    Route::post('itemocs_restore/{id}', ['uses' => 'Admin\ItemocsController@restore', 'as' => 'itemocs.restore']);
    Route::delete('itemocs_perma_del/{id}', ['uses' => 'Admin\ItemocsController@perma_del', 'as' => 'itemocs.perma_del']);
    Route::resource('ordendecompras', 'Admin\OrdendecomprasController');
    Route::post('ordendecompras_mass_destroy', ['uses' => 'Admin\OrdendecomprasController@massDestroy', 'as' => 'ordendecompras.mass_destroy']);
    Route::post('ordendecompras_restore/{id}', ['uses' => 'Admin\OrdendecomprasController@restore', 'as' => 'ordendecompras.restore']);
    Route::delete('ordendecompras_perma_del/{id}', ['uses' => 'Admin\OrdendecomprasController@perma_del', 'as' => 'ordendecompras.perma_del']);



 
});
