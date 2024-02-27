<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviewStore(CreateReviewRequest $request){
        Review::create($request->sanitizedReview());
        toastr('added successfully...!');
        return back();
    }

}
