<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'matric_id' => ['required', 'string', 'max:255'],
            'phone_no' => ['required', 'string', 'max:255'],


        ])->validate();

        return User::create([
            'name' => $input['name'],
            'matric_id' => $input['matric_id'],
            'phone_no' => $input['phone_no'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
