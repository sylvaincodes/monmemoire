<?php
namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use App\Http\Controllers\Back\BackController;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Kreait\Firebase\Exception\FirebaseException;
use Google\Cloud\Firestore\FirestoreClient;
use Session;

class FirebaseController extends BackController
{
    public function index()
    {
        return view('back.tables.firebases.index');
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
            'pdf' => 'required',
          ]);
          $input = $request->all();
          $image = $request->file('pdf'); //image file from frontend
  
          $student   = app('firebase.firestore')->database()->collection('Documents')->document('defT5uT7SDu9K5RFtIdl');
          $firebase_storage_path = 'Documents/';
          $name     = $student->id();
          $localfolder = public_path('firebase-temp-uploads') .'/';
          $extension = $image->getClientOriginalExtension();
          $file      = $name. '.' . $extension;
          if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder.$file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            //will remove from local laravel folder
            unlink($localfolder . $file);
            Session::flash('message', 'Succesfully Uploaded');
          }
          return back()->withInput();

       
    }
}