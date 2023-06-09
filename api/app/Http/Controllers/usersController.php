<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usersModel;

class usersController extends Controller
{
    public function index($page = 1)
    {
        $perPage = 10; // Number of items per page
        $totalItems = UsersModel::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Total number of pages

        // Ensure the requested page is within the valid range
        $currentPage = max(1, min($page, $totalPages));

        // Calculate the offset for the query
        $offset = ($currentPage - 1) * $perPage;

        // Retrieve the users for the requested page
        $users = UsersModel::offset($offset)->limit($perPage)->get();

        return [
            'data' => $users,
            'current_page' => $currentPage,
            'last_page' => $totalPages,
        ];
    }
}
