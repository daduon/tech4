<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use WebPConvert\WebPConvert;
use Avatar as Avatar;
use App\Models\Footer;

/**
 * @param null $name
 *
 * @return \Illuminate\Session\SessionManager|\Illuminate\Session\Store|mixed|null
 */

function setting($name = null)
{
    // $settings = Setting::first();
    // return $settings;
    $settings = Setting::allFromCache();

    if (!$name) {
        return $settings;
    }
    $setting = array_filter($settings->toArray(), function ($setting) use ($name) {
        return $setting['setting_name'] == $name;
    });

    if (!$setting) {
        return null;
    }

    return array_shift($setting)['setting_value'];
}

function avatar($name): string
{
    $path = Str::slug($name,'_').uniqid() .'_'.time().'.jpg';
    Avatar::create($name)->save('images/avatar/'.$path,100);
    return 'images/avatar/'.$path;
}

function uploadImage($requestFile, $path, ...$resize)
{
    $format = $requestFile->getClientOriginalExtension();
    $img = Image::make($requestFile)->encode($format, 90);
    $imgPath = $path . uniqid() . '.' . $format;
    if ($resize) {
        $img = $img->resize($resize['width'], $resize['height']);
    }
    $img->save($imgPath, 90);

    return $imgPath;
}

/**
 * @return bool
 */
function isSuperAdmin()
{
    if (!Auth::guard('admin')->check()) {
        return false;
    }

    return Auth::guard('admin')->user()->id == 1;
}

/**
 * @param $permission
 * @param string $type
 *
 * @return bool
 */
function hasPermission($permission, $type = 'read')
{
    if (!Auth::guard('admin')->check()) {
        return false;
    }

    $role = session('auth.role');
    if (!$role) {
        return false;
    }

    $permission = array_filter($role->permission->toArray(), function ($userPermission) use ($permission, $type) {
        return $userPermission['name'] == $permission && $userPermission['pivot'][$type] == 1;
    });

    if (!$permission && !isSuperAdmin()) {
        return false;
    }

    return count($permission) > 0 || isSuperAdmin();
}

function onlyAllowReadPermission($permission) {
    !hasPermission($permission, 'read') && abort(403);
}

function allowOnlyWritePermission($permission) {
    !hasPermission($permission, 'write') && abort(403);
}

function allowOnlyDeletePermission($permission) {
    !hasPermission($permission, 'delete') && abort(403);
}

/**
 * @param $file
 * @param string $path
 *
 * @return string
 */
function storageUpload($file, $path = 'files')
{
    $file_extension = $file->getClientOriginalExtension();
    $full_name = uniqid() . '.' . $file_extension;
    $full_path = $path . '/' . $full_name;

    Storage::disk('public')->put($full_path, file_get_contents($file));

    return 'uploads/' . $full_path;
}

/**
 * @param $errors
 *
 * @return string
 */
function showError($errors): string
{
    return '<div class="invalid-feedback text-right mt-2">' . $errors . '</div>';
}

/**
 * @return string|null
 */
function role()
{
    if (!Auth::guard('admin')->check()) {
        return null;
    }

    $user = \App\Models\User::with('role')->find(Auth::guard('admin')->user()->id);
    return strtolower($user->role->name);
}

/**
 * @param $type
 * @param $message
 *
 * @return bool
 */
function toast($type, $message)
{
    request()->session()->flash('toast', true);
    request()->session()->flash($type, $message);

    return true;
}

function footer(){
    $data = Footer::first();
    return $data;
}
