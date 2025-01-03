<?php

$validate = [
    'nama' => 'required|string|min:3|max:50|regex:/^[a-zA-Z]+$/',
    'fullname' => 'required|string|min:3|max:100|regex:/^[a-zA-Z\s]+$/',


    'password' => [
        'required',
        'string',
        'min:8',
        'regex:/[a-z]/',
        'regex:/[A-Z]/',
        'regex:/[0-9]/',
        'regex:/[@$!%*?&]/',
    ],
    'email' => 'required|string|max:255|email|regex:/^[a-zA-Z0-9@.]+$/|unique:users,email', // create
    'email' => 'required|string|max:255|email|regex:/^[a-zA-Z0-9@.]+$/|unique:users,email,' . $this->id . ',id', // update
    'username' => 'required|string|min:3|max:50|regex:/^[a-zA-Z0-9._]+$/|unique:users,username', // create
    'username' => 'required|string|min:3|max:50|regex:/^[a-zA-Z0-9._]+$/|unique:users,username,' . $this->id . ',id', // update
    
    'alamat' => 'required|string|min:3|max:255|regex:/^[a-zA-Z0-9\s]+$/',
    'provinsi' => 'required|string|min:3|max:50|regex:/^[a-zA-Z\s]+$/',
    'kota' => 'required|string|min:3|max:50|regex:/^[a-zA-Z\s]+$/',
    'kecamatan' => 'required|string|min:3|max:50|regex:/^[a-zA-Z\s]+$/',
    'kelurahan' => 'required|string|min:3|max:50|regex:/^[a-zA-Z\s]+$/',
    'kode_pos' => 'required|digits:5|regex:/^[0-9]+$/',
    'rt' => 'required|digits:3|regex:/^[0-9]+$/',
    'rw' => 'required|digits:3|regex:/^[0-9]+$/',
    'no_rumah' => 'required|digits_between:1,5|regex:/^[0-9]+$/',


    'jenis_kelamin' => 'required|in:L,P',
    'status' => 'required|in:Menikah,Belum Menikah',
    'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Budha,Konghucu',
    'pekerjaan' => 'required|string|min:3|max:50|regex:/^[a-zA-Z\s]+$/',
    'pendidikan' => 'required|string|min:3|max:50|regex:/^[a-zA-Z\s]+$/',
    'tempat_lahir' => 'required|string|min:3|max:50|regex:/^[a-zA-Z\s]+$/',

    'date' => 'required|date|date_format:Y-m-d',
    'time' => 'required|date_format:H:i',
    'hours' => 'required|integer|min:0|max:24',
    'no_telp' => 'required|regex:/^\+?[0-9]{10,15}$/', // +6281234567890
    'no_telp' => 'required|regex:/^[0-9]+$/|min:10|max:15', // 081234567890

    'ktp' => 'required|digits:16|unique:users,ktp', // create
    'ktp' => 'required|digits:16|unique:users,ktp,' . $this->id . ',id', // update
    'kk' => 'required|digits:16',
    'npwp' => 'required|regex:/^\d{2}\.\d{3}\.\d{3}\.\d{1}-\d{3}\.\d{3}$/',
    'no_sim' => 'required|digits:12',
    'no_bpjs' => 'required|digits:13',
    'no_rek' => 'required|digits_between:10,16',

];
