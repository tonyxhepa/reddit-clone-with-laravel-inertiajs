<?php


use App\Http\Controllers\Backend\CommunityController;
use App\Http\Controllers\Backend\CommunityPostController;
use App\Http\Controllers\Backend\PostVoteController;
use App\Http\Controllers\Frontend\CommunityController as FrontendCommunityController;
use App\Http\Controllers\Frontend\PostCommentController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/r/{slug}', [FrontendCommunityController::class, 'show'])->name('frontend.communities.show');
Route::get('/r/{community_slug}/posts/{post:slug}', [PostController::class, 'show'])->name('frontend.communities.posts.show');
Route::post('/r/{community_slug}/posts/{post:slug}/comments', [PostCommentController::class, 'store'])->name('frontend.posts.comments');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('/communities', CommunityController::class);
    Route::resource('/communities.posts', CommunityPostController::class);

    Route::post('/posts/{post:slug}/upVote', [PostVoteController::class, 'upVote'])->name('posts.upVote');
    Route::post('/posts/{post:slug}/downVote', [PostVoteController::class, 'downVote'])->name('posts.downVote');
});



require __DIR__ . '/auth.php';
