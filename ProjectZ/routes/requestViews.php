<?php 


//-----------------------------|
//  # opdracht - 2: Views      |
//  # opdracht - 3: Requests   |
//-----------------------------|
# Query routes
// Route::get('/planeten', function () {
//     $planets = [
//         [
//             'name' => 'Mars',
//             'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
//         ],
//         [
//             'name' => 'Venus',
//             'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
//         ],
//         [
//             'name' => 'Earth',
//             'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
//         ],
//         [
//             'name' => 'Jupiter',
//             'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
//         ],
//     ];

//     if (request()->has('planeet')) { 
//         $voorkeur = ucfirst((request('planeet'))); # 'ucfirst' omzet eerste letter van het woord in een hoofdletter 

//         # array collecteren en voorkeur van de user opslaan op  de variabel
//         $lijstFilteren = collect($planets)->where('name', $voorkeur);

//         # dit stuurt user terug naar planeten overzicht, als er geen planet is gevonden via url :D
//         if(count($lijstFilteren) == 0){ 
//             return redirect('/planeten')->with('error', 'planet not found'); # met een error op de sessie
//         }

//         # hier stuur ik user naar planet view met data van gekozen planet via GET
//         return view('/planet', ['planeten' => $lijstFilteren]);
//     }

//     // alle planeten weergeven als er geen get request gevonden is
//     return view('/planeten', ['planeten' => $planets]);
// });
