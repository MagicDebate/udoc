<?php

namespace SimpleDoc\Repositories;

use SimpleDoc\User;

class DocRepository
{
  /**
   * Получить все задачи заданного пользователя.
   *
   * @param  User  $user
   * @return Collection
   */
  public function forUser(User $user)
  {
    return $user->docs()
              ->orderBy('created_at', 'asc')
              ->get();
  }
}
