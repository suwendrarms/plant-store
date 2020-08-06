Route::post('update-insurance-provider',
'DataManagementController@updateInsuranceProvider')->name('admin-update-insurance-provider');
Route::get('insurance-provider/edit/{id}',
'DataManagementController@editInsuranceProvider')->name('admin-edit-insurance-provider');
Route::get('delete-insurance-provider/{id}',
'DataManagementController@deleteInsuranceProvider')->name('admin-delete-insurance-provider');
