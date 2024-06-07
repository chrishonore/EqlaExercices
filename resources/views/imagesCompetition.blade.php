
@foreach($imageCompetitions as $imageCompetition)

    Question: {{ $imageCompetition->question }}


    src="{{ $imageCompetition->image_path1 }}" alt="Première image">
    {{ $imageCompetition->description1 }}



    src="{{ $imageCompetition->image_path2 }}" alt="Deuxième image">
    {{ $imageCompetition->description2 }}
@endforeach
