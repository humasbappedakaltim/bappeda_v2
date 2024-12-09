<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.users.index');
    }

    public function data_table(Request $request)
    {
        $users = User::where('name', '!=', 'superadmin');

        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                $actions = '';
                $actions .= '<a href="' . route('dashboard.users.edit', $user->id) . '" class="btn btn-sm btn-warning me-2 "><i class="bx bxs-edit"></i></a>';
                $actions .= '<button data-id="'.$user['id'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
