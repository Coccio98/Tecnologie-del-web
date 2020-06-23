<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
    public function index(Request $request){
        $path = 'storage/images/';
        $page = (int) $request->input('page') ?: 1;
        $images = collect(File::allFiles($path));
        $onPage = 10;
        $slice = $images->slice(($page-1)* $onPage, $onPage);
        $paginator = new LengthAwarePaginator($slice, $images->count(), $onPage);
        $paginator->setPath('media');
        return view('dashboard.media')->with('images',$paginator);
    }

    public function delete($path){
        File::delete('storage/images'.$path);
        return back()->withStatus(__('Image successfully deleted.'));
    }

}
