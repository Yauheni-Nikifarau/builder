<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model {
    use HasFactory;

    public function meta() {
        return $this->hasMany( PhoneMeta::class );
    }

    public function scopeWithCamera ($query, $from, $to) {
        if (is_null($from) && is_null($to)) {
            return $query;
        }
        $phoneMetas =  PhoneMeta::select('phone_id')->where('key', 'camera');

        if (!empty($from)) {
            $phoneMetas = $phoneMetas->where('value', '>=', $from);
        }

        if (!empty($to)) {
            $phoneMetas = $phoneMetas->where('value', '<=', $to);
        }

        $phoneMetas = $phoneMetas->get();

        $ids = [];
        foreach ($phoneMetas as $phoneMeta) {
            $ids[] = $phoneMeta->phone_id;
        }

        return $query->whereIn('id', $ids);
    }

    public function scopeWithRam ($query, $from, $to) {
        if (is_null($from) && is_null($to)) {
            return $query;
        }
        $phoneMetas =  PhoneMeta::select('phone_id')->where('key', 'ram');

        if (!empty($from)) {
            $phoneMetas = $phoneMetas->where('value', '>=', $from);
        }

        if (!empty($to)) {
            $phoneMetas = $phoneMetas->where('value', '<=', $to);
        }

        $phoneMetas = $phoneMetas->get();

        $ids = [];
        foreach ($phoneMetas as $phoneMeta) {
            $ids[] = $phoneMeta->phone_id;
        }

        return $query->whereIn('id', $ids);
    }

    public function scopeWithMemory ($query, $from, $to) {
        if (is_null($from) && is_null($to)) {
            return $query;
        }
        $phoneMetas =  PhoneMeta::select('phone_id')->where('key', 'memory');

        if (!empty($from)) {
            $phoneMetas = $phoneMetas->where('value', '>=', $from);
        }

        if (!empty($to)) {
            $phoneMetas = $phoneMetas->where('value', '<=', $to);
        }

        $phoneMetas = $phoneMetas->get();

        $ids = [];
        foreach ($phoneMetas as $phoneMeta) {
            $ids[] = $phoneMeta->phone_id;
        }

        return $query->whereIn('id', $ids);
    }

    public function scopeWithScreen ($query, $from, $to) {
        if (is_null($from) && is_null($to)) {
            return $query;
        }
        $phoneMetas =  PhoneMeta::select('phone_id')->where('key', 'screen');

        if (!empty($from)) {
            $phoneMetas = $phoneMetas->where('value', '>=', $from);
        }

        if (!empty($to)) {
            $phoneMetas = $phoneMetas->where('value', '<=', $to);
        }

        $phoneMetas = $phoneMetas->get();

        $ids = [];
        foreach ($phoneMetas as $phoneMeta) {
            $ids[] = $phoneMeta->phone_id;
        };

        return $query->whereIn('id', $ids);
    }

    public function scopeWithCores ($query, $from, $to) {
        if (is_null($from) && is_null($to)) {
            return $query;
        }
        $phoneMetas =  PhoneMeta::select('phone_id')->where('key', 'cores');

        if (!empty($from)) {
            $phoneMetas = $phoneMetas->where('value', '>=', $from);
        }

        if (!empty($to)) {
            $phoneMetas = $phoneMetas->where('value', '<=', $to);
        }

        $phoneMetas = $phoneMetas->get();

        $ids = [];
        foreach ($phoneMetas as $phoneMeta) {
            $ids[] = $phoneMeta->phone_id;
        }

        return $query->whereIn('id', $ids);
    }
}
