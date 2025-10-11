<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Software;
use App\Models\CategorySoftware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SoftwareController extends Controller
{
    public function index(Software $software, Request $request)
    {
        $search = $request->input('search');
        $category_filter = $request->input('category');
        $sort = $request->input('sort');
        // Lấy tất cả phần mềm có trạng thái is_active = true
        // sắp xếp theo ngày tạo mới nhất và phân trang (12 sản phẩm mỗi trang)
        $softwares = Software::query()
            ->with('category')
            ->where('is_active', true)
            ->search($search)
            ->filter($category_filter)
            ->sort($sort)
            ->latest()
            ->paginate(12);
        $categories_parent = CategorySoftware::whereNull('parent_id')->get();
        // Trả về view 'software.index' và truyền biến 'softwares' vào view đó
        return view('pages.software', compact('softwares', 'categories_parent'));
    }
    public function download(Software $software)
    {
        // Tăng biến đếm lượt tải
        $software->increment('download_count');
        // Sử dụng Storage facade để stream file từ Google Drive
        // Cột 'file_path' của bạn lúc này đang lưu đường dẫn file, ví dụ: 'files/photoshop.zip'
        return Storage::disk('google')->download($software->file_path);
    }
}
