<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', [
            'user' => auth()->user()
        ]);
    }

    public function update(Request $request)
    {
        try {
            $user = auth()->user();
            $user = User::find($user->id);
            if (!$user) {
                throw new \Exception('User not authenticated');
            }

            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'address' => 'nullable|string|max:255',
                'current_password' => 'nullable|required_with:new_password',
                'new_password' => 'nullable|min:8|confirmed',
            ]);

            // Update basic info
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->address = $request->address;

            // Password update logic
            if ($request->filled('current_password')) {
                if (!Hash::check($request->current_password, $user->password)) {
                    return back()
                        ->withInput()
                        ->withErrors(['current_password' => 'Current password is incorrect.']);
                }

                if (empty($request->new_password)) {
                    return back()
                        ->withInput()
                        ->withErrors(['new_password' => 'New password is required when current password is provided.']);
                }

                $user->password = Hash::make($request->new_password);
            }

            $user->save();
            return back()->with('success', 'Profile updated successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error in profile update: ' . $e->getMessage());
            return back()
                ->withInput()
                ->withErrors($e->errors());

        } catch (\Exception $e) {
            Log::error('Error in profile update: ' . $e->getMessage());
            
            $errorMessage = 'An error occurred while updating your profile.';
            if ($e->getMessage() === 'User not authenticated') {
                $errorMessage = 'Please login to update your profile.';
            }
            
            return back()
                ->withInput()
                ->withErrors(['error' => $errorMessage]);
        }
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Delete old avatar if exists
        if ($request->user()->avatar) {
            Storage::disk('public')->delete($request->user()->avatar);
        }

        // Store new avatar
        $path = $request->file('avatar')->store('avatars', 'public');
        
        // Update user avatar path in database
        $request->user()->update([
            'avatar' => $path
        ]);

        return back()->with('success', 'Profile picture updated successfully');
    }
} 