<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use App\Http\Requests\ClientReviewRequest;
use App\Http\Traits\UploadFileTrait;

class ClientReviewController extends Controller
{
    use UploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientReviews = new ClientReview();
        $clientReviews = ClientReview::get();
        return view('clientReview.index')->with('clientReviews',$clientReviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('clientReview.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ClientReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientReviewRequest $request)
    {
        $clientReview = new ClientReview();
        $clientReview->name = $request->name;
        $clientReview->company = $request->company;
        $clientReview->date = $request->date;
        $clientReview->image = $this->upload($request, $clientReview->image);
        $clientReview->review = $request->review;
        $clientReview->save();
        return redirect('/client-review/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientReview  $clientReview
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientReview = ClientReview::find($id);
        return view('clientReview.show')->with('clientReview', $clientReview);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientReview  $clientReview
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientReview = ClientReview::find($id);
        return view('clientReview.edit')->with('clientReview',$clientReview);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ClientReviewRequest  $request
     * @param  \App\Models\ClientReview  $clientReview
     * @return \Illuminate\Http\Response
     */
    public function update(ClientReviewRequest $request, ClientReview $clientReview)
    {
        $clientReview = ClientReview::find($request->id);
        $clientReview->name = $request->name;
        $clientReview->company = $request->company;
        $clientReview->image = $this->upload($request, $clientReview->image);
        $clientReview->review = $request->review;
        $clientReview->date = $request->date;
        $clientReview->save();
        return redirect('/client-review/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientReview  $clientReview
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientReview = ClientReview::find($id);
        if ($clientReview == null) {
            return view('clientReview.delete');
        } else {
            $clientReview->delete();
        }
        return redirect('/client-review/index');
    }
}
