<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;


route::get('/',[AdminController::class, 'home'] )
->middleware((['auth','admin']));

route::get('/home' , [AdminController::class , 'index' ])->name('home')
->middleware((['auth','admin']));


route::get('/create_room',[AdminController::class, 'create_room'] )
->middleware((['auth','admin']));

route::post('/add_room',[AdminController::class, 'add_room'] )
->middleware((['auth','admin']));

route::get('/view_room',[AdminController::class, 'view_room'] )
->middleware((['auth','admin']));

route::get('/delete_room/{id}',[AdminController::class, 'delete_room'])
->middleware((['auth','admin']));

route::get('/update_room/{id}',[AdminController::class, 'update_room'])
->middleware((['auth','admin']));

route::post('/edit_room/{id}',[AdminController::class, 'edit_room'])
->middleware((['auth','admin']));

route::get('/room_details/{id}',[HomeController::class, 'room_details']);

route::post('/add_booking/{id}',[HomeController::class, 'add_booking']);

route::get('/bookings',[AdminController::class, 'bookings'])
->middleware((['auth','admin']));

route::get('/delete_booking/{id}',[AdminController::class, 'delete_booking'])
->middleware((['auth','admin']));

route::get('/approve_booking/{id}',[AdminController::class, 'approve_booking'])
->middleware((['auth','admin']));

route::get('/reject_booking/{id}',[AdminController::class, 'reject_booking'])
->middleware((['auth','admin']));

route::get('/view_gallery',[AdminController::class, 'view_gallery'])
->middleware((['auth','admin']));

route::post('/upload_gallery',[AdminController::class, 'upload_gallery'])
->middleware((['auth','admin']));

route::get('/delete_gallery/{id}',[AdminController::class, 'delete_gallery'])
->middleware((['auth','admin']));

route::post('/contact',[HomeController::class, 'contact']);

route::get('/all_messages',[AdminController::class, 'all_messages'])
->middleware((['auth','admin']));

route::get('/send_mail/{id}',[AdminController::class, 'send_mail'])
->middleware((['auth','admin']));

route::post('/mail/{id}',[AdminController::class, 'mail'])
->middleware((['auth','admin']));

route::get('/our_rooms',[HomeController::class, 'our_rooms']);

route::get('/hotel_gallery',[HomeController::class, 'hotel_gallery']);

route::get('/contact_us',[HomeController::class, 'contact_us']);