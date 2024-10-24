<?php

namespace App\Policies;

use App\Models\Candidato;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CandidatoPolicy
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
    public function view(User $user, Candidato $candidato): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): Response
    {
        //

         // Si el rol del usuario es 'administrador', permite la creación
         return $user->rol === 'administrador'
         ? Response::allow()
         : Response::deny('No tienes permiso para crear candidatos.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Candidato $candidato): bool
    {
        //
            
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Candidato $candidato): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Candidato $candidato): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Candidato $candidato): bool
    {
        //
    }
}
