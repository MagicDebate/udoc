<?php

namespace SimpleDoc\Policies;
use SimpleDoc\Doc;
use SimpleDoc\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function destroy(User $user, Doc $doc)
   {
       return $user->id === $doc->user_id;
   }
   public function save(User $user, Doc $doc)
  {
      return $user->id === $doc->user_id;
  }
}
