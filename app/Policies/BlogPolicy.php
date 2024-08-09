<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can update the given blog.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Blog  $blog
     * @return bool
     */
    public function update(User $user, Blog $blog)
    {
        return $user->id === $blog->user_id;
    }

    /**
     * Determine if the given user can delete the given blog.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Blog  $blog
     * @return bool
     */
    public function delete(User $user, Blog $blog)
    {
        return $user->id === $blog->user_id;
    }
}
