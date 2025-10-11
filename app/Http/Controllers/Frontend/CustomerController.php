<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $customer = Customer::firstOrCreate(
            ['email' => $validated['email']],
            ['name' => $validated['name'], 'ip' => $request->ip()]
        );

        // Có thể lưu session đánh dấu đã nhập thông tin
        session(['customer_registered' => true]);

        return response()->json(['success' => true]);
    }
}
