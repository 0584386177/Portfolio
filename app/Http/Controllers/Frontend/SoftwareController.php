<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SoftwareController extends Controller
{
    public function index(Software $software)
    {
        // Lấy tất cả phần mềm có trạng thái is_active = true
        // sắp xếp theo ngày tạo mới nhất và phân trang (12 sản phẩm mỗi trang)
        $softwares = Software::where('is_active', true)
            ->latest()
            ->paginate(12);

        // Trả về view 'software.index' và truyền biến 'softwares' vào view đó
        return view('pages.software', compact('softwares'));
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
