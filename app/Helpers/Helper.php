<?php

use Illuminate\Support\Carbon;

function rupiah($value)
{
    return "Rp." . number_format($value, 0, ',', '.');
}

function tanggal($tanggal)
{
    return Carbon::parse($tanggal)->translatedFormat('l, d/m/Y');
}

function jam($jam)
{
    return Carbon::parse($jam)->translatedFormat('H:i');
    // return Carbon::createFromFormat('Y-m-d H:i:s', $tanggal)->format('d-m-Y')
}
