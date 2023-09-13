<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('akun.akun', compact('accounts'));
    }

    public function create()
    {
        return view('akun.akun-create');
    }

    public function store(Request $request)
    {
        $account = Account::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        event(new Registered($account));

        return redirect('/akun/'. $request->username);
    }

    public function show($username)
    {
        $account = Account::where('username', $username)->firstOrFail();
        return view('akun.akun-show', compact('account'));
    }

    public function edit($username)
    {
        $account = Account::where('username', $username)->firstOrFail();
        return view('akun.akun-edit', compact('account'));
    }

    public function update(Request $request, $username)
    {
        $account = Account::where('username', $username)->firstOrFail();

        $account->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect('/akun/' . $request->username);
    }

    public function delete($username)
    {
        Account::where('username', $username)->delete();
        return redirect('/akun');
    }
}
