<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        return view('anime', [
            'image' => 'https://i0.wp.com/anitrendz.net/news/wp-content/uploads/2024/09/Attack-on-Titan-The-Movie-The-Last-Attack-visual-1-scaled-e1726231251452.jpeg',
            'title' => 'Attack on Titan',
            'rating' => 'My Rating: 10/10',
            'image1' => 'https://miro.medium.com/v2/resize:fit:1400/1*nl8u2wgsb36buia0IFH-Lg.jpeg',
            'title1' => 'Haikyuu',
            'rating1' => 'My Rating 10/10',
            'image2' => 'https://animerants.net/wp-content/uploads/2024/11/blue-exorcist-beyond-the-snow-episode-05-blue-flames.png?w=1024',
            'title2' => 'Blue Exorcist',
            'rating2' => 'Rating: 10/10',
        ]);
    }
}
