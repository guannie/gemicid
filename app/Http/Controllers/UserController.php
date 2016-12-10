<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View; /*bg thu laravel gune class view*/
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Hash;
use Session;
use App\Model\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_index()
    {
        $users = Users::all(); /*select semua, studbiru utk pggl medel*/
        return View::make('user_index', array('users' => $users)); /*klau lvar lbih dr 1 (a->a, b->b)*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function student_create()
    // {
    //     return View::make('student_create'); akan return satu file view- paparkan pd end user, make- syntax dlm laravel
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function student_create_process()
    // {
    //     $rules = array(
    //         'name'             => 'required',
    //         'email'            => 'required|email|unique:student', /*student is table name*/
    //         'password'         => 'required',
    //         'password_confirm' => 'required|same:password'
    //         ); /*validation*/
    //     $validator = Validator::make(Input::all(), $rules);
    //     if ($validator->fails()) {
    //         $messages = $validator->messages(); /*klau fails, laravel sent a message*/
    //         return Redirect::to('student_create')/*ikut name dlm route*/
    //          ->withErrors($validator)
    //          ->withInput(Input::except('password', 'password_confirm'));  /*anta value input kecuali pwrd n confirm pwrd*/
    //     }
    //     else
    //     {
    //         $add = new Student; /*mcm insert into db add tuh var, bley letak name ape2, stud tuh modelnya=tbl*/
    //         $add->name = Input::get('name');
    //         $add->email = Input::get('email');
    //         $add->password = Hash::make(Input::get('password')); /*hash utk encrypt*/

    //         $add->save();

    //         Session::flash('message', 'Succesfully created student!');
    //         return Redirect::to('student_create'); /*flash, digunakan sekali shje. then terminated*/
    //     }
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user_show($id)  /*anta id dlm func niyh*/
    {
        $users = Users::find($id);   /*sme mcm select all*/
        return View::make('user_show', array('users'=>$users));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function student_edit($id)
    // {
    //     $student = Student::find($id);
    //     return View::make('student_edit', array('student'=>$student));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function student_edit_process($id)
    // {
    //     $rules_edit = array(
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //         'password_confirm' => 'required|same:password'
    //     );
    //     $validator = Validator::make(Input::all(), $rules_edit);

    //     if ($validator->fails()) {
            
    //         $messages = $validator->messages(); klau fails, laravel sent a message
    //         return Redirect::to('student_edit/'.$id)/*ikut name dlm route*/
    //          ->withErrors($validator)
    //          ->withInput(Input::except('password', 'password_confirm'));
    //      }
    //      else
    //      {
    //         $edit = Student::find($id); /*mcm insert into db add tuh var, bley letak name ape2, stud tuh modelnya=tbl*/
    //         $edit->name = Input::get('name');
    //         $edit->email = Input::get('email');
    //         $edit->password = Hash::make(Input::get('password')); /*hash utk encrypt*/

    //         $edit->save();

    //         Session::flash('message', 'Succesfully update student!');
    //         return Redirect::to('student_edit/'.$id); /*flash, digunakan sekali shje. then terminated*/
    //      }
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user_delete($id)
    {
        $users = Users::where('id', $id)->delete(); /*syntax lara,*/

        Session::flash('message', 'Succesfully delete user!');
        return Redirect::to('user_index'); /*flash, digunakan sekali shje. then terminated*/
    }

}
