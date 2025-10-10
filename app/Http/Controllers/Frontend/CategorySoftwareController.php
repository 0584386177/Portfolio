<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategorySoftware;
use App\Models\Software;

class CategorySoftwareController extends Controller
{
    public function show($slug)
    {
        // 1️⃣ Tìm danh mục theo slug
        $category = CategorySoftware::where('slug', $slug)
            ->with('children')
            ->firstOrFail();

        // 2️⃣ Lấy ID của danh mục hiện tại + các danh mục con
        $categoryIds = collect([$category->id])
            ->merge($category->children->pluck('id'))
            ->toArray();

        // 3️⃣ Lấy phần mềm thuộc danh mục đó
        $softwares = Software::whereIn('category_id', $categoryIds)
            ->where('is_active', 1)
            ->latest()
            ->paginate(10);
        $categories_parent = CategorySoftware::whereNull('parent_id')->get();
        // 4️⃣ Trả về view, chỉ truyền biến softwares
        return view('pages.software', compact('softwares', 'categories_parent'));
    }


}
