<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::get('/', [App\Http\Controllers\OrderController::class, 'approved_orders'])->name('home');

Route::get('category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('category/show/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category_item');
Route::get('category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category_create');
Route::post('category/store/', [App\Http\Controllers\CategoryController::class, 'store'])->name('category_store');
Route::get('category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category_edit');
Route::post('category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category_update');
Route::get('category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category_remove');

Route::get('employer', [App\Http\Controllers\EmployerController::class, 'index'])->name('employer');
Route::get('employer/show/{id}', [App\Http\Controllers\EmployerController::class, 'show'])->name('employer_item');
Route::get('employer/create', [App\Http\Controllers\EmployerController::class, 'create'])->name('employer_create');
Route::post('employer/store/', [App\Http\Controllers\EmployerController::class, 'store'])->name('employer_store');
Route::get('employer/edit/{id}', [App\Http\Controllers\EmployerController::class, 'edit'])->name('employer_edit');
Route::post('employer/update/{id}', [App\Http\Controllers\EmployerController::class, 'update'])->name('employer_update');
Route::get('employer/delete/{id}', [App\Http\Controllers\EmployerController::class, 'destroy'])->name('employer_remove');


Route::get('job', [App\Http\Controllers\JobController::class, 'index'])->name('job');
Route::get('job/show/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('job_item');
Route::get('job/create', [App\Http\Controllers\JobController::class, 'create'])->name('job_create');
Route::post('job/store/', [App\Http\Controllers\JobController::class, 'store'])->name('job_store');
Route::get('job/edit/{id}', [App\Http\Controllers\JobController::class, 'edit'])->name('job_edit');
Route::post('job/update/{id}', [App\Http\Controllers\JobController::class, 'update'])->name('job_update');
Route::get('job/delete/{id}', [App\Http\Controllers\JobController::class, 'destroy'])->name('job_remove');


Route::get('resources', [App\Http\Controllers\ResourcesController::class, 'index'])->name('resources');
Route::get('resources/show/{id}', [App\Http\Controllers\ResourcesController::class, 'show'])->name('resources_item');
Route::get('resources/create', [App\Http\Controllers\ResourcesController::class, 'create'])->name('resources_create');
Route::post('resources/store/', [App\Http\Controllers\ResourcesController::class, 'store'])->name('resources_store');
Route::get('resources/edit/{id}', [App\Http\Controllers\ResourcesController::class, 'edit'])->name('resources_edit');
Route::post('resources/update/{id}', [App\Http\Controllers\ResourcesController::class, 'update'])->name('resources_update');
Route::get('resources/delete/{id}', [App\Http\Controllers\ResourcesController::class, 'destroy'])->name('resources_remove');
Route::get('resources/export/', [App\Http\Controllers\ResourcesController::class, 'export'])->name('download_resource');
Route::get('resources/import/', [App\Http\Controllers\ResourcesController::class, 'upload'])->name('resources_upload_blade');
Route::post('resources/import/', [App\Http\Controllers\ResourcesController::class, 'import'])->name('resources_upload');

Route::get('location', [App\Http\Controllers\LocationController::class, 'index'])->name('location');
Route::get('location/show/{id}', [App\Http\Controllers\LocationController::class, 'show'])->name('location_item');
Route::get('location/create', [App\Http\Controllers\LocationController::class, 'create'])->name('location_create');
Route::post('location/store/', [App\Http\Controllers\LocationController::class, 'store'])->name('location_store');
Route::get('location/edit/{id}', [App\Http\Controllers\LocationController::class, 'edit'])->name('location_edit');
Route::post('location/update/{id}', [App\Http\Controllers\LocationController::class, 'update'])->name('location_update');
Route::get('location/delete/{id}', [App\Http\Controllers\LocationController::class, 'destroy'])->name('location_remove');

Route::get('supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('supplier');
Route::get('supplier/show/{id}', [App\Http\Controllers\SupplierController::class, 'show'])->name('supplier_item');
Route::get('supplier/create', [App\Http\Controllers\SupplierController::class, 'create'])->name('supplier_create');
Route::post('supplier/store/', [App\Http\Controllers\SupplierController::class, 'store'])->name('supplier_store');
Route::get('supplier/edit/{id}', [App\Http\Controllers\SupplierController::class, 'edit'])->name('supplier_edit');
Route::post('supplier/update/{id}', [App\Http\Controllers\SupplierController::class, 'update'])->name('supplier_update');
Route::get('supplier/delete/{id}', [App\Http\Controllers\SupplierController::class, 'destroy'])->name('supplier_remove');

Route::get('order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::post('order/create/ajax', [App\Http\Controllers\OrderController::class, 'order_ajax'])->name('order_ajax');
Route::get('order/show/{id}', [App\Http\Controllers\OrderController::class, 'show'])->name('order_item');
Route::get('order/create', [App\Http\Controllers\OrderController::class, 'create'])->name('order_create');
Route::get('order/show/{id}/approve', [App\Http\Controllers\OrderController::class, 'approve'])->name('order_approve');
Route::get('order/show/{id}/confirmed', [App\Http\Controllers\OrderController::class, 'confirmed'])->name('order_confirmed');
Route::post('order/store/', [App\Http\Controllers\OrderController::class, 'store'])->name('order_store');
Route::get('order/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit'])->name('order_edit');
Route::post('order/update/{id}', [App\Http\Controllers\OrderController::class, 'update'])->name('order_update');
Route::get('order/delete/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('order_remove');

Route::get('manager', [App\Http\Controllers\ManagerController::class, 'index'])->name('manager');
Route::get('manager/show/{id}', [App\Http\Controllers\ManagerController::class, 'show'])->name('manager_item');
Route::get('manager/create', [App\Http\Controllers\ManagerController::class, 'create'])->name('manager_create');
Route::post('manager/store/', [App\Http\Controllers\ManagerController::class, 'store'])->name('manager_store');
Route::get('manager/edit/{id}', [App\Http\Controllers\ManagerController::class, 'edit'])->name('manager_edit');
Route::post('manager/update/{id}', [App\Http\Controllers\ManagerController::class, 'update'])->name('manager_update');
Route::get('manager/delete/{id}', [App\Http\Controllers\ManagerController::class, 'destroy'])->name('manager_remove');

Route::get('clothes', [App\Http\Controllers\ClothesController::class, 'index'])->name('clothes');
Route::get('clothes/show/{id}', [App\Http\Controllers\ClothesController::class, 'show'])->name('clothes_item');
Route::get('clothes/create', [App\Http\Controllers\ClothesController::class, 'create'])->name('clothes_create');
Route::post('clothes/store/', [App\Http\Controllers\ClothesController::class, 'store'])->name('clothes_store');
Route::get('clothes/edit/{id}', [App\Http\Controllers\ClothesController::class, 'edit'])->name('clothes_edit');
Route::post('clothes/update/{id}', [App\Http\Controllers\ClothesController::class, 'update'])->name('clothes_update');
Route::get('clothes/delete/{id}', [App\Http\Controllers\ClothesController::class, 'destroy'])->name('clothes_remove');

Route::get('sales', [App\Http\Controllers\SaleController::class, 'index'])->name('sales');
Route::get('sales/show/{id}', [App\Http\Controllers\SaleController::class, 'show'])->name('sales_item');
Route::post('sales/create/ajax', [App\Http\Controllers\SaleController::class, 'order_ajax'])->name('order_ajax_sales');
Route::post('sales/edit/ajax', [App\Http\Controllers\SaleController::class, 'order_ajax']);
Route::get('sales/create', [App\Http\Controllers\SaleController::class, 'create'])->name('sales_create');
Route::post('sales/store/', [App\Http\Controllers\SaleController::class, 'store'])->name('sales_store');
Route::get('sales/edit/{id}', [App\Http\Controllers\SaleController::class, 'edit'])->name('sales_edit');
Route::post('sales/update/{id}', [App\Http\Controllers\SaleController::class, 'update'])->name('sales_update');
Route::get('sales/delete/{id}', [App\Http\Controllers\SaleController::class, 'destroy'])->name('sales_remove');


Route::get('customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer');
Route::get('customer/show/{id}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer_item');
Route::get('customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer_create');
Route::post('customer/store/', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer_store');
Route::get('customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer_edit');
Route::post('customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer_update');
Route::get('customer/delete/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer_remove');


//Route::get('report/{id}', [App\Http\Controllers\ReportController::class, 'report'])->name('show_report_filter');

Route::get('report/', [App\Http\Controllers\ReportController::class, 'index'])->name('report');
Route::post('report/ajax/', [App\Http\Controllers\ReportController::class, 'report_ajax'])->name('show_report_ajax');
Route::post('report/ajax/pdf/', [App\Http\Controllers\ReportController::class, 'generate_pdf'])->name('pdf');
Route::get('report/ajax/pdf/download/{id}', [App\Http\Controllers\ReportController::class, 'download'])->name('download_pdf');
Route::post('report/ajax/pdf/download/', [App\Http\Controllers\ReportController::class, 'download_pdf'])->name('download');

Route::get('report/show/{id}', [App\Http\Controllers\ReportController::class, 'show'])->name('report_item');
Route::get('report/create', [App\Http\Controllers\ReportController::class, 'create'])->name('report_create');
Route::post('report/store/', [App\Http\Controllers\ReportController::class, 'store'])->name('report_store');
Route::get('report/edit/{id}', [App\Http\Controllers\ReportController::class, 'edit'])->name('report_edit');
Route::post('report/update/{id}', [App\Http\Controllers\ReportController::class, 'update'])->name('report_update');
Route::get('report/delete/{id}', [App\Http\Controllers\ReportController::class, 'destroy'])->name('report_remove');



