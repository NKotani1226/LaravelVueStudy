<?php

namespace App\Http\Controllers;

use App\Services\UserListService;

class UserListController extends Controller
{

    private $userListService;

    public function __construct(UserListService $userListService)
    {
        $this->userListService = $userListService;
    }

    public function index()
    {
        $users = $this->userListService->getAllUsers();
        $pagenate = $this->userListService->getPaginatedUsers(2);
        $whereData = $this->userListService->getWhereName();
        $whereBetween = $this->userListService->getWhereBetween();
        $join = $this->userListService->getJoinPost();
        return view("userlist",compact(
            'users',
            'pagenate',
            'whereData',
            'whereBetween',
            'join'
        ));
    }
}
