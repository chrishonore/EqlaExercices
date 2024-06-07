<h1>Liste des concours d'images</h1>

@foreach ($imageCompetitions as $imageCompetition)

    Concours d'image {{ $imageCompetition->id }}
    Image 1 : {{ $imageCompetition->image_1_url }}
    Image 2 : {{ $imageCompetition->image_2_url }}
    Points image 1 : {{ $imageCompetition->image_1_points }}
    Points image 2 : {{ $imageCompetition->image_2_points }}
    Pourcentage image 1 : {{ $imageCompetition->image_1_percentage }}
    Pourcentage image 2 : {{ $imageCompetition->image_2_percentage }}

@endforeach
