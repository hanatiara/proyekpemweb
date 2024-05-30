<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Update the user's data.
     */
    public function updateData(Request $request)
    {

        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'card_id' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'phone_number' => ['required', 'string', 'max:20'],
        ]);

        $user = DB::table('users')->where('id_profile', Auth::id())->get()->first()->id_profile;

        if ($user) {
            $response = DB::table('profile')->where('id_profile',Auth::id())->update([
                'fullname' => $request->fullname,
                'card_id' => $request->card_id,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'id_user' => Auth::id(),
            ]);
        }

        else {
            $response = DB::table('profile')->where('id_profile',Auth::id())->insert([
                'fullname' => $request->fullname,
                'card_id' => $request->card_id,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'id_user' => Auth::id(),
            ]);
        }

        dd($response);

        return Redirect::route('profile.edit')->with('status', 'data-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function data(Request $request): View
    {
        return view('profile.partials.update-data-form', [
            'user' => $request->user(),
        ]);
    }

}
