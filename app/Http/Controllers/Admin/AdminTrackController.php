<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TrackandTraceStatus;
use App\Http\Controllers\Controller;
use App\Models\TrackandTrace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminTrackController extends Controller

{
    public function index()
    {
        $listTrack = TrackandTrace::where('status', '!=', TrackandTraceStatus::DELETED)->get();
        return view('admin.track.list', compact('listTrack'));
    }


    public function create()
    {
        $listTrack = TrackandTrace::where('status', '!=', TrackandTraceStatus::DELETED)->get();
        return view('admin.track.create',compact('listTrack'));
    }


    public function store(Request $request)
    {
        try {
            $thumbnail = $request->file('thumbnail');
            $url = $request->input('url');
            $status = $request->input('status');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = null;
            }

            $track = [
                'thumbnail' => $imageURL,
                'url' => $url,
                'status' => $status,
                'user_id' => Auth::user()->id,
            ];

            $success = TrackandTrace::create($track);
            if ($success) {
                alert()->success('Success', 'Create Track&Trace success!');
                return redirect(route('admin.track.list'));
            }
            alert()->error('Error', 'Create Track&Trace error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    public function edit($id)
    {
        $listTrack = TrackandTrace::where('status', '!=', TrackandTraceStatus::DELETED)->get();
        $track = TrackandTrace::find($id);
        if (!$track || $track->status == TrackandTraceStatus::DELETED) {
            return redirect(route('not.found'));
        }
        return view('admin.track.edit', compact('track','listTrack'));
    }

    public function update(Request $request, $id)
    {
        try {
            $track = TrackandTrace::find($id);

            $thumbnail = $request->file('thumbnail');
            $url = $request->input('url');
            $status = $request->input('status');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = $track->thumbnail;
            }
            $track->thumbnail = $imageURL;
            $track->url = $url;
            $track->status = $status;
            $success = $track->save();
            if ($success) {
                alert()->success('Success', 'Update Track&Trace success!');
                return redirect(route('admin.track.list'));
            }
            alert()->error('Error', 'Update track error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $track = TrackandTrace::find($id);
            if (!$track || $track->status == TrackandTraceStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $track->status = TrackandTraceStatus::DELETED;
            $track->save();
            alert()->success('Success', 'Delete Track&Trace success!');
            return redirect(route('admin.track.list'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
