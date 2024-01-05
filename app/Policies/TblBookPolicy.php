<?php

namespace App\Policies;

use App\Models\Tbl_Book;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TblBookPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Tbl_Book $tblBook): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tbl_Book $tbl_Book)
    {
        return $user->id === $tbl_Book->user_id;
    }

    public function delete(User $user, Tbl_Book $tbl_Book)
    {
        return $user->id === $tbl_Book->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Tbl_Book $tblBook): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Tbl_Book $tblBook): bool
    {
        //
    }
}
