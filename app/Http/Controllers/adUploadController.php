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
            'headline' =>'required|string|min:5',
            'street' =>'required|string|min:5',
            'number' => 'required|string|min:5',
            'squareFeet' => 'required|integer',
            'description' =>'required|string|min:5',
            'price' =>'required|double',
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

            ->with('success','You have successfully upload image.');

            //->with('image',$imageName);

    }
}
