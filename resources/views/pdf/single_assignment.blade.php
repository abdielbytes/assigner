
<x-app-layout>

<h2>{{ $assignment->name }}</h2>
<p>Assistant: {{ $assignment->assistant }}</p>
<p>Assignment: {{ $assignment->assignment }}</p>
<p>Week: {{ $assignment->week }}</p>




{{--    @foreach($assignments as $assignment)--}}
{{--        <div>--}}
{{--            <h2>{{ $assignment->name }}</h2>--}}
{{--            <p>Assistant: {{ $assignment->assistant }}</p>--}}
{{--            <p>Assignment: {{ $assignment->assignment }}</p>--}}
{{--            <p>Week: {{ $assignment->week }}</p>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--    @endforeach--}}



</x-app-layout>
