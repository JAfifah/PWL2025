<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama: Afifah, NIM: 2341760102';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }

    public function postComments($postId, $commentId)
    {
        return 'Pos ke-' . $postId . ' Komentar ke-' . $commentId;
    }
}
