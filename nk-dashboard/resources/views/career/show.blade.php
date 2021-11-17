@if ($career)
    <h1>{{ $career->title }}</h1>
    <h4>{{ $career->company }}</h4>
    <em>From <strong>{{ $career->from_date }}</strong></em>
    <em>To <strong>{{ $career->to_date }}</strong></em>
    <p>{{ $career->description }}</p>
    <em>Created At <strong>{{ $career->created_at }}</strong></em>
    <em>Updated At <strong>{{ $career->updated_at }}</strong></em>
    <a href="{{ route('careerIndex') }}">Go Back</a>
@endif
