<?php

return [
    'dashboard' => [
        'title'          => 'Dashboard',
        'title_singular' => 'Dashboard',
    ],

    'userManagement' => [
        'title'          => 'Akses',
        'title_singular' => 'Akses',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Judul',
            'title_helper'      => '',
            'created_at'        => 'Dibuat',
            'created_at_helper' => '',
            'updated_at'        => 'Diubah',
            'updated_at_helper' => '',
            'deleted_at'        => 'Dihapus',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'page'           => 'Halaman Role',
        'page_singular'  => 'Halaman Role',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'title'                 => 'Judul',
            'title_helper'          => '',
            'name'                  => 'Nama',
            'name_helper'           => '',
            'guard_name'            => 'Penjaga Nama',
            'guard_name_helper'     => '',
            'permissions'           => 'Permission',
            'permissions_helper'    => '',
            'allPermissions'        => 'Semua Permission',
            'allPermissions_helper' => '',
            'created_at'            => 'Tanggal di Buat',
            'created_at_helper'     => '',
            'updated_at'            => 'Tanggal di Ubah',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Tanggal di Hapus',
            'deleted_at_helper'     => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'no'                       => 'No',
            'no_helper'                => '',
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nama',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Verifikasi Email',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Ingat Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Dibuat',
            'created_at_helper'        => '',
            'updated_at'               => 'Diubah',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Dihapus',
            'deleted_at_helper'        => '',
        ],
    ],


    'profileManagement' => [
        'title'          => 'Menu Profile',
        'title_singular' => 'Menu Profile',
    ],
    'changeProfile'           => [
        'title'          => 'Ubah Profile',
        'title_singular' => 'Ubah Profile',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nama',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Verifikasi Email',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Ingat Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Dibuat',
            'created_at_helper'        => '',
            'updated_at'               => 'Diubah',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Dihapus',
            'deleted_at_helper'        => '',
        ],
    ],
    'changePassword' => [
        'title'          => 'Ubah Password',
        'title_singular' => 'Ubah Password',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Ubah Password',
            'title_helper'       => '',
            'field1'              => 'Password lama',
            'field1_helper'       => '',
            'field2'              => 'Password baru',
            'field2_helper'       => '',
            'field3'              => 'Konfirmasi password baru',
            'field3_helper'       => '',
            'created_at'         => 'Dibuat',
            'created_at_helper'  => '',
            'updated_at'         => 'Diubah',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Dihapus',
            'deleted_at_helper'  => '',
        ],
    ],

    'settingManagement' => [
        'title'          => 'Menu Pengaturan',
        'title_singular' => 'Menu Pengaturan',
    ],
    'settingWebsite'           => [
        'title'          => 'Website',
        'title_singular' => 'Website',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Website',
            'title_helper'      => '',
            'created_at'         => 'Dibuat',
            'created_at_helper'  => '',
            'updated_at'         => 'Diubah',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Dihapus',
            'deleted_at_helper'  => '',
        ],
    ],
    'termsOfService'           => [
        'title'          => 'Persyaratan Layanan',
        'title_singular' => 'Persyaratan Layanan',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Persyaratan Layanan',
            'title_helper'      => '',
            'created_at'         => 'Dibuat',
            'created_at_helper'  => '',
            'updated_at'         => 'Diubah',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Dihapus',
            'deleted_at_helper'  => '',
        ],
    ],
    'privacyPolicy'           => [
        'title'          => 'Kebijakan Privasi',
        'title_singular' => 'Kebijakan Privasi',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Kebijakan Privasi',
            'title_helper'      => '',
            'created_at'         => 'Dibuat',
            'created_at_helper'  => '',
            'updated_at'         => 'Diubah',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Dihapus',
            'deleted_at_helper'  => '',
        ],
    ],
];
