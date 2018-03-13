<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Image;

class UsersController extends Controller
{
    private $user;

    public function __construct()
    {
    	$this->user = new User();
    }

    /**
    * function all list Users  
    * @param null
    * @return Response;
    */
    public function showUsers()
    {
    	//Auth::user();
    	$info_admin = User::find(Auth::user()->id);
    	return view('admin.profilAdm',compact('info_admin'));
    }

    /**
    * function update Users
    * @param Request $request
    * @return Response;
    */
    public function updateUsers(Request $request)
    {
        $this->validate($request,['genre' => 'required']);

        dd( $request->input('genre') );

    	if( !empty( $request->input('nouveauMotDePasse')) && !empty($request->input('confirmationMotDePasse')) )
    	{
    		if( $request->input('nouveauMotDePasse') === $request->input('confirmationMotDePasse') )
    		{
    			if (Hash::check( $request->input('confirmationMotDePasse') , Auth::user()->password ))
				{
				    return back()->with('error','Vous devez choisir un autre mot de passe que la précédente ! ');
				}
				else
				{
					$update_password = $this->update($request);
				}
    		}
    		else
    			return back()->with('error','Assurez-vous que les deux mots de passe sont identiques !');
    	}

    	$update_user = [
    		'name' => $request->input('nom'),
        	'email' => $request->input('email'),
        	'firstname' => $request->input('prenom'),
        	'genre' => $request->input('genre'),
        	'telephone' => $request->input('telephone')
    	];

    	if($request->file('file'))
        {
            $this->validate($request, ['file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            $image = $request->file('file');
            $input['imagename'] = 'administrateur-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/img');
            $image->move($destinationPath, $input['imagename']); 

            //insertion photo de profil
            $update_user['urlimage'] = $input['imagename'];
        }

        User::where('id', Auth::user()->id )->update($update_user);

        return back()->with('success','Les modifications ont été enregistrés avec succès ! ');

    }

    /**
     * Update the password for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        // Validate the new password length...

        $request->user()->fill([
            'password' => Hash::make($request->input('confirmationMotDePasse'))
        ])->save();
    }
}
