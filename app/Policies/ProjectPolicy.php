<?php

namespace App\Policies;

use App\Project;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any projects.
     *
     * @param  \App\User $user
     *
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the project.
     *
     * @param  \App\User    $user
     * @param  \App\Project $project
     *
     * @return mixed
     */
    public function view(User $user, Project $project)
    {
        if($user->role()=='copywriter') return true;
        return $project->user_id === $user->id || $project->seller_id === $user->id || $project->seller_id === null;
    }

    /**
     * Determine whether the user can create projects.
     *
     * @param  \App\User $user
     *
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the project.
     *
     * @param  \App\User    $user
     * @param  \App\Project $project
     *
     * @return mixed
     */
    public function update(User $user, Project $project)
    {
        //
    }

    public function jumpOut(User $user, Project $project)
    {
        return $user->id === $project->seller_id;
    }

    /**
     * Determine whether the user can delete the project.
     *
     * @param  \App\User    $user
     * @param  \App\Project $project
     *
     * @return mixed
     */
    public function delete(User $user, Project $project)
    {
        //
    }

    /**
     * Determine whether the user can restore the project.
     *
     * @param  \App\User    $user
     * @param  \App\Project $project
     *
     * @return mixed
     */
    public function restore(User $user, Project $project)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the project.
     *
     * @param  \App\User    $user
     * @param  \App\Project $project
     *
     * @return mixed
     */
    public function forceDelete(User $user, Project $project)
    {
        //
    }

    public function sendAmendments(User $user, Project $project)
    {
        return $project->user_id === $user->id;
    }

    public function reject(User $user, Project $project)
    {
        return $project->user_id === $user->id;
    }
}
