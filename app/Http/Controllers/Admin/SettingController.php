<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller {
    public function index() {
        $settings = Setting::pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }
    
    public function seo() {
        $settings = Setting::pluck('value', 'key');
        return view('admin.seo.index', compact('settings'));
    }
    public function update(\Illuminate\Http\Request $request) {
        $settings = $request->input('settings', []);
        
        // Handle normal inputs
        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        
        // Handle file uploads (e.g. settings[og_image])
        if ($request->hasFile('settings')) {
            foreach ($request->file('settings') as $key => $file) {
                if ($file->isValid()) {
                    $path = $file->store('settings', 'public');
                    Setting::updateOrCreate(['key' => $key], ['value' => $path]);
                }
            }
        }
        
        \Illuminate\Support\Facades\Cache::forget('global_settings');

        if ($request->ajax()) {
            return response()->json(['success' => 'Settings updated successfully.']);
        }
        return back()->with('success', 'Settings updated successfully.');
    }
}