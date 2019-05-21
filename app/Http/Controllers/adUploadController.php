<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;



class adUploadController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUpload()

    {

        return view('imageUpload');

    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost()

    {

       request()->validate([
            'headline' =>'required|string',
            'street' =>'required|string',
            'number' => 'required|string',
            'squareFeet' => 'required|integer',
            'description' =>'required|string',
            'price' =>'required|integer',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);



        //$imageName = time().'.'.request()->image->getClientOriginalExtension();

        $br=0;
        foreach (request()->image as $img ) {
          $imageName=$br.'.jpg';
          $img->move(public_path('images'), $imageName);
          $br++;
        }




        return back()

            ->with('success','Uspesno ste postavili oglas!');

            //->with('image',$imageName);

    }
}
