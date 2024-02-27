<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Attribute\CreateAttributeRequest;
use App\Http\Requests\Admin\Attribute\UpdateAttributeRequest;
use App\Models\Attribute;
use App\Models\Variant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index()
    {
        $attribute = Attribute::get();
        return view('screens.admin.attributes.index', compact('attribute'));
    }

    public function create()
    {
        $attribute = Attribute::all();
        return view('screens.admin.attributes.create', ['attribute' => $attribute]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'attribute_name' => 'required',
            'variant_name.*' => 'required',
        ],
        [
            'variant_name.*.required' => 'variant name field is reaquired.'
        ]);
        $attributeData = [
            'name' => $request->attribute_name,
            'slug' => Str::slug($request->attribute_name)
        ];

        $attributeCheck = Attribute::create($attributeData);
        if ($attributeCheck) {
            $variant_name = $request->variant_name;
            for ($i=0; $i < count($request->variant_name) ; $i++) {
                $data = [
                    'attribute_id' => $attributeCheck->id,
                    'name' => $variant_name[$i],
                    'slug' => Str::slug($variant_name[$i]),
                ];
                Variant::create($data);
            }
            return redirect(route('attribute.show'))->with('success','record addedd successfully...!');
        }
        return back();
    }

    public function edit(Attribute $attribute)
    {
        return view('screens.admin.attributes.edit', compact('attribute'));
    }

    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        if ($attribute->update($request->attributeSanitized())) {
            foreach ($request->variantSanitized() as $variant) {
                $attribute->variants()->update($variant);
            }
            return response()->json(['success' => 'record updated successfully...!']);
        }
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return redirect('admin/attribute/show');
    }
}
