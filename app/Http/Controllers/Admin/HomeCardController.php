<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeCard;
use Illuminate\Http\Request;

class HomeCardController extends Controller
{
    public function index()
    {
        $cards = HomeCard::all();
        return view('admin.home.index', compact('cards'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image',
            'type' => 'required|in:big,small',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }

        HomeCard::create($data);
        return redirect()->route('home-cards.index')->with('success', 'Card berhasil ditambahkan');
    }

    public function edit(HomeCard $homeCard)
    {
        return view('admin.home.edit', compact('homeCard'));
    }

    public function update(Request $request, HomeCard $homeCard)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image',
            'type' => 'required|in:big,small',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }

        $homeCard->update($data);
        return redirect()->route('home-cards.index')->with('success', 'Card berhasil diupdate');
    }

    public function destroy(HomeCard $homeCard)
    {
        $homeCard->delete();
        return redirect()->route('home-cards.index')->with('success', 'Card dihapus');
    }
}
