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
use App\Model\Amino;
use JasperPHP\JasperPHP;

class AminoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function amino_index()
    {
        $filterArr = ["1"=>"id", "2"=>"name"];
        if(!empty(Input::get('filter')))
            $filter = $filterArr[Input::get('filter')];
        else
            $filter = "id";

        // $amino = Amino::all(); /*select semua, studbiru utk pggl model*/
        $amino = \DB::table('amino') /*select semua, studbiru utk pggl model*/
        ->selectRaw("id, name")
        ->orderBy($filter)
        ->get();

        
        return View::make('admin.amino_index', array('amino' => $amino)); /*klau lvar lbih dr 1 (a->a, b->b)*/

        // $search =\Request::get('search');
        // $amino = Amino::where('name', 'like','%'.$search.'%')->orderBy('id')->paginate(5);
        // return View::make('admin.amino_index', array('amino' => $amino));

    }

    public function amino_create()
    {
        return View::make('admin.amino_create'); /*akan return satu file view- paparkan pd end user, make- syntax dlm laravel*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function amino_create_process(Request $request)
    {
        $rules = array(
            'name'            => 'required',
            'picture'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'symbol'          => 'required',
            'polarity'        => 'required', /*student is table name*/
            'acidity'         => 'required',
            'codon'           => 'required',
            'esential'        => 'required',
            'isoelectric'     => 'required',
            'formula'         => 'required',
            'iupac'           => 'required',
            'molar'           => 'required',
            'hydropathy'      => 'required',
            'melting'         => 'required',
            'boiling'         => 'required',
            'density'         => 'required',
            'water'           => 'required'
            ); /*validation*/
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            $messages = $validator->messages(); /*klau fails, laravel sent a message*/
            return Redirect::to('amino_create')/*ikut name dlm route*/
             ->withErrors($validator);
        }
        else
        {

            $imageName = time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('upload/amino'), $imageName);

            $add = new Amino; /*mcm insert into db add tuh var, bley letak name ape2, stud tuh modelnya=tbl*/
            $add->name = Input::get('name');
            $add->picture = $imageName;
            $add->symbol = Input::get('symbol');
            $add->polarity = Input::get('polarity');
            $add->acidity = Input::get('acidity');
            $add->codon = Input::get('codon');
            $add->esential = Input::get('esential');
            $add->isoelectric = Input::get('isoelectric');
            $add->formula = Input::get('formula');
            $add->iupac = Input::get('iupac');
            $add->molar = Input::get('molar');
            $add->hydropathy = Input::get('hydropathy');
            $add->melting = Input::get('melting');
            $add->boiling = Input::get('boiling');
            $add->density = Input::get('density');
            $add->water = Input::get('water');
            /*$add->password = Hash::make(Input::get('password')); /*hash utk encrypt*/



            $add->save();

            Session::flash('message', 'Successfully created Amino Acid!');
            return Redirect::to('amino_index'); /*flash, digunakan sekali shje. then terminated*/
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function amino_show($id)  /*anta id dlm func niyh*/
    {
        $amino = Amino::find($id);   /*sme mcm select all*/
        return View::make('admin.amino_show', array('amino'=>$amino));
    }


 public function showAll()
    {
        $amino = Amino::all(); /*select semua, studbiru utk pggl model*/
        return View::make('admin.showAll', array('amino' => $amino)); /*klau lvar lbih dr 1 (a->a, b->b)*/
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function amino_edit($id)
    {
        $amino = Amino::find($id);
        return View::make('admin.amino_edit', array('amino'=>$amino));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function amino_edit_process(Request $request)
    {
        $rules_edit = array(
            'name'            => 'required',
            // 'picture'         => 'required',
            'symbol'          => 'required',
            'polarity'        => 'required', /*student is table name*/
            'acidity'         => 'required',
            'codon'           => 'required',
            'esential'        => 'required',
            'isoelectric'     => 'required',
            'formula'         => 'required',
            'iupac'           => 'required',
            'molar'           => 'required',
            'hydropathy'      => 'required',
            'melting'         => 'required',
            'boiling'         => 'required',
            'density'         => 'required',
            'water'           => 'required'
        );
        $validator = Validator::make(Input::all(), $rules_edit);

        $id         = Input::get('id');
        $isNewPic   = Input::get('isNewPic', 0);

        if($isNewPic)
            array_push($rules_edit,"'picture' => 'required'");

        if ($validator->fails()) {
            
            $messages = $validator->messages(); /*klau fails, laravel sent a message*/
            return Redirect::to('amino_edit/'.$id)/*ikut name dlm route*/
             ->withErrors($validator);
         }
         else
         {
            if($isNewPic) {
                $imageName = time().'.'.$request->picture->getClientOriginalExtension();
                $request->picture->move(public_path('upload/amino'), $imageName);
            }  
            
            $edit = Amino::find($id); /*mcm insert into db add tuh var, bley letak name ape2, stud tuh modelnya=tbl*/
            $edit->name = Input::get('name');
            if($isNewPic)
                $edit->picture = $imageName;
            $edit->symbol = Input::get('symbol');
            $edit->polarity = Input::get('polarity');
            $edit->acidity = Input::get('acidity');         
            $edit->codon = Input::get('codon');  
            $edit->esential = Input::get('esential'); 
            $edit->isoelectric = Input::get('isoelectric');    
            $edit->formula = Input::get('formula');     
            $edit->iupac = Input::get('iupac');       
            $edit->molar = Input::get('molar');  
            $edit->hydropathy = Input::get('hydropathy'); 
            $edit->melting = Input::get('melting');    
            $edit->boiling = Input::get('boiling');  
            $edit->density = Input::get('density'); 
            $edit->water = Input::get('water'); 
            /*$edit->password = Hash::make(Input::get('password')); /*hash utk encrypt*/
            $edit->save();


            Session::flash('message', 'Succesfully update information!');
            return Redirect::to('amino_show/'.$id); /*flash, digunakan sekali shje. then terminated*/
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function amino_delete($id)
    {
        $amino = Amino::where('id', $id)->delete(); /*syntax lara,*/

        Session::flash('message', 'Succesfully delete Amino Acids!');
        return Redirect::to('amino_index'); /*flash, digunakan sekali shje. then terminated*/
    }

    //jasper report
    // function cetak_surat()
    // {

    //     $database = \Config::get('database.connections.generic');
    //     $jasper = new JasperPHP();

    //     // return $database;

    //     $filename = "AminoAcidReport";
    //     $source_path =  "/views/laporan/$filename.jasper";
    //         $public_path = "/laporan/$filename";
    //         $pdf = "laporan/$filename.pdf";

    //         \JasperPHP::process(
    //             resource_path(). $source_path,
    //             public_path(). $public_path,
    //             array("pdf"),
    //             array(),
    //             $database
    //         )->execute();


    //     $flag = "pdf";

    //     return \View::make('/report_index',
    //         array('Amino Acid Report'=> 'REPORT', 'pdf' => $pdf, 'flag' => $flag));
    // }

    public function cetak_surat_amino()
    {

        $btn_pdf = Input::get('btnpdf');
        $btn_xls = Input::get('btnxls');

        $database = \Config::get('database.connections.generic');
        $jasper = new JasperPHP();
        $filename = "AminoAcidReport";
        $reportPath = "/views/laporan"; //changes ori: /views/laporan

        //$resource_path =  "/views/laporan/$filename.jasper"
        $resource_path = $reportPath . "/" . "$filename.jasper";
        $public_path = "/laporan/$filename"; //ori: without / in front of laporan 
        $pdf = "laporan/$filename.pdf";
        $xls = "laporan/$filename.xls";


        if(isset($btn_pdf))
        {
            $flag = "pdf";
        }
        if(isset($btn_xls))
        {
            $flag = "xls";
        }

        \JasperPHP::process(
            resource_path(). $resource_path,
            public_path()."/". $public_path,
            array("pdf", "xls"),
            array(),
            $database
            )->execute();

        return \View::make('report_index_amino',
            array('Amino Acid Report'=> 'AMINO ACID REPORT','pdf' => $pdf , 'xls' => $xls, 'flag' => $flag));
    }

    public function amino_print($id)
    {

        //$btn_pdf = Input::get('btnpdf');
        //$btn_xls = Input::get('btnxls');

        $database = \Config::get('database.connections.generic');
        $jasper = new JasperPHP();
        $filename = "AlanineReport";
        $reportPath = "/views/laporan"; //changes ori: /views/laporan

        //$resource_path =  "/views/laporan/$filename.jasper"
        $resource_path = $reportPath . "/" . "$filename.jasper";
        $public_path = "/laporan/$filename"; //ori: without / in front of laporan 
        $pdf = "laporan/$filename.pdf";
        //$xls = "laporan/$filename.xls";


        // if(isset($btn_pdf))
        // 
           $flag = "pdf";
        // 
        // if(isset($btn_xls))
        // {
        //     $flag = "xls";
        // }

        \JasperPHP::process(
            resource_path(). $resource_path,
            public_path()."/". $public_path,
            array("pdf"),
            array('Alanine'=>$id),
            $database
            )->execute();

        return \View::make('report_index_alanine',
            array('report_title'=> 'ALANINE REPORT','pdf' => $pdf, 'flag'=>$flag));
    }


}