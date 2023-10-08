<?php
    namespace App\Models;
    class Listing{
        public static function all(){
            return [[
                        "id" => 1,
                        "title" => "Listing 1",
                        "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices vulputate ornare. Pellentesque volutpat tempor magna, non vestibulum odio iaculis vitae. Praesent urna quam, auctor ac sapien id, elementum dapibus ex. In ac auctor ante. Donec semper odio dui, vel semper libero suscipit sed."
                    ],
                    [
                        "id" => 2,
                        "title" => "Listing 2",
                        "desc" => "Quisque sagittis vitae ex id lacinia. Vivamus scelerisque nunc eget purus ornare tempus. Etiam interdum ligula a arcu fermentum commodo. Curabitur vestibulum eros vitae nunc lobortis lobortis. Praesent orci dui, faucibus nec cursus in, eleifend eget ligula. Proin rhoncus varius dictum. Fusce id orci vitae purus aliquet fringilla. Nam eget venenatis turpis, eget laoreet tortor. "
                    ]
                   ];
        }
        public static function find($id){
            $totalListings = self::all(); // similar to python we have self
            foreach($totalListings as $listing){
                if($listing["id"] == $id){
                    return $listing;
                }
            }
        }

    }
?>