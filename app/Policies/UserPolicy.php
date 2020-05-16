<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function edit(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }

    public function update(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }

    public function delete(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }

}
