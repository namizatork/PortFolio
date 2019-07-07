<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Validator;

class ContactsController extends Controller
{
    const VALIDATIONS = [      
        'name' => 'required|string|max:255',
        'company' => 'string|max:255',
        'requirement' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'text' => 'required|string',
    ];

    /**
     * Send contact form.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        // バリデーション実行
        $validator = Validator::make($request->only('name', 'company', 'requirement', 'email', 'text'), self::VALIDATIONS);
        // 失敗時
        if ($validator->fails()) {
            return response()->json([
                'result' => false,
                'errors' => self::formatErrors($validator->errors()),
                'done' => false
            ]);
        }
        // 成功時
        Mail::to($request->input('email'))->send(new Contact($request));
        return response()->json([
            'result' => true,
            'errors' => [],
            'done' => true
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
