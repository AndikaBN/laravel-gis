<?php

namespace App\Policies;

use App\Models\User;

class RolePolicy
{
    /**
     * Determine if the given user has the specified role.
     *
     * @param  \App\Models\User  $user
     * @param  string  $role
     * @return bool
     */
    public function hasRole(User $user, string $role)
    {
        return $user->role === $role;
    }

    /**
     * Determine if the given user has any of the specified roles.
     *
     * @param  \App\Models\User  $user
     * @param  array  $roles
     * @return bool
     */
    public function hasAnyRole(User $user, array $roles)
    {
        return in_array($user->role, $roles);
    }
}
