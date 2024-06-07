
<h1>{{ $question->text }}</h1>
<ul>
    @foreach ($choices as $choice)
        <li>{{ $choice->text }}</li>
    @endforeach
</ul>
