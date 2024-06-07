
@foreach ($questions as $question)
    <a href="{{ route('questions.show', ['id' => $question->id]) }}">{{ $question->text }}</a>
@endforeach
