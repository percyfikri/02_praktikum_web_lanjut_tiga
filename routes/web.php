<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobaController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return '<iframe src="https://www.educastudio.com/" width="100%" height="100%"></iframe>';
// });

// // Route Biasa Halaman About Us
// Route::get('/about-us', function (){
//     return '<iframe src="https://www.educastudio.com/about-us" width="100%" height="100%"></iframe>';
// });

// // Route Prefix Halaman Products
// Route::prefix('products')->group(function(){
//     Route::get('category/marbel-edu-games',function(){
//         return '<iframe src="https://www.educastudio.com/category/marbel-edu-games" width="100%" height="100%"></iframe>';
//     });
// });

// Route::prefix('products')->group(function(){
//     Route::get('category/marbel-and-friends-kids-games',function(){
//         return '<iframe src="https://www.educastudio.com/category/marbel-and-friends-kids-games" width="100%" height="100%"></iframe>';
//     });
// });

// Route::prefix('products')->group(function(){
//     Route::get('category/riri-story-books',function(){
//         return '<iframe src="https://www.educastudio.com/category/riri-story-books" width="100%" height="100%"></iframe>';
//     });
// });

// Route::prefix('products')->group(function(){
//     Route::get('category/kolak-kids-songs',function(){
//         return '<iframe src="https://www.educastudio.com/category/kolak-kids-songs" width="100%" height="100%"></iframe>';
//     });
// });

// // Route param Halaman News
// Route::get('/{news}', function () {
//     echo '<iframe src="https://www.educastudio.com/news" width="100%" height="100%"></iframe>';
// });

// Route::get('news/{title}', function () {
//     echo '<iframe src="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19" width="100%" height="100%">
//         </iframe>';
// });

// // Route prefix Halaman Program
// Route::prefix('program')->group(function(){
//     Route::get('karir',function(){
//         return '<iframe src="https://www.educastudio.com/program/karir" width="100%" height="100%"></iframe>';
//     });
// });

// Route::prefix('program')->group(function(){
//     Route::get('magang',function(){
//         return '<iframe src="https://www.educastudio.com/program/magang" width="100%" height="100%"></iframe>';
//     });
// });

// Route::prefix('program')->group(function(){
//     Route::get('kunjungan-industri',function(){
//         return '<iframe src="https://www.educastudio.com/program/kunjungan-industri" width="100%" height="100%"></iframe>';
//     });
// });

// // Route Resource Halaman Contact Us
// Route::resource('/contact-us', ContactUsController::class)->only([
//     'contact',
// ]);


//Route Biasa
    Route::get('home', function(){
        return redirect('https://www.educastudio.com');
    });


//Route Prefix
Route::prefix('products')->group(function (){
    Route::get('category/marbel-edu-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('category/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
    Route::get('category/riri-story-books', function(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('category/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});


//Route Param
    Route::get('/news', function(){
        return redirect('https://www.educastudio.com/news');
    });
    Route::get('news/{title}', function($title){
        return redirect('https://www.educastudio.com/news/' . $title);
        //educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19
    });


//Route Prefix
Route::prefix('program')->group(function (){
    Route::get('program/karir', function(){
        return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('program/magang', function(){
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('program/kunjungan-industri', function(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});


//Route Biasa
Route::get('/about-us', function(){
   return redirect('https://www.educastudio.com/about-us'); 
});


//Route Resouce-only
Route::resource('/contact-us', cobaController::class)->only([
    'index',
    'create',
    'store'
]);


Route::fallback(function () {
    return '404 Not Found';
});
