<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // 新規作成ページ
    public function create()
    {
        return view('customers.create');
    }

    // 顧客情報の保存
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        Customer::create($validated);  // 顧客をデータベースに保存

        return redirect()->route('customers.index')->with('success', 'Customer created successfully');
    }

    // 編集ページ
    public function edit(Customer $customer)
    {
        // $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    // 顧客情報の更新
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        $customer->update($validated);  // 顧客情報の更新

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully');
    }

    // 顧客の削除
    public function destroy(Customer $customer)
    {
        $customer->delete();  // 顧客を削除
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully');
    }
}
