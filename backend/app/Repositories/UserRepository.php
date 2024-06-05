<?php 

namespace App\Repositories;

use App\Models\User;
use App\Interface\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UserRepository implements UserInterface {

    protected $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }

    function getUsers($request) {
        $per_page = (int)$request->per_page ?? 20;
        $users   = User::paginate($per_page);
        return $users;
    }

    function getUserById($id) {
        $user = User::findOrFail($id);
        return $user;
    }
}