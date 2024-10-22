<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\photos;
use Illuminate\Support\Str;
use App\Models\event;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        $categorys = category::all();
        return view('event.event', compact('categorys'));
    }
    public function createNews()
    {

        $categorys = category::all();
        return view('event.create-news', compact('categorys'));
    }

    public function storeNews(Request $request)
    {
        $userId = Auth::user()->id;
        $imageFile = time() . '.' . $request->thumbnail_image->extension();
        $request->thumbnail_image->move(public_path('images'), $imageFile);

        if ($request->bgvideo) {
            $VideoFile = time() . '.' . $request->bgvideo->extension();
            $request->bgvideo->move(public_path('images/video'), $VideoFile);
        } else {
            $VideoFile = null;
        }

        try {
            // Prepare the data for the News model
            $eventData = [
                'cate_id' => $request->cate_id,
                'title' => $request->title,
                'date' => now(),
                'slug' => $this->customSlug($request->title), 
                'thumbnail_image' => $imageFile,
                'content' => $request->content,
                'user_id' => $userId,
            ];

            News::create($eventData);

            return response()->json([
                'status' => 200,
                'message' => 'News item created successfully.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ]);
        }


        return response()->json([
            'status' => 200,
        ]);
    }

    private function customSlug($string)
    {
        $string = mb_convert_encoding($string, 'UTF-8', 'auto');
        $slug = preg_replace('/\s+/u', '-', $string);
        $slug = preg_replace('/[^\p{L}\p{N}-]+/u', '', $slug);
        $slug = mb_strtolower($slug, 'UTF-8');
        $slug = trim($slug, '-');
        return $slug;
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageFile = time() . '.' . $request->thumbnail_image->extension();
        $request->thumbnail_image->move(public_path('images'), $imageFile);

        if ($request->bgvideo) {
            $VideoFile = time() . '.' . $request->bgvideo->extension();
            $request->bgvideo->move(public_path('images/video'), $VideoFile);
        } else {
            $VideoFile = null;
        }



        $eventData = [
            'cate_id' => $request->cate_id,
            'title' => $request->title,
            'date' => $request->date,
            'thumbnail_image' => $imageFile,
            'videourl' => $VideoFile,
        ];
        $events = event::create($eventData);

        $files = $request->file('files');

        foreach ($files as $file) {
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);

            $table = new photos();
            $table->event_id =  $events->id;
            $table->image_url =  $filename;
            $table->save();
        }


        return response()->json([
            'status' => 200,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $events = News::orderBy('date', 'desc')->get();
        $output = '';
        if ($events->count() > 0) {
            $output .= ' <div class="table-responsive"> <table class="table  table-striped table-sm text-center align-middle">

             <thead >
               <tr>
                 <th>Image</th>
                 <th>cate ID</th>
                 <th>Title</th>
                 <th>Date</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>';
            foreach ($events as $event) {
                $output .= '<tr>
                 <td><img src="images/' . $event->thumbnail_image . '" width="60" height="60" class="rounded-circle"></td>
                 <td>' . $event->cate_id . '</td>
                 <td>' . $event->title . '</td>
                 <td>' . $event->date . '</td>

                 <td>
                   <a href="'.route('event_edit', $event->id).'" class="btn btn-primary mx-1 editIcon" ><i class="bi-pencil-square h6"></i></a>

                   <a href="#" id="' . $event->id . '" class="btn btn-danger mx-1 deleteIcon"><i class="bi-trash h6"></i></a>
                 </td>
               </tr>';
            }
            $output .= '</tbody></table></div>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $news = News::find($request->id);
        $categorys = category::all();

        return view('event.edit', compact('categorys','news'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    // handle update an employee ajax request
    public function update(Request $request)
    {
        $fileName = '';
        $event = News::find($request->event_id);

        //image start
        if ($request->hasFile('thumbnail_image')) {
            $file = $request->file('thumbnail_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);

            $oldimagePath = public_path('images') . '/' . $event->thumbnail_image;
            if (file_exists($oldimagePath)) {
                unlink($oldimagePath);
            }
        } else {
            $fileName = $request->event_image;
        }

        //image stop

        $eventData = [

            'cate_id' => $request->cate_id,
            'title' => $request->title,
            'date' => $request->date,
            'thumbnail_image' => $fileName,
            'videourl' => $VideoFile,
        ];

        $event->update($eventData);
        return response()->json([
            'status' => 200,
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $event = News::find($id);

        $imagePath = public_path('images') . '/' . $event->thumbnail_image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        News::destroy($id);
    }
}
