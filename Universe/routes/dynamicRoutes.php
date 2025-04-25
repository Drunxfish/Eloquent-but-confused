<?php 



//------------------------------------|
//  # opdracht - 4: Dynamische routes |
//------------------------------------| 
# Dynamische routes
// Route::get('/planeten/{planeet}', function (string $planeet) {
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


//     # gekozen planeet ophalen van de lijst
//     $voorkeur = collect($planets)->where('name', ucfirst($planeet));

//     # is het planeet wel gevonden ? ._.
//     if (count($voorkeur) == 0) {
//         # dit stuurt user terug naar planeten overzicht, als er geen planet is gevonden via url :D
//         return redirect('/planeten')->with('error', 'planet not found'); # met een error op de sessie
//     }

//     # infromatie weergeven van indivuduele planeet
//     return view('/planet', ['planeten' => $voorkeur]);
// });

