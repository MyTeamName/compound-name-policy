<?php

namespace App\Policies;

use App\User;
use App\CompoundName;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompoundNamePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the compoundName.
     *
     * @param  \App\User  $user
     * @param  \App\CompoundName  $compoundName
     * @return mixed
     */
    public function view(User $user, CompoundName $compoundName)
    {
        return $user->id == $compoundName->user_id;
    }

    /**
     * Determine whether the user can create compoundNames.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the compoundName.
     *
     * @param  \App\User  $user
     * @param  \App\CompoundName  $compoundName
     * @return mixed
     */
    public function update(User $user, CompoundName $compoundName)
    {
        //
    }

    /**
     * Determine whether the user can delete the compoundName.
     *
     * @param  \App\User  $user
     * @param  \App\CompoundName  $compoundName
     * @return mixed
     */
    public function delete(User $user, CompoundName $compoundName)
    {
        //
    }
}
