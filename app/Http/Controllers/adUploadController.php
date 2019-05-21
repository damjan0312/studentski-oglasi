<?php



namespace App\Http\Controllers;
use App\Ads;
use App\AdsCreator;
use App\Category;
use App\PublisherAds;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

    public function imageUploadPost(Request $request)

    {

       request()->validate([
            'headline' =>'required|string|min:5',
            'street' =>'required|string|min:5',
            'number' => 'required|string',
            'squareFeet' => 'required|integer',
            'description' =>'required|string|min:5',
            'price' =>'required|integer',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);



        //$imageName = time().'.'.request()->image->getClientOriginalExtension();


          /*'id','headline','categoryID','description'*/
          //Auth::user()->student

          $input=Input::only('category','street','number','squareFeet','numOfRooms','numOfBathrooms','typeOfHeating','tv','internet','parking','headline','description','price');
          $ad=new Ads;
          $ad->headline=$input['headline'];
          $ad->dateCreated=Carbon::now();
          $ad->dateExpired=Carbon::now()->addDays(30);
          $ad->categoryID=0;
          $ad->description=$input['description'];
          $ad->save();

          $adsCreator=new AdsCreator;
          $adsId=(Ads::all()->last())->id;
          $adsCreator->adId=$adsId;
          $adsCreator->userId=Auth::user()->id;
          $adsCreator->save();

          $publisherAds=new PublisherAds;
          $publisherAds->id=$adsId;
          $publisherAds->price=$input['price'];
          $publisherAds->category=$input['category'];
          $publisherAds->street=$input['street'];
          $publisherAds->number=$input['number'];
          $publisherAds->squareFeet=$input['squareFeet'];
          $publisherAds->numOfRooms=$input['numOfRooms'];
          $publisherAds->numOfBathrooms=$input['numOfBathrooms'];
          $publisherAds->typeOfHeating=$input['typeOfHeating'];
          if($request['tv'])
            $publisherAds->tv=true;
          if($request['internet'])
            $publisherAds->internet=true;
          if($request['airCondition'])
            $publisherAds->airCondition=true;
          if($request['parking'])
            $publisherAds->parking=true;
          $br=0;
          $publisherAds->images='';
          foreach (request()->image as $img ) {
            $imageName=$adsId.'_'.$br.'.jpg';
            $img->move(public_path('images'), $imageName);
            $publisherAds->images=$publisherAds->images.'|'.$imageName;
            $br++;

          }
          $publisherAds->save();

        return back()

            ->with('success','You have successfully upload image.');

            //->with('image',$imageName);

    }
}
