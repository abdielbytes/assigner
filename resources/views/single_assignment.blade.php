

{{--    @foreach($assignments as $assignment)--}}
{{--        <div>--}}
{{--            <h2>{{ $assignment->name }}</h2>--}}
{{--            <p>Assistant: {{ $assignment->assistant }}</p>--}}
{{--            <p>Assignment: {{ $assignment->assignment }}</p>--}}
{{--            <p>Week: {{ $assignment->week }}</p>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--    @endforeach--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $assignment->name }} - Assignment</title>
</head>
<body>

<p>Name: {{ $assignment->name }}</p>
<p>Assistant: {{ $assignment->assistant }}</p>
<p>Assignment: {{ $assignment->assignment }}</p>
<p>Week: {{ $assignment->week }}</p>

</body>
</html>
