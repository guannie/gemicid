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
use App\Model\Gene;
use JasperPHP\JasperPHP;

class GeneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gene_index()
    {
        $filterArr = ["0"=>"id", "1"=>"name"];
        if(!empty(Input::get('filter')))
            $filter = $filterArr[Input::get('filter')];
        else
            $filter = "id";

        // $gene = Gene::all();

        $gene = \DB::table('gene') /*select semua, studbiru utk pggl model*/
        ->selectRaw("id, name")
        ->orderBy($filter)
        ->get();
        
        return View::make('admin.gene_index', array('gene' => $gene)); /*klau lvar lbih dr 1 (a->a, b->b)*/
    }

    public function geneExpression()
    {
       $search = \Request::get('search');
       $gene = Gene::where('serial','like','%' .$search. '%')->orderBy('id')->paginate(1); 
       return View::make('pages.gene-expression',array('gene' => $gene));   
    }

    public function searchGeneList()
    {
       $search = \Request::get('search');
       $gene = Gene::where('serial','like','%' .$search. '%')->orderBy('id')->paginate(15); 
       return View::make('pages.gene-list',array('gene' => $gene));   
    }

    //for user
    public function user_geneshow($id)
    {
        $gene = Gene::find($id);   //sme mcm select all
        return View::make('pages.user_geneshow', array('gene'=>$gene));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gene_create()
    {
        return View::make('admin.gene_create');
    }

    public function gene_create_process(Request $request)
    {
        $rules = array(
            'name'        => 'required',
            'picture'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'serial'      => 'required', /*student is table name*/
            'locus'       => 'required',
            'reference'   => 'required',
            'fastaseq'    => 'required',
            'comment'     => 'required'
            ); /*validation*/
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            $messages = $validator->messages(); /*klau fails, laravel sent a message*/
            return Redirect::to('gene_create')/*ikut name dlm route*/
             ->withErrors($validator);
        }
        else
        {
            $imageName = time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('upload/gene'), $imageName);

            $add = new Gene; /*mcm insert into db add tuh var, bley letak name ape2, stud tuh modelnya=tbl*/
            $add->name = Input::get('name');
            $add->picture = $imageName;
            $add->serial = Input::get('serial');
            $add->locus = Input::get('locus');
            $add->reference = Input::get('reference');
            $add->fastaseq = Input::get('fastaseq');
            $add->comment = Input::get('comment');
            /*$add->password = Hash::make(Input::get('password')); /*hash utk encrypt*/

            $add->save();

            Session::flash('message', 'Successfully created Gene Sequence!');
            return Redirect::to('gene_index'); /*flash, digunakan sekali shje. then terminated*/
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gene_showAll()
    {
        $gene = Gene::all(); /*select semua, studbiru utk pggl model*/
        return View::make('admin.gene_showAll', array('gene' => $gene)); /*klau lvar lbih dr 1 (a->a, b->b)*/
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gene_show($id)
    {
        $gene = Gene::find($id);   /*sme mcm select all*/
        return View::make('admin.gene_show', array('gene'=>$gene));
    }

    // public function gene_list($id)
    // {
    //     $gene = Gene::find($id);   sme mcm select all
    //     return View::make('admin.gene_show', array('gene'=>$gene));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gene_edit($id)
    {
        $gene = Gene::find($id);
        return View::make('admin.gene_edit', array('gene'=>$gene));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gene_edit_process(Request $request)
    {
        $rules_edit = array(
            'name'        => 'required',
            //'picture'     => 'required',
            'serial'      => 'required', /*student is table name*/
            'locus'       => 'required',
            'reference'   => 'required',
            'fastaseq'    => 'required',
            'comment'     => 'required'
        );
        $validator = Validator::make(Input::all(), $rules_edit);

        /*if ($validator->fails()) {
            
            $messages = $validator->messages(); /*klau fails, laravel sent a message*
            return Redirect::to('gene_edit/'.$id)/*ikut name dlm route*
             ->withErrors($validator);
         }
         else
         {
            $imageName = time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('upload/gene'), $imageName);
            $id = Input::get('id');*/
            

        $id         = Input::get('id');
        $isNewPic   = Input::get('isNewPic', 0);

        if($isNewPic)
            array_push($rules_edit,"'picture' => 'required'");

        if ($validator->fails()) {
            
            $messages = $validator->messages(); /*klau fails, laravel sent a message*/
            return Redirect::to('gene_edit/'.$id)/*ikut name dlm route*/
             ->withErrors($validator);
         }
         else
         {
            if($isNewPic) {
                $imageName = time().'.'.$request->picture->getClientOriginalExtension();
                $request->picture->move(public_path('upload/gene'), $imageName);
            }  

            $edit = Gene::find($id); /*mcm insert into db add tuh var, bley letak name ape2, stud tuh modelnya=tbl*/
            $edit->name = Input::get('name');
            //$edit->picture = $imageName;
            if($isNewPic)
                $edit->picture = $imageName;
            $edit->serial = Input::get('serial');
            $edit->locus = Input::get('locus');         
            $edit->reference = Input::get('reference');  
            $edit->fastaseq = Input::get('fastaseq'); 
            $edit->comment = Input::get('comment');    
            /*$edit->password = Hash::make(Input::get('password')); /*hash utk encrypt*/

            $edit->save();

            Session::flash('message', 'Succesfully update information!');
            return Redirect::to('gene_show/'.$id); /*flash, digunakan sekali shje. then terminated*/
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gene_delete($id)
    {

        $gene = Gene::where('id', $id)->delete(); /*syntax lara,*/

        Session::flash('message', 'Succesfully delete Genes Bank Info!');
        return Redirect::to('gene_index'); /*flash, digunakan sekali shje. then terminated*/
    }

    //added for jreport
    public function cetak_surat_genes()
    {

        $btn_pdf = Input::get('btnpdf');
        $btn_xls = Input::get('btnxls');

        $database = \Config::get('database.connections.generic');
        $jasper = new JasperPHP();
        $filename = "GenesReport";
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

        return \View::make('report_index_genes',
            array('Genes Report'=> 'GENES REPORT','pdf' => $pdf , 'xls' => $xls, 'flag' => $flag));
    }

     //jasper report
    // function cetak_surat()
    // {

    //     $database = \Config::get('database.connections.generic');
    //     $jasper = new JasperPHP();

    //     // return $database;

    //     $filename = "GeneBankReport";
    //     $source_path =  "/views/laporan/$filename.jasper";
    //         $public_path = "/laporan/$filename";
    //         $pdf = "laporan/$filename.pdf";

    //         JasperPHP::process(
    //             resource_path(). $source_path,
    //             public_path(). $public_path,
    //             array("pdf"),
    //             array(),
    //             $database
    //         )->execute();


    //     $flag = "pdf";

    //     return \View::make('/report_index',
    //         array('Gene Bank Report'=> 'REPORT', 'pdf' => $pdf, 'flag' => $flag));
    // }

    // public function cetak_laporan_senarai_edit()
    // {

    //     $btn_pdf = Input::get('btnpdf');
    //     $btn_xls = Input::get('btnxls');

    //     $database = \Config::get('database.connections.generic');
    //     $jasper = new JasperPHP();
    //     $filename = "AminoAcidReport";
    //     $reportPath = "/views/laporan";

    //     $resource_path = $reportPath . "/" . "$filename.jasper";
    //     $public_path = "laporan/$filename";
    //     $pdf = "laporan/$filename.pdf";
    //     $xls = "laporan/$filename.xls";


    //     if(isset($btn_pdf))
    //     {
    //         $flag = "pdf";
    //     }
    //     if(isset($btn_xls))
    //     {
    //         $flag = "xls";
    //     }

    //     \JasperPHP::process(
    //         resource_path(). $resource_path,
    //         public_path()."/". $public_path,
    //         array("pdf", "xls"),
    //         array(),
    //         $database
    //         )->execute();

    //     return \View::make('report_index',
    //         array('Amino Acid Report'=> 'REPORT','pdf' => $pdf , 'xls' => $xls, 'flag' => $flag));
    // }
}
