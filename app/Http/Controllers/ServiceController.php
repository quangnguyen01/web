<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
        return view('admin.services.form', ['data' => null]);
    }

    public function store(ServiceRequest $request)
    {
        $request->validated();
        $category = new Service();
        $category->name = $request->name;
        $category->image = $request->image;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('listService')
            ->with('success', 'Thêm mới thành công.');
    }

    public function list(Request $request)
    {
        $queryBuilder = Service::query();
        $search = $request->get('search');
        $sort = $request->get('sort');
        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        $data = $queryBuilder->orderBy('created_at','DESC')->paginate(10)->appends(['search' => $search]);

        return view('admin.services.table', [
            'services' => $data,
            'sort' => $sort
        ]);
    }

    public function edit($id)
    {
        $categories = Service::find($id);
        return view('admin.services.form', ['data' => $categories]);
    }

    public function save(ServiceRequest $request, $id)
    {
        $request->validated();
        $category = Service::find($id);
        $category->image = $request->image;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('listService')
            ->with('success', 'Update thành công.');
    }

    public function delete($id)
    {
        $delete = Service::find($id);
        $delete->delete();
        return redirect()->route('listService')
            ->with('success', 'Delete thành công.');
    }
}
